<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddDeletedAtToSomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('books','deleted_at')){
            Schema::table('books', function(Blueprint $table){
                $table->timestamp('deleted_at')->nullable();
            });
        }

        if(!Schema::hasColumn('users','deleted_at')){
            Schema::table('users', function(Blueprint $table){
                $table->timestamp('deleted_at')->nullable();
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

    }
}
