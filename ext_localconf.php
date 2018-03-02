<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace          = 't3v';
$extensionKey       = $_EXTKEY;
$extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extensionKey);

// === Front-end Configuration ===

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail';
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline';