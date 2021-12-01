<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->text('requirement')->nullable();
            $table->string('estimatedBudget')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->enum('status', ['In Progress', 'Order Generated', 'On Hold', 'Cancelled', 'Not Eligible'])->default('In Progress');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('leads');
    }
}
