<?php

namespace Modules\Backend\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Frontend\Entities\Order;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'duration', 'question', 'answer', 'certificate', 'status'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }
    
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');

    }
}
