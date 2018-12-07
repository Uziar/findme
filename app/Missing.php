<?php

namespace App;

class Missing extends Model
{
    public function scopeApproved($query)
    {
        return $query->where('approved','=', true);
    }
}
