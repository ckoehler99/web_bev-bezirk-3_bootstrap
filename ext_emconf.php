<?php

/**
 * Extension Manager/Repository config file for ext "bev-bezirk-3_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bev-bezirk-3-bootstrap',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'bev-bezirk-3\\bev-bezirk-3_bootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Köhler',
    'author_email' => 'ckoehler@outlook.com',
    'author_company' => 'bev-bezirk-3',
    'version' => '1.0.0',
];
