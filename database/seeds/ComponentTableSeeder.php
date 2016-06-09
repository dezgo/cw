<?php

use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $components['storage'] = [
                        ['description' => '500 GB Hard Drive',
                        'price'       => 63*1.2,
                        'speed'       => 190],
                        ['description' => '1TB Hard Drive',
                        'price'       => 68*1.2,
                        'speed'       => 190],
                        ['description' => '240GB Solid State Drive',
                        'price'       => 97*1.2,
                        'speed'       => 450],
                    ];

        $components['cpu'] = [
                         ['description' => 'Intel Core i3-6100 @ 3.7GHz',
                         'price'       => 159*1.2,
                         'speed'       => 5510],
                         ['description' => 'Intel Core i5-6500 @ 3.2GHz',
                          'price'       => 274*1.2,
                          'speed'       => 7040],
                         ['description' => 'Intel Core i7-6700 @ 3.4GHz',
                          'price'       => 434*1.2,
                          'speed'       => 9971],
                      ];

        $components['monitor'] = [
                        ['description' => 'Philips 21.5" 226V4LAB 5ms 1920x1080 Speaker',
                        'price'       => 145*1.2,
                        'speed'       => 0],
                        ['description' => 'Philips 24" 246V5LHAB 5ms 1920x1080 Speaker',
                        'price'       => 189*1.2,
                        'speed'       => 0],
                        ['description' => 'Philips 27" 273V5QHAB 1ms 1920x1080 Speaker',
                        'price'       => 259*1.2,
                        'speed'       => 0],
        ];

        $components['case'] = [
            ['description' => 'Coolermaster RC-344-SKN2 Elite RC-344 USB3.0 Case with 420W PSU',
            'price'       => 75*1.2,
            'speed'       => 0],
        ];

        $components['ram'] = [
            ['description' => '4GB',
            'price'       => 22*1.2,
            'speed'       => 0],
           ['description' => '8GB',
            'price'       => 44*1.2,
            'speed'       => 0],
           ['description' => '16GB',
            'price'       => 88*1.2,
            'speed'       => 0],
        ];

        $components['motherboard'] = [
            ['description' => 'Gigabyte H110M-H DDR4 Intel Micro ATX Motherboard',
            'price'       => 85*1.2,
            'speed'       => 0],
        ];

        $components['wireless'] = [
           ['description' => 'TP-LINK Archer T2U AC600 Wireless Dual Band USB Adapter',
            'price'       => 35*1.2,
            'speed'       => 0],
        ];

        $components['optical'] = [
           ['description' => 'DVD Read/Write',
            'price'       => 18*1.2,
            'speed'       => 0],
            ['description' => 'Blu-Ray Read/Write',
             'price'       => 83*1.2,
             'speed'       => 0],
        ];

        $components['operating_system'] = [
            ['description' => 'Microsoft Windows 10 OEM',
             'price'       => 134*1.2,
             'speed'       => 0],
        ];

        $components['office'] = [
             ['description' => 'Microsoft Office 365 2013 - 5 PCs, 1 Year',
              'price'       => 88*1.2,
              'speed'       => 0],
            ['description' => 'Microsoft Office 2013 Home & Student',
             'price'       => 115*1.2,
             'speed'       => 0],
             ['description' => 'Microsoft Office 2016 Home & Student',
              'price'       => 129*1.2,
              'speed'       => 0],
              ['description' => 'Microsoft Office 2016 Home & Business (includes Outlook)',
               'price'       => 228*1.2,
               'speed'       => 0],
        ];

        $components['antivirus'] = [
            ['description' => 'Kasperksy Total Security 1 PC, 1 Year',
             'price'       => 40,
             'speed'       => 0],
        ];

        $components['input'] = [
               ['description' => 'Logitech MK345 Wireless Keyboard / Mouse',
                'price'       => 46*1.2,
                'speed'       => 0],
        ];

        $components['build'] = [
            ['description' => 'Build PC, install operating system / drivers / updates',
              'price'       => 140,
              'speed'       => 0],
        ];

        $components['install'] = [
             ['description' => 'Transfer data, install custom software',
              'price'       => 140,
              'speed'       => 0],
        ];

        $components['onsite'] = [
             ['description' => '1 hour onsite to help setup',
              'price'       => 140,
              'speed'       => 0],
        ];

        foreach ($components as $category_name => $components_in_category) {
            $component_category = App\ComponentCategory::where('name', $category_name)->firstOrFail();
            foreach ($components_in_category as $arr_component) {
                $obj_component = new App\Component;
                $obj_component->component_category()->associate($component_category);
                $obj_component->description = $arr_component['description'];
                $obj_component->price = $arr_component['price'];
                $obj_component->speed = $arr_component['speed'];
                $obj_component->save();
            }
        }
    }
}
