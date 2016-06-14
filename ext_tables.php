<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TYPO3voila Page');