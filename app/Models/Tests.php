<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attempts;


class Tests extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function attempts()
    {
        return $this->hasMany(Attempts::class, 'test_id');
    }
}
