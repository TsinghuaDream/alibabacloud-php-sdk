<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\templateIdList;
use AlibabaCloud\Tea\Model;

class tagGroup extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @var templateIdList
     */
    public $templateIdList;

    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'status'                     => 'Status',
        'matchExpress'               => 'MatchExpress',
        'templateIdList'             => 'TemplateIdList',
        'dynamicTagRuleId'           => 'DynamicTagRuleId',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId'                   => 'RegionId',
        'tagKey'                     => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = null !== $this->templateIdList ? $this->templateIdList->toMap() : null;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['TemplateIdList'])) {
            $model->templateIdList = templateIdList::fromMap($map['TemplateIdList']);
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
