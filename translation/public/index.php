<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ Application entry file ]
namespace think;

// Load basic files
require __DIR__ . '/../thinkphp/base.php';

// Support the use of static methods to set the Request object and Config object in advance

// Execute the application and respond
Container::get('app')->run()->send();
