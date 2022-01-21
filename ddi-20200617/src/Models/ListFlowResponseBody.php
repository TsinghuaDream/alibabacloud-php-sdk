<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowResponseBody\flow;
use AlibabaCloud\Tea\Model;

class ListFlowResponseBody extends Model
{
    /**
     * @description 工作流列表
     *
     * @var flow
     */
    public $flow;

    /**
     * @description 页码。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页数量。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总数。
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'flow'       => 'Flow',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = null !== $this->flow ? $this->flow->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            $model->flow = flow::fromMap($map['Flow']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
