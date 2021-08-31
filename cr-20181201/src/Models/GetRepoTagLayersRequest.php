<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagLayersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $digest;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
        'tag'        => 'Tag',
        'digest'     => 'Digest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagLayersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        return $model;
    }
}
