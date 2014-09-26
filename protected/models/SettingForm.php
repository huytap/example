<?php

/**
 * DTOAN
 */
class SettingForm extends CFormModel {

    //general
    public $facebook;
    public $youtube;
    public $logo;
    public $image_watermark;
    public $title;
    public $meta_description;
    public $meta_keywords; 
    public $company;
    public $address_company;
    public $phone_company;
    public $fax_company;

    public $email;
    public $address;
    public $phone;
    public $fax;
    public $service_file;

    public function rules() {
        $return = array();
        foreach (SettingForm::$arrGeneral as $key => $value):
            $return[] = array($value, 'safe');
        endforeach;
        $return [] = array('facebook', 'length', 'max' => 200);
        $return [] = array('service_file', 'file', 'on' => 'updateSettings',
            'allowEmpty' => true,
            //'types' => 'jpg,gif,png,tiff',
            //'wrongType' => 'Only jpg,gif,png,tiff allowed',
            'maxSize' => 1024 * 1024 * 3, // 8MB
            'tooLarge' => 'The file was larger than 3MB. Please upload a smaller file.',
        );
        $return [] = array('logo', 'match', 'pattern' => '/^[^\\/?*:&;{}\\\\]+\\.[^\\/?*:&;{}\\\\]{3}$/', 'message' => 'Image files name cannot include special characters: &%$#', 'on' => 'updateSettings');
        $return [] = array('service_file, fax_company, phone_company, address_company, company, fax, youtube, address, phone, email, facebook', 'safe');
        return $return;
    }

    public static $arrGeneral = array(
        'email' => 'email',
        'phone' => 'phone',
        'address' => 'address',
        'facebook' => 'facebook',
        'logo' => 'logo',
        'youtube'=>'youtube',
        'company' => 'company',
        'address_company' => 'address_company',
        'phone_company' => 'phone_company',
        'fax_company' => 'fax_company',
        'title' => 'title',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',       
        'fax' => 'fax',
        'service_file' => 'service_file'
        
    );

    /**
     * Override configurations.
     */
    static public function applySettings() {
        //apply setting for general
        foreach (self::$arrGeneral as $key => $value) {
            if (Yii::app()->setting->getItem($value)) {
                Yii::app()->params[$key] = Yii::app()->setting->getItem($value);
            }
        }

    }

}
