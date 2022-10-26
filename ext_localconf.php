<?php
declare(strict_types=1);

/**
 * The local extension configuration.
 */

defined('TYPO3') or die();

(static function () {
    // === Frontend ===

    // Add fields to th root line:
    if (empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'])) {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .=
            'tx_t3vpage_claim, tx_t3vpage_summary, tx_t3vpage_outline, tx_t3vpage_thumbnail, tx_t3vpage_og_type';
    } else {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .=
            ', tx_t3vpage_claim, tx_t3vpage_summary, tx_t3vpage_outline, tx_t3vpage_thumbnail, tx_t3vpage_og_type';
    }
    // === T3v Generator ===
})();
