<?php

use App\Models\Customer;
use App\Models\NetworkIPAddress;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWLANNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_l_a_n_networks', function (Blueprint $table) {
            $table->id();
            $table->string('ssid')->nullable();
            $table->string('password')->nullable();
            $table->foreignIdFor(NetworkIPAddress::class);
            $table->string('location')->nullable();
            $table->string('speed_limit')->nullable();
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
        Schema::dropIfExists('w_l_a_n_networks');
    }
}
