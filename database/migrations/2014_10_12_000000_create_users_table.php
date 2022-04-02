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
        $tb = new App\Models\User();
        Schema::create($tb->table, function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment("Customer name");
            $table->string('email')->unique();
            $table->string("mobile")->comment("Mobile number");
            $table->boolean("avtive")->comment("User active / deactive");
            $table->integer("role")->comment("1 -> admin, 2 -> user");
            $table->string("street");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->string("pincode");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        $tb = new App\Models\User();
        Schema::dropIfExists($tb->table);
    }
};
