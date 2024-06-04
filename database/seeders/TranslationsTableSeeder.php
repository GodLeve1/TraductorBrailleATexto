<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsTableSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            ['character' => 'a', 'braille' => '⠁'],
            ['character' => 'b', 'braille' => '⠃'],
            ['character' => 'c', 'braille' => '⠉'],
            ['character' => 'd', 'braille' => '⠙'],
            ['character' => 'e', 'braille' => '⠑'],
            ['character' => 'f', 'braille' => '⠋'],
            ['character' => 'g', 'braille' => '⠛'],
            ['character' => 'h', 'braille' => '⠓'],
            ['character' => 'i', 'braille' => '⠊'],
            ['character' => 'j', 'braille' => '⠚'],
            ['character' => 'k', 'braille' => '⠅'],
            ['character' => 'l', 'braille' => '⠇'],
            ['character' => 'm', 'braille' => '⠍'],
            ['character' => 'n', 'braille' => '⠝'],
            ['character' => 'o', 'braille' => '⠕'],
            ['character' => 'p', 'braille' => '⠏'],
            ['character' => 'q', 'braille' => '⠟'],
            ['character' => 'r', 'braille' => '⠗'],
            ['character' => 's', 'braille' => '⠎'],
            ['character' => 't', 'braille' => '⠞'],
            ['character' => 'u', 'braille' => '⠥'],
            ['character' => 'v', 'braille' => '⠧'],
            ['character' => 'w', 'braille' => '⠺'],
            ['character' => 'x', 'braille' => '⠭'],
            ['character' => 'y', 'braille' => '⠽'],
            ['character' => 'z', 'braille' => '⠵'],
            ['character' => ' ', 'braille' => '  '],
            // Números
            ['character' => '1', 'braille' => '⠁'],
            ['character' => '2', 'braille' => '⠃'],
            ['character' => '3', 'braille' => '⠉'],
            ['character' => '4', 'braille' => '⠙'],
            ['character' => '5', 'braille' => '⠑'],
            ['character' => '6', 'braille' => '⠋'],
            ['character' => '7', 'braille' => '⠛'],
            ['character' => '8', 'braille' => '⠓'],
            ['character' => '9', 'braille' => '⠊'],
            ['character' => '0', 'braille' => '⠚'],
            // Símbolos
            ['character' => '.', 'braille' => '⠲'],
            ['character' => ',', 'braille' => '⠂'],
            ['character' => ';', 'braille' => '⠆'],
            ['character' => ':', 'braille' => '⠒'],
            ['character' => '!', 'braille' => '⠖'],
            ['character' => '?', 'braille' => '⠦'],
            ['character' => '(', 'braille' => '⠶'],
            ['character' => ')', 'braille' => '⠶'],
            ['character' => '-', 'braille' => '⠤'],
            ['character' => '/', 'braille' => '⠌'],
            ['character' => '@', 'braille' => '⠈⠁'],
            ['character' => '#', 'braille' => '⠼'],
            ['character' => '&', 'braille' => '⠯'],
            ['character' => '*', 'braille' => '⠡'],
            ['character' => '"', 'braille' => '⠐⠦'],
            ['character' => "'", 'braille' => '⠄'],
            ['character' => '=', 'braille' => '⠿'],
            ['character' => '+', 'braille' => '⠐⠖'],
            ['character' => '<', 'braille' => '⠐⠶'],
            ['character' => '>', 'braille' => '⠰⠶'],
            ['character' => '$', 'braille' => '⠈⠎'],
            ['character' => '%', 'braille' => '⠨⠴'],
            ['character' => '^', 'braille' => '⠘⠡'],
            ['character' => '_', 'braille' => '⠤'],
            ['character' => '[', 'braille' => '⠨⠶'],
            ['character' => ']', 'braille' => '⠨⠶'],
            ['character' => '{', 'braille' => '⠦⠶'],
            ['character' => '}', 'braille' => '⠶⠦'],
            ['character' => '\\', 'braille' => '⠸⠌'],
            ['character' => '|', 'braille' => '⠸⠶'],
            ['character' => '~', 'braille' => '⠘⠹'],
            ['character' => '`', 'braille' => '⠐'],
        ];

        DB::table('translations')->insert($translations);
    }
}
