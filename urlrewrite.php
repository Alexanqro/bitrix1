<?php
$arUrlRewrite = array (
  3 => 
  array (
    'CONDITION' => '#^/catalog/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1&CODE=$2',
    'PATH' => '/news/index.php',
    'SORT' => 100,
    'ID' => '',
  ),
  2 => 
  array (
    'CONDITION' => '#^/catalog/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/news/index.php',
    'SORT' => 100,
    'ID' => '',
  ),
);
