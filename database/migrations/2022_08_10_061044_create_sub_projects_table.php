<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('price');
            $table->text('address');
            $table->string('project_type')->default('commercial');
            $table->longText('description');
            $table->text('excerpt');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('order')->nullable();
            $table->string('image');   
            $table->string('payment_plan')->default('paymentplan.pdf')->nullable();
            $table->string('master_plan')->default('masterplan.pdf')->nullable();
            $table->string('floor_plan')->default('floorplan.pdf')->nullable();
            $table->string('meta_tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();   
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
        Schema::dropIfExists('sub_projects');
    }
}
