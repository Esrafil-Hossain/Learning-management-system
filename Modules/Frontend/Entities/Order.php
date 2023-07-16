<?php

namespace Modules\Frontend\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Backend\Entities\Course;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = ['name', 'user_id', 'course_id', 'email', 'payment_method', 'account_no', 'transaction', 'status'];
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');

    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }
}
