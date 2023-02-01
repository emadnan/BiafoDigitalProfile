<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = [
            'Photography',
            'Music',
            'Travel',
            'Food',
            'Fitness',
            'Technology',
            'Nature',
            'Arts',
            'Sports',
            'Reading',
            'Movies',
            'Games',
            'Crafts',
            'Pets',
            'Volunteering',
            'Collecting',
            'Cooking',
            'Dancing',
            'Drawing',
            'Fashion',
            'Gardening',
            'Golf',
            'Hiking',
            'Hunting',
            'Photography',
            'Scuba Diving',
            'Skiing',
            'Snowboarding',
            'Surfing',
            'Swimming',
            'Tennis',
            'Theater',
            'Writing',
            'Yoga',
            'Astrology',
            'Astronomy',
            'Fishing',
            'History',
            'Investing',
            'Meditation',
            'Painting',
            'Puzzles',
            'Quilting',
            'Racing',
            'Scrapbooking',
            'Sewing',
            'Tattoos',
            'Vehicle Restoration',
            'Woodworking',
            'Coin Collecting',
            'Stamp Collecting',
            'Bird Watching',
            'Camping',
            'Canyoneering',
            'Climbing',
            'Horseback Riding',
            'Rock Collecting',
            'Metal Detecting',
            'Geocaching',
            'Ghost Hunting',
            'Graffiti Art',
            'Parkour',
        ];

        foreach ($interests as $interest) {
            DB::table('interests')->insert([
                'interest_name' => $interest
            ]);
        }
    }
}
