<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefenseResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $addList;

    /**
     * @var string
     */
    public $deleteList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'addList'     => 'AddList',
        'deleteList'  => 'DeleteList',
        'description' => 'Description',
        'groupName'   => 'GroupName',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addList) {
            $res['AddList'] = $this->addList;
        }
        if (null !== $this->deleteList) {
            $res['DeleteList'] = $this->deleteList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefenseResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddList'])) {
            $model->addList = $map['AddList'];
        }
        if (isset($map['DeleteList'])) {
            $model->deleteList = $map['DeleteList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}