<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class Participant extends Model
{
    use HasFactory, HasHashid, HashidRouting;

    protected $fillable = [
        'course_id', 'lastname', 'firstname', 'date_of_birth', 'company', 'street', 'zipcode', 'location',
        'phone', 'email', 'email_reminder', 'rating', 'payee', 'participated', 'price', 'price_id', 'payed',
        'transaction_id',
    ];
}
