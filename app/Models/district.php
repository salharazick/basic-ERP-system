<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $district
 * @property string $active
 */
class district extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    public $table = 'district';
    public $timestamps=false;


    /**
     * @var array
     */
  /*  protected $fillable = ['district', 'active']; */
}
