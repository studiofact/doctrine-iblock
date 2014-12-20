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
 * @ORM\Table(name="b_iblock_element_iprop", indexes={@ORM\Index(name="ix_b_iblock_element_iprop_0", columns={"IPROP_ID"}), @ORM\Index(name="ix_b_iblock_element_iprop_1", columns={"IBLOCK_ID"})})
 * @ORM\Entity
 */
class IblockElementIprop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ID", type="integer", nullable=false)
     */
    protected $iblockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="SECTION_ID", type="integer", nullable=false)
     */
    protected $sectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ELEMENT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $elementId;

    /**
     * @var integer
     *
     * @ORM\Column(name="IPROP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $ipropId;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE", type="text", length=65535, nullable=false)
     */
    protected $value;

    /**
     * @param int $elementId
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;
    }

    /**
     * @return int
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * @param int $iblockId
     */
    public function setIblockId($iblockId)
    {
        $this->iblockId = $iblockId;
    }

    /**
     * @return int
     */
    public function getIblockId()
    {
        return $this->iblockId;
    }

    /**
     * @param int $ipropId
     */
    public function setIpropId($ipropId)
    {
        $this->ipropId = $ipropId;
    }

    /**
     * @return int
     */
    public function getIpropId()
    {
        return $this->ipropId;
    }

    /**
     * @param int $sectionId
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
    }

    /**
     * @return int
     */
    public function getSectionId()
    {
        return $this->sectionId;
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
}
