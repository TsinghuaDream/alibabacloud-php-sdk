<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 11286
     *
     * @var float
     */
    public $bps;

    /**
     * @example 11286111
     *
     * @var float
     */
    public $dynamicHttpBps;

    /**
     * @example 12312
     *
     * @var float
     */
    public $dynamicHttpsBps;

    /**
     * @example 123
     *
     * @var float
     */
    public $staticHttpBps;

    /**
     * @example 123
     *
     * @var float
     */
    public $staticHttpsBps;

    /**
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bps'             => 'Bps',
        'dynamicHttpBps'  => 'DynamicHttpBps',
        'dynamicHttpsBps' => 'DynamicHttpsBps',
        'staticHttpBps'   => 'StaticHttpBps',
        'staticHttpsBps'  => 'StaticHttpsBps',
        'timeStamp'       => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->dynamicHttpBps) {
            $res['DynamicHttpBps'] = $this->dynamicHttpBps;
        }
        if (null !== $this->dynamicHttpsBps) {
            $res['DynamicHttpsBps'] = $this->dynamicHttpsBps;
        }
        if (null !== $this->staticHttpBps) {
            $res['StaticHttpBps'] = $this->staticHttpBps;
        }
        if (null !== $this->staticHttpsBps) {
            $res['StaticHttpsBps'] = $this->staticHttpsBps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DynamicHttpBps'])) {
            $model->dynamicHttpBps = $map['DynamicHttpBps'];
        }
        if (isset($map['DynamicHttpsBps'])) {
            $model->dynamicHttpsBps = $map['DynamicHttpsBps'];
        }
        if (isset($map['StaticHttpBps'])) {
            $model->staticHttpBps = $map['StaticHttpBps'];
        }
        if (isset($map['StaticHttpsBps'])) {
            $model->staticHttpsBps = $map['StaticHttpsBps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
