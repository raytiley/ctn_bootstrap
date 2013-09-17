<?php

/**
 * @file template.php
 */

function ctn_bootstrap_date_popup_process_alter(&$element, &$form_state, $context) {
  unset($element['date']['#description']);
  unset($element['time']['#description']);
}