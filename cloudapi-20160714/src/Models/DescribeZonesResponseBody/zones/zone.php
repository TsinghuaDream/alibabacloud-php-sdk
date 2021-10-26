<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $localName;
    protected $_name = [
        'zoneId'    => 'ZoneId',
        'localName' => 'LocalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        return $model;
    }
}
