<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByDeviceResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByDeviceResponseBody\data\templateInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 5b60bf0dd55944c19d7817442bc9****
     *
     * @var string
     */
    public $planId;

    /**
     * @example 693e244a038f4255bb2f5db32874****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var templateInfo
     */
    public $templateInfo;
    protected $_name = [
        'name'         => 'Name',
        'planId'       => 'PlanId',
        'templateId'   => 'TemplateId',
        'templateInfo' => 'TemplateInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateInfo) {
            $res['TemplateInfo'] = null !== $this->templateInfo ? $this->templateInfo->toMap() : null;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateInfo'])) {
            $model->templateInfo = templateInfo::fromMap($map['TemplateInfo']);
        }

        return $model;
    }
}
