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
 * @ORM\Table(name="b_iblock_right", indexes={@ORM\Index(name="ix_b_iblock_right_iblock_id", columns={"IBLOCK_ID", "ENTITY_TYPE", "ENTITY_ID"}), @ORM\Index(name="ix_b_iblock_right_group_code", columns={"GROUP_CODE", "IBLOCK_ID"}), @ORM\Index(name="ix_b_iblock_right_entity", columns={"ENTITY_ID", "ENTITY_TYPE"}), @ORM\Index(name="ix_b_iblock_right_op_eread", columns={"ID", "OP_EREAD", "GROUP_CODE"}), @ORM\Index(name="ix_b_iblock_right_op_sread", columns={"ID", "OP_SREAD", "GROUP_CODE"}), @ORM\Index(name="ix_b_iblock_right_task_id", columns={"TASK_ID"})})
 * @ORM\Entity
 */
class IblockRight
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
     * @ORM\Column(name="GROUP_CODE", type="string", length=50, nullable=false)
     */
    protected $groupCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITY_TYPE", type="string", length=32, nullable=false)
     */
    protected $entityType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENTITY_ID", type="integer", nullable=false)
     */
    protected $entityId;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_INHERIT", type="string", length=1, nullable=false)
     */
    protected $doInherit;

    /**
     * @var integer
     *
     * @ORM\Column(name="TASK_ID", type="integer", nullable=false)
     */
    protected $taskId;

    /**
     * @var string
     *
     * @ORM\Column(name="OP_SREAD", type="string", length=1, nullable=false)
     */
    protected $opSread;

    /**
     * @var string
     *
     * @ORM\Column(name="OP_EREAD", type="string", length=1, nullable=false)
     */
    protected $opEread;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=32, nullable=true)
     */
    protected $xmlId;

    /**
     * @param string $doInherit
     */
    public function setDoInherit($doInherit)
    {
        $this->doInherit = $doInherit;
    }

    /**
     * @return string
     */
    public function getDoInherit()
    {
        return $this->doInherit;
    }

    /**
     * @param int $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param string $entityType
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @param string $groupCode
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;
    }

    /**
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
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
     * @param string $opEread
     */
    public function setOpEread($opEread)
    {
        $this->opEread = $opEread;
    }

    /**
     * @return string
     */
    public function getOpEread()
    {
        return $this->opEread;
    }

    /**
     * @param string $opSread
     */
    public function setOpSread($opSread)
    {
        $this->opSread = $opSread;
    }

    /**
     * @return string
     */
    public function getOpSread()
    {
        return $this->opSread;
    }

    /**
     * @param int $taskId
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }

    /**
     * @return int
     */
    public function getTaskId()
    {
        return $this->taskId;
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
