<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeTableRequest extends Model
{
    /**
     * @var int
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var bool
     */
    public $useFinanceModel;

    /**
     * @var bool
     */
    public $assureDirection;

    /**
     * @var bool
     */
    public $hasLine;

    /**
     * @var bool
     */
    public $skipDetection;
    protected $_name = [
        'imageType'       => 'ImageType',
        'imageURL'        => 'ImageURL',
        'outputFormat'    => 'OutputFormat',
        'useFinanceModel' => 'UseFinanceModel',
        'assureDirection' => 'AssureDirection',
        'hasLine'         => 'HasLine',
        'skipDetection'   => 'SkipDetection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->useFinanceModel) {
            $res['UseFinanceModel'] = $this->useFinanceModel;
        }
        if (null !== $this->assureDirection) {
            $res['AssureDirection'] = $this->assureDirection;
        }
        if (null !== $this->hasLine) {
            $res['HasLine'] = $this->hasLine;
        }
        if (null !== $this->skipDetection) {
            $res['SkipDetection'] = $this->skipDetection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['UseFinanceModel'])) {
            $model->useFinanceModel = $map['UseFinanceModel'];
        }
        if (isset($map['AssureDirection'])) {
            $model->assureDirection = $map['AssureDirection'];
        }
        if (isset($map['HasLine'])) {
            $model->hasLine = $map['HasLine'];
        }
        if (isset($map['SkipDetection'])) {
            $model->skipDetection = $map['SkipDetection'];
        }

        return $model;
    }
}
