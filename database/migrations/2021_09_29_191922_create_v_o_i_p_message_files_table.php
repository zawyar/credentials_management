<?php

use App\Models\Customer;
use App\Models\VOIPMessage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOIPMessageFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_o_i_p_message_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_path')->nullable();
            $table->foreignIdFor(VOIPMessage::class);
            $table->foreignIdFor(Customer::class);
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
        Schema::dropIfExists('v_o_i_p_message_files');
    }
}
