<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', array(
  'tx_t3vpage_claim' => array(
    'label' => 'LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages.tx_t3vpage_claim.label',
    'config' => array(
      'type' => 'input',
      'size' => 255,
      'eval' => 'trim'
    ),
    'l10n_mode' => 'mergeIfNotBlank',
    'l10n_display' => 'defaultAsReadonly',
    'exclude' => true
  ),

  'tx_t3vpage_summary' => array(
    'label' => 'LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages.tx_t3vpage_summary.label',
    'config' => array(
      'type' => 'text',
      'cols' => 40,
      'rows' => 3,
      'eval' => 'trim'
    ),
    'l10n_mode' => 'mergeIfNotBlank',
    'l10n_display' => 'defaultAsReadonly',
    'exclude' => true
  ),

  'tx_t3vpage_thumbnail' => array(
    'label' => 'LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages.tx_t3vpage_thumbnail.label',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
      'image',
      array(
        'maxitems' => 1,
        'foreign_types' => array(
          \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
            'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette,--palette--;;imageoverlayPalette,--palette--;;filePalette'
          )
        )
      ),
      $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
    ),
    'l10n_mode' => 'mergeIfNotBlank',
    'l10n_display' => 'defaultAsReadonly',
    'exclude' => true
  )
));

$GLOBALS['TCA']['pages']['ctrl']['requestUpdate'] .= ',tx_t3vpage_exclude';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--palette--;LLL:EXT:t3v_page/Resources/Private/Language/locallang_tca.xlf:pages.palette.title;tx_t3vpage', '1', 'after:description');

$GLOBALS['TCA']['pages']['palettes']['tx_t3vpage'] = array(
  'showitem' => 'tx_t3vpage_claim,tx_t3vpage_summary,--linebreak--,tx_t3vpage_thumbnail'
);