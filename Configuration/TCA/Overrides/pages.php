<?php
/**
 * The `pages` TCA override.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_page';
$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

// === TCA Configuration ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    [
        'tx_t3vpage_claim' => [
            'label' => $lll . 'pages.tx_t3vpage_claim.label',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim'
            ],
            'l10n_mode' => 'prefixLangTitle',
            'exclude' => true
        ],
        'tx_t3vpage_summary' => [
            'label' => $lll . 'pages.tx_t3vpage_summary.label',
            'config' => [
                'type' => 'text',
                'rows' => 3,
                'cols' => 40,
                'eval' => 'trim'
            ],
            'l10n_mode' => 'prefixLangTitle',
            'exclude' => true
        ],
        'tx_t3vpage_outline' => [
            'label' => $lll . 'pages.tx_t3vpage_outline.label',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'eval' => 'trim'
            ],
            'l10n_mode' => 'prefixLangTitle',
            'exclude' => true
        ],
        'tx_t3vpage_thumbnail' => [
            'label' => $lll . 'pages.tx_t3vpage_thumbnail.label',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'tx_t3vpage_thumbnail',
                [
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ]
                        ]
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'exclude' => true
        ],
        'tx_t3vpage_og_type' => [
            'label' => $lll . 'pages.tx_t3vpage_og_type.label',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim'
            ],
            'exclude' => true
        ],

    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;' . $lll . 'pages.palettes.tx_t3vpage.title;tx_t3vpage',
    '1',
    'after:description'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_t3vpage_og_type',
    '1',
    'after:og_title'
);

$GLOBALS['TCA']['pages']['palettes']['tx_t3vpage'] = [
    'showitem' => '
        tx_t3vpage_claim,--linebreak--,
        tx_t3vpage_summary,--linebreak--,
        tx_t3vpage_outline,--linebreak--,
        tx_t3vpage_thumbnail'
];

// === T3v Generator ===
