<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;

use AlibabaCloud\Tea\Model;

class offsetTable extends Model
{
    /**
     * @example 1566470063547
     *
     * @var int
     */
    public $lastUpdateTimestamp;

    /**
     * @example 76
     *
     * @var int
     */
    public $maxOffset;

    /**
     * @example 0
     *
     * @var int
     */
    public $minOffset;

    /**
     * @example 0
     *
     * @var int
     */
    public $partition;

    /**
     * @example testkafka
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'lastUpdateTimestamp' => 'LastUpdateTimestamp',
        'maxOffset'           => 'MaxOffset',
        'minOffset'           => 'MinOffset',
        'partition'           => 'Partition',
        'topic'               => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastUpdateTimestamp) {
            $res['LastUpdateTimestamp'] = $this->lastUpdateTimestamp;
        }
        if (null !== $this->maxOffset) {
            $res['MaxOffset'] = $this->maxOffset;
        }
        if (null !== $this->minOffset) {
            $res['MinOffset'] = $this->minOffset;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsetTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastUpdateTimestamp'])) {
            $model->lastUpdateTimestamp = $map['LastUpdateTimestamp'];
        }
        if (isset($map['MaxOffset'])) {
            $model->maxOffset = $map['MaxOffset'];
        }
        if (isset($map['MinOffset'])) {
            $model->minOffset = $map['MinOffset'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
