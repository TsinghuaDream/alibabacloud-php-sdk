<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BackFillShrinkRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0
     *
     * @var bool
     */
    public $asc;

    /**
     * @description The start date of the date range for the data to be backfilled. This parameter is required if you specify a date range for data backfill.
     *
     * @example 2022-01-14
     *
     * @var string
     */
    public $backFillDate;

    /**
     * @description The running sequence of task flows for data backfill. Valid values:
     *
     *   **0**: reverse chronological order.
     *   **1**: chronological order. This is the default value.
     *
     * @example 2022-01-14
     *
     * @var string
     */
    public $backFillDateBegin;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 2022-09-29
     *
     * @var string
     */
    public $backFillDateEnd;

    /**
     * @description The operation that you want to perform. Set the value to **BackFill**.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The BackFillDate parameter is required if you specify a date for data backfill.
     *
     * The BackFillDateBegin and BackFillDateEnd parameters are required if you specify a date range for data backfill.
     * @example 16***
     *
     * @var int
     */
    public $historyDagId;

    /**
     * @description Specifies whether to run descendant nodes. Default value: true.
     *
     * @example 24
     *
     * @var int
     */
    public $interval;

    /**
     * @description The error message returned if the request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $isTriggerSubTree;

    /**
     * @description The date for the data to be backfilled. This parameter is required if you specify a date for data backfill.
     *
     * @var string
     */
    public $startNodeIdsShrink;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'asc'                => 'Asc',
        'backFillDate'       => 'BackFillDate',
        'backFillDateBegin'  => 'BackFillDateBegin',
        'backFillDateEnd'    => 'BackFillDateEnd',
        'dagId'              => 'DagId',
        'historyDagId'       => 'HistoryDagId',
        'interval'           => 'Interval',
        'isTriggerSubTree'   => 'IsTriggerSubTree',
        'startNodeIdsShrink' => 'StartNodeIds',
        'tid'                => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->backFillDate) {
            $res['BackFillDate'] = $this->backFillDate;
        }
        if (null !== $this->backFillDateBegin) {
            $res['BackFillDateBegin'] = $this->backFillDateBegin;
        }
        if (null !== $this->backFillDateEnd) {
            $res['BackFillDateEnd'] = $this->backFillDateEnd;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->isTriggerSubTree) {
            $res['IsTriggerSubTree'] = $this->isTriggerSubTree;
        }
        if (null !== $this->startNodeIdsShrink) {
            $res['StartNodeIds'] = $this->startNodeIdsShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BackFillShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['BackFillDate'])) {
            $model->backFillDate = $map['BackFillDate'];
        }
        if (isset($map['BackFillDateBegin'])) {
            $model->backFillDateBegin = $map['BackFillDateBegin'];
        }
        if (isset($map['BackFillDateEnd'])) {
            $model->backFillDateEnd = $map['BackFillDateEnd'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IsTriggerSubTree'])) {
            $model->isTriggerSubTree = $map['IsTriggerSubTree'];
        }
        if (isset($map['StartNodeIds'])) {
            $model->startNodeIdsShrink = $map['StartNodeIds'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
