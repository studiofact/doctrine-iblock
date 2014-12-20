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
 * @ORM\Table(name="b_iblock_section_right", indexes={@ORM\Index(name="ix_b_iblock_section_right_1", columns={"SECTION_ID", "IBLOCK_ID"}), @ORM\Index(name="ix_b_iblock_section_right_2", columns={"IBLOCK_ID", "RIGHT_ID"})})
 * @ORM\Entity
 */
class IblockSectionRight
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $sectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="RIGHT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $rightId;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_INHERITED", type="string", length=1, nullable=false)
     */
    protected $isInherited;

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
     * @param string $isInherited
     */
    public function setIsInherited($isInherited)
    {
        $this->isInherited = $isInherited;
    }

    /**
     * @return string
     */
    public function getIsInherited()
    {
        return $this->isInherited;
    }

    /**
     * @param int $rightId
     */
    public function setRightId($rightId)
    {
        $this->rightId = $rightId;
    }

    /**
     * @return int
     */
    public function getRightId()
    {
        return $this->rightId;
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
}
