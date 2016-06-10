<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactFormTest extends TestCase
{
    public function testBlankForm()
    {
        $this->visit('/contact')
            ->press('btnSend')
            ->see(trans('validation.required', ['attribute' => 'name']))
            ->see(trans('validation.required_without', ['attribute' => 'email', 'values' => 'phone']))
            ->see(trans('validation.required_without', ['attribute' => 'phone', 'values' => 'email']));
    }

    public function testInvalidEmail()
    {
        $this->visit('/contact')
            ->type('abc', 'email')
            ->press('btnSend')
            ->see(trans('validation.email', ['attribute' => 'email']));
    }

    public function testInvalidPhone()
    {
        $this->visit('/contact')
            ->type('abc', 'phone')
            ->press('btnSend')
            ->see(trans('validation.custom.phone.regex'));
    }

    /**
     * @group email
     */
    public function testOK()
    {
        $this->visit('/contact')
            ->type('Joe the tester', 'name')
            ->type('a@b.com', 'email')
            ->type('131313', 'phone')
            ->press('btnSend')
            ->see(trans('content.contact_success', ['name' => 'Joe the tester']));
    }
}
