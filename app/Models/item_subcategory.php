<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $sub_category
 */
class item_subcategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item_subcategory';
    public $timestamps=false;

    /**
     * @var array
     */
    protected $fillable = ['sub_category'];
}
