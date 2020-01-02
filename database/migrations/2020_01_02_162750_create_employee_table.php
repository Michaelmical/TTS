<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('emp_id');
            $table->string('last_name', 20);
            $table->string('first_name', 50);
            $table->string('middle_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->date('birthdate');
            $table->tinyInteger('pos_id');
            $table->string('status', 1);
            $table->text('image_path')->nullable();
            $table->smallInteger('grp_id')->nullable();
            $table->smallInteger('dept_id')->nullable();
            $table->smallInteger('active')->nullable();
            $table->smallInteger('div_id')->nullable();
            $table->string('shift_status', 50)->nullable();
            $table->integer('approved')->default(1);
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
        Schema::dropIfExists('employee');
    }
}
