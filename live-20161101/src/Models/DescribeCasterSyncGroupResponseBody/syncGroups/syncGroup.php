<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponseBody\syncGroups;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponseBody\syncGroups\syncGroup\resourceIds;
use AlibabaCloud\Tea\Model;

class syncGroup extends Model
{
    /**
     * @var string
     */
    public $hostResourceId;

    /**
     * @var resourceIds
     */
    public $resourceIds;

    /**
     * @var int
     */
    public $mode;
    protected $_name = [
        'hostResourceId' => 'HostResourceId',
        'resourceIds'    => 'ResourceIds',
        'mode'           => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostResourceId) {
            $res['HostResourceId'] = $this->hostResourceId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = null !== $this->resourceIds ? $this->resourceIds->toMap() : null;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostResourceId'])) {
            $model->hostResourceId = $map['HostResourceId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = resourceIds::fromMap($map['ResourceIds']);
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
