<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $contact_no
 * @property string $district
 */
class customer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    
    public $table = 'customer';
    public $timestamps=false;

    /**
     * @var array
     */
   /* public $fillable = ['title', 'first_name', 'middle_name', 'last_name', 'contact_no', 'district']; */
}
