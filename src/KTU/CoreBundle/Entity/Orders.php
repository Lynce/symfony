<?php

namespace KTU\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var \DateTime
     */
    private $orderdate;

    /**
     * @var \DateTime
     */
    private $requireddate;

    /**
     * @var \DateTime
     */
    private $shippeddate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var integer
     */
    private $ordernumber;

    /**
     * @var \KTU\CoreBundle\Entity\Customers
     */
    private $customernumber;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productcode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productcode = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set orderdate
     *
     * @param \DateTime $orderdate
     * @return Orders
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    /**
     * Get orderdate
     *
     * @return \DateTime 
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * Set requireddate
     *
     * @param \DateTime $requireddate
     * @return Orders
     */
    public function setRequireddate($requireddate)
    {
        $this->requireddate = $requireddate;

        return $this;
    }

    /**
     * Get requireddate
     *
     * @return \DateTime 
     */
    public function getRequireddate()
    {
        return $this->requireddate;
    }

    /**
     * Set shippeddate
     *
     * @param \DateTime $shippeddate
     * @return Orders
     */
    public function setShippeddate($shippeddate)
    {
        $this->shippeddate = $shippeddate;

        return $this;
    }

    /**
     * Get shippeddate
     *
     * @return \DateTime 
     */
    public function getShippeddate()
    {
        return $this->shippeddate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Orders
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Get ordernumber
     *
     * @return integer 
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }

    /**
     * Set customernumber
     *
     * @param \KTU\CoreBundle\Entity\Customers $customernumber
     * @return Orders
     */
    public function setCustomernumber(\KTU\CoreBundle\Entity\Customers $customernumber = null)
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

    /**
     * Add productcode
     *
     * @param \KTU\CoreBundle\Entity\Products $productcode
     * @return Orders
     */
    public function addProductcode(\KTU\CoreBundle\Entity\Products $productcode)
    {
        $this->productcode[] = $productcode;

        return $this;
    }

    /**
     * Remove productcode
     *
     * @param \KTU\CoreBundle\Entity\Products $productcode
     */
    public function removeProductcode(\KTU\CoreBundle\Entity\Products $productcode)
    {
        $this->productcode->removeElement($productcode);
    }

    /**
     * Get productcode
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductcode()
    {
        return $this->productcode;
    }
}
