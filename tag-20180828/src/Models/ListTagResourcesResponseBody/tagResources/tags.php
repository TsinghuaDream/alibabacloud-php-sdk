<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The type of the tag. Valid values:
     *
     *   Custom
     *   System
     *
     * @example Custom
     *
     * @var string
     */
    public $category;

    /**
     * @description The tag key.
     *
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'category' => 'Category',
        'key'      => 'Key',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
