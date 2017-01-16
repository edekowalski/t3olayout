<?php
/************************************************************************
 * Extension Manager/Repository config file for ext "t3olayout".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 't3olayout',
    'description' => 'Base extension for project "t3olayout"',
    'category' => 'extension',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.99.99',
            'fluid_styled_content' => '7.6.0-8.99.99'
        ),
        'conflicts' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Typo3\\T3olayout\\' => 'Classes'
        ),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Harry Glatz',
    'author_email' => 'fabian.stein@typo3.org',
    'author_company' => 'typo3',
    'version' => '1.0.0',
);
