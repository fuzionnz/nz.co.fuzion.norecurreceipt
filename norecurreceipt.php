<?php

require_once 'norecurreceipt.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function norecurreceipt_civicrm_config(&$config) {
  _norecurreceipt_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function norecurreceipt_civicrm_xmlMenu(&$files) {
  _norecurreceipt_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function norecurreceipt_civicrm_install() {
  return _norecurreceipt_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function norecurreceipt_civicrm_uninstall() {
  return _norecurreceipt_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function norecurreceipt_civicrm_enable() {
  return _norecurreceipt_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function norecurreceipt_civicrm_disable() {
  return _norecurreceipt_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function norecurreceipt_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _norecurreceipt_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function norecurreceipt_civicrm_managed(&$entities) {
  return _norecurreceipt_civix_civicrm_managed($entities);
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