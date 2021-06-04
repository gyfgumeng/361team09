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
// | Application Settings
// +----------------------------------------------------------------------

return [

    'app_name'               => '',

    'app_host'               => '',

    'app_debug'              => true,

    'app_trace'              => false,

    'app_multi_module'       => true,

    'auto_bind_module'       => false,

    'root_namespace'         => [],

    'default_return_type'    => 'html',
    // optional json xml
    'default_ajax_return'    => 'json',
    
    'default_jsonp_handler'  => 'jsonpReturn',
    // Default JSONP processing method
    'var_jsonp_handler'      => 'callback',
    // Default time zone
    'default_timezone'       => 'Asia/Shanghai',
    // Whether to open multilingual
    'lang_switch_on'         => false,
    // The default global filter method is separated by commas
    'default_filter'         => '',
    // default language
    'default_lang'           => 'zh-cn',
    // Application library suffix
    'class_suffix'           => false,
    // Controller class suffix
    'controller_suffix'      => false,

    // +----------------------------------------------------------------------
    // | Module settings
    // +----------------------------------------------------------------------

    // Default module name
    'default_module'         => 'index',
    // Block access to modules
    'deny_module_list'       => ['common'],
    // Default controller name
    'default_controller'     => 'Index',
    // Default operation name
    'default_action'         => 'index',
    // Default validator
    'default_validate'       => '',
    // Default empty module name
    'empty_module'           => '',
    // Default empty controller name
    'empty_controller'       => 'Error',
    // Operation method prefix
    'use_action_prefix'      => false,
    // Operation method suffix
    'action_suffix'          => '',
    // Automatic search controller
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL settings
    // +----------------------------------------------------------------------

    // PATHINFO variable name for compatibility mode
    'var_pathinfo'           => 's',
    // Compatible with PATH_INFO to obtain
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo separator
    'pathinfo_depr'          => '/',
    // HTTPS proxy ID
    'https_agent_name'       => '',
    // IP proxy to obtain identification
    'http_agent_ip'          => 'X-REAL-IP',
    // URL pseudo-static suffix
    'url_html_suffix'        => 'html',
    // URL common mode parameters for automatic generation
    'url_common_param'       => false,
    // URL parameter method 0 parsed in pairs by name 1 parsed in order
    'url_param_type'         => 0,
    // Whether to enable routing delay resolution
    'url_lazy_route'         => false,
    // Whether to force the use of routing
    'url_route_must'         => false,
    // Combine routing rules
    'route_rule_merge'       => false,
    // Whether the route matches exactly
    'route_complete_match'   => false,
    // Use annotation routing
    'route_annotation'       => false,
    // Domain root
    'url_domain_root'        => '',
    // Whether to automatically convert the controller and operation name in the URL
    'url_convert'            => true,
    // Default access controller layer
    'url_controller_layer'   => 'controller',
    // Form request type camouflage variable
    'var_method'             => '_method',
    // Form ajax camouflage variable
    'var_ajax'               => '_ajax',
    // Form pjax camouflage variables
    'var_pjax'               => '_pjax',
    // Request caching
    'request_cache'          => false,
    // Request cache validity period
    'request_cache_expire'   => null,
    // Global request cache exclusion rules
    'request_cache_except'   => [],
    // Whether to enable routing cache
    'route_check_cache'      => false,
    // Key custom settings (closure) for routing cache, the default is md5 of the current URL and request type
    'route_check_cache_key'  => '',
    // Route cache type and parameters
    'route_cache_option'     => [],

    // The template file corresponding to the default jump page
    'dispatch_success_tmpl'  => Env::get('think_path') . 'tpl/dispatch_jump.tpl',
    'dispatch_error_tmpl'    => Env::get('think_path') . 'tpl/dispatch_jump.tpl',

    // Template file for exception page
    'exception_tmpl'         => Env::get('think_path') . 'tpl/think_exception.tpl',

    // Error display information, valid in non-debug mode
    'error_message'          => 'Page error! Please try again later~',
    // Show error message
    'show_error_msg'         => false,
    // Exception handling handle class Leave blank to use \think\exception\Handle
    'exception_handle'       => '',

];
