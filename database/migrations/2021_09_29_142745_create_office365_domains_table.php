<?php

use App\Models\Customer;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffice365DomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office365_domains', function (Blueprint $table) {
            $table->id();
            $table->string('notes')->unique()->nullable();
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
        Schema::dropIfExists('office365_domains');
    }
}
