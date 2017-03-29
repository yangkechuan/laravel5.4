<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\models\ApiLog
 *
 * @property int $id
 * @property string $content 单次日志内容
 * @property int $status 成功或者失败
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\models\ApiLog whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\ApiLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\ApiLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\ApiLog whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\ApiLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ApiLog extends Model
{
    public $table = 'api_log';

    protected $fillable = [
        'content','status'
    ];
}
