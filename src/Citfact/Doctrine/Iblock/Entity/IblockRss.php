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
 * @ORM\Table(name="b_iblock_rss")
 * @ORM\Entity
 */
class IblockRss
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
     * @var integer
     *
     * @ORM\Column(name="IBLOCK_ID", type="integer", nullable=false)
     */
    protected $iblockId;

    /**
     * @var string
     *
     * @ORM\Column(name="NODE", type="string", length=50, nullable=false)
     */
    protected $node;

    /**
     * @var string
     *
     * @ORM\Column(name="NODE_VALUE", type="string", length=250, nullable=true)
     */
    protected $nodeValue;

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
     * @param string $node
     */
    public function setNode($node)
    {
        $this->node = $node;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param string $nodeValue
     */
    public function setNodeValue($nodeValue)
    {
        $this->nodeValue = $nodeValue;
    }

    /**
     * @return string
     */
    public function getNodeValue()
    {
        return $this->nodeValue;
    }
}
