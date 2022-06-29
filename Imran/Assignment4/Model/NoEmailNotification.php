<?php
namespace Imran\Assignment4\Model;

use Magento\Customer\Api\Data\CustomerInterface;

class NoEmailNotification extends \Magento\Customer\Model\EmailNotification
{
      /**
       * Don't send email with new account related information
       *
       * @param CustomerInterface $customer
       * @param string $type
       * @param string $backUrl
       * @param int|null $storeId
       * @param string $sendemailStoreId
       * @return void
       * @throws LocalizedException
       */
    public function newAccount(
        CustomerInterface $customer,
        $type = self::NEW_ACCOUNT_EMAIL_REGISTERED,
        $backUrl = '',
        $storeId = null,
        $sendemailStoreId = null
    ): void {
        return;
    }
}