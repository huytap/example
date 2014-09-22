<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $created_date
 * @property integer $agee
 *
 * The followings are the available model relations:
 * @property Images[] $images
 */
class Users extends CActiveRecord {

    public $agee;
    public $password;
    public $confirm_password;
    public $old_password;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name,email, temp_password,status,confirm_password', 'required', 'on' => 'create,update'),
            array('first_name, last_name,email,status', 'required', 'on' => 'no_password_update'),
            array('first_name,last_name', 'required', 'on' => 'change_info'),
            array('old_password,temp_password,confirm_password', 'required', 'on' => 'change_password'),
            array('old_password,temp_password,confirm_password', 'length', 'min' => 6, 'max' => 32, 'on' => 'change_password'),
            array('confirm_password', 'compare', 'compareAttribute' => 'temp_password', 'on' => 'change_password'),
            array('confirm_password', 'compare', 'compareAttribute' => 'temp_password', 'on' => 'create,update', 'message' => Yii::t('lang', 'Confirm Password has to be the same as entered above.')),
            array('temp_password', 'length', 'min' => 6, 'max' => 32,
                'tooLong' => 'Password is too long (maximum is 32 characters).',
                'tooShort' => Yii::t('lang', 'Password is too short (minimum is 6 characters).'),
                'on' => 'create,update'),
//                        array('email','unique','message'=>Yii::t('lang','This email address is not available')),
            array('email', 'email'),
            // array('first_name,last_name','required','on' => 'change_info'),
            array('gender, agee,phone', 'numerical', 'integerOnly' => true, 'on' => 'insert,update'),
            array('first_name, last_name, email', 'length', 'max' => 255, 'on' => 'insert,update'),
            array('phone', 'length', 'max' => 12, 'on' => 'insert,update'),
            array('password, created_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, first_name, last_name, gender, phone, email, password, created_date,agee, address,confirm_password,role_id', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'images' => array(self::HAS_MANY, 'Images', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'User Name',
            'full_name' => 'Full Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'temp_password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'created_date' => 'Created Date',
            'agee' => 'Agee',
            'address' => 'Address'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('agee', $this->agee);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'pagination' => array(
                        'pageSize' => 100,
                    ),
                    'sort' => array(
                        'defaultOrder' => array(
                            'id' => 'DESC'
                        ),
                    ),
                ));
    }

    public function getAll() {
        $criteria = new CDbCriteria;
        $criteria->compare('t.role_id', $this->role_id);
        $criteria->order = 't.id desc';
        $result = self::model()->findAll($criteria);
        if ($result)
            return $result;
        return array();
    }

    protected function beforeSave() {

        $this->password_hash = md5(trim($this->temp_password));
        if ($this->isNewRecord) {
            $this->created_date = date('Y-m-d');
        }

        //change status User form phpbb
        // MyFunctionCustom::getUserForumPhpbb($this->status, $this->email);
        return parent::beforeSave();
    }

}