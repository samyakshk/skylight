<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class TemplateAccessories extends Model {
    protected $table = 'quote_template_accessories';
    protected $fillable = [];
    public function price()
    {
        return $this->belongsTo('Modules\Quotes\Entities\ProductPriceRevision','accessory_id_fk');
    }
    public function details()
    {
        return $this->belongsTo('Modules\Quotes\Entities\InventoryAccessories','accessory_id_fk');
    }
}