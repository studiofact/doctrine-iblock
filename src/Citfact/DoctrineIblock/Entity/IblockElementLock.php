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
 * @ORM\Table(name="b_iblock_element_lock")
 * @ORM\Entity
 */
class IblockElementLock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ELEMENT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $iblockElementId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LOCK", type="datetime", nullable=true)
     */
    protected $dateLock;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCKED_BY", type="string", length=32, nullable=true)
     */
    protected $lockedBy;

    /**
     * @param \DateTime $dateLock
     */
    public function setDateLock($dateLock)
    {
        $this->dateLock = $dateLock;
    }

    /**
     * @return \DateTime
     */
    public function getDateLock()
    {
        return $this->dateLock;
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
     * @param string $lockedBy
     */
    public function setLockedBy($lockedBy)
    {
        $this->lockedBy = $lockedBy;
    }

    /**
     * @return string
     */
    public function getLockedBy()
    {
        return $this->lockedBy;
    }
}
