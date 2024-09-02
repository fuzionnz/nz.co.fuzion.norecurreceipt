<?php

require_once 'norecurreceipt.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function norecurreceipt_civicrm_config(&$config) {
  _norecurreceipt_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_install
 */
function norecurreceipt_civicrm_install() {
  return _norecurreceipt_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_enable
 */
function norecurreceipt_civicrm_enable() {
  return _norecurreceipt_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function norecurreceipt_civicrm_pre($op, $objectName, $id, &$params) {
  if($objectName == 'ContributionRecur') {
    $params['is_email_receipt'] = 0;
  }
}
