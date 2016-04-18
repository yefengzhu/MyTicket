<?php

/**
 * 项目入口
 * 初试安装文件
 */

define('ITEM', 'Install\App');
define('CONFIG_PATH', '../Install/');
define('THEME', dirname(__FILE__).'/Theme');
define('DEBUG', true);
require dirname(dirname(__FILE__)) . '/Core/index.php';
