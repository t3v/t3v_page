<?php
/**
 * The local extension configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

(static function () {
    // === Frontend ===

    // Adds the `tx_t3vpage_claim`, `tx_t3vpage_summary`, `tx_t3vpage_outline`, `tx_t3vpage_thumbnail` and `tx_t3vpage_og_type` field to the
    // root line:
    if (empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'])) {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .=
            'tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail,tx_t3vpage_og_type';
    } else {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .=
            ',tx_t3vpage_claim,tx_t3vpage_summary,tx_t3vpage_outline,tx_t3vpage_thumbnail,tx_t3vpage_og_type';
    }

    // === T3v Generator ===
})();
