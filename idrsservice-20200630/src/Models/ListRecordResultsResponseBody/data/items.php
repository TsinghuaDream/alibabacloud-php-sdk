<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRecordResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example myapp
     *
     * @var string
     */
    public $appName;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $departmentName;

    /**
     * @example process name
     *
     * @var string
     */
    public $detectProcessName;

    /**
     * @example 22
     *
     * @var int
     */
    public $duration;

    /**
     * @example A1899517-BB99-5D3E-A71B-97524DCB0942
     *
     * @var string
     */
    public $id;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.meta
     *
     * @var string
     */
    public $metaUrl;

    /**
     * @example fasfasda
     *
     * @var string
     */
    public $outerBusinessId;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $recordAt;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.json
     *
     * @var string
     */
    public $resultUrl;

    /**
     * @example 642662467657798
     *
     * @var string
     */
    public $roomId;

    /**
     * @example record_65703154805715668342
     *
     * @var string
     */
    public $rtcRecordId;

    /**
     * @example runnable
     *
     * @var string
     */
    public $status;

    /**
     * @example http://oss.aliyuncs.com/1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'appName'           => 'AppName',
        'createdAt'         => 'CreatedAt',
        'departmentName'    => 'DepartmentName',
        'detectProcessName' => 'DetectProcessName',
        'duration'          => 'Duration',
        'id'                => 'Id',
        'metaUrl'           => 'MetaUrl',
        'outerBusinessId'   => 'OuterBusinessId',
        'recordAt'          => 'RecordAt',
        'resultUrl'         => 'ResultUrl',
        'roomId'            => 'RoomId',
        'rtcRecordId'       => 'RtcRecordId',
        'status'            => 'Status',
        'videoUrl'          => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }
        if (null !== $this->detectProcessName) {
            $res['DetectProcessName'] = $this->detectProcessName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metaUrl) {
            $res['MetaUrl'] = $this->metaUrl;
        }
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }
        if (null !== $this->recordAt) {
            $res['RecordAt'] = $this->recordAt;
        }
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->rtcRecordId) {
            $res['RtcRecordId'] = $this->rtcRecordId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['DetectProcessName'])) {
            $model->detectProcessName = $map['DetectProcessName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetaUrl'])) {
            $model->metaUrl = $map['MetaUrl'];
        }
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }
        if (isset($map['RecordAt'])) {
            $model->recordAt = $map['RecordAt'];
        }
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RtcRecordId'])) {
            $model->rtcRecordId = $map['RtcRecordId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
