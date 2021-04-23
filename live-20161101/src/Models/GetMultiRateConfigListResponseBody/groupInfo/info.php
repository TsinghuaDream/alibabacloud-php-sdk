<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigListResponseBody\groupInfo;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $avFormat;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'groupId'  => 'GroupId',
        'app'      => 'App',
        'avFormat' => 'AvFormat',
        'count'    => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->avFormat) {
            $res['AvFormat'] = $this->avFormat;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['AvFormat'])) {
            $model->avFormat = $map['AvFormat'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
