<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateScenarioRequest extends Model
{
    /**
     * @description The description of the business scenario.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the business scenario.
     *
     * @example 12***
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @description The name of the business scenario.
     *
     * @var string
     */
    public $scenarioName;

    /**
     * @description The ID of the tenant.
     *
     * >  The ID of the tenant is displayed when you move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the ["View information about the current tenant"](~~181330~~) section of the Manage DMS tenants topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'description'  => 'Description',
        'scenarioId'   => 'ScenarioId',
        'scenarioName' => 'ScenarioName',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
