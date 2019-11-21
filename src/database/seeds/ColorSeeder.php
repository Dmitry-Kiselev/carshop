<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = $this->getColors();
        $colors->each(function(string $color) {
            $data = [
                'name' => \Illuminate\Support\Str::slug($color),
                'title' => $color,
            ];
            \App\Models\Color::updateOrCreate(\Illuminate\Support\Arr::only($data, ['name']), $data);
        });
    }

    private function getColors(): \Illuminate\Support\Collection
    {
        return collect([
            'Blue',
            'Black',
            'White',
            'Yellow',
        ]);
    }
}
