<?php

return [
    '__name' => 'lib-qr',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-qr.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-qr' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibQr\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-qr/library'
            ]
        ],
        'files' => []
    ]
];