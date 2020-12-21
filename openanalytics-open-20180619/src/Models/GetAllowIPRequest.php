<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class GetAllowIPRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'regionId'    => 'RegionId',
        'networkType' => 'NetworkType',
        'product'     => 'Product',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkType', $this->networkType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAllowIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
