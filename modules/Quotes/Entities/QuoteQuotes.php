<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Quote_Quotes extends Model {

    protected $fillable = [

'id',
'opportunity_id_fk',
'quote_number',
'quote_option',
'revision_number',
'title',
'remarks',
'quote_status_id_fk',
'total_material_cost',
'total_fabric_install_cost',
'total_glass_cost',
'pc_unforseen',
'pc_engg_mgmt',
'pc_markup',
'pc_glass_markup',
'pc_glass_wastage',
'is_include_vat',
'sub_total',
'discount',
'pc_discount',
'sub_total_discounted',
'vat',
'grand_total',
'created_by',
'updated_by',
'deleted_by',
'deleated_at',
'opportunity_id_fk'
    ];

 public function items()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItems');
    }
}