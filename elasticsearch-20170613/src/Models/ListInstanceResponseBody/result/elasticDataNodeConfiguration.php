<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class elasticDataNodeConfiguration extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $amount;

    /**
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @example true
     *
     * @var bool
     */
    public $diskEncryption;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @example elasticsearch.sn2ne.large
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'amount'         => 'amount',
        'disk'           => 'disk',
        'diskEncryption' => 'diskEncryption',
        'diskType'       => 'diskType',
        'spec'           => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskEncryption) {
            $res['diskEncryption'] = $this->diskEncryption;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticDataNodeConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskEncryption'])) {
            $model->diskEncryption = $map['diskEncryption'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
