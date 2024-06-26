<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;

use AlibabaCloud\Tea\Model;

class stopParam extends Model
{
    /**
     * @description 目前支持的枚举值包括：
     * - reason：停止原因。
     * @example reason
     *
     * @var string
     */
    public $key;

    /**
     * @description key对应的取值。
     *
     * @example exampleValue
     *
     * @var mixed
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stopParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
