<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ResumeSingleCardRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @example ["111******6826","11*******6827"]
     *
     * @var string[]
     */
    public $optMsisdns;
    protected $_name = [
        'iccid'      => 'Iccid',
        'optMsisdns' => 'OptMsisdns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->optMsisdns) {
            $res['OptMsisdns'] = $this->optMsisdns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeSingleCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['OptMsisdns'])) {
            if (!empty($map['OptMsisdns'])) {
                $model->optMsisdns = $map['OptMsisdns'];
            }
        }

        return $model;
    }
}
