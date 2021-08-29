<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isNull;

class MenuItem extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menu()
    {
        return $this->hasMany(static::class, 'parent_id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMenu()
    {
        return $this->menu()->with('subMenu');

    }
}
