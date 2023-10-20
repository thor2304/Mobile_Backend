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
        Schema::create("manufacturers", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create("transmissions", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create("fuel_types", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create("cars", function (Blueprint $table) {
            $table->id();
            $table->string("model");
            $table->foreignId("manufacturer_id")->constrained();
            $table->integer("engine_cc_size");
            $table->foreignId("fuel_type_id")->constrained();
            $table->float("price_per_day");
            $table->float("price_per_week");
            $table->integer("doors");
            $table->string("description");
            $table->foreignId("transmission_id")->constrained();
            $table->integer("wheel_size");
            $table->string("image_name");
            $table->timestamps();
        });

        Schema::table("users", function (Blueprint $table) {
            $table->string("phone_number")->unique();
            $table->string("billing_address");
        });

        Schema::create("rentals", function (Blueprint $table) {
            $table->id();
            $table->foreignId("car_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->date("start_date");
            $table->date("end_date");
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
        Schema::dropIfExists("rentals");
        Schema::dropIfExists("cars");
        Schema::dropIfExists("fuel_types");
        Schema::dropIfExists("transmissions");
        Schema::dropIfExists("manufacturers");
    }
};
