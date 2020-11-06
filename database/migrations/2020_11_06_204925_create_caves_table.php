<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caves', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('name_other', 300);
            $table->string('inventory_number', 15);
            $table->string('region', 150);
            $table->string('lat', 15);
            $table->string('lon', 15);
            $table->string('commune', 100);
            $table->string('District', 100);
            $table->string('Voivodeship', 100);
            $table->string('protection_basis', 100);
            $table->string('entry_exposure', 2);
            $table->string('entry_other', 20);
            $table->float('absolute_altitude');
            $table->float('relative_height');
            $table->float('depth');
            $table->float('elevation');
            $table->float('drop');
            $table->float('length');
            $table->float('horizontal_extent');
            $table->string('geographic_location');
            $table->longText('description');
            $table->longText('history_of_research');
            $table->longText('history_of_exploration');
            $table->longText('documentation_authors');
            $table->string('authors_study');
            $table->string('data_for_year');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caves');
    }
}
