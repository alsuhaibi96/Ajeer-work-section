<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricingPackages extends Model
{
    use HasFactory;
    protected $fillable=['title','price','currency','period','feature_one','feature_two','feature_three','feature_four','feature_five','feature_six','subscribe_label'];

}
