<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers;

use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    /**
     * @description The container startup commands. You can specify up to 20 commands. Each command can contain up to 256 characters.
     *
     * @example path
     *
     * @var string
     */
    public $fieldRefFieldPath;

    /**
     * @description > This parameter is unavailable.
     *
     * @example PATH
     *
     * @var string
     */
    public $key;

    /**
     * @description The container startup commands. You can specify up to 20 commands. Each command can contain up to 256 characters.
     *
     * @example /usr/bin/
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldRefFieldPath' => 'FieldRefFieldPath',
        'key'               => 'Key',
        'value'             => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldRefFieldPath) {
            $res['FieldRefFieldPath'] = $this->fieldRefFieldPath;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentVars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldRefFieldPath'])) {
            $model->fieldRefFieldPath = $map['FieldRefFieldPath'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
