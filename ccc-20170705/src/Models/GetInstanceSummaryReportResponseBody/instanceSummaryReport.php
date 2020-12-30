<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportResponseBody\instanceSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportResponseBody\instanceSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportResponseBody\instanceSummaryReport\overall;
use AlibabaCloud\Tea\Model;

class instanceSummaryReport extends Model
{
    /**
     * @var overall
     */
    public $overall;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'overall'    => 'Overall',
        'inbound'    => 'Inbound',
        'outbound'   => 'Outbound',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSummaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
