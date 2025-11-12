<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);
    
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Jakarta Timut',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_youtube',
            'label'=>'youtube',
            'value'=>'Raudha yutup',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'instagram',
            'value'=>'raudha ig',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_twiter',
            'label'=>'Tweeter',
            'value'=>'Raudha Teewter',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_Facebook',
            'label'=>'Facebook',
            'value'=>'Raudha Efbi',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website Sederhana, dengan admin fillament',
            'type'=>'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
