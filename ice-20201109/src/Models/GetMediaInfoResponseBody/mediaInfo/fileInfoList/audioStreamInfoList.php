<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class audioStreamInfoList extends Model
{
    /**
     * @description 音频流序号
     *
     * @var string
     */
    public $index;

    /**
     * @description 编码格式简述名
     *
     * @var string
     */
    public $codecName;

    /**
     * @description 编码格式长述名
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description 编码时基
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description 编码格式标记文本
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description 编码格式标记
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description 编码预置
     *
     * @var string
     */
    public $profile;

    /**
     * @description 采样格式
     *
     * @var string
     */
    public $sampleFmt;

    /**
     * @description 采样率
     *
     * @var string
     */
    public $sampleRate;

    /**
     * @description 声道数
     *
     * @var string
     */
    public $channels;

    /**
     * @description 声道输出样式
     *
     * @var string
     */
    public $channelLayout;

    /**
     * @description 时基
     *
     * @var string
     */
    public $timebase;

    /**
     * @description 起始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 码率
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 音频帧率
     *
     * @var string
     */
    public $fps;

    /**
     * @description 总帧数
     *
     * @var string
     */
    public $numFrames;

    /**
     * @description 语言
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'index'          => 'Index',
        'codecName'      => 'CodecName',
        'codecLongName'  => 'CodecLongName',
        'codecTimeBase'  => 'CodecTimeBase',
        'codecTagString' => 'CodecTagString',
        'codecTag'       => 'CodecTag',
        'profile'        => 'Profile',
        'sampleFmt'      => 'SampleFmt',
        'sampleRate'     => 'SampleRate',
        'channels'       => 'Channels',
        'channelLayout'  => 'ChannelLayout',
        'timebase'       => 'Timebase',
        'startTime'      => 'StartTime',
        'duration'       => 'Duration',
        'bitrate'        => 'Bitrate',
        'fps'            => 'Fps',
        'numFrames'      => 'NumFrames',
        'lang'           => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->sampleFmt) {
            $res['SampleFmt'] = $this->sampleFmt;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->channelLayout) {
            $res['ChannelLayout'] = $this->channelLayout;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->numFrames) {
            $res['NumFrames'] = $this->numFrames;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioStreamInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['SampleFmt'])) {
            $model->sampleFmt = $map['SampleFmt'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['ChannelLayout'])) {
            $model->channelLayout = $map['ChannelLayout'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['NumFrames'])) {
            $model->numFrames = $map['NumFrames'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
