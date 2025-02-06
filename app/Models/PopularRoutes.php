<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PopularRoutes extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'location', 'type', 'days', 'amount', 'image'];
}
