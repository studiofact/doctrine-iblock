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
 * @ORM\Table(name="b_iblock_site")
 * @ORM\Entity
 */
class IblockSite
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
     * @var string
     *
     * @ORM\Column(name="SITE_ID", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $siteId;

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
     * @param string $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->siteId;
    }
}
