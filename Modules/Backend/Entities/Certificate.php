<?php

namespace Modules\Backend\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';

    protected $fillable = ['course_name', 'user_id', 'date', 'certificate'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }
}
