<?php

namespace Robustit\EasyRBAC\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * @package Robust\Admin\Models
 */
class Permission extends Model
{
    /**
     * @var string
     */
    protected $table = 'permissions';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('Robustit\EasyRBAC\Models\Role');
    }

}
