<?php

namespace Robustit\EasyRBAC\Repositories\Traits;

/**
 * Class RBACTrait
 * @package Robustit\EasyRBAC\Repositories\Traits
 */
trait RBACTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('Robustit\EasyRBAC\Models\Role');
    }

    /**
     * @param $name
     * @return bool
     */
    public function isUser($name)
    {
        return ($this->name === $name)?true:false;

    }
}
