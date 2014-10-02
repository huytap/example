<a class="menu-toggler" id="menu-toggler" href="#">
    <span class="menu-text"></span>
</a>

<?php
$arrAyMenu = array(
   'default'=>array(
    'parent'=> array(
        'link'=>  Yii::app()->createUrl('admin/default'),
        'icon'=>'<i class="icon-dashboard"></i>',
        'name'=>'<span class="menu-text"> Dashboard </span>'
        ),   
    ),
   'menu' =>array(
      'parent'=>array(
        'link'=> Yii::app()->createUrl('admin/menu'),
        'icon'=>'<i class="icon-list"></i>',
        'name'=>'Quản lý trang'
      )
    ),
   'ads' => array(
      'parent' => array(
        'link' => Yii::app()->createUrl('admin/ads'),
        'icon' => '<i class="icon-desktop"></i>',
        'name'=>'<span class="menu-text"> Quản lý Quảng cáo </span>'
      )
    ),
   'menuitem'=>array(
    'parent'=> array(
        'link'=> Yii::app()->createUrl('admin/branch'),
        'icon'=>'<i class="icon-coffee"></i>',
        'name'=>'<span class="menu-text"> Quản lý chi nhánh </span>'
        ),
    ),
   'component' => array(
      'parent'=> array(
        'link'=> Yii::app()->createUrl('admin/component'),
        'icon'=>'<i class="icon-book"></i>',
        'name'=>'<span class="menu-text"> Quản lý trang con </span>'
        ),
    ),
   'gallery'=>array(
    'parent'=> array(
        'link'=>  Yii::app()->createUrl('admin/gallery'),
        '<i class="icon-picture"></i>',
        'name'=>'<span class="menu-text"> Quản lý hình ảnh </span>'
        ),   
    ),
   'product'=>array(
    'parent'=> array(
        'link'=> Yii::app()->createUrl('admin/upload'),
        'icon'=>'<i class="icon-asterisk"></i>',
        'name'=>'<span class="menu-text"> Quản lý file </span>'
        ),
    ),

   'cms'=>array(
    'parent'=> array(
        'link'=>  Yii::app()->createUrl('admin/cms'),
        'icon'=>'<i class="icon-laptop"></i>',
        'name'=>'<span class="menu-text"> Quản lý nội dung </span>'
        ),   
    ),   
   'users'=>array(
      'parent'=> array(
          'link'=> '#',
          'icon'=>'<i class="icon-user"></i>',
          'name'=>'<span class="menu-text"> Quản lý User </span><b class="arrow icon-angle-down"></b>'
      ),
      'submenu' => array(
          'user' => array(
             'link' => Yii::app()->createUrl('admin/manageadmin'),
             'icon' => '<i class="icon-double-angle-right"></i>',
              'name' => 'Quản lý user',
            ),
            'customer' => array(
              'link' => Yii::app()->createUrl('admin/customer'),
              'icon' => '<i class="icon-double-angle-right"></i>',
              'name' => 'Quản lý khách hàng',
            ),
        ),
    ), 
   'setting'=>array(
    'parent'=> array(
        'link'=>  Yii::app()->createUrl('admin/setting'),
        'icon'=>'<i class="icon-cogs"></i>',
        'name'=>'<span class="menu-text"> Cài đặt chung </span>'
        ),   
    ),
   );

$htmlMenu       = '<li><a href="link">icon name </a></li>';
$htmlMenuParent = '<a href="" class="dropdown-toggle">iconpar';



?>



<div class="sidebar" id="sidebar">
    <ul class="nav nav-list">
        <?php
            if(count($arrAyMenu)>0):
                if($user->role_id>2){
                   $arrAccess = MyFunctionCustom::$arrAcess;
                   $menuAccess= $arrAccess[Yii::app()->user->role_id]; 
                   $tmp =array();
                   if(count($menuAccess)>0){
                      foreach ($menuAccess as $access){
                          $tmp[$access] = $arrAyMenu[$access];
                      }
                   }
                   $arrAyMenu =$tmp;
                }

                foreach ($arrAyMenu as $menu):
                      if(!isset($menu['submenu'])){
                           echo str_replace(array('link','icon','name'),$menu['parent'],$htmlMenu);
                      }else{
                          echo "<li>";
                          echo '<a href="#" class="dropdown-toggle">';
                          echo $menu['parent']['icon'] . $menu['parent']['name'];
                          echo '</a>';
                                  //submenu
                                  echo "<ul class='submenu'>";
                                  if(count($menu['submenu'])>0):
                                      foreach ($menu['submenu'] as $submenu):
                                             echo str_replace(array('link','icon','name'),$submenu,$htmlMenu);
                                      endforeach;
                                  endif;
                                  echo "</ul>";
                          echo "</li>";                       
                      }
                endforeach;
            endif;
        ?>
    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left"></i>
    </div>
</div>