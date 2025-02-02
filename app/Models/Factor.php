<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;
    const UNPAID = 'Unpaid';
    const PAID = 'Paid';

    const STATES = [self::PAID, self::UNPAID];
}
