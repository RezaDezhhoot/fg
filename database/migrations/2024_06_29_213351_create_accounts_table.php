<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('fg_depot')->default(false);
            $table->string('telegram_id')->nullable();
            $table->decimal('amount',40);
            $table->text('image');
            $table->text('gallery')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->index();
            $table->foreignId('user_id')->index();
            $table->string('status');
            $table->integer('views')->default(0);
            $table->string('admin_description')->nullable();

            $table->string('seo_keywords');
            $table->string('seo_description');

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
        Schema::dropIfExists('accounts');
    }
}
