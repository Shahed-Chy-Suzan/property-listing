<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(50)->create();
        \App\Models\Media::factory(500)->create();

        //-------- for static page ---------------
            $page = new Page();
            $page->name = 'Contact Us';
            $page->slug = 'contact-us';
            $page->content = 'Lorem ipsum dolor, sit amet llam quae rem cumque aliquam';
            $page->save();

            $page = new Page();
            $page->name = 'About Us';
            $page->slug = 'about-us';
            $page->content = 'Lorem ipsum dolor, sit amet rem cumque aliquam dolorem veritatis';
            $page->save();
        //------------ or ------------------
            // Page::create([
            //     'name'  => 'Contact Us',
            //     'slug'  => 'contact-us',
            //     'content'=> 'Lorem ipsum dolor, sit amet llam quae incidunt quos dolor, totam rem cumque aliquam,'
            // ]);
            // Page::create([
            //     'name'  => 'About Us',
            //     'slug'  => 'about-us',
            //     'content'=> 'Lorem ipsum dolor, sit possimus assumenda dolorem veritatis aperiam! Necessitatibus.'
            // ]);


    }
}
