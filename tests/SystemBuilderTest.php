<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\ComponentCategory;

class SystemBuilderTest extends TestCase
{
    public function testBasicSelection()
    {
        $this->visit('/services/systems');

        $component_categories = ComponentCategory::all();
        foreach ($component_categories as $component_category) {
            $component = $component_category->components[0];
            $this->select($component->id, 'opt'.$component_category->name);
        }

        $this->press('btnNext');

        foreach ($component_categories as $component_category) {
            $component = $component_category->components[0];
            $this->see($component->description);
        }

        $this->press('btnSend')
            ->see(trans('validation.required', ['attribute' => 'name']))
            ->see(trans('validation.required', ['attribute' => 'email']))
            ->see(trans('validation.required', ['attribute' => 'phone']));
    }

    /**
     * @group email
     */
    public function testSendOrder()
    {
        $this->visit('/services/systems');

        $component_categories = ComponentCategory::all();
        foreach ($component_categories as $component_category) {
            $component = $component_category->components[0];
            $this->select($component->id, 'opt'.$component_category->name);
        }

        $this->press('btnNext')
            ->type('Joe the tester', 'name')
            ->type('a@b.com', 'email')
            ->type('0412234567', 'phone')
            ->press('btnSend')
            ->see(trans('content.system_order_success', ['name' => 'Joe the tester']));
    }
}
