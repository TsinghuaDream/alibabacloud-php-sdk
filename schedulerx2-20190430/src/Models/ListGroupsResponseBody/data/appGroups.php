<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class appGroups extends Model
{
    /**
     * @description The application group ID.
     *
     * @example 1
     *
     * @var int
     */
    public $appGroupId;

    /**
     * @description The AppKey for the application.
     *
     * @example a3G77O6NZxq/lyo1NC****==
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the application.
     *
     * @example DocTest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The application ID.
     *
     * @example DocTest.Group
     *
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'appGroupId'  => 'AppGroupId',
        'appKey'      => 'AppKey',
        'appName'     => 'AppName',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
