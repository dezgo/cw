<?php

use Illuminate\Database\Seeder;

class ComponentCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'antivirus',
            'build',
            'cpu',
            'storage',
            'input',
            'install',
            'motherboard',
            'monitor',
            'onsite',
            'optical',
            'ram',
            'tower',
            'wireless',
            'operating_system',
            'office',
        ];

        $descriptions = [
            'Antivirus',
            'Build',
            'CPU',
            'Storage',
            'Input',
            'Install',
            'Motherboard',
            'Monitor',
            'Onsite Setup',
            'Optical Drive',
            'RAM',
            'Tower',
            'Wireless card',
            'Operating System (O/S)',
            'Office Suite',
        ];

        $image_paths = [
            'cs_antivirus_sm.png',
            'cs_build_sm.png',
            'cs_cpu_sm.png',
            'cs_hard_drive_sm.png',
            'cs_input_sm.png',
            'cs_install_sm.png',
            'cs_mobo_sm.png',
            'cs_monitor.png',
            'cs_onsite_sm.png',
            'cs_optical_sm.png',
            'cs_ram_sm.png',
            'cs_tower_sm.png',
            'cs_wireless_card_sm.png',
            'cs_software_sm.png',
            'cs_office_sm.png',
        ];

        for ($i = 0; $i < count($image_paths); $i++) {
            $component_category = new App\ComponentCategory;
            $component_category->name = $names[$i];
            $component_category->description = $descriptions[$i];
            $component_category->image_path = $image_paths[$i];
            $component_category->save();
        }
    }
}
