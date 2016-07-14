<?php
defined('TYPO3_MODE') or die('Access denied.');

// === TCA Configuration ===

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_thumbnail';
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_thumbnail';