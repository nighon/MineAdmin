<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace App\Schema;

use App\Model\Permission\Role;
use Hyperf\Swagger\Annotation\Property;
use Hyperf\Swagger\Annotation\Schema;

#[Schema(title: 'RoleSchema')]
class RoleSchema implements \JsonSerializable
{
    #[Property(property: 'id', title: '主键', type: 'int')]
    public ?int $id;

    #[Property(property: 'name', title: '角色名称', type: 'string')]
    public ?string $name;

    #[Property(property: 'code', title: '角色代码', type: 'string')]
    public ?string $code;

    #[Property(property: 'data_scope', title: '数据范围（1：全部数据权限 2：自定义数据权限 3：本部门数据权限 4：本部门及以下数据权限 5：本人数据权限）', type: 'int')]
    public ?int $dataScope;

    #[Property(property: 'status', title: '状态 (1正常 2停用)', type: 'int')]
    public ?int $status;

    #[Property(property: 'sort', title: '排序', type: 'int')]
    public ?int $sort;

    #[Property(property: 'created_by', title: '创建者', type: 'int')]
    public ?int $createdBy;

    #[Property(property: 'updated_by', title: '更新者', type: 'int')]
    public ?int $updatedBy;

    #[Property(property: 'created_at', title: '', type: 'mixed')]
    public mixed $createdAt;

    #[Property(property: 'updated_at', title: '', type: 'mixed')]
    public mixed $updatedAt;

    #[Property(property: 'deleted_at', title: '', type: 'mixed')]
    public mixed $deletedAt;

    #[Property(property: 'remark', title: '备注', type: 'string')]
    public ?string $remark;

    public function __construct(Role $model)
    {
        $this->id = $model->id;
        $this->name = $model->name;
        $this->code = $model->code;
        $this->dataScope = $model->data_scope;
        $this->status = $model->status;
        $this->sort = $model->sort;
        $this->createdBy = $model->created_by;
        $this->updatedBy = $model->updated_by;
        $this->createdAt = $model->created_at;
        $this->updatedAt = $model->updated_at;
        $this->deletedAt = $model->deleted_at;
        $this->remark = $model->remark;
    }

    public function jsonSerialize(): mixed
    {
        return ['id' => $this->id, 'name' => $this->name, 'code' => $this->code, 'data_scope' => $this->dataScope, 'status' => $this->status, 'sort' => $this->sort, 'created_by' => $this->createdBy, 'updated_by' => $this->updatedBy, 'created_at' => $this->createdAt, 'updated_at' => $this->updatedAt, 'deleted_at' => $this->deletedAt, 'remark' => $this->remark];
    }
}
