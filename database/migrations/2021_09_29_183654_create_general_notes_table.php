<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_notes', function (Blueprint $table) {
            $table->id();
            $table->string('field_label')->nullable();
            $table->string('field_value')->nullable();
            $table->string('field_label2')->nullable();
            $table->string('field_value2')->nullable();
            $table->string('field_label3')->nullable();
            $table->string('field_value3')->nullable();
            $table->string('field_label4')->nullable();
            $table->string('field_value4')->nullable();
            $table->string('notes')->nullable();

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
        Schema::dropIfExists('general_notes');
    }
}
