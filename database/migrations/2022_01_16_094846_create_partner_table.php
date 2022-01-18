<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->bigIncrements('partner_id');
            $table->integer('user_id');
            $table->string('partner_name');
            $table->string('log_in_detail');
            $table->string('password');
            $table->string('profile_pic');
            $table->string('fb_link');
            $table->string('ing_link');
            $table->text('gen_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner');
    }
}
