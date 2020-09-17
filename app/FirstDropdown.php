<?php

namespace App;
use App\SecondDropdown;
use Illuminate\Database\Eloquent\Model;

class FirstDropdown extends Model
{
    public function second_dropdown()
    {
        return $this->hasMany(SecondDropdown::class);
    }
}
