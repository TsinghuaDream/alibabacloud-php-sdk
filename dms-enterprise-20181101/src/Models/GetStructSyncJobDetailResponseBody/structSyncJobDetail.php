<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncJobDetail extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $DBTaskGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $executeCount;

    /**
     * @description The number of SQL statements that have been executed.
     *
     * @example DBTASK_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The details of the schema synchronization task.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @example WITHOUT_APPROVE
     *
     * @var string
     */
    public $securityRule;

    /**
     * @description The number of tables that have been analyzed.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlCount;

    /**
     * @description The type of security rule. Valid values:
     *
     *   **CANNOT_SYNC**: The schema synchronization is not allowed.
     *   **WITH_APPROVE**: The schema synchronization can be performed after the ticket is approved. You can call the [SubmitStructSyncOrderApproval](~~206166~~) operation to submit the ticket for approval.
     *   **WITHOUT_APPROVE**: The schema synchronization can be performed without approval.
     *
     * @example 2
     *
     * @var int
     */
    public $tableAnalyzed;

    /**
     * @description The ID of the request.
     *
     * @example 2
     *
     * @var int
     */
    public $tableCount;
    protected $_name = [
        'DBTaskGroupId' => 'DBTaskGroupId',
        'executeCount'  => 'ExecuteCount',
        'jobStatus'     => 'JobStatus',
        'message'       => 'Message',
        'securityRule'  => 'SecurityRule',
        'sqlCount'      => 'SqlCount',
        'tableAnalyzed' => 'TableAnalyzed',
        'tableCount'    => 'TableCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->securityRule) {
            $res['SecurityRule'] = $this->securityRule;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->tableAnalyzed) {
            $res['TableAnalyzed'] = $this->tableAnalyzed;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SecurityRule'])) {
            $model->securityRule = $map['SecurityRule'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['TableAnalyzed'])) {
            $model->tableAnalyzed = $map['TableAnalyzed'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }

        return $model;
    }
}
