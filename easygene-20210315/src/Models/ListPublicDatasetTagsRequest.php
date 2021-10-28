<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListPublicDatasetTagsRequest extends Model
{
    /**
     * @description 是否反转
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @description 分页数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 翻页Token用来标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序字段:TagName,LastModified
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 标签名中搜索的关键字
     *
     * @var string
     */
    public $search;
    protected $_name = [
        'isReversed' => 'IsReversed',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'search'     => 'Search',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicDatasetTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }

        return $model;
    }
}
