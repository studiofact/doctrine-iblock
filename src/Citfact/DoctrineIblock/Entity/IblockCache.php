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
 * @ORM\Table(name="b_iblock_cache")
 * @ORM\Entity
 */
class IblockCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="CACHE_KEY", type="string", length=35, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $cacheKey;

    /**
     * @var string
     *
     * @ORM\Column(name="CACHE", type="text", nullable=false)
     */
    protected $cache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CACHE_DATE", type="datetime", nullable=false)
     */
    protected $cacheDate;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->cacheDate = '0000-00-00 00:00:00';
    }

    /**
     * @param string $cacheKey
     */
    public function setCacheKey($cacheKey)
    {
        $this->cacheKey = $cacheKey;
    }

    /**
     * @return string
     */
    public function getCacheKey()
    {
        return $this->cacheKey;
    }

    /**
     * @param \DateTime $cacheDate
     */
    public function setCacheDate($cacheDate)
    {
        $this->cacheDate = $cacheDate;
    }

    /**
     * @return \DateTime
     */
    public function getCacheDate()
    {
        return $this->cacheDate;
    }

    /**
     * @param string $cache
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    }

    /**
     * @return string
     */
    public function getCache()
    {
        return $this->cache;
    }
}
