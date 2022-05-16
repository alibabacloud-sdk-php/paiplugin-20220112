<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @description 关联算法，人群来源为算法。
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。
     *
     * @var string
     */
    public $column;

    /**
     * @description 过滤条件，人群来源为MaxCompute时可指定。
     *
     * @var string
     */
    public $filter;

    /**
     * @description 预测任务Id，人群来源为算法。
     *
     * @var string
     */
    public $inferenceJobId;

    /**
     * @description 人群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否包含手机号，包含手机号的人群可用于触达计划。
     *
     * @var bool
     */
    public $phoneNumber;

    /**
     * @description MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。
     *
     * @var string
     */
    public $project;

    /**
     * @description 人群备注。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 人群来源。
     * - 4: 算法。
     * @var int
     */
    public $source;

    /**
     * @description MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。
     *
     * @var string
     */
    public $table;

    /**
     * @description 文本，人群来源为文本时需指定。
     *
     * @var string
     */
    public $text;

    /**
     * @description 文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'column'         => 'Column',
        'filter'         => 'Filter',
        'inferenceJobId' => 'InferenceJobId',
        'name'           => 'Name',
        'phoneNumber'    => 'PhoneNumber',
        'project'        => 'Project',
        'remark'         => 'Remark',
        'source'         => 'Source',
        'table'          => 'Table',
        'text'           => 'Text',
        'uri'            => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->inferenceJobId) {
            $res['InferenceJobId'] = $this->inferenceJobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InferenceJobId'])) {
            $model->inferenceJobId = $map['InferenceJobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
