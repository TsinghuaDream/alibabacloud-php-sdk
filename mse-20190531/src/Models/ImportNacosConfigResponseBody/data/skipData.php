<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class skipData extends Model
{
    /**
     * @description The ID of the group.
     *
     * @example test.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The information about configurations that are failed to be imported.
     *
     * @example public
     *
     * @var string
     */
    public $group;
    protected $_name = [
        'dataId' => 'DataId',
        'group'  => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skipData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
