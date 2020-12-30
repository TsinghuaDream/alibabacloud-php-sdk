<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\environmentVars;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\environmentVars\valueFrom\fieldRef;
use AlibabaCloud\Tea\Model;

class valueFrom extends Model
{
    /**
     * @var fieldRef
     */
    public $fieldRef;
    protected $_name = [
        'fieldRef' => 'FieldRef',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldRef) {
            $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueFrom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldRef'])) {
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }

        return $model;
    }
}
