<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Icon Picker',
    'description' => 'Form element for icon selection. Generates a browsable gallery of your icon fonts and SVGs - just link your stylesheet or image directory that you use in the frontend! Works with FontAwesome, Bootstrap, Icomoon.. Optionally adds icon field to pages and tt_content.',
    'category' => 'be',
    'author' => 'Maik Schneider',
    'author_email' => 'm.schneider@blueways.de',
    'author_company' => 'blueways.de',
    'state' => 'stable',
    'uploadfolder' => 0,
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.3.0',
    'autoload' => [
        'psr-4' => ['Blueways\\BwIcons\\' => 'Classes']
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-11.9.99',
        ]
    ]
];
