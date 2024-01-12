<?php

// app/Models/ListBeliTabel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBeliTabel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_agent',
        'ip_address',
        'voucher_id',
        'total_buy',
        // Add more fields as needed
    ];
}
