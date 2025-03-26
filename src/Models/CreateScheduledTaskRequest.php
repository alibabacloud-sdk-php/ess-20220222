<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduledTaskRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $desiredCapacity;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scheduledAction;

    /**
     * @var string
     */
    public $scheduledTaskName;

    /**
     * @var bool
     */
    public $taskEnabled;
    protected $_name = [
        'description' => 'Description',
        'desiredCapacity' => 'DesiredCapacity',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime' => 'LaunchTime',
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'recurrenceEndTime' => 'RecurrenceEndTime',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'scheduledAction' => 'ScheduledAction',
        'scheduledTaskName' => 'ScheduledTaskName',
        'taskEnabled' => 'TaskEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }

        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }

        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
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

        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }

        if (null !== $this->scheduledTaskName) {
            $res['ScheduledTaskName'] = $this->scheduledTaskName;
        }

        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }

        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }

        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
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

        if (isset($map['ScheduledAction'])) {
            $model->scheduledAction = $map['ScheduledAction'];
        }

        if (isset($map['ScheduledTaskName'])) {
            $model->scheduledTaskName = $map['ScheduledTaskName'];
        }

        if (isset($map['TaskEnabled'])) {
            $model->taskEnabled = $map['TaskEnabled'];
        }

        return $model;
    }
}
