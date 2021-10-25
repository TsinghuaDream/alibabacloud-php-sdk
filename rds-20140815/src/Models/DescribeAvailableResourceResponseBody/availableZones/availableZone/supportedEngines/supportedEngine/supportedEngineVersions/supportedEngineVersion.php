<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys;
use AlibabaCloud\Tea\Model;

class supportedEngineVersion extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var supportedCategorys
     */
    public $supportedCategorys;
    protected $_name = [
        'version'            => 'Version',
        'supportedCategorys' => 'SupportedCategorys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->supportedCategorys) {
            $res['SupportedCategorys'] = null !== $this->supportedCategorys ? $this->supportedCategorys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['SupportedCategorys'])) {
            $model->supportedCategorys = supportedCategorys::fromMap($map['SupportedCategorys']);
        }

        return $model;
    }
}
