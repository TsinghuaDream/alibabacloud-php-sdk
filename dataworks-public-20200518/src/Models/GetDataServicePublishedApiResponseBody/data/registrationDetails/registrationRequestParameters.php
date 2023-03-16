<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\registrationDetails;

use AlibabaCloud\Tea\Model;

class registrationRequestParameters extends Model
{
    /**
     * @description The default value.
     *
     * @example default1
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The sample value.
     *
     * @example example1
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description Indicates whether the parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $isRequiredParameter;

    /**
     * @description The data type of the parameter. Valid values: 0, 1, 2, 3, 4, and 5. The value 0 indicates the STRING data type, the value 1 indicates the INT data type, the value 2 indicates the LONG data type, the value 3 indicates the FLOAT data type, the value 4 indicates the DOUBLE data type, and the value 5 indicates the BOOLEAN data type.
     *
     * @example 0
     *
     * @var int
     */
    public $parameterDataType;

    /**
     * @description The description.
     *
     * @example description1
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example name1
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The operator used for the value of the parameter. Valid values: 0, 1, 2, and 3. The value 0 indicates that the operator is Equal, the value 1 indicates that the operator is Like, the value 2 indicates that the operator is Const, and the value 3 indicates that the operator is In. APIs generated in wizard mode support the Equal, Like, and In operators. APIs generated in script mode support the Equal operator. APIs generated by registration support the Equal and Const operators.
     *
     * @example 0
     *
     * @var int
     */
    public $parameterOperator;

    /**
     * @description The position of the parameter. Valid values: 0, 1, 2, and 3. The value 0 indicates that the parameter is in the URL path of the request, the value 1 indicates that the parameter is in the Query parameter of the request URL, the value 2 indicates that the parameter is in the request header, and the value 3 indicates that the parameter is in the request body. APIs generated in wizard or script mode support only the Query position. APIs generated by registration whose request method is GET or DELETE support the Query and Head positions. APIs generated by registration whose request method is PUT or POST support the Query, Head, and Body positions.
     *
     * @example 0
     *
     * @var int
     */
    public $parameterPosition;
    protected $_name = [
        'defaultValue'         => 'DefaultValue',
        'exampleValue'         => 'ExampleValue',
        'isRequiredParameter'  => 'IsRequiredParameter',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterOperator'    => 'ParameterOperator',
        'parameterPosition'    => 'ParameterPosition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->isRequiredParameter) {
            $res['IsRequiredParameter'] = $this->isRequiredParameter;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterOperator) {
            $res['ParameterOperator'] = $this->parameterOperator;
        }
        if (null !== $this->parameterPosition) {
            $res['ParameterPosition'] = $this->parameterPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrationRequestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['IsRequiredParameter'])) {
            $model->isRequiredParameter = $map['IsRequiredParameter'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterOperator'])) {
            $model->parameterOperator = $map['ParameterOperator'];
        }
        if (isset($map['ParameterPosition'])) {
            $model->parameterPosition = $map['ParameterPosition'];
        }

        return $model;
    }
}
