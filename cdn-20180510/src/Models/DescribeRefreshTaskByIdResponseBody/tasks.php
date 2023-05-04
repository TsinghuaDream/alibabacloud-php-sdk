<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTaskByIdResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The path of the object refreshed by the refresh task.
     *
     * @example 2020-08-03T08:54:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The tasks.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the task. Valid values:
     *
     *   **file**: refreshes an individual file.
     *   **directory**: refreshes files under the specified directory.
     *   **preload**: prefetches an individual file.
     *   **regex**: refreshes content based on a regular expression.
     *
     * @example http://example.com/abc.jpg
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The ID of the task.
     *
     * @example file
     *
     * @var string
     */
    public $objectType;

    /**
     * @description > - You can query data within the last three days.
     * - You can call this operation up to 30 times per second per account.
     * @example 100%
     *
     * @var string
     */
    public $process;

    /**
     * @description The error returned when the refresh or prefetch task failed. Valid values:
     *
     *   **Internal Error**: An internal error occurred.
     *   **Origin Timeout**: The response from the origin server timed out.
     *   **Origin Return StatusCode 5XX**: The origin server returned a 5XX error.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The status of the task. Valid values:
     *
     *   **Complete**: The task is complete.
     *   **Pending**: The task is pending.
     *   **Refreshing**: The task is running.
     *   **Failed**: The task failed.
     *
     * @example 24840
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'objectPath'   => 'ObjectPath',
        'objectType'   => 'ObjectType',
        'process'      => 'Process',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
