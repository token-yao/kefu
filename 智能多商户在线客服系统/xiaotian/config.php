<?php
/**
 * Created by PhpStorm.
 * User: 6666666
 * Email: 2097984975@qq.com
 * Date: 2020/5/17
 * Time: 8:39 PM
 */

return [

    // websocket 对外服务端口
    'ws_port' => 2020,

    // http api 服务对外端口
    'api_port' => 2945,

    // gateway worker number
    'gateway_worker' => 8,

    // business worker number
    'business_worker' => 8,

    // 是否开启客服只允许单点登录 0 不开启 1 开启,
    // 切换需要重启
    'single_login' => 1,

    // 是否开启 ssl
    'is_open_ssl' => false,

    'context' => [
        'ssl' => [
            // 请使用绝对路径
            'local_cert'  => '磁盘路径/server.pem', // 也可以是crt文件
            'local_pk'  => '磁盘路径/server.key',
            'verify_peer'   => false
        ]
    ],

    'database' => [
        'host'        => '127.0.0.1',
        'user'        => 'xiaotian',
        'password'    => 'FKHJcXJWxGbXxMJk',
        'database'    => 'xiaotian',
        'port'        => '3306',
        'charset'     => 'utf8',
    ]
];