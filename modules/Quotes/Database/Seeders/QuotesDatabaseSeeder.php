<?php

namespace Modules\Quotes\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuotesDatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call("Modules\Quotes\Database\Seeders\quotetemplateseeder");
        $this->call("Modules\Quotes\Database\Seeders\QuoteTemplateSettingTableSeeder");
         $this->call("Modules\Quotes\Database\Seeders\QuoteStatusTableSeeder");
        $this->call("Modules\Quotes\Database\Seeders\QuoteGlobalSettingsSeeder");
    }

}
