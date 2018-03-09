<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_page';
$lll          = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_tca.xlf');

// === Pages Language Overlay Configuration ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', [
  'tx_t3vpage_claim' => [
    'label' => $lll . 'pages_language_overlay.tx_t3vpage_claim.label',
    'config' => [
      'type' => 'input',
      'size' => 40,
      'max' => 255,
      'eval' => 'trim',
      'behaviour' => [
        'allowLanguageSynchronization' => true
      ]
    ],
    'exclude' => true
  ],

  'tx_t3vpage_summary' => [
    'label' => $lll . 'pages_language_overlay.tx_t3vpage_summary.label',
    'config' => [
      'type' => 'text',
      'rows' => 3,
      'cols' => 40,
      'eval' => 'trim',
      'behaviour' => [
        'allowLanguageSynchronization' => true
      ]
    ],
    'exclude' => true
  ],

  'tx_t3vpage_outline' => [
    'label' => $lll . 'pages_language_overlay.tx_t3vpage_outline.label',
    'config' => [
      'type' => 'text',
      'enableRichtext' => true,
      'eval' => 'trim',
      'behaviour' => [
        'allowLanguageSynchronization' => true
      ]
    ],
    'exclude' => true
  ]
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', '--palette--;' . $lll . 'pages_language_overlay.palette.title;tx_t3vpage', '1', 'after:description');

$GLOBALS['TCA']['pages_language_overlay']['palettes']['tx_t3vpage'] = [
  'showitem' => '
    tx_t3vpage_claim,--linebreak--,
    tx_t3vpage_summary,--linebreak--,
    tx_t3vpage_outline
  '
];