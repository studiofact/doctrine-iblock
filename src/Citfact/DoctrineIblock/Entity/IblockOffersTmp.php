<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\DoctrineIblock\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IblockOffersTmp
 *
 * @ORM\Table(name="b_iblock_offers_tmp")
 * @ORM\Entity
 */
class BIblockOffersTmp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCT_IBLOCK_ID", type="integer", nullable=false)
     */
    protected $productIblockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFFERS_IBLOCK_ID", type="integer", nullable=false)
     */
    protected $offersIblockId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TIMESTAMP_X", type="datetime", nullable=false)
     */
    protected $timestampX;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $offersIblockId
     */
    public function setOffersIblockId($offersIblockId)
    {
        $this->offersIblockId = $offersIblockId;
    }

    /**
     * @return int
     */
    public function getOffersIblockId()
    {
        return $this->offersIblockId;
    }

    /**
     * @param int $productIblockId
     */
    public function setProductIblockId($productIblockId)
    {
        $this->productIblockId = $productIblockId;
    }

    /**
     * @return int
     */
    public function getProductIblockId()
    {
        return $this->productIblockId;
    }

    /**
     * @param \DateTime $timestampX
     */
    public function setTimestampX($timestampX)
    {
        $this->timestampX = $timestampX;
    }

    /**
     * @return \DateTime
     */
    public function getTimestampX()
    {
        return $this->timestampX;
    }
}
