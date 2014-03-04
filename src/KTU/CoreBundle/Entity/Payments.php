<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 */
class Payments
{
    /**
     * @var \DateTime
     */
    private $paymentdate;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $checknumber;

    /**
     * @var \KTU\CoreBundle\Entity\Customers
     */
    private $customernumber;


    /**
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     * @return Payments
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime 
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Payments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set checknumber
     *
     * @param string $checknumber
     * @return Payments
     */
    public function setChecknumber($checknumber)
    {
        $this->checknumber = $checknumber;

        return $this;
    }

    /**
     * Get checknumber
     *
     * @return string 
     */
    public function getChecknumber()
    {
        return $this->checknumber;
    }

    /**
     * Set customernumber
     *
     * @param \KTU\CoreBundle\Entity\Customers $customernumber
     * @return Payments
     */
    public function setCustomernumber(\KTU\CoreBundle\Entity\Customers $customernumber)
    {
        $this->customernumber = $customernumber;

        return $this;
    }

    /**
     * Get customernumber
     *
     * @return \KTU\CoreBundle\Entity\Customers 
     */
    public function getCustomernumber()
    {
        return $this->customernumber;
    }
}
