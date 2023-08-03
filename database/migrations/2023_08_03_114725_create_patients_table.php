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
      Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('dob');
        $table->string('id_number')->unique();
        $table->string('address');
        $table->string('county');
        $table->string('sub_county');
        $table->string('telephone');
        $table->string('email');
        $table->string('gender');
        $table->string('marital_status');
        $table->string('next_of_kin_name');
        $table->date('next_of_kin_dob');
        $table->string('next_of_kin_id_number')->unique();
        $table->string('next_of_kin_gender');
        $table->string('next_of_kin_relationship');
        $table->string('next_of_kin_telephone');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
