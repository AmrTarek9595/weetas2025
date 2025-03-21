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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('referance_id')->nullable()->unique();
            $table->string('type');
            $table->string('rentOrSale');
            $table->mediumText('title_en');
            $table->mediumText('title_ar');
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->double('price', 15, 2);
            $table->string('area')->nullable();
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->string('category_en')->nullable();
            $table->string('category_ar')->nullable();


            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');


            $table->string('google_maps')->nullable();
            $table->boolean('published')->default(0)->comment('0 => not published, 1 => published');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
