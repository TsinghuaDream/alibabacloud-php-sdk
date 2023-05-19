<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeSavingsPlansCoverageDetailRequest extends Model
{
    /**
     * @description The status code.
     *
     * @example 123745698925000
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The time granularity at which coverage details are queried. Valid values: MONTH, DAY, and HOUR.
     *
     * @example 2021-08-09 00:00:00
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @description The ID of the account for which you want to query coverage details. If you do not set this parameter, the data of the current Alibaba Cloud account and its RAM users is queried. To query the data of a RAM user, specify the ID of the RAM user.
     *
     * @example 300
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results. You do not need to set this parameter if you query coverage details within a specific time range for the first time. The response returns a token that you can use to query coverage details that are displayed on the next page. If a null value is returned for the NextToken parameter, no more coverage details can be queried.
     *
     * @example DAY
     *
     * @var string
     */
    public $periodType;

    /**
     * @description The end of the time range to query. The end is excluded from the time range. If you do not set this parameter, the end time is the current time. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2021-07-15 13:40:45
     *
     * @var string
     */
    public $startPeriod;

    /**
     * @description The maximum number of entries to return. Default value: 20. Maximum value: 300.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'billOwnerId' => 'BillOwnerId',
        'endPeriod'   => 'EndPeriod',
        'maxResults'  => 'MaxResults',
        'periodType'  => 'PeriodType',
        'startPeriod' => 'StartPeriod',
        'token'       => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSavingsPlansCoverageDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
