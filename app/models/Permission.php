<?php
/**
 * Created by PhpStorm.
 * User: ykc
 * Date: 17/3/27
 * Time: 下午4:18
 */

namespace App\models;


use Zizaco\Entrust\EntrustPermission;

/**
 * App\models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\models\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends EntrustPermission
{

}