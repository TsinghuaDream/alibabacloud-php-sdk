<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @example QpgBAAAAAABsb2dzL2RzLw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $resourceId;

    /**
     * @example DOMAIN
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example 26842
     *
     * @var string
     */
    public $tagOwnerBid;

    /**
     * @example 123xxxx
     *
     * @var string
     */
    public $tagOwnerUid;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
        'tagOwnerBid'  => 'TagOwnerBid',
        'tagOwnerUid'  => 'TagOwnerUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagOwnerBid) {
            $res['TagOwnerBid'] = $this->tagOwnerBid;
        }
        if (null !== $this->tagOwnerUid) {
            $res['TagOwnerUid'] = $this->tagOwnerUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagOwnerBid'])) {
            $model->tagOwnerBid = $map['TagOwnerBid'];
        }
        if (isset($map['TagOwnerUid'])) {
            $model->tagOwnerUid = $map['TagOwnerUid'];
        }

        return $model;
    }
}
