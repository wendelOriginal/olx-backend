<?php

use App\Models\Category;
use App\Models\State;
use App\Models\User;
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
        Schema::create('advertases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price');
            $table->boolean('isNegotiable');
            $table->text('description')->nullable();
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(State::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertases');
    }
};
