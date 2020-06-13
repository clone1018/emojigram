<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostcards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcards', function (Blueprint $table) {
            $table->increments('id');

            $table->string('link');
            $table->string('status');

            $table->string('emojis');
            $table->string('front_color', 7);
            $table->string('back_color', 7);

            $table->string('email');

            $table->string('to_name');
            $table->string('to_address');
            $table->string('to_address2')->nullable();
            $table->string('to_city');
            $table->string('to_state');
            $table->string('to_zip');
            $table->string('to_country');

            $table->string('from_name');

            $table->string('message', 255)->default('');

            $table->string('img_path')->nullable();
            $table->string('lob_id')->nullable();
            $table->string('stripe_id')->nullable();

            $table->decimal('amount_paid')->default(0.00);

            $table->timestamps();
        });


        Schema::create('promo_codes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code')->unique();
            $table->decimal('discount');
            $table->string('description');
            $table->integer('used');
            $table->integer('limit');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('promo_code_usages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('postcard_id')->unsigned();
            $table->integer('promo_code_id')->unsigned();

            $table->timestamps();

            $table->foreign('postcard_id')->references('id')->on('postcards');
            $table->foreign('promo_code_id')->references('id')->on('promo_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('postcards');
        Schema::drop('promo_code_usages');
        Schema::drop('promo_codes');
    }
}
