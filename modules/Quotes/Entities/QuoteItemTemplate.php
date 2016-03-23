<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Quote_item_template extends Model {

    protected $fillable = [
'id',
'quote_item_id_fk',
'template_code',
'template_type',
'material_cost',
'fabrication_cost',
'glass_cost'

    ];

 public function itemstemplate()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemTemplateSetting');
    }
     public function itemstemplateprofile()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemTemplateSettingProfile');
    }
}