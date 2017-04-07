<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Page',
  'description' => 'The page extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '1.5.0',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '7.6.0-8.6.99',
      't3v_core' => ''
    ],
    'conflicts' => [],
    'suggests' => []
  ],
  'autoload' => [
    'psr-4' => [
      'T3v\\T3vPage\\' => 'Classes'
    ]
  ],
  'autoload-dev' => [
    'psr-4' => [
      'T3v\\T3vPage\\Tests\\' => 'Tests'
    ]
  ]
];