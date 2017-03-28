<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function ($extkey) {
  // === TCA Configuration ===

  $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail';
  $GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline';
}, $_EXTKEY);