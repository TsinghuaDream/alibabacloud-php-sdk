<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePostpayTrafficTotalResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 826B6280-9704-5643-97B1-6B47AC3F027A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the assets that are protected by the Internet firewall.
     *
     * @example 132
     *
     * @var int
     */
    public $totalAssets;

    /**
     * @description The total number of the assets that are protected by the NAT firewall.
     *
     * @example 1
     *
     * @var int
     */
    public $totalNatAssets;

    /**
     * @description The total traffic for the NAT firewall. Unit: bytes.
     *
     * @example 560646279
     *
     * @var int
     */
    public $totalNatTraffic;

    /**
     * @description The total traffic for the Internet firewall. Unit: bytes.
     *
     * @example 2320274874426
     *
     * @var int
     */
    public $totalTraffic;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalAssets'     => 'TotalAssets',
        'totalNatAssets'  => 'TotalNatAssets',
        'totalNatTraffic' => 'TotalNatTraffic',
        'totalTraffic'    => 'TotalTraffic',
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
        if (null !== $this->totalAssets) {
            $res['TotalAssets'] = $this->totalAssets;
        }
        if (null !== $this->totalNatAssets) {
            $res['TotalNatAssets'] = $this->totalNatAssets;
        }
        if (null !== $this->totalNatTraffic) {
            $res['TotalNatTraffic'] = $this->totalNatTraffic;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostpayTrafficTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalAssets'])) {
            $model->totalAssets = $map['TotalAssets'];
        }
        if (isset($map['TotalNatAssets'])) {
            $model->totalNatAssets = $map['TotalNatAssets'];
        }
        if (isset($map['TotalNatTraffic'])) {
            $model->totalNatTraffic = $map['TotalNatTraffic'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }

        return $model;
    }
}
