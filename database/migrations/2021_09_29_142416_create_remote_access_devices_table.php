<?php

use App\Models\Customer;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemoteAccessDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remote_access_devices', function (Blueprint $table) {
            $table->id();
            $table->string('server_name')->nullable();
            $table->string('address')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('type')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('remote_access_devices');
    }
}
