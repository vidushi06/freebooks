<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuimages', function (Blueprint $table) {
            $table->id();
            $table->string('ititle');
            $table->string('isubtitle');
            $table->string('iprice');
            $table->string('image');
            $table->timestamps();
            $a->save();
            if($a){
                return redirect('admin/add_menuimage');
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
        Schema::dropIfExists('menuimages');
    }
}
