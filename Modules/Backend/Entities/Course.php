<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Frontend\Entities\Order;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable = ['course_name', 'course_details', 'price', 'instructor','thumnainImage', 'material'];
    

    public function orders()
    {
        return $this->hasMany(Order::class,'id', 'course_id');

    }
}
