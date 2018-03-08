<?php
defined('TYPO3_MODE') or die();

// === Frontend Configuration ===

// Add `tx_t3vpage_claim`, `tx_t3vpage_summary`, `tx_t3vpage_outline` and `tx_t3vpage_thumbnail` field to the root line.
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail';

// Add `tx_t3vpage_claim`, `tx_t3vpage_summary` and `tx_t3vpage_outline` field to the page overlay fields.
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline';