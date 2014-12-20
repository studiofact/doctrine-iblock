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
 * @ORM\Table(name="b_iblock_element", indexes={@ORM\Index(name="ix_iblock_element_1", columns={"IBLOCK_ID", "IBLOCK_SECTION_ID"}), @ORM\Index(name="ix_iblock_element_4", columns={"IBLOCK_ID", "XML_ID", "WF_PARENT_ELEMENT_ID"}), @ORM\Index(name="ix_iblock_element_3", columns={"WF_PARENT_ELEMENT_ID"}), @ORM\Index(name="ix_iblock_element_code", columns={"IBLOCK_ID", "CODE"})})
 * @ORM\Entity
 */
class IblockElement
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
     * @ORM\Column(name="TIMESTAMP_X", type="datetime", nullable=true)
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
     * @var \DateTime
     *
     * @ORM\Column(name="ACTIVE_FROM", type="datetime", nullable=true)
     */
    protected $activeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTIVE_TO", type="datetime", nullable=true)
     */
    protected $activeTo;

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
     * @ORM\Column(name="PREVIEW_PICTURE", type="integer", nullable=true)
     */
    protected $previewPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="PREVIEW_TEXT", type="text", length=65535, nullable=true)
     */
    protected $previewText;

    /**
     * @var string
     *
     * @ORM\Column(name="PREVIEW_TEXT_TYPE", type="string", length=4, nullable=false)
     */
    protected $previewTextType;

    /**
     * @var integer
     *
     * @ORM\Column(name="DETAIL_PICTURE", type="integer", nullable=true)
     */
    protected $detailPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="DETAIL_TEXT", type="text", nullable=true)
     */
    protected $detailText;

    /**
     * @var string
     *
     * @ORM\Column(name="DETAIL_TEXT_TYPE", type="string", length=4, nullable=false)
     */
    protected $detailTextType;

    /**
     * @var string
     *
     * @ORM\Column(name="SEARCHABLE_CONTENT", type="text", length=65535, nullable=true)
     */
    protected $searchableContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="WF_STATUS_ID", type="integer", nullable=true)
     */
    protected $wfStatusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="WF_PARENT_ELEMENT_ID", type="integer", nullable=true)
     */
    protected $wfParentElementId;

    /**
     * @var string
     *
     * @ORM\Column(name="WF_NEW", type="string", length=1, nullable=true)
     */
    protected $wfNew;

    /**
     * @var integer
     *
     * @ORM\Column(name="WF_LOCKED_BY", type="integer", nullable=true)
     */
    protected $wfLockedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="WF_DATE_LOCK", type="datetime", nullable=true)
     */
    protected $wfDateLock;

    /**
     * @var string
     *
     * @ORM\Column(name="WF_COMMENTS", type="text", length=65535, nullable=true)
     */
    protected $wfComments;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_SECTIONS", type="string", length=1, nullable=false)
     */
    protected $inSections;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=255, nullable=true)
     */
    protected $xmlId;

    /**
     * @var string
     *
     * @ORM\Column(name="CODE", type="string", length=255, nullable=true)
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="TAGS", type="string", length=255, nullable=true)
     */
    protected $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="TMP_ID", type="string", length=40, nullable=true)
     */
    protected $tmpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="WF_LAST_HISTORY_ID", type="integer", nullable=true)
     */
    protected $wfLastHistoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="SHOW_COUNTER", type="integer", nullable=true)
     */
    protected $showCounter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SHOW_COUNTER_START", type="datetime", nullable=true)
     */
    protected $showCounterStart;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->iblockId = 0;
        $this->active = 'Y';
        $this->sort = 500;
        $this->previewTextType = 'text';
        $this->detailTextType = 'text';
        $this->wfStatusId = 1;
        $this->inSections = 'N';
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
     * @param \DateTime $activeFrom
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;
    }

    /**
     * @return \DateTime
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * @param \DateTime $activeTo
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;
    }

    /**
     * @return \DateTime
     */
    public function getActiveTo()
    {
        return $this->activeTo;
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
     * @param string $detailText
     */
    public function setDetailText($detailText)
    {
        $this->detailText = $detailText;
    }

    /**
     * @return string
     */
    public function getDetailText()
    {
        return $this->detailText;
    }

    /**
     * @param string $detailTextType
     */
    public function setDetailTextType($detailTextType)
    {
        $this->detailTextType = $detailTextType;
    }

    /**
     * @return string
     */
    public function getDetailTextType()
    {
        return $this->detailTextType;
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
     * @param string $inSections
     */
    public function setInSections($inSections)
    {
        $this->inSections = $inSections;
    }

    /**
     * @return string
     */
    public function getInSections()
    {
        return $this->inSections;
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
     * @param int $previewPicture
     */
    public function setPreviewPicture($previewPicture)
    {
        $this->previewPicture = $previewPicture;
    }

    /**
     * @return int
     */
    public function getPreviewPicture()
    {
        return $this->previewPicture;
    }

    /**
     * @param string $previewText
     */
    public function setPreviewText($previewText)
    {
        $this->previewText = $previewText;
    }

    /**
     * @return string
     */
    public function getPreviewText()
    {
        return $this->previewText;
    }

    /**
     * @param string $previewTextType
     */
    public function setPreviewTextType($previewTextType)
    {
        $this->previewTextType = $previewTextType;
    }

    /**
     * @return string
     */
    public function getPreviewTextType()
    {
        return $this->previewTextType;
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
     * @param int $showCounter
     */
    public function setShowCounter($showCounter)
    {
        $this->showCounter = $showCounter;
    }

    /**
     * @return int
     */
    public function getShowCounter()
    {
        return $this->showCounter;
    }

    /**
     * @param \DateTime $showCounterStart
     */
    public function setShowCounterStart($showCounterStart)
    {
        $this->showCounterStart = $showCounterStart;
    }

    /**
     * @return \DateTime
     */
    public function getShowCounterStart()
    {
        return $this->showCounterStart;
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
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
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
     * @param string $wfComments
     */
    public function setWfComments($wfComments)
    {
        $this->wfComments = $wfComments;
    }

    /**
     * @return string
     */
    public function getWfComments()
    {
        return $this->wfComments;
    }

    /**
     * @param \DateTime $wfDateLock
     */
    public function setWfDateLock($wfDateLock)
    {
        $this->wfDateLock = $wfDateLock;
    }

    /**
     * @return \DateTime
     */
    public function getWfDateLock()
    {
        return $this->wfDateLock;
    }

    /**
     * @param int $wfLastHistoryId
     */
    public function setWfLastHistoryId($wfLastHistoryId)
    {
        $this->wfLastHistoryId = $wfLastHistoryId;
    }

    /**
     * @return int
     */
    public function getWfLastHistoryId()
    {
        return $this->wfLastHistoryId;
    }

    /**
     * @param int $wfLockedBy
     */
    public function setWfLockedBy($wfLockedBy)
    {
        $this->wfLockedBy = $wfLockedBy;
    }

    /**
     * @return int
     */
    public function getWfLockedBy()
    {
        return $this->wfLockedBy;
    }

    /**
     * @param string $wfNew
     */
    public function setWfNew($wfNew)
    {
        $this->wfNew = $wfNew;
    }

    /**
     * @return string
     */
    public function getWfNew()
    {
        return $this->wfNew;
    }

    /**
     * @param int $wfParentElementId
     */
    public function setWfParentElementId($wfParentElementId)
    {
        $this->wfParentElementId = $wfParentElementId;
    }

    /**
     * @return int
     */
    public function getWfParentElementId()
    {
        return $this->wfParentElementId;
    }

    /**
     * @param int $wfStatusId
     */
    public function setWfStatusId($wfStatusId)
    {
        $this->wfStatusId = $wfStatusId;
    }

    /**
     * @return int
     */
    public function getWfStatusId()
    {
        return $this->wfStatusId;
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
