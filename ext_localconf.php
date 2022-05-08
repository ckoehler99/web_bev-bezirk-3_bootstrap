<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bev-bezirk-3_bootstrap'] = 'EXT:bev-bezirk-3_bootstrap/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bev-bezirk-3_bootstrap/Configuration/TsConfig/Page/All.tsconfig">');
