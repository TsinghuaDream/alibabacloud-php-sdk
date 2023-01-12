<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest;

use AlibabaCloud\Tea\Model;

class backendPorts extends Model
{
    /**
     * @description The start port in the range of ports used by the backend server to receive requests.
     *
     * >  This parameter is required only when you configure an HTTPS or HTTP listener and the listener port is different from the port over which the backend server provides services. In this case, the start port that is used to receive requests for the backend server must be the same as the end port.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The end port in the range of ports used by the backend server to receive requests.
     *
     * >  This parameter is required only when you configure an HTTPS or HTTP listener and the listener port is different from the port over which the backend server provides services. In this case, the start port that is used to receive requests for the backend server must be the same as the end port.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
