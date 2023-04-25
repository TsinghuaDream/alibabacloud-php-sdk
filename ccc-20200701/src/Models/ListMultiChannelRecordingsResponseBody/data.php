<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListMultiChannelRecordingsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ch-user-8526899****-8602****-1656926504363-job-25920271311543****
     *
     * @var string
     */
    public $agentChannelId;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @example job-25920271311543****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example 56321
     *
     * @var string
     */
    public $duration;

    /**
     * @example job-25920271311543****-798f1e90-1f82-42da-914c-46580c8f4c85-1656926518491.mkv
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://ccc-v2-shanghai.oss-cn-shanghai.aliyuncs.com/ccc-test/job-25920271311543****-798f1e90-1f82-42da-914c-46580c8f4c85-1656926518491.mkv?Expires=1657014031&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 22807673106369****
     *
     * @var string
     */
    public $ramId;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example 1656926518491
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentChannelId' => 'AgentChannelId',
        'agentId'        => 'AgentId',
        'agentName'      => 'AgentName',
        'contactId'      => 'ContactId',
        'duration'       => 'Duration',
        'fileName'       => 'FileName',
        'fileUrl'        => 'FileUrl',
        'ramId'          => 'RamId',
        'skillGroupId'   => 'SkillGroupId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentChannelId) {
            $res['AgentChannelId'] = $this->agentChannelId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentChannelId'])) {
            $model->agentChannelId = $map['AgentChannelId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
