<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $allowedIps;

    /**
     * @var string
     */
    public $defaultDomain;

    /**
     * @var string
     */
    public $errorPath;

    /**
     * @var string
     */
    public $historyModePath;

    /**
     * @var string
     */
    public $indexPath;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'allowedIps'      => 'AllowedIps',
        'defaultDomain'   => 'DefaultDomain',
        'errorPath'       => 'ErrorPath',
        'historyModePath' => 'HistoryModePath',
        'indexPath'       => 'IndexPath',
        'spaceId'         => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedIps) {
            $res['AllowedIps'] = $this->allowedIps;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->errorPath) {
            $res['ErrorPath'] = $this->errorPath;
        }
        if (null !== $this->historyModePath) {
            $res['HistoryModePath'] = $this->historyModePath;
        }
        if (null !== $this->indexPath) {
            $res['IndexPath'] = $this->indexPath;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedIps'])) {
            $model->allowedIps = $map['AllowedIps'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['ErrorPath'])) {
            $model->errorPath = $map['ErrorPath'];
        }
        if (isset($map['HistoryModePath'])) {
            $model->historyModePath = $map['HistoryModePath'];
        }
        if (isset($map['IndexPath'])) {
            $model->indexPath = $map['IndexPath'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
