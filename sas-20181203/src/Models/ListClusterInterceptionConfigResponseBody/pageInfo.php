<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @example 11
     *
     * @var int
     */
    public $count;

    /**
     * @example 1
     *
     * @var int
     */
    public $currrentPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 11
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'        => 'Count',
        'currrentPage' => 'CurrrentPage',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currrentPage) {
            $res['CurrrentPage'] = $this->currrentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrrentPage'])) {
            $model->currrentPage = $map['CurrrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}