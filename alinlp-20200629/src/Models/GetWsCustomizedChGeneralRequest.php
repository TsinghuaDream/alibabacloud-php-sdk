<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetWsCustomizedChGeneralRequest extends Model
{
    /**
     * @example a
     *
     * @var string
     */
    public $outType;

    /**
     * @description This parameter is required.
     *
     * @example a
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description This parameter is required.
     *
     * @example a
     *
     * @var string
     */
    public $text;

    /**
     * @example a
     *
     * @var string
     */
    public $tokenizerId;
    protected $_name = [
        'outType'     => 'OutType',
        'serviceCode' => 'ServiceCode',
        'text'        => 'Text',
        'tokenizerId' => 'TokenizerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outType) {
            $res['OutType'] = $this->outType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->tokenizerId) {
            $res['TokenizerId'] = $this->tokenizerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWsCustomizedChGeneralRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutType'])) {
            $model->outType = $map['OutType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TokenizerId'])) {
            $model->tokenizerId = $map['TokenizerId'];
        }

        return $model;
    }
}
