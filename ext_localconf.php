<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

// === TCA Configuration ===

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_summary,tx_t3vpage_thumbnail';
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_t3vpage_summary,tx_t3vpage_thumbnail';