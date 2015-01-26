<?php

class BookinfoTableSeeder extends Seeder {

  // Run the bookinfo table seeds
  public function run() {
    DB::table('bookinfo')->delete();

    BookInfo::create(array('isbn'=>'978-81-317-0070-9','name'=>
      'Computer System Architecture','author'=>'M. Morris Mano',
      'publisher'=>'Pearson','type_name'=>'Lendable'));
    BookInfo::create(array('isbn'=>'978-81-7808-794-4','name'=>
      'Computer Graphics, C Version','author'=>
      'Donald Hearn, M. Pauline Baker','publisher'=>'Pearson',
      'type_name'=>'Lendable'));
    BookInfo::create(array('isbn'=>'978-0-099-49409-4','name'=>
      'Kafka on the Shore','author'=>'Haruki Murakami',
      'publisher'=>'Vintage Books','type_name'=>'NonLendable'));
    BookInfo::create(array('isbn'=>'978-0-19-567168-6','name'=>
      'Wuthering Heights','author'=>'Emily Bronte',
      'publisher'=>'Oxford UP','type_name'=>'Reference'));
  }
}
