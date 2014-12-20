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
 * @ORM\Table(name="b_iblock_section", indexes={@ORM\Index(name="ix_iblock_section_1", columns={"IBLOCK_ID", "IBLOCK_SECTION_ID"}), @ORM\Index(name="ix_iblock_section_depth_level", columns={"IBLOCK_ID", "DEPTH_LEVEL"}), @ORM\Index(name="ix_iblock_section_left_margin", columns={"IBLOCK_ID", "LEFT_MARGIN", "RIGHT_MARGIN"}), @ORM\Index(name="ix_iblock_section_right_margin", columns={"IBLOCK_ID", "RIGHT_MARGIN", "LEFT_MARGIN"}), @ORM\Index(name="ix_iblock_section_code", columns={"IBLOCK_ID", "CODE"})})
 * @ORM\Entity
 */
class IblockSection
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
     * @var \DateTime
     *
     * @ORM\Column(name="TIMESTAMP_X", type="datetime", nullable=false)
     */
    protected $timestampX;

    /**
     * @var integer
     *
     * @ORM\Column(name="MODIFIED_BY", type="integer", nullable=true)
     */
    protected $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATE", type="datetime", nullable=true)
     */
    protected $dateCreate;

    /**
     * @var integer
     *
     * @ORM\Column(name="CREATED_BY", type="integer", nullable=true)
     */
    protected $createdBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ID", type="integer", nullable=false)
     */
    protected $iblockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_SECTION_ID", type="integer", nullable=true)
     */
    protected $iblockSectionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVE", type="string", length=1, nullable=false)
     */
    protected $active;

    /**
     * @var string
     *
     * @ORM\Column(name="GLOBAL_ACTIVE", type="string", length=1, nullable=false)
     */
    protected $globalActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=false)
     */
    protected $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="PICTURE", type="integer", nullable=true)
     */
    protected $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="LEFT_MARGIN", type="integer", nullable=true)
     */
    protected $leftMargin;

    /**
     * @var integer
     *
     * @ORM\Column(name="RIGHT_MARGIN", type="integer", nullable=true)
     */
    protected $rightMargin;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEPTH_LEVEL", type="integer", nullable=true)
     */
    protected $depthLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", length=65535, nullable=true)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_TYPE", type="string", length=4, nullable=false)
     */
    protected $descriptionType;

    /**
     * @var string
     *
     * @ORM\Column(name="SEARCHABLE_CONTENT", type="text", length=65535, nullable=true)
     */
    protected $searchableContent;

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=255, nullable=true)
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=255, nullable=true)
     */
    protected $xmlId;

    /**
     * @var string
     *
     * @ORM\Column(name="TMP_ID", type="string", length=40, nullable=true)
     */
    protected $tmpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="DETAIL_PICTURE", type="integer", nullable=true)
     */
    protected $detailPicture;

    /**
     * @var integer
     *
     * @ORM\Column(name="SOCNET_GROUP_ID", type="integer", nullable=true)
     */
    protected $socnetGroupId;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->active = 'Y';
        $this->globalActive = 'Y';
        $this->sort = 500;
        $this->descriptionType = 'text';
    }

    /**
     * @param string $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \DateTime $dateCreate
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @param int $depthLevel
     */
    public function setDepthLevel($depthLevel)
    {
        $this->depthLevel = $depthLevel;
    }

    /**
     * @return int
     */
    public function getDepthLevel()
    {
        return $this->depthLevel;
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
     * @param string $descriptionType
     */
    public function setDescriptionType($descriptionType)
    {
        $this->descriptionType = $descriptionType;
    }

    /**
     * @return string
     */
    public function getDescriptionType()
    {
        return $this->descriptionType;
    }

    /**
     * @param int $detailPicture
     */
    public function setDetailPicture($detailPicture)
    {
        $this->detailPicture = $detailPicture;
    }

    /**
     * @return int
     */
    public function getDetailPicture()
    {
        return $this->detailPicture;
    }

    /**
     * @param string $globalActive
     */
    public function setGlobalActive($globalActive)
    {
        $this->globalActive = $globalActive;
    }

    /**
     * @return string
     */
    public function getGlobalActive()
    {
        return $this->globalActive;
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
     * @param int $iblockSectionId
     */
    public function setIblockSectionId($iblockSectionId)
    {
        $this->iblockSectionId = $iblockSectionId;
    }

    /**
     * @return int
     */
    public function getIblockSectionId()
    {
        return $this->iblockSectionId;
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
     * @param int $leftMargin
     */
    public function setLeftMargin($leftMargin)
    {
        $this->leftMargin = $leftMargin;
    }

    /**
     * @return int
     */
    public function getLeftMargin()
    {
        return $this->leftMargin;
    }

    /**
     * @param int $modifiedBy
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @return int
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param int $rightMargin
     */
    public function setRightMargin($rightMargin)
    {
        $this->rightMargin = $rightMargin;
    }

    /**
     * @return int
     */
    public function getRightMargin()
    {
        return $this->rightMargin;
    }

    /**
     * @param string $searchableContent
     */
    public function setSearchableContent($searchableContent)
    {
        $this->searchableContent = $searchableContent;
    }

    /**
     * @return string
     */
    public function getSearchableContent()
    {
        return $this->searchableContent;
    }

    /**
     * @param int $socnetGroupId
     */
    public function setSocnetGroupId($socnetGroupId)
    {
        $this->socnetGroupId = $socnetGroupId;
    }

    /**
     * @return int
     */
    public function getSocnetGroupId()
    {
        return $this->socnetGroupId;
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
