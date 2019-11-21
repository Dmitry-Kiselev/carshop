<?php

use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = $this->getManufacturers();
        $manufacturers->each(function(string $manufacturer) {
            $data = [
                'name' => \Illuminate\Support\Str::slug($manufacturer),
                'title' => $manufacturer,
            ];
            \App\Models\Manufacturer::updateOrCreate(\Illuminate\Support\Arr::only($data, ['name']), $data);
        });
    }

    private function getManufacturers(): \Illuminate\Support\Collection
    {
        return collect([
            'Honda',
            'BMW',
            'Ford',
            'Renault',
            'Mercedes',
        ]);
    }
}
