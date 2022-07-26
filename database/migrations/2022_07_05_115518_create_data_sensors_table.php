<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mongodb';
    public function up()
    {
        Schema::connection($this->connection)
        ->table('data_sensors', function (Blueprint $collection) 
        {
            $collection->int('suhu');
            $collection->string('ph');
            $collection->string('salinitas');
            $collection->string('kalmanSuhu');
            $collection->string('kalmanPh');
            $collection->string('kalmanSalinitas');
            $collection->string('tanggal');
            $collection->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sensors');
    }
}
