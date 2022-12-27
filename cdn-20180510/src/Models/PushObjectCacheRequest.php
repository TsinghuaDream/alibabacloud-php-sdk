<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class PushObjectCacheRequest extends Model
{
    /**
     * @description The accelerated region where content is to be prefetched. Valid values:
     *
     *   **domestic**: **Chinese Mainland Only**
     *   **overseas**: **Global (Excluding the Chinese Mainland)**
     *
     * If you do not set this parameter, content in the accelerated region of the domain name is prefetched. Content is prefetched based on the following rules:
     *
     *   If the accelerated region is set to ****Chinese Mainland Only****, content in regions in the Chinese mainland is prefetched.
     *   If the accelerated region is set to **Global**, content in all regions is prefetched.
     *   If the accelerated region is set to **Global (Excluding the Chinese Mainland)**, content in regions outside the Chinese mainland is prefetched.
     *
     * @example domestic
     *
     * @var string
     */
    public $area;

    /**
     * @description Specifies whether to prefetch content to POPs. Valid values:
     *
     *   **true**: prefetch content to L2 edge nodes.
     *   **false**: prefetch content to regular edge nodes. Regular edge nodes can be L2 edge nodes or L3 edge nodes. Default value: **false**.
     *
     * @example true
     *
     * @var bool
     */
    public $l2Preload;

    /**
     * @description The URLs based on which content is prefetched. Format: **accelerated domain name/files to be prefetched**.
     *
     * >  Separate URLs with line feeds (\n or \r\n). Each object path can be up to 1,024 characters in length.
     * @example example.com/image/1.png\nexample.org/image/2.png
     *
     * @var string
     */
    public $objectPath;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'area'          => 'Area',
        'l2Preload'     => 'L2Preload',
        'objectPath'    => 'ObjectPath',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->l2Preload) {
            $res['L2Preload'] = $this->l2Preload;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushObjectCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['L2Preload'])) {
            $model->l2Preload = $map['L2Preload'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
