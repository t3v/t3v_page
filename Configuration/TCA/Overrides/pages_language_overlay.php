<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($extkey) {
  $resources = "EXT:${extkey}/Resources";
  $lll       = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', [
    'tx_t3vpage_claim' => [
      'label' => $lll . 'pages_language_overlay.tx_t3vpage_claim.label',
      'config' => [
        'type' => 'input',
        'size' => 40,
        'max' => 255,
        'eval' => 'trim'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'tx_t3vpage_summary' => [
      'label' => $lll . 'pages_language_overlay.tx_t3vpage_summary.label',
      'config' => [
        'type' => 'text',
        'rows' => 3,
        'cols' => 40,
        'eval' => 'trim'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'tx_t3vpage_outline' => [
      'label' => $lll . 'pages_language_overlay.tx_t3vpage_outline.label',
      'config' => [
        'type' => 'text',
        'eval' => 'trim'
      ],
      'defaultExtras' => 'richtext[]',
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ]
  ]);

  $GLOBALS['TCA']['pages_language_overlay']['ctrl']['requestUpdate'] .= ',tx_t3vpage_exclude';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', '--palette--;LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages_language_overlay.palette.title;tx_t3vpage', '1', 'after:description');

  $GLOBALS['TCA']['pages_language_overlay']['palettes']['tx_t3vpage'] = [
    'showitem' => '
      tx_t3vpage_claim,--linebreak--,
      tx_t3vpage_summary,--linebreak--,
      tx_t3vpage_outline
    '
  ];
}, 't3v_page');