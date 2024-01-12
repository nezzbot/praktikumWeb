<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListbeliTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listbeli_tabel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_agent')->nullable();
            $table->string('ip_address')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->integer('total_buy')->default(0);
            // Add more fields as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listbeli_tabel');
    }
}
