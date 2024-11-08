<?php

$EM_CONF['static_info_tables_cs'] = [
    'title' => 'Static Info Tables (cs)',
    'description' => 'Czech (cs) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '7.1.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Max Rösch',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'php' => '7.4.1-8.1.99',
            'static_info_tables' => '11.5.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Bitmotion\\StaticInfoTablesCs\\' => 'Classes'
        ]
    ],
];
