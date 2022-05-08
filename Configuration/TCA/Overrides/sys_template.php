<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'bev-bezirk-3_bootstrap';

    /**
     * Default TypoScript for TsvWartenbergBootstrap
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'bev-bezirk-3-bootstrap'
    );
});
