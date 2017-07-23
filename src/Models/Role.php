<?php

namespace Robustit\EasyRBAC\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package Robust\Admin\Models
 */
class Role extends Model
{
    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'permissions'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany('Robustit\EasyRBAC\Models\Permission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('Robustit\EasyRBAC\Models\User');
    }

}
