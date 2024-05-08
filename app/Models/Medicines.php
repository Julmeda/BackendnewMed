<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicines';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'medicine_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_name',
        'manufacturer',
        'expirydate',
        'quantity',
        'price',
    ];
}
