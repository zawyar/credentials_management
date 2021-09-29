<?php

use App\Models\Customer;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOIPUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_o_i_p_users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('extension')->nullable();
            $table->string('password')->nullable();
            $table->string('hardware')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('v_o_i_p_users');
    }
}
