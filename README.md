civix-generate-module-nz.co.fuzion.norecurreceipt
=================================================

Turn CiviCRM recurring receipts off

Ensures the is_email_receipt setting for contribution recur records is always saved as FALSE.

This prevents a regular email going on each receipt as if you had deselected it through the UI.

Installing this will only affect new recurring contributions. For existing ones run

```
UPDATE civicrm_contribution_recur SET is_email_receipt = 0
```
