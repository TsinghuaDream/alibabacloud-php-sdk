<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example 2
     *
     * @var string
     */
    public $age;

    /**
     * @example 2
     *
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $hotSpotAddress;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $profession;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099543201659_1/20210122/184812_PYjHiF3YkV.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $transportation;

    /**
     * @example 2021-01-25 11:38:54
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'address'        => 'Address',
        'age'            => 'Age',
        'gender'         => 'Gender',
        'hotSpotAddress' => 'HotSpotAddress',
        'personId'       => 'PersonId',
        'personType'     => 'PersonType',
        'profession'     => 'Profession',
        'sourceUrl'      => 'SourceUrl',
        'targetUrl'      => 'TargetUrl',
        'transportation' => 'Transportation',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->hotSpotAddress) {
            $res['HotSpotAddress'] = $this->hotSpotAddress;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->personType) {
            $res['PersonType'] = $this->personType;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->transportation) {
            $res['Transportation'] = $this->transportation;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['HotSpotAddress'])) {
            $model->hotSpotAddress = $map['HotSpotAddress'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PersonType'])) {
            $model->personType = $map['PersonType'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Transportation'])) {
            $model->transportation = $map['Transportation'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
