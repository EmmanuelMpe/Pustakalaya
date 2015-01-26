<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentinfoTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('studentinfo')) {
      Schema::create('studentinfo', function(Blueprint $table) {
        // This is the full roll number of the student, which
        // uniquely identifies a student
        $table->string('rollnumber',16);
        $table->integer('user_id')->unsigned();
        $table->string('department_sname',3);
        // The accumulated (outstanding) fine to be paid
        $table->decimal('fineacc',7,2)->unsigned();
        // Total fine that has been paid since the beginning
        $table->decimal('finepaid',7,2)->unsigned();
        // Key constraints
        $table->primary('rollnumber');
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('department_sname')->references('shortname')->
          on('departments');
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
    Schema::dropIfExists('studentinfo');
  }

}
