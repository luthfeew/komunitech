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
        Schema::create('community_users', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['owner', 'admin', 'member'])->default('member');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('community_users', function (Blueprint $table) {
            $table->foreignId('community_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('community_users');
    }
};
