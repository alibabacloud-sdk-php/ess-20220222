<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest\desiredConfiguration;
use AlibabaCloud\Tea\Model;

class StartInstanceRefreshRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var desiredConfiguration
     */
    public $desiredConfiguration;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxHealthyPercentage;

    /**
     * @example 80
     *
     * @var int
     */
    public $minHealthyPercentage;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description This parameter is required.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'desiredConfiguration' => 'DesiredConfiguration',
        'maxHealthyPercentage' => 'MaxHealthyPercentage',
        'minHealthyPercentage' => 'MinHealthyPercentage',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->desiredConfiguration) {
            $res['DesiredConfiguration'] = null !== $this->desiredConfiguration ? $this->desiredConfiguration->toMap() : null;
        }
        if (null !== $this->maxHealthyPercentage) {
            $res['MaxHealthyPercentage'] = $this->maxHealthyPercentage;
        }
        if (null !== $this->minHealthyPercentage) {
            $res['MinHealthyPercentage'] = $this->minHealthyPercentage;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRefreshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DesiredConfiguration'])) {
            $model->desiredConfiguration = desiredConfiguration::fromMap($map['DesiredConfiguration']);
        }
        if (isset($map['MaxHealthyPercentage'])) {
            $model->maxHealthyPercentage = $map['MaxHealthyPercentage'];
        }
        if (isset($map['MinHealthyPercentage'])) {
            $model->minHealthyPercentage = $map['MinHealthyPercentage'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}