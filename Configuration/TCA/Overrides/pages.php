<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($extkey) {
  $resources = "EXT:${extkey}/Resources";
  $lll       = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
    'tx_t3vpage_claim' => [
      'label' => $lll . 'pages.tx_t3vpage_claim.label',
      'config' => [
        'type' => 'input',
        'size' => '40',
        'max' => 255,
        'eval' => 'trim'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'l10n_display' => 'defaultAsReadonly',
      'exclude' => true
    ],

    'tx_t3vpage_summary' => [
      'label' => $lll . 'pages.tx_t3vpage_summary.label',
      'config' => [
        'type' => 'text',
        'cols' => 40,
        'rows' => 3,
        'eval' => 'trim'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'l10n_display' => 'defaultAsReadonly',
      'exclude' => true
    ],

    'tx_t3vpage_thumbnail' => [
      'label' => $lll . 'pages.tx_t3vpage_thumbnail.label',
      'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
        'image',
        [
          'maxitems' => 1,
          'foreign_types' => [
            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette,--palette--;;imageoverlayPalette,--palette--;;filePalette'
            ]
          ]
        ],
        $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
      ),
      'l10n_mode' => 'mergeIfNotBlank',
      'l10n_display' => 'hideDiff',
      'exclude' => true
    ]
  ]);

  $GLOBALS['TCA']['pages']['ctrl']['requestUpdate'] .= ',tx_t3vpage_exclude';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--palette--;LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages.palette.title;tx_t3vpage', '1', 'after:description');

  $GLOBALS['TCA']['pages']['palettes']['tx_t3vpage'] = [
    'showitem' => 'tx_t3vpage_claim,--linebreak--,tx_t3vpage_summary,--linebreak--,tx_t3vpage_thumbnail'
  ];
}, 't3v_page');