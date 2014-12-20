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
 * @ORM\Table(name="b_iblock", indexes={@ORM\Index(name="ix_iblock", columns={"IBLOCK_TYPE_ID", "LID", "ACTIVE"})})
 * @ORM\Entity
 */
class Iblock
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
     * @var string
     *
     * @ORM\Column(name="IBLOCK_TYPE_ID", type="string", length=50, nullable=false)
     */
    protected $iblockTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="LID", type="string", length=2, nullable=false)
     */
    protected $lid;

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=50, nullable=true)
     */
    protected $code;

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
     * @ORM\Column(name="LIST_PAGE_URL", type="string", length=255, nullable=true)
     */
    protected $listPageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="DETAIL_PAGE_URL", type="string", length=255, nullable=true)
     */
    protected $detailPageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_PAGE_URL", type="string", length=255, nullable=true)
     */
    protected $sectionPageUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="PICTURE", type="integer", nullable=true)
     */
    protected $picture;

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
     * @var integer
     *
     * @ORM\Column(name="RSS_TTL", type="integer", nullable=false)
     */
    protected $rssTtl;

    /**
     * @var string
     *
     * @ORM\Column(name="RSS_ACTIVE", type="string", length=1, nullable=false)
     */
    protected $rssActive;

    /**
     * @var string
     *
     * @ORM\Column(name="RSS_FILE_ACTIVE", type="string", length=1, nullable=false)
     */
    protected $rssFileActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="RSS_FILE_LIMIT", type="integer", nullable=true)
     */
    protected $rssFileLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="RSS_FILE_DAYS", type="integer", nullable=true)
     */
    protected $rssFileDays;

    /**
     * @var string
     *
     * @ORM\Column(name="RSS_YANDEX_ACTIVE", type="string", length=1, nullable=false)
     */
    protected $rssYandexActive;

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
     * @var string
     *
     * @ORM\Column(name="INDEX_ELEMENT", type="string", length=1, nullable=false)
     */
    protected $indexElement;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEX_SECTION", type="string", length=1, nullable=false)
     */
    protected $indexSection;

    /**
     * @var string
     *
     * @ORM\Column(name="WORKFLOW", type="string", length=1, nullable=false)
     */
    protected $workflow;

    /**
     * @var string
     *
     * @ORM\Column(name="BIZPROC", type="string", length=1, nullable=false)
     */
    protected $bizproc;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_CHOOSER", type="string", length=1, nullable=true)
     */
    protected $sectionChooser;

    /**
     * @var string
     *
     * @ORM\Column(name="LIST_MODE", type="string", length=1, nullable=true)
     */
    protected $listMode;

    /**
     * @var string
     *
     * @ORM\Column(name="RIGHTS_MODE", type="string", length=1, nullable=true)
     */
    protected $rightsMode;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_PROPERTY", type="string", length=1, nullable=true)
     */
    protected $sectionProperty;

    /**
     * @var integer
     *
     * @ORM\Column(name="VERSION", type="integer", nullable=false)
     */
    protected $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="LAST_CONV_ELEMENT", type="integer", nullable=false)
     */
    protected $lastConvElement;

    /**
     * @var integer
     *
     * @ORM\Column(name="SOCNET_GROUP_ID", type="integer", nullable=true)
     */
    protected $socnetGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="EDIT_FILE_BEFORE", type="string", length=255, nullable=true)
     */
    protected $editFileBefore;

    /**
     * @var string
     *
     * @ORM\Column(name="EDIT_FILE_AFTER", type="string", length=255, nullable=true)
     */
    protected $editFileAfter;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTIONS_NAME", type="string", length=100, nullable=true)
     */
    protected $sectionsName;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_NAME", type="string", length=100, nullable=true)
     */
    protected $sectionName;

    /**
     * @var string
     *
     * @ORM\Column(name="ELEMENTS_NAME", type="string", length=100, nullable=true)
     */
    protected $elementsName;

    /**
     * @var string
     *
     * @ORM\Column(name="ELEMENT_NAME", type="string", length=100, nullable=true)
     */
    protected $elementName;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->active = 'Y';
        $this->sort = 500;
        $this->descriptionType = 'text';
        $this->rssTtl = 24;
        $this->rssActive = 'Y';
        $this->rssFileActive = 'N';
        $this->rssYandexActive = 'N';
        $this->indexElement = 'Y';
        $this->indexSection = 'N';
        $this->workflow = 'Y';
        $this->bizproc = 'N';
        $this->version = 1;
        $this->lastConvElement = 0;
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
     * @param string $bizproc
     */
    public function setBizproc($bizproc)
    {
        $this->bizproc = $bizproc;
    }

    /**
     * @return string
     */
    public function getBizproc()
    {
        return $this->bizproc;
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
     * @param string $detailPageUrl
     */
    public function setDetailPageUrl($detailPageUrl)
    {
        $this->detailPageUrl = $detailPageUrl;
    }

    /**
     * @return string
     */
    public function getDetailPageUrl()
    {
        return $this->detailPageUrl;
    }

    /**
     * @param string $editFileAfter
     */
    public function setEditFileAfter($editFileAfter)
    {
        $this->editFileAfter = $editFileAfter;
    }

    /**
     * @return string
     */
    public function getEditFileAfter()
    {
        return $this->editFileAfter;
    }

    /**
     * @param string $editFileBefore
     */
    public function setEditFileBefore($editFileBefore)
    {
        $this->editFileBefore = $editFileBefore;
    }

    /**
     * @return string
     */
    public function getEditFileBefore()
    {
        return $this->editFileBefore;
    }

    /**
     * @param string $elementName
     */
    public function setElementName($elementName)
    {
        $this->elementName = $elementName;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param string $elementsName
     */
    public function setElementsName($elementsName)
    {
        $this->elementsName = $elementsName;
    }

    /**
     * @return string
     */
    public function getElementsName()
    {
        return $this->elementsName;
    }

    /**
     * @param string $iblockTypeId
     */
    public function setIblockTypeId($iblockTypeId)
    {
        $this->iblockTypeId = $iblockTypeId;
    }

    /**
     * @return string
     */
    public function getIblockTypeId()
    {
        return $this->iblockTypeId;
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
     * @param string $indexElement
     */
    public function setIndexElement($indexElement)
    {
        $this->indexElement = $indexElement;
    }

    /**
     * @return string
     */
    public function getIndexElement()
    {
        return $this->indexElement;
    }

    /**
     * @param string $indexSection
     */
    public function setIndexSection($indexSection)
    {
        $this->indexSection = $indexSection;
    }

    /**
     * @return string
     */
    public function getIndexSection()
    {
        return $this->indexSection;
    }

    /**
     * @param int $lastConvElement
     */
    public function setLastConvElement($lastConvElement)
    {
        $this->lastConvElement = $lastConvElement;
    }

    /**
     * @return int
     */
    public function getLastConvElement()
    {
        return $this->lastConvElement;
    }

    /**
     * @param string $lid
     */
    public function setLid($lid)
    {
        $this->lid = $lid;
    }

    /**
     * @return string
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * @param string $listMode
     */
    public function setListMode($listMode)
    {
        $this->listMode = $listMode;
    }

    /**
     * @return string
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * @param string $listPageUrl
     */
    public function setListPageUrl($listPageUrl)
    {
        $this->listPageUrl = $listPageUrl;
    }

    /**
     * @return string
     */
    public function getListPageUrl()
    {
        return $this->listPageUrl;
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
     * @param string $rightsMode
     */
    public function setRightsMode($rightsMode)
    {
        $this->rightsMode = $rightsMode;
    }

    /**
     * @return string
     */
    public function getRightsMode()
    {
        return $this->rightsMode;
    }

    /**
     * @param string $rssActive
     */
    public function setRssActive($rssActive)
    {
        $this->rssActive = $rssActive;
    }

    /**
     * @return string
     */
    public function getRssActive()
    {
        return $this->rssActive;
    }

    /**
     * @param string $rssFileActive
     */
    public function setRssFileActive($rssFileActive)
    {
        $this->rssFileActive = $rssFileActive;
    }

    /**
     * @return string
     */
    public function getRssFileActive()
    {
        return $this->rssFileActive;
    }

    /**
     * @param int $rssFileDays
     */
    public function setRssFileDays($rssFileDays)
    {
        $this->rssFileDays = $rssFileDays;
    }

    /**
     * @return int
     */
    public function getRssFileDays()
    {
        return $this->rssFileDays;
    }

    /**
     * @param int $rssFileLimit
     */
    public function setRssFileLimit($rssFileLimit)
    {
        $this->rssFileLimit = $rssFileLimit;
    }

    /**
     * @return int
     */
    public function getRssFileLimit()
    {
        return $this->rssFileLimit;
    }

    /**
     * @param int $rssTtl
     */
    public function setRssTtl($rssTtl)
    {
        $this->rssTtl = $rssTtl;
    }

    /**
     * @return int
     */
    public function getRssTtl()
    {
        return $this->rssTtl;
    }

    /**
     * @param string $rssYandexActive
     */
    public function setRssYandexActive($rssYandexActive)
    {
        $this->rssYandexActive = $rssYandexActive;
    }

    /**
     * @return string
     */
    public function getRssYandexActive()
    {
        return $this->rssYandexActive;
    }

    /**
     * @param string $sectionChooser
     */
    public function setSectionChooser($sectionChooser)
    {
        $this->sectionChooser = $sectionChooser;
    }

    /**
     * @return string
     */
    public function getSectionChooser()
    {
        return $this->sectionChooser;
    }

    /**
     * @param string $sectionName
     */
    public function setSectionName($sectionName)
    {
        $this->sectionName = $sectionName;
    }

    /**
     * @return string
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * @param string $sectionPageUrl
     */
    public function setSectionPageUrl($sectionPageUrl)
    {
        $this->sectionPageUrl = $sectionPageUrl;
    }

    /**
     * @return string
     */
    public function getSectionPageUrl()
    {
        return $this->sectionPageUrl;
    }

    /**
     * @param string $sectionProperty
     */
    public function setSectionProperty($sectionProperty)
    {
        $this->sectionProperty = $sectionProperty;
    }

    /**
     * @return string
     */
    public function getSectionProperty()
    {
        return $this->sectionProperty;
    }

    /**
     * @param string $sectionsName
     */
    public function setSectionsName($sectionsName)
    {
        $this->sectionsName = $sectionsName;
    }

    /**
     * @return string
     */
    public function getSectionsName()
    {
        return $this->sectionsName;
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
     * @param string $workflow
     */
    public function setWorkflow($workflow)
    {
        $this->workflow = $workflow;
    }

    /**
     * @return string
     */
    public function getWorkflow()
    {
        return $this->workflow;
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
