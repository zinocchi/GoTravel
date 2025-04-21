<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('things_to_do', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->string('location')->nullable();
    $table->decimal('price', 10, 2)->nullable();
    $table->string('image')->nullable();
    $table->timestamps();
});
