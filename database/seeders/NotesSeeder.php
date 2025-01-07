<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'title' => 'Title A',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis efficitur odio eget commodo. Nam a turpis nec lectus feugiat aliquet. Vivamus sem mi, mollis a magna ac, rhoncus tempus elit. Phasellus pharetra purus a suscipit pharetra. Suspendisse ac rhoncus nulla. Donec porta tortor sit amet tellus porttitor, et pharetra nunc fermentum. Quisque posuere imperdiet tristique. Aliquam erat volutpat. Sed eget nibh orci.',
            'user_id' => User::all()->random()->id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('notes')->insert([
            'title' => 'Title B',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis efficitur odio eget commodo. Nam a turpis nec lectus feugiat aliquet. Vivamus sem mi, mollis a magna ac, rhoncus tempus elit. Phasellus pharetra purus a suscipit pharetra. Suspendisse ac rhoncus nulla. Donec porta tortor sit amet tellus porttitor, et pharetra nunc fermentum. Quisque posuere imperdiet tristique. Aliquam erat volutpat. Sed eget nibh orci.',
            'user_id' => User::all()->random()->id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('notes')->insert([
            'title' => 'Title C',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis efficitur odio eget commodo. Nam a turpis nec lectus feugiat aliquet. Vivamus sem mi, mollis a magna ac, rhoncus tempus elit. Phasellus pharetra purus a suscipit pharetra. Suspendisse ac rhoncus nulla. Donec porta tortor sit amet tellus porttitor, et pharetra nunc fermentum. Quisque posuere imperdiet tristique. Aliquam erat volutpat. Sed eget nibh orci.',
            'user_id' => User::all()->random()->id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('notes')->insert([
            'title' => 'Title D',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis efficitur odio eget commodo. Nam a turpis nec lectus feugiat aliquet. Vivamus sem mi, mollis a magna ac, rhoncus tempus elit. Phasellus pharetra purus a suscipit pharetra. Suspendisse ac rhoncus nulla. Donec porta tortor sit amet tellus porttitor, et pharetra nunc fermentum. Quisque posuere imperdiet tristique. Aliquam erat volutpat. Sed eget nibh orci.',
            'user_id' => User::all()->random()->id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('notes')->insert([
            'title' => 'Title E',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis efficitur odio eget commodo. Nam a turpis nec lectus feugiat aliquet. Vivamus sem mi, mollis a magna ac, rhoncus tempus elit. Phasellus pharetra purus a suscipit pharetra. Suspendisse ac rhoncus nulla. Donec porta tortor sit amet tellus porttitor, et pharetra nunc fermentum. Quisque posuere imperdiet tristique. Aliquam erat volutpat. Sed eget nibh orci.',
            'user_id' => User::all()->random()->id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
