<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> foreign('employee_id', 'task-employee')->references('id')-> on('employees')->onDelete('cascade');
        });
        Schema::table('task_typology', function (Blueprint $table){
            $table -> foreign('task_id', 'tt-task')->references('id')-> on('tasks')->onDelete('cascade');
            $table -> foreign('typology_id', 'tt-typology')->references('id')-> on('typologies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_typology', function (Blueprint $table){
            $table -> dropForeign('tt-typology');
            $table -> dropForeign('tt-task');
        });
         Schema::table('tasks', function (Blueprint $table) {
            $table -> dropForeign('task-employee');        //task-employee serve solo per fare riferimento oppure potevo inserire ['employee_id']
        });
    }
}
