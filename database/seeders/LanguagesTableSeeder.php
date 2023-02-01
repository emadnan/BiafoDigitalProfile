<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $languages = [
            'English',
            'Spanish',
            'Mandarin',
            'Hindi',
            'Arabic',
            'Portuguese',
            'Bengali',
            'Russian',
            'Japanese',
            'German',
            'French',
            'Italian',
            'Korean',
            'Polish',
            'Urdu',
            'Turkish',
            'Vietnamese',
            'Dutch',
            'Persian',
            'Swedish',
            'Malay',
            'Thai',
            'Indonesian',
            'Marathi',
            'Gujarati',
            'Norwegian',
            'Punjabi',
            'Tamil',
            'Telugu',
            'Romanian',
            'Czech',
            'Hungarian',
            'Ukrainian',
            'Danish',
            'Slovak',
            'Bulgarian',
            'Finnish',
            'Greek',
            'Serbo-Croatian',
            'Hebrew',
            'Haitian Creole',
            'Icelandic',
            'Lithuanian',
            'Croatian',
            'Latvian',
            'Estonian',
            'Javanese',
            'Catalan',
            'Basque',
            'Slovenian',
            'Galician',
            'Afrikaans',
            'Swahili',
            'Saraiki'
        ];

        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'language_name' => $language
            ]);
        }
    }
}
