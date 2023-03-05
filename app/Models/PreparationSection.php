<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreparationSection extends Model
{
    use HasFactory;
    protected $fillable=['title','sub_title','description','main_img','sub_img_one','sub_img_two','sub_img_three'];

}
