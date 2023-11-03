<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus\featureContainers;
use AlibabaCloud\Tea\Model;

class featureStatus extends Model
{
    /**
     * @description Feature container list.
     *
     * @var featureContainers[]
     */
    public $featureContainers;

    /**
     * @description K8s resource name of the Feature.
     *
     * @example arms-prometheus-ack-arms-prometheus
     *
     * @var string
     */
    public $name;

    /**
     * @description Namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Running status.
     * - Not Found: Not installed
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'featureContainers' => 'FeatureContainers',
        'name'              => 'Name',
        'namespace'         => 'Namespace',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureContainers) {
            $res['FeatureContainers'] = [];
            if (null !== $this->featureContainers && \is_array($this->featureContainers)) {
                $n = 0;
                foreach ($this->featureContainers as $item) {
                    $res['FeatureContainers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureContainers'])) {
            if (!empty($map['FeatureContainers'])) {
                $model->featureContainers = [];
                $n                        = 0;
                foreach ($map['FeatureContainers'] as $item) {
                    $model->featureContainers[$n++] = null !== $item ? featureContainers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
