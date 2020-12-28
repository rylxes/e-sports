<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class State
 * @package App\Models
 * @version December 28, 2020, 4:25 pm UTC
 *
 * @property string $name
 * @property integer $country_id
 */
class State extends Model
{

    use HasFactory;

    public $table = 'states';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'country_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:30',
        'country_id' => 'required|integer'
    ];

    
}
