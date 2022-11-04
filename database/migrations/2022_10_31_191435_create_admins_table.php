<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->string('email', 20);
            $table->string('password', 30);
            $table->bigInteger('rols_id')->unsigned()->index()->nullable();
            $table->foreign('rols_id')->references('id')->on('rols')->onDelete('cascade');
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
        Schema::table('admins', function(Blueprint $table)
        {
        $table->dropForeign('rols_id');
        });
    }
};
