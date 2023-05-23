<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListCampaignsResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListCampaignsResponseBody\data\campaigns;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 运营活动列表。
     *
     * @var campaigns[]
     */
    public $campaigns;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总运营活动数量。
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'campaigns'  => 'Campaigns',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaigns) {
            $res['Campaigns'] = [];
            if (null !== $this->campaigns && \is_array($this->campaigns)) {
                $n = 0;
                foreach ($this->campaigns as $item) {
                    $res['Campaigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Campaigns'])) {
            if (!empty($map['Campaigns'])) {
                $model->campaigns = [];
                $n                = 0;
                foreach ($map['Campaigns'] as $item) {
                    $model->campaigns[$n++] = null !== $item ? campaigns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
