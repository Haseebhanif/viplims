<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('sliders')->truncate();

        \App\Models\Slider::create([
          'title'=>'Work on big ideas,<br> without the busywork.',
          'text'=>'From the small stuff to the big picture, Viplims organizes work so teams are clear what to do, why it matters, and how to get it done.',
          'status'=>1,
          'file'=>'images/slider2.jpg'
      ]);
    }
}
