<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponseBody\pagedAgentSummaryReport\list_\agentTimeIntervalReport\intervalList\agentSummaryReport;
use AlibabaCloud\Tea\Model;

class intervalList extends Model
{
    /**
     * @var agentSummaryReport[]
     */
    public $agentSummaryReport;
    protected $_name = [
        'agentSummaryReport' => 'AgentSummaryReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentSummaryReport) {
            $res['AgentSummaryReport'] = [];
            if (null !== $this->agentSummaryReport && \is_array($this->agentSummaryReport)) {
                $n = 0;
                foreach ($this->agentSummaryReport as $item) {
                    $res['AgentSummaryReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intervalList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentSummaryReport'])) {
            if (!empty($map['AgentSummaryReport'])) {
                $model->agentSummaryReport = [];
                $n                         = 0;
                foreach ($map['AgentSummaryReport'] as $item) {
                    $model->agentSummaryReport[$n++] = null !== $item ? agentSummaryReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
