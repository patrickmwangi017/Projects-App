<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tests;

class Attempts extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public function username() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function testname() {
    return $this->belongsTo(Tests::class, 'test_id');
    }
}
