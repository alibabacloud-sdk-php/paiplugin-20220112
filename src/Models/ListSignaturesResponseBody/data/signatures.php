<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesResponseBody\data;

use AlibabaCloud\Tea\Model;

class signatures extends Model
{
    /**
     * @description 创建时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 签名Id。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $id;

    /**
     * @description 签名名称。
     *
     * @example 用户增长
     *
     * @var string
     */
    public $name;

    /**
     * @description 签名审核状态。
     * - 2：审核不通过。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'id'          => 'Id',
        'name'        => 'Name',
        'status'      => 'Status',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
