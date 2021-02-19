<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('childcategory_id')->nullable();
            $table->string('title');
            $table->text('summery')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price');
            $table->integer('discount')->nullable();
            $table->string('discount_type', 15)->nullable();
            $table->string('feature_image')->nullable();
            $table->string('level')->nullable();
            $table->string('tags')->nullable();
            $table->integer('views')->default(0);
            $table->integer('avg_ratting')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('status', 10)->default('active');
            $table->tinyInteger('approved')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
