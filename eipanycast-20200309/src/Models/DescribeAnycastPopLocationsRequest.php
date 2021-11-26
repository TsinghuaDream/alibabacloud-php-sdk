<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class DescribeAnycastPopLocationsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceLocation;
    protected $_name = [
        'serviceLocation' => 'ServiceLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastPopLocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        return $model;
    }
}
