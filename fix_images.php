<?php

use Illuminate\Support\Facades\DB;

// Use locally hosted fairy string lights image - guaranteed to show correctly
DB::table('products')
    ->where('name', 'Bohemian Fairy String Lights')
    ->update([
        'image_path' => '/images/masterpiece/fairy_string_lights.png',
        'updated_at' => now(),
    ]);

$p = DB::table('products')->where('name', 'Bohemian Fairy String Lights')->first();
echo "Updated: " . $p->name . PHP_EOL;
echo "Image:   " . $p->image_path . PHP_EOL;
