<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $platformVersion;

    /**
     * @var string
     */
    public $userSecret;

    /**
     * @var string
     */
    public $userStatus;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'modifiedTime'    => 'ModifiedTime',
        'platformVersion' => 'PlatformVersion',
        'userSecret'      => 'UserSecret',
        'userStatus'      => 'UserStatus',
        'userType'        => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->platformVersion) {
            $res['PlatformVersion'] = $this->platformVersion;
        }
        if (null !== $this->userSecret) {
            $res['UserSecret'] = $this->userSecret;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PlatformVersion'])) {
            $model->platformVersion = $map['PlatformVersion'];
        }
        if (isset($map['UserSecret'])) {
            $model->userSecret = $map['UserSecret'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
