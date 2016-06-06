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

        $components['storage'] = ['image_path' => 'cs_hard_drive_sm.png',
                                  'parts' => [
                        ['id'          => 1,
                        'description' => '500 GB Hard Drive',
                        'price'       => 63*1.2,
                        'speed'       => 190,
                        'max_speed'   => 450],
                        ['id'          => 2,
                        'description' => '1TB Hard Drive',
                        'price'       => 68*1.2,
                        'speed'       => 190,
                        'max_speed'   => 450],
                        ['id'          => 3,
                        'description' => '240GB Solid State Drive',
                        'price'       => 97*1.2,
                        'speed'       => 450,
                        'max_speed'   => 450],
        ]];
        $components['cpu'] = ['image_path' => 'cs_cpu_sm.png',
                                  'parts' => [
                        ['id'          => 1,
                         'description' => 'Intel Core i3-6100 @ 3.7GHz',
                         'price'       => 159*1.2,
                         'speed'       => 5510,
                         'max_speed'   => 9971],
                         ['id'          => 2,
                          'description' => 'Intel Core i5-6500 @ 3.2GHz',
                          'price'       => 274*1.2,
                          'speed'       => 7040,
                          'max_speed'   => 9971],
                          ['id'          => 3,
                           'description' => 'Intel Core i7-6700 @ 3.4GHz',
                           'price'       => 434*1.2,
                           'speed'       => 9971,
                           'max_speed'   => 9971],
        ]];
        $components['monitor'] = ['image_path' => 'cs_monitor.png',
                                  'parts' => [
           ['id'          => 0,
            'description' => 'Skip',
            'price'       => 0,
            'speed'       => 0,
            'max_speed'   => 0],
           ['id'          => 2,
            'description' => 'Philips 21.5" 226V4LAB 5ms 1920x1080 Speaker',
            'price'       => 145*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
           ['id'          => 3,
            'description' => 'Philips 24" 246V5LHAB 5ms 1920x1080 Speaker',
            'price'       => 189*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
           ['id'          => 4,
            'description' => 'Philips 27" 273V5QHAB 1ms 1920x1080 Speaker',
            'price'       => 259*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
        ]];

        $components['case'] = ['image_path' => 'cs_tower_sm.png',
                                  'parts' => [
           ['id'          => 1,
            'description' => 'Coolermaster RC-344-SKN2 Elite RC-344 USB3.0 Case with 420W PSU',
            'price'       => 75*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
        ]];

        $components['ram'] = ['image_path' => 'cs_ram_sm.png',
                                  'parts' => [
           ['id'          => 1,
            'description' => '4GB',
            'price'       => 22*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
           ['id'          => 2,
            'description' => '8GB',
            'price'       => 44*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
           ['id'          => 3,
            'description' => '16GB',
            'price'       => 88*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
        ]];

        $components['motherboard'] = ['image_path' => 'cs_mobo_sm.png',
                                  'parts' => [
           ['id'          => 1,
            'description' => 'Gigabyte H110M-H DDR4 Intel Micro ATX Motherboard',
            'price'       => 85*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
        ]];

        $components['wireless'] = ['image_path' => 'cs_wireless_card_sm.png',
                                  'parts' => [
            ['id'          => 0,
             'description' => 'Skip',
             'price'       => 0,
             'speed'       => 0,
             'max_speed'   => 0],
           ['id'          => 2,
            'description' => 'TP-LINK Archer T2U AC600 Wireless Dual Band USB Adapter',
            'price'       => 35*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
        ]];

        $components['optical'] = ['image_path' => 'cs_optical_sm.png',
                                  'parts' => [
            ['id'          => 0,
             'description' => 'Skip',
             'price'       => 0,
             'speed'       => 0,
             'max_speed'   => 0],
           ['id'          => 2,
            'description' => 'DVD Read/Write',
            'price'       => 18*1.2,
            'speed'       => 0,
            'max_speed'   => 0],
            ['id'          => 3,
             'description' => 'Blu-Ray Read/Write',
             'price'       => 83*1.2,
             'speed'       => 0,
             'max_speed'   => 0],
        ]];

        $components['operating_system'] = ['image_path' => 'cs_software_sm.png',
                                  'parts' => [
            ['id'          => 1,
             'description' => 'Microsoft Windows 10 OEM',
             'price'       => 134*1.2,
             'speed'       => 0,
             'max_speed'   => 0],
        ]];

        $components['office'] = ['image_path' => 'cs_office_sm.png',
                                  'parts' => [
            ['id'          => 0,
             'description' => 'Skip',
             'price'       => 0,
             'speed'       => 0,
             'max_speed'   => 0],
             ['id'          => 2,
              'description' => 'Microsoft Office 365 2013 - 5 PCs, 1 Year',
              'price'       => 88*1.2,
              'speed'       => 0,
              'max_speed'   => 0],
            ['id'          => 3,
             'description' => 'Microsoft Office 2013 Home & Student',
             'price'       => 115*1.2,
             'speed'       => 0,
             'max_speed'   => 0],
             ['id'          => 4,
              'description' => 'Microsoft Office 2016 Home & Student',
              'price'       => 129*1.2,
              'speed'       => 0,
              'max_speed'   => 0],
              ['id'          => 5,
               'description' => 'Microsoft Office 2016 Home & Business (includes Outlook)',
               'price'       => 228*1.2,
               'speed'       => 0,
               'max_speed'   => 0],
        ]];

        $components['antivirus'] = ['image_path' => 'cs_antivirus_sm.png',
                                  'parts' => [
              ['id'          => 0,
               'description' => 'Skip',
               'price'       => 0,
               'speed'       => 0,
               'max_speed'   => 0],
            ['id'          => 2,
             'description' => 'Kasperksy Total Security 1 PC, 1 Year',
             'price'       => 40,
             'speed'       => 0,
             'max_speed'   => 0],
        ]];

        $components['input'] = ['image_path' => 'cs_input_sm.png',
            'parts' => [
              ['id'          => 0,
               'description' => 'Skip',
               'price'       => 0,
               'speed'       => 0,
               'max_speed'   => 0],
               ['id'          => 2,
                'description' => 'Logitech MK345 Wireless Keyboard / Mouse',
                'price'       => 46*1.2,
                'speed'       => 0,
                'max_speed'   => 0],
        ]];

        $components['build'] = ['image_path' => 'cs_build_sm.png',
                                  'parts' => [
             ['id'          => 1,
              'description' => 'Build PC, install operating system / drivers / updates',
              'price'       => 140,
              'speed'       => 0,
              'max_speed'   => 0],
        ]];

        $components['install'] = ['image_path' => 'cs_install_sm.png',
                                  'parts' => [
            ['id'          => 0,
             'description' => 'Skip',
             'price'       => 0,
             'speed'       => 0,
             'max_speed'   => 0],
             ['id'          => 2,
              'description' => 'Transfer data, install custom software',
              'price'       => 140,
              'speed'       => 0,
              'max_speed'   => 0],
        ]];

        $components['onsite'] = ['image_path' => 'cs_onsite_sm.png',
                                  'parts' => [
              ['id'          => 0,
               'description' => 'Skip',
               'price'       => 0,
               'speed'       => 0,
               'max_speed'   => 0],
             ['id'          => 2,
              'description' => '1 hour onsite to help setup',
              'price'       => 140,
              'speed'       => 0,
              'max_speed'   => 0],
        ]];
    }
}
