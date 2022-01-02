<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kubun extends Model
{
    $kubun = kubun::factory()->create;

    $kubuns = Kubun::factory()->count(3)->create();
}
