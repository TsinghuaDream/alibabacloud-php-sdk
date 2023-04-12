<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList;
use AlibabaCloud\Tea\Model;

class evaluationResults extends Model
{
    /**
     * @description The details of the compliance evaluation result.
     *
     * @var evaluationResultList[]
     */
    public $evaluationResultList;

    /**
     * @description The maximum number of entries to return for a single request.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that was used to initiate the next request.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'evaluationResultList' => 'EvaluationResultList',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationResultList) {
            $res['EvaluationResultList'] = [];
            if (null !== $this->evaluationResultList && \is_array($this->evaluationResultList)) {
                $n = 0;
                foreach ($this->evaluationResultList as $item) {
                    $res['EvaluationResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResultList'])) {
            if (!empty($map['EvaluationResultList'])) {
                $model->evaluationResultList = [];
                $n                           = 0;
                foreach ($map['EvaluationResultList'] as $item) {
                    $model->evaluationResultList[$n++] = null !== $item ? evaluationResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
