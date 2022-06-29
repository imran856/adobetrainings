<?php
namespace Imran\Assignment4\Plugin;

class EmailNotification extends \Magento\Customer\Model\EmailNotification
{
    /**
     * Stop email with new account related information
     * @param $subject
     * @param $proceed
     * @return \Magento\Customer\Model\EmailNotification
     */
    public function aroundNewAccount(\Magento\Customer\Model\EmailNotification $subject, \Closure $proceed)
    {
            return $subject;
    }
}