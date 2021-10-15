<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 昨日使用容量
     *
     * @var int
     */
    public $lastDayUsage;

    /**
     * @description 当前使用量
     *
     * @var int
     */
    public $currentUsage;
    protected $_name = [
        'lastDayUsage' => 'lastDayUsage',
        'currentUsage' => 'currentUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastDayUsage) {
            $res['lastDayUsage'] = $this->lastDayUsage;
        }
        if (null !== $this->currentUsage) {
            $res['currentUsage'] = $this->currentUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lastDayUsage'])) {
            $model->lastDayUsage = $map['lastDayUsage'];
        }
        if (isset($map['currentUsage'])) {
            $model->currentUsage = $map['currentUsage'];
        }

        return $model;
    }
}
