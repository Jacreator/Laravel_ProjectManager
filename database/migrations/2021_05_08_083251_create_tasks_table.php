<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->timestamp('duration');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('company_id')->constrained('companies');
            $table->timestamps();
        });

        Schema::table('tasks', function (Blueprint $table) {
          // $table->foreignId('project_id')->constrained('projects');
          $table->foreignId('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
