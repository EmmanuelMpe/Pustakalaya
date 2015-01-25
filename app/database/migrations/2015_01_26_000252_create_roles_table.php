<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('roles')) {
      Schema::create('roles', function(Blueprint $table) {
        $table->increments('id');
        // Name of the role. One of Student, Verifier, Librarian or
        // Admin
        $table->string('name',16);
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
    Schema::dropIfExists('roles');
  }
}
