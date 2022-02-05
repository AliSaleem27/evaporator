<?php

return [
    'include' => [
        public_path('js'),
        public_path('css'),
    ],

    'exclude' => [
        '*.php',
    ],

    'strip_path' => public_path(),

    'prefix_path' => '',

    'disk' => 's3',
];
