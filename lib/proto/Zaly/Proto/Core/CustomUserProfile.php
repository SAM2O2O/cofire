<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/user.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.CustomUserProfile</code>
 */
class CustomUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     *phone/name/age
     *
     * Generated from protobuf field <code>string customKey = 1;</code>
     */
    private $customKey = '';
    /**
     *1881178/sam/female
     *
     * Generated from protobuf field <code>string customValue = 2;</code>
     */
    private $customValue = '';
    /**
     *
     * Generated from protobuf field <code>string customName = 3;</code>
     */
    private $customName = '';

    public function __construct() {
        \GPBMetadata\Core\User::initOnce();
        parent::__construct();
    }

    /**
     *phone/name/age
     *
     * Generated from protobuf field <code>string customKey = 1;</code>
     * @return string
     */
    public function getCustomKey()
    {
        return $this->customKey;
    }

    /**
     *phone/name/age
     *
     * Generated from protobuf field <code>string customKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->customKey = $var;

        return $this;
    }

    /**
     *1881178/sam/female
     *
     * Generated from protobuf field <code>string customValue = 2;</code>
     * @return string
     */
    public function getCustomValue()
    {
        return $this->customValue;
    }

    /**
     *1881178/sam/female
     *
     * Generated from protobuf field <code>string customValue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->customValue = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>string customName = 3;</code>
     * @return string
     */
    public function getCustomName()
    {
        return $this->customName;
    }

    /**
     *
     * Generated from protobuf field <code>string customName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomName($var)
    {
        GPBUtil::checkString($var, True);
        $this->customName = $var;

        return $this;
    }

}
