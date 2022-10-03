<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
        ]);

        Listings::create([
            'user_id' => '1',
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company_name' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listings::create([
            'user_id' => '1',
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company_name' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listings::create([
            'user_id' => '1',
            'title' => 'Backend Developer',
            'tags' => 'laravel, php, api',
            'company_name' => 'Skynet Systems',
            'location' => 'Newark, NJ',
            'email' => 'email4@email.com',
            'website' => 'https://www.skynet.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listings::create([
            'user_id' => '1',
            'title' => 'Junior Developer',
            'tags' => 'laravel, php, javascript',
            'company_name' => 'Wonka Industries',
            'location' => 'Boston, MA',
            'email' => 'email4@email.com',
            'website' => 'https://www.wonka.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listings::factory(5)->create([
            'user_id' => $user->id,
        ]);
    }
}
