<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';

    protected $fillable = ['name', 'email', 'phone', 'answer'];
    

}
