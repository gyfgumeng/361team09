<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | Template settings
// +----------------------------------------------------------------------

return [
    // Template engine type support php think support extension
    'type'         => 'Think',
    // Default template rendering rules 1 Parse to lowercase + underscore 2 Convert all lowercase 3 Keep operation method
    'auto_rule'    => 1,
    // Template path
    'view_path'    => '',
    // Template suffix
    'view_suffix'  => 'html',
    // Template file name separator
    'view_depr'    => DIRECTORY_SEPARATOR,
    // Template engine normal tag start tag
    'tpl_begin'    => '{',
    // Template engine normal tag end tag
    'tpl_end'      => '}',
    // Tag library tag start tag
    'taglib_begin' => '{',
    // Tag library tag end tag
    'taglib_end'   => '}',
];
