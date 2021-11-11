<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Messages;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("surname");
            $table->string("phone");
            $table->string("email");
            $table->string("text");
            $table->string("country");
            $table->string("industry")->nullable();
            $table->string("company");
            $table->tinyInteger("bastion")->default(0);
            $table->tinyInteger("trustelem")->default(0);
            $table->tinyInteger("bestsafe")->default(0);
            $table->tinyInteger('agry')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
