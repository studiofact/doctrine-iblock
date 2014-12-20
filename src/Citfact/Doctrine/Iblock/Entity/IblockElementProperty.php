<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Doctrine\Iblock\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="b_iblock_element_property", indexes={@ORM\Index(name="ix_iblock_element_property_1", columns={"IBLOCK_ELEMENT_ID", "IBLOCK_PROPERTY_ID"}), @ORM\Index(name="ix_iblock_element_property_2", columns={"IBLOCK_PROPERTY_ID"}), @ORM\Index(name="ix_iblock_element_prop_enum", columns={"VALUE_ENUM", "IBLOCK_PROPERTY_ID"}), @ORM\Index(name="ix_iblock_element_prop_num", columns={"VALUE_NUM", "IBLOCK_PROPERTY_ID"})})
 * @ORM\Entity
 */
class IblockElementProperty
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
     * @ORM\Column(name="IBLOCK_PROPERTY_ID", type="integer", nullable=false)
     */
    protected $iblockPropertyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ELEMENT_ID", type="integer", nullable=false)
     */
    protected $iblockElementId;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE", type="text", length=65535, nullable=false)
     */
    protected $value;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE_TYPE", type="string", length=4, nullable=false)
     */
    protected $valueType;

    /**
     * @var integer
     *
     * @ORM\Column(name="VALUE_ENUM", type="integer", nullable=true)
     */
    protected $valueEnum;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE_NUM", type="decimal", precision=18, scale=4, nullable=true)
     */
    protected $valueNum;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->valueType = 'text';
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $iblockElementId
     */
    public function setIblockElementId($iblockElementId)
    {
        $this->iblockElementId = $iblockElementId;
    }

    /**
     * @return int
     */
    public function getIblockElementId()
    {
        return $this->iblockElementId;
    }

    /**
     * @param int $iblockPropertyId
     */
    public function setIblockPropertyId($iblockPropertyId)
    {
        $this->iblockPropertyId = $iblockPropertyId;
    }

    /**
     * @return int
     */
    public function getIblockPropertyId()
    {
        return $this->iblockPropertyId;
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
     * @param int $valueEnum
     */
    public function setValueEnum($valueEnum)
    {
        $this->valueEnum = $valueEnum;
    }

    /**
     * @return int
     */
    public function getValueEnum()
    {
        return $this->valueEnum;
    }

    /**
     * @param string $valueNum
     */
    public function setValueNum($valueNum)
    {
        $this->valueNum = $valueNum;
    }

    /**
     * @return string
     */
    public function getValueNum()
    {
        return $this->valueNum;
    }

    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }
}
