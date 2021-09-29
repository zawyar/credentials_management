<?php

use App\Models\Customer;
use App\Models\NetworkIPAddress;
use App\Models\NetworkSwitchesAndFirewalls;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOIPSwitchesAndFirewallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_o_i_p_switches_and_firewalls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NetworkIPAddress::class);
            $table->foreignIdFor(NetworkSwitchesAndFirewalls::class);
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
        Schema::dropIfExists('v_o_i_p_switches_and_firewalls');
    }
}
