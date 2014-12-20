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
 * @ORM\Table(name="b_iblock_property", indexes={@ORM\Index(name="ix_iblock_property_1", columns={"IBLOCK_ID"}), @ORM\Index(name="ix_iblock_property_3", columns={"LINK_IBLOCK_ID"}), @ORM\Index(name="ix_iblock_property_2", columns={"CODE"})})
 * @ORM\Entity
 */
class IblockProperty
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
     * @ORM\Column(name="IBLOCK_ID", type="integer", nullable=false)
     */
    protected $iblockId;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVE", type="string", length=1, nullable=false)
     */
    protected $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=false)
     */
    protected $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=50, nullable=true)
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFAULT_VALUE", type="text", length=65535, nullable=true)
     */
    protected $defaultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_TYPE", type="string", length=1, nullable=false)
     */
    protected $propertyType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROW_COUNT", type="integer", nullable=false)
     */
    protected $rowCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="COL_COUNT", type="integer", nullable=false)
     */
    protected $colCount;

    /**
     * @var string
     *
     * @ORM\Column(name="LIST_TYPE", type="string", length=1, nullable=false)
     */
    protected $listType;

    /**
     * @var string
     *
     * @ORM\Column(name="MULTIPLE", type="string", length=1, nullable=false)
     */
    protected $multiple;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=100, nullable=true)
     */
    protected $xmlId;

    /**
     * @var string
     *
     * @ORM\Column(name="FILE_TYPE", type="string", length=200, nullable=true)
     */
    protected $fileType;

    /**
     * @var integer
     *
     * @ORM\Column(name="MULTIPLE_CNT", type="integer", nullable=true)
     */
    protected $multipleCnt;

    /**
     * @var string
     *
     * @ORM\Column(name="TMP_ID", type="string", length=40, nullable=true)
     */
    protected $tmpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="LINK_IBLOCK_ID", type="integer", nullable=true)
     */
    protected $linkIblockId;

    /**
     * @var string
     *
     * @ORM\Column(name="WITH_DESCRIPTION", type="string", length=1, nullable=true)
     */
    protected $withDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="SEARCHABLE", type="string", length=1, nullable=false)
     */
    protected $searchable;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTRABLE", type="string", length=1, nullable=false)
     */
    protected $filtrable;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_REQUIRED", type="string", length=1, nullable=true)
     */
    protected $isRequired;

    /**
     * @var integer
     *
     * @ORM\Column(name="VERSION", type="integer", nullable=false)
     */
    protected $version;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_TYPE", type="string", length=255, nullable=true)
     */
    protected $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_TYPE_SETTINGS", type="text", length=65535, nullable=true)
     */
    protected $userTypeSettings;

    /**
     * @var string
     *
     * @ORM\Column(name="HINT", type="string", length=255, nullable=true)
     */
    protected $hint;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->active = 'Y';
        $this->sort = 500;
        $this->propertyType = 'S';
        $this->rowCount = 1;
        $this->colCount = 30;
        $this->listType = 'L';
        $this->multiple = 'N';
        $this->searchable = 'N';
        $this->filtrable = 'N';
        $this->version = 1;
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
     * @param int $colCount
     */
    public function setColCount($colCount)
    {
        $this->colCount = $colCount;
    }

    /**
     * @return int
     */
    public function getColCount()
    {
        return $this->colCount;
    }

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param string $filtrable
     */
    public function setFiltrable($filtrable)
    {
        $this->filtrable = $filtrable;
    }

    /**
     * @return string
     */
    public function getFiltrable()
    {
        return $this->filtrable;
    }

    /**
     * @param string $hint
     */
    public function setHint($hint)
    {
        $this->hint = $hint;
    }

    /**
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
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
     * @param string $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @return string
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param int $linkIblockId
     */
    public function setLinkIblockId($linkIblockId)
    {
        $this->linkIblockId = $linkIblockId;
    }

    /**
     * @return int
     */
    public function getLinkIblockId()
    {
        return $this->linkIblockId;
    }

    /**
     * @param string $listType
     */
    public function setListType($listType)
    {
        $this->listType = $listType;
    }

    /**
     * @return string
     */
    public function getListType()
    {
        return $this->listType;
    }

    /**
     * @param string $multiple
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    /**
     * @return string
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param int $multipleCnt
     */
    public function setMultipleCnt($multipleCnt)
    {
        $this->multipleCnt = $multipleCnt;
    }

    /**
     * @return int
     */
    public function getMultipleCnt()
    {
        return $this->multipleCnt;
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
     * @param string $propertyType
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @param int $rowCount
     */
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
    }

    /**
     * @return int
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    /**
     * @param string $searchable
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;
    }

    /**
     * @return string
     */
    public function getSearchable()
    {
        return $this->searchable;
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
     * @param string $userType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
    }

    /**
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param string $userTypeSettings
     */
    public function setUserTypeSettings($userTypeSettings)
    {
        $this->userTypeSettings = $userTypeSettings;
    }

    /**
     * @return string
     */
    public function getUserTypeSettings()
    {
        return $this->userTypeSettings;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $withDescription
     */
    public function setWithDescription($withDescription)
    {
        $this->withDescription = $withDescription;
    }

    /**
     * @return string
     */
    public function getWithDescription()
    {
        return $this->withDescription;
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
