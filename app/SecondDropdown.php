<?php

namespace App;
use App\FirstDropdown;
use Illuminate\Database\Eloquent\Model;

class SecondDropdown extends Model
{
    public function first_dropdown()
    {
        return $this->belongsTo(FirstDropdown::class);
    }
}
