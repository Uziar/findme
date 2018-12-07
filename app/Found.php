<?php

namespace App;

class Found extends Model {
    
    public function scopeApproved($query)
    {
        return $query->where('approved','=', true);
    }
    
}