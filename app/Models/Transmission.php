<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    const MANUAL = "Manual";
    const AUTOMATIC = "Automatic";

    use HasFactory;
}
