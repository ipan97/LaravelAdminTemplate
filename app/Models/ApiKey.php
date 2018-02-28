<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $fillable = ['name', 'key', 'module'];

    protected $hidden = ['module'];

    public function findByModule($module)
    {
        return $this->where('module', $module)->get();
    }

    public function check($key, $module)
    {
        return $this->where([
                ['key', '=', $key],
                ['module', '=', $module]
            ])->count() == 1;
    }
}
