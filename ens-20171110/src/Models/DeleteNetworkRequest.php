<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $networkId;
    protected $_name = [
        'networkId' => 'NetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        return $model;
    }
}
