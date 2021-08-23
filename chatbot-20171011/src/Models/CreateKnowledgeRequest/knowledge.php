<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge\outlines;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge\simQuestions;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge\solutions;
use AlibabaCloud\Tea\Model;

class knowledge extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $knowledgeTitle;

    /**
     * @var int
     */
    public $knowledgeType;

    /**
     * @var solutions[]
     */
    public $solutions;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var simQuestions[]
     */
    public $simQuestions;
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'knowledgeTitle' => 'KnowledgeTitle',
        'knowledgeType'  => 'KnowledgeType',
        'solutions'      => 'Solutions',
        'startDate'      => 'StartDate',
        'endDate'        => 'EndDate',
        'outlines'       => 'Outlines',
        'simQuestions'   => 'SimQuestions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->knowledgeTitle) {
            $res['KnowledgeTitle'] = $this->knowledgeTitle;
        }
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }
        if (null !== $this->solutions) {
            $res['Solutions'] = [];
            if (null !== $this->solutions && \is_array($this->solutions)) {
                $n = 0;
                foreach ($this->solutions as $item) {
                    $res['Solutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->simQuestions) {
            $res['SimQuestions'] = [];
            if (null !== $this->simQuestions && \is_array($this->simQuestions)) {
                $n = 0;
                foreach ($this->simQuestions as $item) {
                    $res['SimQuestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return knowledge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['KnowledgeTitle'])) {
            $model->knowledgeTitle = $map['KnowledgeTitle'];
        }
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }
        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = [];
                $n                = 0;
                foreach ($map['Solutions'] as $item) {
                    $model->solutions[$n++] = null !== $item ? solutions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n               = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SimQuestions'])) {
            if (!empty($map['SimQuestions'])) {
                $model->simQuestions = [];
                $n                   = 0;
                foreach ($map['SimQuestions'] as $item) {
                    $model->simQuestions[$n++] = null !== $item ? simQuestions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
