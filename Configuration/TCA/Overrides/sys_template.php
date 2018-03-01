<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extkey = 't3v_page';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Page');