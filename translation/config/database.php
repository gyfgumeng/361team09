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

return [
    // Database type
    'type'            => 'mysql',
    // hostname
    'hostname'        => '127.0.0.1',
    // name
    'database'        => '',
    // username
    'username'        => 'root',

    'password'        => '',

    'hostport'        => '',
    //dsn
    'dsn'             => '',
    // Database connection parameters
    'params'          => [],
    // The database encoding uses utf8 by default
    'charset'         => 'utf8',
    // Database table prefix
    'prefix'          => '',
    // Database debugging mode
    'debug'           => true,
    // Database deployment method: 0 centralized (single server), 1 distributed (master-slave server)
    'deploy'          => 0,
    // Whether the database reads and writes are separated, and the master-slave mode is effective
    'rw_separate'     => false,
    // Number of main servers after read-write separation
    'master_num'      => 1,
    // Specify the serial number of the slave server
    'slave_no'        => '',
    // Automatically read main library data
    'read_master'     => false,
    // Whether to strictly check whether the field exists
    'fields_strict'   => true,
    // Data set return type
    'resultset_type'  => 'array',
    // Automatically write the timestamp field
    'auto_timestamp'  => false,
    // The default time format after the time field is retrieved
    'datetime_format' => 'Y-m-d H:i:s',
    // Do you need SQL performance analysis
    'sql_explain'     => false,
    // Builder class
    'builder'         => '',
    // Query class
    'query'           => '\\think\\db\\Query',
    // disconnect and reconnect
    'break_reconnect' => false,
    // Disconnection identification string
    'break_match_str' => [],
];
