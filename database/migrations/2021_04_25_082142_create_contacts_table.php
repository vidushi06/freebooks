<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
            $table->string('location');
            $table->string('aboutus');
            $table->string('address');
            $table->string('phonesec');
            $table->string('emailsec');
            $table->string('monday');
            $table->string('tuewed');
            $table->string('satsun');
            $table->timestamps();
            $a->save(){
                return redirect('admin/contact_info');
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
        Schema::dropIfExists('contacts');
    }
}
