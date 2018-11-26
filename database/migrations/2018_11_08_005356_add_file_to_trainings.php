<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFileToTrainings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adding columns to existing table trainings
		
		//first, to create this additional migration file 
		//php artisan make:migration add_file_to_trainings
		
		Schema::table('trainings', function (Blueprint $table) {
			$table->string('filename')->nullable();
			$table->string('mime')->nullable();
			$table->string('original_filename')->nullable();
		
		});
		
		//after adding some columns definition to store filename,
		//run
		//php artisan migrate
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
