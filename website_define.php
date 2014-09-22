<?php

/**
 * DTOAN 
 * Using define param on website
 */


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('YII_UPLOAD_DIR',  ROOT . DS . 'data');
define('STATUS_INACTIVE',0);
define('STATUS_ACTIVE',1);
define('STATUS_EXPIRED',3);
define('STATUS_STRASH',2);
define('CATEGORY_CAR',10);
define('NEWS_CATEGORY_SHOW_HOME',4);
define('NEWS_CATEGORY_SLIDE_SHOW',5);
define('NEWS_READ_NEWS',5);

define('BE',1);
define('FE',2);

define('ROLE_MANAGER',1);
define('ROLE_ADMIN',2);
define('ROLE_MEMBER',3);

define('TYPE_IMAGE_ADVERTISES',4);
define('TYPE_IMAGE_NORMARL',1);
define('TYPE_IMAGE_BANNER',2);

define('POSITION_TOP',1);
define('POSITION_LEFT',2);
define('POSITION_RIGHT',3);
define('POSITION_SIDERBAR_RIGHT',7);
define('POSITION_RIGHT_SLIDE_SHOW',5);
define('POSITION_BOTTOM_SLIDE_SHOW',6);
define('POSITION_MIDDLE',4);
define('POSITION_ON_CATEGORY',8);
define('POSITION_BOTTOM_RIGHT',9);
define('POSITION_BANNER_FLASH',10);

define('STATUS_PENDING',1);
define('STATUS_DELIVER',2);
define('STATUS_FINISH',3);

define('LIST_ITEM',2);
define('LIST_TAG',20);
define('LIST_ITEM_COMMENT',5);

//Ticket type
define('TICKET_TYPE_NORMAL',1);
define('TICKET_TYPE_GOLD',2);
define('TICKET_TYPE_LUXURY',3);

define('MAXPRICE', 500000);



?>