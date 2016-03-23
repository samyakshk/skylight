<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Quote_items extends Model {

    protected $fillable = [
'id',
'quote_id',
'item_number',
'description',
'size',
'quantity',
'unit_price',
'total',
'total_material_cost',
'total_fabrication_cost',
'total_glass_cost'

    ];
   
 public function itemstemplate()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemTemplate');
    }
     public function itemsnotes()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemNotes');
    }

     public function itemsstatushistory()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemStatusHistory');
    }
}