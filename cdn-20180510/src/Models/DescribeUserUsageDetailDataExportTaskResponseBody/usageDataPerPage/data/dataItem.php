<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data\dataItem\taskConfig;
use AlibabaCloud\Tea\Model;

class dataItem extends Model
{
    /**
     * @description The download URL.
     *
     * @example 2018-10-09T06:33:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The configurations of the task.
     *
     * @example https://test.oss-cn-beijing.aliyuncs.com/billing_data/xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the task was created.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of entries returned.
     *
     * @var taskConfig
     */
    public $taskConfig;

    /**
     * @description The number of the page returned.
     *
     * @example 11
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Maximum value: **50**.
     *
     * Valid values: **1** to **50**.
     * @example The number of the entries returned per page.
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeUserUsageDetailDataExportTask**.
     *
     * @example 2018-10-09T06:35:46Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'downloadUrl' => 'DownloadUrl',
        'status'      => 'Status',
        'taskConfig'  => 'TaskConfig',
        'taskId'      => 'TaskId',
        'taskName'    => 'TaskName',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskConfig) {
            $res['TaskConfig'] = null !== $this->taskConfig ? $this->taskConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskConfig'])) {
            $model->taskConfig = taskConfig::fromMap($map['TaskConfig']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
