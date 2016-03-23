<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Quote_item_template_setting_profiles extends Model {

    protected $fillable = [

'id',
'quote_item_template_id_fk',
'aluminium',
'description',
'formula',
'qty_length',
'kg_meter',
'amount'



    ];

}