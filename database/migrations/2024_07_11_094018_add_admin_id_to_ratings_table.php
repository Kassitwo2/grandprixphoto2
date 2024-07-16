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
        Schema::table('ratings', function (Blueprint $table) {
            $table->bigInteger('admin_id')->unsigned()->nullable()->default(null);
    
            // Uncomment the foreign key constraint after fixing existing data
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropColumn('admin_id');
        });
    }
};
