<?php
/**
 * The local extension configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

(static function () {
    // === Frontend ===

    // Add `tx_t3vpage_claim`, `tx_t3vpage_summary`, `tx_t3vpage_outline` and `tx_t3vpage_thumbnail` field to the root line:
    if (empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'])) {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= 'tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail';
    } else {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail';
    }

    // === T3v Generator ===
})();
