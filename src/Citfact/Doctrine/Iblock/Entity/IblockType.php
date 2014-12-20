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
 * @ORM\Table(name="b_iblock_type")
 * @ORM\Entity
 */
class IblockType
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTIONS", type="string", length=1, nullable=false)
     */
    protected $sections;

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
     * @ORM\Column(name="IN_RSS", type="string", length=1, nullable=false)
     */
    protected $inRss;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=false)
     */
    protected $sort;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->sections = 'Y';
        $this->inRss = 'N';
        $this->sort = 500;
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
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $inRss
     */
    public function setInRss($inRss)
    {
        $this->inRss = $inRss;
    }

    /**
     * @return string
     */
    public function getInRss()
    {
        return $this->inRss;
    }

    /**
     * @param string $sections
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
    }

    /**
     * @return string
     */
    public function getSections()
    {
        return $this->sections;
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
}
