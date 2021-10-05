<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version October 5, 2021, 7:47 am UTC
 *
 * @property string $customer
 * @property number $sales_revenue
 */
class Sales extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sales';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer',
        'sales_revenue'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer' => 'string',
        'sales_revenue' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer' => 'required|string|max:255',
        'sales_revenue' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
