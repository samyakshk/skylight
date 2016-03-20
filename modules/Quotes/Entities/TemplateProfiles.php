<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class TemplateProfiles extends Model {
    protected $table='quote_template_profiles';
    protected $fillable = ["quote_template_id_fk","profile_id_fk","formula","is_fly_screen"];
    public function sections()
    {
        return $this->belongsTo('Modules\Quotes\Entities\InventorySections','profile_id_fk');
    }
}