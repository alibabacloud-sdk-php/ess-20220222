<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The volumes that are mounted on the container.
     *
     * @example 8888
     *
     * @var int
     */
    public $port;

    /**
     * @description The volumes that are mounted on the container.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port'     => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
