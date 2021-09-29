<?php

use App\Models\Customer;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkSwitchesAndFirewallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_switches_and_firewalls', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('admin')->nullable();
            $table->string('username')->nullable();
            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('network_switches_and_firewalls');
    }
}
