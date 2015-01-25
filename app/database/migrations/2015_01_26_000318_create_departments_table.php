<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('departments')) {
      Schema::create('departments', function(Blueprint $table) {
        $table->increments('id');
        // Short name of the department, eg. BCT, BAE
        $table->string('shortname',3);
        // Full name of the department
        $table->string('name',64);
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('departments');
  }

}
