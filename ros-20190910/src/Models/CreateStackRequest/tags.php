<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of tag N that you want to add to the stack.
     *
     * >
     *   The Tags parameter is optional. If you specify the Tags parameter, you must specify the Tags.N.Key parameter.
     *   The tag of a stack is propagated to each stack resource that supports the tag feature. For more information, see [Propagate tags](~~201421~~).
     *
     * @example usage
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N that you want to add to the stack.
     *
     * >  The tag of a stack is propagated to each stack resource that supports the tag feature. For more information, see [Propagate tags](~~201421~~).
     * @example test
     *
     * @var string
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
     * @return tags
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
