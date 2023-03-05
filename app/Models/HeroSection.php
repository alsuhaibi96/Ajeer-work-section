<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    //use fillable to for the fields
    protected $fillable=['title','description','call_now_label','know_more_label','hero_img'];
}
