<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainingJobRequest extends Model
{
    /**
     * @description 关联算法Id。
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 关联运营活动Id。
     *
     * @var string
     */
    public $campaignId;

    /**
     * @description 训练数据路径。
     *
     * @var string
     */
    public $dataPath;

    /**
     * @description 训练任务名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 备注。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 用户配置。
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'algorithm'  => 'Algorithm',
        'campaignId' => 'CampaignId',
        'dataPath'   => 'DataPath',
        'name'       => 'Name',
        'remark'     => 'Remark',
        'userConfig' => 'UserConfig',
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
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        return $model;
    }
}
