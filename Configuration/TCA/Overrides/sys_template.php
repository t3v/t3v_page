<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_page';
$extensionTitle = 'T3v Page';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);
