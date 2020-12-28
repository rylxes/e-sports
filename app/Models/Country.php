<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Country
 * @package App\Models
 * @version December 28, 2020, 4:25 pm UTC
 *
 * @property string $sortname
 * @property string $name
 * @property integer $phonecode
 */
class Country extends Model
{

    use HasFactory;

    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'sortname',
        'name',
        'phonecode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sortname' => 'string',
        'name' => 'string',
        'phonecode' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sortname' => 'required|string|max:3',
        'name' => 'required|string|max:150',
        'phonecode' => 'required|integer'
    ];

    
}
