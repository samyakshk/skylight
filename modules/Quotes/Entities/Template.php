<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Template extends Model {

	protected $table = 'quote_templates';
    protected $fillable = ["code","description","type"];

}