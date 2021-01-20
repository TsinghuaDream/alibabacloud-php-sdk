<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor\aggregates;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor\valueFilter;
use AlibabaCloud\Tea\Model;

class logMonitor extends Model
{
    /**
     * @var string
     */
    public $valueFilterRelation;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var string
     */
    public $slsLogstore;

    /**
     * @var aggregates[]
     */
    public $aggregates;

    /**
     * @var string[]
     */
    public $tumblingwindows;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $groupbys;

    /**
     * @var int
     */
    public $logId;

    /**
     * @var string
     */
    public $metricExpress;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'valueFilterRelation' => 'ValueFilterRelation',
        'metricName'          => 'MetricName',
        'valueFilter'         => 'ValueFilter',
        'slsRegionId'         => 'SlsRegionId',
        'slsLogstore'         => 'SlsLogstore',
        'aggregates'          => 'Aggregates',
        'tumblingwindows'     => 'Tumblingwindows',
        'groupId'             => 'GroupId',
        'groupbys'            => 'Groupbys',
        'logId'               => 'LogId',
        'metricExpress'       => 'MetricExpress',
        'gmtCreate'           => 'GmtCreate',
        'slsProject'          => 'SlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->valueFilter) {
            $res['ValueFilter'] = [];
            if (null !== $this->valueFilter && \is_array($this->valueFilter)) {
                $n = 0;
                foreach ($this->valueFilter as $item) {
                    $res['ValueFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->aggregates) {
            $res['Aggregates'] = [];
            if (null !== $this->aggregates && \is_array($this->aggregates)) {
                $n = 0;
                foreach ($this->aggregates as $item) {
                    $res['Aggregates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tumblingwindows) {
            $res['Tumblingwindows'] = $this->tumblingwindows;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupbys) {
            $res['Groupbys'] = $this->groupbys;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->metricExpress) {
            $res['MetricExpress'] = $this->metricExpress;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logMonitor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n                  = 0;
                foreach ($map['ValueFilter'] as $item) {
                    $model->valueFilter[$n++] = null !== $item ? valueFilter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['Aggregates'])) {
            if (!empty($map['Aggregates'])) {
                $model->aggregates = [];
                $n                 = 0;
                foreach ($map['Aggregates'] as $item) {
                    $model->aggregates[$n++] = null !== $item ? aggregates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tumblingwindows'])) {
            if (!empty($map['Tumblingwindows'])) {
                $model->tumblingwindows = $map['Tumblingwindows'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Groupbys'])) {
            if (!empty($map['Groupbys'])) {
                $model->groupbys = $map['Groupbys'];
            }
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['MetricExpress'])) {
            $model->metricExpress = $map['MetricExpress'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
