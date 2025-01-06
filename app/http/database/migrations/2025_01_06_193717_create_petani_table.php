<?php

Schema::create('petani', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('telepon');
    $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
    $table->text('alamat');
    $table->timestamps();
});
