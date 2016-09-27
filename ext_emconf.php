<?php
$EM_CONF[$_EXTKEY] = array(
  'title' => 'TYPO3voila Page',
  'description' => 'The TYPO3voila Page extension.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '1.2.1',
  'shy' => false,
  'createDirs' => '',
  'uploadfolder' => false,
  'modify_tables' => '',
  'clearCacheOnLoad' => true,
  'constraints' => array(
    'depends' => array(
      'typo3' => '7.6.0-8.1.99',
      't3v_core' => ''
    ),
    'conflicts' => array(),
    'suggests'  => array()
  )
);