<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the account.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The data entries.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The token of the next page.
     *
     * @example 400
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'items'      => 'Items',
        'nextToken'  => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
