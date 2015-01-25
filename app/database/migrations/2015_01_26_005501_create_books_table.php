<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('books')) {
      Schema::create('books', function(Blueprint $table) {
        $table->increments('id');
        // Selector for bookinfo
        $table->string('info_isbn',16);
        // Edition of the book
        $table->string('edition',16);
        // The user the book has been lent to and the lend date
        $table->integer('assigned_to')->unsigned()->nullable();
        $table->timestamp('assigned_date')->nullable();
        // Key constraints
        $table->foreign('info_isbn')->references('isbn')->
          on('bookinfo');
        $table->foreign('assigned_to')->references('id')->on('users');
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
    Schema::dropIfExists('books');
  }

}
