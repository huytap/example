<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/default/index'); ?>" class="brand">
                <small>
                    Citenco.com.vn
                </small>
            </a><!--/.brand-->

            <ul class="nav ace-nav pull-right">

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">
                            <?php
                                if(isset($customer)){
                                    echo count($customer);
                                }else{
                                    echo '0';
                                }
                            ?>
                        </span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                        <li class="nav-header">
                            <i class="icon-warning-sign"></i>
                            <?php
                                if(isset($customer)){
                                    echo count($customer);
                                }else{
                                    echo '0';
                                }
                            ?> Notifications
                        </li>
                        <li>
                            
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/index') ?>">
                                    <div class="clearfix">
                                        <span class="pull-left">
                                            <i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
                                            New Contact
                                        </span>
                                        <span class="pull-right badge badge-success">
                                        <?php
                                            if(isset($customer)){
                                                echo count($customer);
                                            }else{
                                                echo '0';
                                            }
                                        ?></span>
                                    </div>
                                </a> 
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/index') ?>">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span class="user-info">
                            <small>Welcome,</small>
                            <?php if (isset($user)) : ?>
                                <?php echo $user->first_name;?>
                            <?php endif; ?>
                        </span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('admin/default/changepassword', array('id' => $user->id)); ?>">
                                <i class="icon-lock"></i>
                                Change Password

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('admin/default/changeinformation', array('id' => $user->id)); ?>">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo Yii::app()->createUrl('admin/site/logout'); ?>">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!--/.ace-nav-->
        </div><!--/.container-fluid-->
    </div><!--/.navbar-inner-->
</div>
