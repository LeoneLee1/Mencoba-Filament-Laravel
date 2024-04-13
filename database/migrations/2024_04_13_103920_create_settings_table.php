<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Tawangsari, Semarang Kota, Indonesia',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/channel/UCzVlgKc4NUtDDDKvkm_8g-w',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_GitHub',
            'label' => 'GitHub',
            'value' => 'https://github.com/LeoneLee1',
            'type' => 'text',
        ]);
        
        Setting::create([
            'key' => '_Instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/me.daniel01?igsh=MzRlODBiNWFlZA==',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website Sederhana, dengan admin filament',
            'type' => 'text',
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
