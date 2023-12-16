<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HotelMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(_HOTEL_MASTER_, function (Blueprint $table) {
            $table->id();
            $table->string('HotelName',50);
            $table->string('HotelCode', 155);
            $table->string('HotelCategory', 155);
            $table->string('HotelCountry', 50);
            $table->string('HotelState', 50);
            $table->string('HotelCity', 50);
            $table->string('HotelType', 155);
            $table->string('HotelPinCode', 155);
            $table->string('HotelAddress', 155);
            $table->string('HotelLink', 155);
            $table->string('HotelLocation', 155);
            $table->string('HotelGSTN', 155);
            $table->string('HotelWeekend', 155);
            $table->string('CheckIn', 155);
            $table->string('CheckOut', 155);
            $table->string('HotelInfo', 155);
            $table->string('HotelPolicy', 155);
            $table->string('HotelT&C', 155);
            $table->string('HotelAmenties', 155);
            $table->string('HotelRoomType', 155);
            $table->string('HotelStatus', 155);
            $table->string('HotelChain', 155);
            $table->unsignedBigInteger('Contact_id');
            $table->foreign('Contact_id')->references('Contact_id')->on(_CONTACT_TABLE_);
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
