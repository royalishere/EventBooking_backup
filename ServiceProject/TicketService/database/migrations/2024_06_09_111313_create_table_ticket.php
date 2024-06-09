<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Ticket', function (Blueprint $table) {
            $table->id();
            $table->integer('EventID');
            $table->integer('TicketAvailable');
            $table->string('TicketType');
            $table->integer('TicketPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_ticket');
    }
};
