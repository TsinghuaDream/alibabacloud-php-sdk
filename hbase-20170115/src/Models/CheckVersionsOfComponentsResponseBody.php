<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody\components;
use AlibabaCloud\Tea\Model;

class CheckVersionsOfComponentsResponseBody extends Model
{
    /**
     * @var components
     */
    public $components;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'components' => 'Components',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckVersionsOfComponentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Components'])) {
            $model->components = components::fromMap($map['Components']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
