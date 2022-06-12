<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title_before_name', 30)->nullable();
            $table->string('name', 30);
            $table->string('surname', 30);
            $table->string('title_after_name', 30)->nullable();
            $table->date('date_of_birth');
            $table->string('birth_number');
            $table->decimal('deposit', 20, 2);
            $table->decimal('company_share', 5, 2);
            $table->decimal('deposit_amount', 20, 2);
            $table->char('sex', 1);
            $table->string('nationality', 30);
            $table->string('identity_document', 20);
            $table->string('identity_document_number', 20);
            $table->boolean('is_partner')->default(0);;
            $table->boolean('is_executive_manager')->default(0);;
            $table->boolean('is_capital_administrator')->default(0);;
            $table->boolean('is_residence_owner')->default(0);;
            $table->boolean('is_ro_company')->default(0);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
};
