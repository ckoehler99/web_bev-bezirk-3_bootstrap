<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'bev-bezirk-3_bootstrap';

    /**
     * Default PageTS for TsvWartenbergBootstrap
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'bev-bezirk-3-bootstrap'
    );
});
