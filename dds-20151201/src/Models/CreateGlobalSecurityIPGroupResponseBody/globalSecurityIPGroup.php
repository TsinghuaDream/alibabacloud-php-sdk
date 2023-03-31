<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateGlobalSecurityIPGroupResponseBody;

use AlibabaCloud\Tea\Model;

class globalSecurityIPGroup extends Model
{
    /**
     * @example 111.207.194.217,61.149.7.154
     *
     * @var string
     */
    public $GIpList;

    /**
     * @example developer
     *
     * @var string
     */
    public $globalIgName;

    /**
     * @example g-2ifynl1jfkdlhhxgva3q
     *
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'GIpList'               => 'GIpList',
        'globalIgName'          => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }
        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }
        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalSecurityIPGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }
        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }
        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
