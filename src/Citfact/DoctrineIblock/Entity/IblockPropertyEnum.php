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
 * @ORM\Table(name="b_iblock_property_enum", uniqueConstraints={@ORM\UniqueConstraint(name="ux_iblock_property_enum", columns={"PROPERTY_ID", "XML_ID"})})
 * @ORM\Entity
 */
class IblockPropertyEnum
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
     * @ORM\Column(name="PROPERTY_ID", type="integer", nullable=false)
     */
    protected $propertyId;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE", type="string", length=255, nullable=false)
     */
    protected $value;

    /**
     * @var string
     *
     * @ORM\Column(name="DEF", type="string", length=1, nullable=false)
     */
    protected $def = 'N';

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=false)
     */
    protected $sort = '500';

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=200, nullable=false)
     */
    protected $xmlId;

    /**
     * @var string
     *
     * @ORM\Column(name="TMP_ID", type="string", length=40, nullable=true)
     */
    protected $tmpId;

    /**
     * @param string $def
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

    /**
     * @return string
     */
    public function getDef()
    {
        return $this->def;
    }

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
     * @param int $propertyId
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;
    }

    /**
     * @return int
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * @param int $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $tmpId
     */
    public function setTmpId($tmpId)
    {
        $this->tmpId = $tmpId;
    }

    /**
     * @return string
     */
    public function getTmpId()
    {
        return $this->tmpId;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $xmlId
     */
    public function setXmlId($xmlId)
    {
        $this->xmlId = $xmlId;
    }

    /**
     * @return string
     */
    public function getXmlId()
    {
        return $this->xmlId;
    }
}
