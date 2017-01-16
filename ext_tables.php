<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// Default TypoScript for T3olayout
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    't3olayout'
);
