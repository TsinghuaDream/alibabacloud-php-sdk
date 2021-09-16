<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionTemplateResponseBody\detectionTemplateList;
use AlibabaCloud\Tea\Model;

class ListDetectionTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var detectionTemplateList[]
     */
    public $detectionTemplateList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'detectionTemplateList' => 'DetectionTemplateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->detectionTemplateList) {
            $res['DetectionTemplateList'] = [];
            if (null !== $this->detectionTemplateList && \is_array($this->detectionTemplateList)) {
                $n = 0;
                foreach ($this->detectionTemplateList as $item) {
                    $res['DetectionTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDetectionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DetectionTemplateList'])) {
            if (!empty($map['DetectionTemplateList'])) {
                $model->detectionTemplateList = [];
                $n                            = 0;
                foreach ($map['DetectionTemplateList'] as $item) {
                    $model->detectionTemplateList[$n++] = null !== $item ? detectionTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
