<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAccessariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_accessaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cate_accessaries_id')->unsigned()->nullable();
            $table->foreign('cate_accessaries_id')->references('id')->on('cate_accessaries')->onDelete('cascade');
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
        Schema::dropIfExists('company_accessaries');
    }
}
