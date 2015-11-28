<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoilerplatesTable extends Migration
{
    public function up()
    {
        Schema::create('boilerplates',function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            // Uncomment this if you want to link user ids to your users table
            //$table->foreign ( 'user_id' )->references ( 'id' )->on ( 'users' );
        });
    }

    public function down()
    {
        // Uncomment this when you linked to user id to users table
        /*Schema::table('boilerplates', function (Blueprint $table) {
            $table->dropForeign ( 'boilerplates_user_id_foreign' );
        });*/

        Schema::drop('boilerplates');
    }

}