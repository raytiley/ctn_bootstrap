<?php

// Plugin definition
$plugin = array(
  'title' => t('Show Page'),
  'category' => t('CTN'),
  'icon' => 'showpage.png',
  'theme' => 'showpage',
  'css' => 'showpage.css',
  'regions' => array(
    'vod' => t('VOD Player'),
    'description' => t('Description'),
    'comments' => t('Comments'),
    'airings' => t('Upcoming Airings'),
  ),
);
