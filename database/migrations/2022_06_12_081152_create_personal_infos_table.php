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
            $table->string('title_before_name')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('title_after_name')->nullable();
            $table->string('birth_number');
            $table->decimal('deposit', 20, 2);
            $table->decimal('company_share', 5, 2);
            $table->decimal('deposit_amount', 20, 2);
            $table->char('sex', 1);
            $table->string('nationality', 30);
            $table->string('identity_document', 20);
            $table->string('identity_document_number', 20);
            $table->string('nationality', 30);
            $table->boolean('is_partner');
            $table->boolean('is_executive_manager');
            $table->boolean('is_capital_administrator');
            $table->boolean('is_residence_owner');
            $table->boolean('is_ro_company');
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
