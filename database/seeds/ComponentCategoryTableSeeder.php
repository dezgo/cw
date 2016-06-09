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
        $categories = [
            ['antivirus',
            'Antivirus',
            'cs_antivirus_sm.png',
            false,
            'Antivirus software is subscription-based software that is installed on your
            PC to help protect it from malware and other nasties. Although Microsoft Windows 10
            does come with built-in protection with Windows Defender, it\'s a good idea
            to pay the extra for a high-quality commercial antivirus like Kaspersky.',
            ],

            ['build',
            'Build',
            'cs_build_sm.png',
            true,
            'You want your computer to come in one piece right?',
            ],

            ['case',
            'Case',
            'cs_tower_sm.png',
            true,
            'All your computer parts are stored safely inside this shiny black box.',
            ],

            ['cpu',
            'CPU',
            'cs_cpu_sm.png',
            true,
            'The brains of the operation, the CPU (Central Processing Unit) does all
            the actual \'computing\' work. It plays a
            big part in determining how fast your computer will run. Choose carefully,
            as once you\'ve picked a CPU, it won\'t be feasible to change it again until
            you get a new computer.',
            ],

            ['storage',
            'Storage',
            'cs_hard_drive_sm.png',
            true,
            'This is where all your data will be stored. You\'ll notice something odd
            in this category, you pay more for a smaller one! The reason for the extra
            cost is the speed. The smaller one is called a \'Solid State Drive\' (SSD).
            Solid State Drives work much like a USB stick. They have no moving parts
            and thus run a lot faster, generally about four times faster than an old style
            hard drive which has multiple spinning platters and an arm much like a record
            player which moves across the platter to retrieve the information. Those
            platters spin at 7,200 revolutions per minute, so they\'re still quick, but
            I digress.',
            ],

            ['input',
            'Input',
            'cs_input_sm.png',
            false,
            'Keyboard and mouse, essential gear for controlling your computer. Remember,
            newer computers often don\'t have a \'PS2\' port (or if they do, they only
            have one), which might be how your old keyboard and/or mouse connected to
            your old computer. If so,
            then you better get a new keyboard and mouse here because that old one may
            not work. If in doubt, call us and we can work it out together.'
            ],

            ['install',
            'Install',
            'cs_install_sm.png',
            false,
            'Want us to transfer your data or install anything special? Pick this and we\'ll
            get that done.',
            ],

            ['motherboard',
            'Motherboard',
            'cs_mobo_sm.png',
            true,
            'The motherboard is what everything plugs into inside that black box (the case).
            including the CPU, RAM, and drives. It\'s a must for your new computer,
            so we\'ll just pop one of those in for you OK?',
            ],

            ['monitor',
            'Monitor',
            'cs_monitor.png',
            false,
            'When choosing a monitor, things to lookout for are whether or not they have built-in
            speakers, how big the screen is, and a tricky one - the response time. Basically, the
            lower the response time, the better. It\'s how long each dot on the screen
            (a pixel) takes to respond when told to change, so the quicker the better.',
            ],

            ['onsite',
            'Onsite Setup',
            'cs_onsite_sm.png',
            false,
            'Need help getting your new computer setup at your place? Add this in
            and we\'ll sort that out for you.',
            ],

            ['optical',
            'Optical Drive',
            'cs_optical_sm.png',
            false,
            'By optical drive, we just mean a DVD, or Blu-Ray. In the old days, there
            were also plain old CD Players, but they\'re long gone now. Note, a DVD can
            read a CD, and a Blu-Ray can read both CD\'s and DVD\'s. Note this is an
            optional component as nowadays you hardly even need an optical drive as
            all software can be downloaded. Up to you.',
            ],

            ['ram',
            'RAM',
            'cs_ram_sm.png',
            true,
            'RAM stands for Random Access Memory. When your computer is running, it
            can only execute programs when they are in RAM, so it\'s constantly shifting
            data in and out of RAM to run it. Generally 8GB is a good amount of RAM
            to get. Windows will work OK with 4GB, but might need to work a bit harder
            doing all that swapping if you open lots of programs at once.',
            ],

            ['wireless',
            'Wireless card',
            'cs_wireless_card_sm.png',
            false,
            'If you won\'t have your modem next to your computer, you might need
            a wireless card to connect to the internet. If that\'s the case, be
            sure to throw this in.',
            ],

            ['operating_system',
            'Operating System (O/S)',
            'cs_software_sm.png',
            true,
            'The operating system is what runs when you first turn your computer on
            (well, after the BIOS, but that\'s another story).
            Here at Computer Whiz HQ we\'re selling Windows computers, so you\'ll need
            a copy of Windows.',
            ],

            ['office',
            'Office Suite',
            'cs_office_sm.png',
            false,
            'Do you use Word or Excel? Or do you like to access your email through
            Outlook? If you answered yes to any of the above questions, then you\'ll
            need a copy of Microsoft Office on your new computer.',
            ],
        ];

        foreach ($categories as $category) {
            $component_category = new App\ComponentCategory;
            $component_category->name = $category[0];
            $component_category->long_name = $category[1];
            $component_category->image_path = $category[2];
            $component_category->required = $category[3];
            $component_category->description = $category[4];
            $component_category->save();
        }
    }
}
