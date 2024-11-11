<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponseBody\reports\details;
use AlibabaCloud\Tea\Model;

class reports extends Model
{
    /**
     * @example 2024-08-23T02:22:30Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @example Normal
     *
     * @var string
     */
    public $diagnoseStatus;

    /**
     * @example Finished
     *
     * @var string
     */
    public $processStatus;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dr-bp14p0cjp7wvjob5l6hk
     *
     * @var string
     */
    public $reportId;

    /**
     * @example asg-bp124uve5iph3*****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example 161456884*******
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'details'        => 'Details',
        'diagnoseStatus' => 'DiagnoseStatus',
        'processStatus'  => 'ProcessStatus',
        'regionId'       => 'RegionId',
        'reportId'       => 'ReportId',
        'scalingGroupId' => 'ScalingGroupId',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->diagnoseStatus) {
            $res['DiagnoseStatus'] = $this->diagnoseStatus;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DiagnoseStatus'])) {
            $model->diagnoseStatus = $map['DiagnoseStatus'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}