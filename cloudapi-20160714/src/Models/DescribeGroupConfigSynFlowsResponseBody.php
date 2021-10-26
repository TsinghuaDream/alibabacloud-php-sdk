<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupConfigSynFlowsResponseBody\flows;
use AlibabaCloud\Tea\Model;

class DescribeGroupConfigSynFlowsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var flows
     */
    public $flows;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'flows'      => 'Flows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->flows) {
            $res['Flows'] = null !== $this->flows ? $this->flows->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupConfigSynFlowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Flows'])) {
            $model->flows = flows::fromMap($map['Flows']);
        }

        return $model;
    }
}
