<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_page';
$lll          = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_tca.xlf');

// === Pages TCA Configuration ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
  'tx_t3vpage_claim' => [
    'label' => $lll . 'pages.tx_t3vpage_claim.label',
    'config' => [
      'type' => 'input',
      'size' => 40,
      'max' => 255,
      'eval' => 'trim'
    ],
    'l10n_display' => 'defaultAsReadonly',
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
    'l10n_display' => 'defaultAsReadonly',
    'exclude' => true
  ],

  'tx_t3vpage_outline' => [
    'label' => $lll . 'pages.tx_t3vpage_outline.label',
    'config' => [
      'type' => 'text',
      'enableRichtext' => true,
      'eval' => 'trim'
    ],
    'exclude' => true
  ],

  'tx_t3vpage_thumbnail' => [
    'label' => $lll . 'pages.tx_t3vpage_thumbnail.label',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
      'image',
      [
        'foreign_match_fields' => [
          'fieldname' => 'tx_t3vpage_thumbnail',
          'tablenames' => 'pages',
          'table_local' => 'sys_file'
        ],
        'overrideChildTca' => [
          'types' => [
            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette,
                             --palette--;;imageoverlayPalette,
                             --palette--;;filePalette'
            ]
          ]
        ],
        'minitems' => 0,
        'maxitems' => 1,
        'appearance' => [
          'showAllLocalizationLink' => true,
          'showSynchronizationLink' => true
        ]
      ],
      $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
    ),
    'l10n_display' => 'hideDiff',
    'exclude' => true
  ]
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--palette--;' . $lll . 'pages.palette.title;tx_t3vpage', '1', 'after:description');

$GLOBALS['TCA']['pages']['palettes']['tx_t3vpage'] = [
  'showitem' => '
    tx_t3vpage_claim,--linebreak--,
    tx_t3vpage_summary,--linebreak--,
    tx_t3vpage_outline,--linebreak--,
    tx_t3vpage_thumbnail
  '
];