<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $item_code
 * @property string $item_category
 * @property string $item_subcategory
 * @property string $item_name
 * @property string $quantity
 * @property string $unit_price
 */
class item extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item';
    public $timestamps=false;

    /**
     * @var array
     */
    protected $fillable = ['item_code', 'item_category', 'item_subcategory', 'item_name', 'quantity', 'unit_price'];
}
