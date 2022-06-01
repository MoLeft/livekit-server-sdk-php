<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.EgressInfo</code>
 */
class EgressInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     */
    protected $egress_id = '';
    /**
     * Generated from protobuf field <code>string room_id = 2;</code>
     */
    protected $room_id = '';
    /**
     * Generated from protobuf field <code>.livekit.EgressStatus status = 3;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>int64 started_at = 10;</code>
     */
    protected $started_at = 0;
    /**
     * Generated from protobuf field <code>int64 ended_at = 11;</code>
     */
    protected $ended_at = 0;
    /**
     * Generated from protobuf field <code>string error = 9;</code>
     */
    protected $error = '';
    protected $request;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $egress_id
     *     @type string $room_id
     *     @type int $status
     *     @type int|string $started_at
     *     @type int|string $ended_at
     *     @type string $error
     *     @type \Livekit\RoomCompositeEgressRequest $room_composite
     *     @type \Livekit\TrackCompositeEgressRequest $track_composite
     *     @type \Livekit\TrackEgressRequest $track
     *     @type \Livekit\StreamInfoList $stream
     *     @type \Livekit\FileInfo $file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     * @return string
     */
    public function getEgressId()
    {
        return $this->egress_id;
    }

    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEgressId($var)
    {
        GPBUtil::checkString($var, True);
        $this->egress_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string room_id = 2;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>string room_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.EgressStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.livekit.EgressStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Livekit\EgressStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 started_at = 10;</code>
     * @return int|string
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * Generated from protobuf field <code>int64 started_at = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ended_at = 11;</code>
     * @return int|string
     */
    public function getEndedAt()
    {
        return $this->ended_at;
    }

    /**
     * Generated from protobuf field <code>int64 ended_at = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->ended_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 9;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.RoomCompositeEgressRequest room_composite = 4;</code>
     * @return \Livekit\RoomCompositeEgressRequest|null
     */
    public function getRoomComposite()
    {
        return $this->readOneof(4);
    }

    public function hasRoomComposite()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.livekit.RoomCompositeEgressRequest room_composite = 4;</code>
     * @param \Livekit\RoomCompositeEgressRequest $var
     * @return $this
     */
    public function setRoomComposite($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RoomCompositeEgressRequest::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackCompositeEgressRequest track_composite = 5;</code>
     * @return \Livekit\TrackCompositeEgressRequest|null
     */
    public function getTrackComposite()
    {
        return $this->readOneof(5);
    }

    public function hasTrackComposite()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackCompositeEgressRequest track_composite = 5;</code>
     * @param \Livekit\TrackCompositeEgressRequest $var
     * @return $this
     */
    public function setTrackComposite($var)
    {
        GPBUtil::checkMessage($var, \Livekit\TrackCompositeEgressRequest::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackEgressRequest track = 6;</code>
     * @return \Livekit\TrackEgressRequest|null
     */
    public function getTrack()
    {
        return $this->readOneof(6);
    }

    public function hasTrack()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackEgressRequest track = 6;</code>
     * @param \Livekit\TrackEgressRequest $var
     * @return $this
     */
    public function setTrack($var)
    {
        GPBUtil::checkMessage($var, \Livekit\TrackEgressRequest::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamInfoList stream = 7;</code>
     * @return \Livekit\StreamInfoList|null
     */
    public function getStream()
    {
        return $this->readOneof(7);
    }

    public function hasStream()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamInfoList stream = 7;</code>
     * @param \Livekit\StreamInfoList $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Livekit\StreamInfoList::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.FileInfo file = 8;</code>
     * @return \Livekit\FileInfo|null
     */
    public function getFile()
    {
        return $this->readOneof(8);
    }

    public function hasFile()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.livekit.FileInfo file = 8;</code>
     * @param \Livekit\FileInfo $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Livekit\FileInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}
