<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponseBody\apis;
use AlibabaCloud\Tea\Model;

class RemoveVpcAccessResponseBody extends Model
{
    /**
     * @var apis
     */
    public $apis;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apis'      => 'Apis',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apis) {
            $res['Apis'] = null !== $this->apis ? $this->apis->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveVpcAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apis'])) {
            $model->apis = apis::fromMap($map['Apis']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
