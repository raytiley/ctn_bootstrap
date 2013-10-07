<?php

// Plugin definition
$plugin = array(
  'title' => t('CTN Blog Post'),
  'category' => t('CTN'),
  'icon' => 'blogpost.png',
  'theme' => 'blogpost',
  'css' => 'blogpost.css',
  'regions' => array(
    'sidebar' => t('Blog Post Sidebar'),
    'body' => t('Blog Post Body')
  ),
);
