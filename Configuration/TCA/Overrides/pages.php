<?php
declare(strict_types=1);

/**
 * The `pages` TCA override.
 */

use T3v\T3vCore\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Resource\AbstractFile;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_page';
$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

// === TCA Configuration ===

ExtensionManagementUtility::addTCAcolumns(
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
            'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
                'tx_t3vpage_thumbnail',
                [
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            AbstractFile::FILETYPE_IMAGE => [
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
                'eval' => 'lower, trim'
            ],
            'exclude' => true
        ],
    ]
);

ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'opengraph',
    '--linebreak--,tx_t3vpage_og_type',
    'after:og_title'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;' . $lll . 'pages.palettes.tx_t3vpage.title;tx_t3vpage',
    '1',
    'after:keywords'
);

$GLOBALS['TCA']['pages']['palettes']['tx_t3vpage'] = [
    'showitem' => '
        tx_t3vpage_claim,--linebreak--,
        tx_t3vpage_summary,--linebreak--,
        tx_t3vpage_outline,--linebreak--,
        tx_t3vpage_thumbnail
    '
];

// Removes the `slug` field temporally:
ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;;empty',
    '',
    'replace:slug'
);

// Adds the `slug` field back after the `subtitle` field in the `title` palette:
ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'title',
    '--linebreak--,slug,--linebreak--',
    'after:subtitle'
);

// === T3v Generator ===
