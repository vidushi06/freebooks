<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewtextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewtexts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('post');
            $table->string('comment');
            $table->timestamps();
            $a->save();
            if($a){
                 return redirect('admin/add_reviewtext');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewtexts');
    }
}
