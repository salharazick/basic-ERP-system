<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $category
 */
class item_category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item_category';
    public $timestamps=false;

    /**
     * @var array
     */
    protected $fillable = ['category'];
}
