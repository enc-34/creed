<?php

namespace Database\Seeders;
use App\Models\ListContactBlog;
    use App\Http\Controllers\pages\ContactsList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListContactBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListContactBlog::factory()->count(1)->create();
    }
}
