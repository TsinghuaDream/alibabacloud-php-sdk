<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTrainingJobsResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTrainingJobsResponseBody\data\trainingJobs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var trainingJobs[]
     */
    public $trainingJobs;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'trainingJobs' => 'TrainingJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trainingJobs) {
            $res['TrainingJobs'] = [];
            if (null !== $this->trainingJobs && \is_array($this->trainingJobs)) {
                $n = 0;
                foreach ($this->trainingJobs as $item) {
                    $res['TrainingJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrainingJobs'])) {
            if (!empty($map['TrainingJobs'])) {
                $model->trainingJobs = [];
                $n                   = 0;
                foreach ($map['TrainingJobs'] as $item) {
                    $model->trainingJobs[$n++] = null !== $item ? trainingJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
