<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(_CONTACT_TABLE_, function (Blueprint $table) {
            $table->id('Contact_id');
            $table->string('Title',50);
            $table->string('ContactPerson', 155);
            $table->string('Designation', 155);
            $table->string('CountryCode', 50);
            $table->string('Phone1', 50);
            $table->string('Phone2', 50);
            $table->string('Email1', 155);
            $table->string('Email2', 155);
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
        //
    }
}
