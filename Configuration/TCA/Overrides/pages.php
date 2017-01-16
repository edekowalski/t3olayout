<?php

/***************
 * Temporary variables
 */
$extensionKey = 't3olayout';

/***************
 * Register PageTS
 */
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/Sitepackage.txt',
    't3olayout: All'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/Mod/WebLayout/BackendLayouts.txt',
    't3olayout: Backend Layouts'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/TCEMAIN.txt',
    't3olayout: TCEMAIN'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/TCEFORM.txt',
    't3olayout: TCEFORM'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/RTE.txt',
    't3olayout: RTE'
);
