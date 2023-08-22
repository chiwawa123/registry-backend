<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    
    protected $primaryKey='testimonial_id';
    protected $table = 'tbl_testimonial';
    public $timestamps = false;

    protected $fillable =[
        'testimonial_id',
        'topic_id',
        'date_posted',
        'image',
        'description',
        'student_name',
    ];

}
