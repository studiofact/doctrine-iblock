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
 * @ORM\Table(name="b_iblock_section_property", indexes={@ORM\Index(name="ix_b_iblock_section_property_1", columns={"PROPERTY_ID"}), @ORM\Index(name="ix_b_iblock_section_property_2", columns={"SECTION_ID"})})
 * @ORM\Entity
 */
class IblockSectionProperty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $iblockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="SECTION_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $sectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROPERTY_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $propertyId;

    /**
     * @var string
     *
     * @ORM\Column(name="SMART_FILTER", type="string", length=1, nullable=true)
     */
    protected $smartFilter;

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
     * @param string $smartFilter
     */
    public function setSmartFilter($smartFilter)
    {
        $this->smartFilter = $smartFilter;
    }

    /**
     * @return string
     */
    public function getSmartFilter()
    {
        return $this->smartFilter;
    }
}
