<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1629534119] = [
    'nodeName' => 'iconSelection',
    'priority' => 40,
    'class' => \Blueways\BwIcons\Form\Element\IconSelection::class
];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['bwicons_conf'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['bwicons_conf'] = [];
}
