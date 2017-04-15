<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 调试模式开关
define("APP_DEBUG", true);

// 定义应用目录
define('APP_PATH', __DIR__ . '/../../api/');

// 定义CMF目录
define('CMF_PATH', __DIR__ . '/../../simplewind/cmf/');

// 定义扩展目录
define('EXTEND_PATH', __DIR__ . '/../../simplewind/extend/');
define('VENDOR_PATH', __DIR__ . '/../../simplewind/vendor/');

// 定义应用的运行时目录
define('RUNTIME_PATH',__DIR__.'/../../data/runtime/api/');

// 加载框架基础文件
require __DIR__ . '/../../simplewind/thinkphp/base.php';

// 执行应用
\think\App::run()->send();
