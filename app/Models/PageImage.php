<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use HasFactory;
    protected $fillable = ['section', 'image_path'];

    public static $sections = [
        'banner_1' => 'Banner 1',
        'banner_2' => 'Banner 2',
        'banner_3' => 'Banner 3',
        'homepage_1' => 'Homepage 1',
        // 'homepage_2' => 'Homepage 2',
        'about_1' => 'About 1',
        // 'about_2' => 'About 2',
        'breadcrumb' => 'Breadcrumb'
    ];
    
}
