<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @example x86
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @description The operation that you want to perform.
     * Set the value to **DescribeZones**.
     * @example single
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The deployment mode.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $series;
    protected $_name = [
        'cpuArch'    => 'CpuArch',
        'deployType' => 'DeployType',
        'series'     => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        return $model;
    }
}
