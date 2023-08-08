<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Advanced targeting settings for products.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.AdvancedProductTargeting</code>
 */
class AdvancedProductTargeting extends \Google\Protobuf\Internal\Message
{
    protected $advanced_targeting;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V13\Services\YouTubeSelectSettings $youtube_select_settings
     *           Settings for YouTube Select targeting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Settings for YouTube Select targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.YouTubeSelectSettings youtube_select_settings = 1;</code>
     * @return \Google\Ads\GoogleAds\V13\Services\YouTubeSelectSettings|null
     */
    public function getYoutubeSelectSettings()
    {
        return $this->readOneof(1);
    }

    public function hasYoutubeSelectSettings()
    {
        return $this->hasOneof(1);
    }

    /**
     * Settings for YouTube Select targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.YouTubeSelectSettings youtube_select_settings = 1;</code>
     * @param \Google\Ads\GoogleAds\V13\Services\YouTubeSelectSettings $var
     * @return $this
     */
    public function setYoutubeSelectSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Services\YouTubeSelectSettings::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdvancedTargeting()
    {
        return $this->whichOneof("advanced_targeting");
    }

}

