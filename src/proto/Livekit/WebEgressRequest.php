<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * record any website
 *
 * Generated from protobuf message <code>livekit.WebEgressRequest</code>
 */
class WebEgressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>bool audio_only = 2;</code>
     */
    protected $audio_only = false;
    /**
     * Generated from protobuf field <code>bool video_only = 3;</code>
     */
    protected $video_only = false;
    protected $output;
    protected $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *     @type bool $audio_only
     *     @type bool $video_only
     *     @type \Livekit\EncodedFileOutput $file
     *     @type \Livekit\StreamOutput $stream
     *     @type \Livekit\SegmentedFileOutput $segments
     *     @type int $preset
     *     @type \Livekit\EncodingOptions $advanced
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool audio_only = 2;</code>
     * @return bool
     */
    public function getAudioOnly()
    {
        return $this->audio_only;
    }

    /**
     * Generated from protobuf field <code>bool audio_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAudioOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->audio_only = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool video_only = 3;</code>
     * @return bool
     */
    public function getVideoOnly()
    {
        return $this->video_only;
    }

    /**
     * Generated from protobuf field <code>bool video_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setVideoOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->video_only = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodedFileOutput file = 4;</code>
     * @return \Livekit\EncodedFileOutput|null
     */
    public function getFile()
    {
        return $this->readOneof(4);
    }

    public function hasFile()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodedFileOutput file = 4;</code>
     * @param \Livekit\EncodedFileOutput $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Livekit\EncodedFileOutput::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamOutput stream = 5;</code>
     * @return \Livekit\StreamOutput|null
     */
    public function getStream()
    {
        return $this->readOneof(5);
    }

    public function hasStream()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamOutput stream = 5;</code>
     * @param \Livekit\StreamOutput $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Livekit\StreamOutput::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.SegmentedFileOutput segments = 6;</code>
     * @return \Livekit\SegmentedFileOutput|null
     */
    public function getSegments()
    {
        return $this->readOneof(6);
    }

    public function hasSegments()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.livekit.SegmentedFileOutput segments = 6;</code>
     * @param \Livekit\SegmentedFileOutput $var
     * @return $this
     */
    public function setSegments($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SegmentedFileOutput::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodingOptionsPreset preset = 7;</code>
     * @return int
     */
    public function getPreset()
    {
        return $this->readOneof(7);
    }

    public function hasPreset()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodingOptionsPreset preset = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPreset($var)
    {
        GPBUtil::checkEnum($var, \Livekit\EncodingOptionsPreset::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodingOptions advanced = 8;</code>
     * @return \Livekit\EncodingOptions|null
     */
    public function getAdvanced()
    {
        return $this->readOneof(8);
    }

    public function hasAdvanced()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodingOptions advanced = 8;</code>
     * @param \Livekit\EncodingOptions $var
     * @return $this
     */
    public function setAdvanced($var)
    {
        GPBUtil::checkMessage($var, \Livekit\EncodingOptions::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->whichOneof("output");
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->whichOneof("options");
    }

}
