<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    public function testHomeLink()
    {
        $this->visit('/')
            ->click('homelink')
            ->seePageIs('/');
    }

    public function testAboutLink()
    {
        $this->visit('/')
            ->click('aboutlink')
            ->seePageIs('/about');
    }

    public function testRemoteLink()
    {
        $this->visit('/')
            ->click('remotelink')
            ->seePageIs('/remote');
    }

    public function testServicesLink()
    {
        $this->visit('/')
            ->click('serviceslink')
            ->seePageIs('/services');
    }

    public function testSolutionsLink()
    {
        $this->visit('/')
            ->click('solutionslink')
            ->seePageIs('/solutions');
    }

    public function testContactLink()
    {
        $this->visit('/')
            ->click('contactlink')
            ->seePageIs('/contact');
    }

    public function testEmailLink()
    {
        $this->visit('/services')
            ->click('emailserviceslink')
            ->seePageIs('/services/email');
    }

    public function testBackupLink()
    {
        $this->visit('/services')
            ->see('http://partners.carbonite.com/computerwhiz-canberra');

        // would like to navigate to that link too and check it's OK, but
        // phpunit just gives a 404 even though it exists. I think it's going
        // to http://localhost/http://partners.ca... instead
    }

    public function testSystemsLink()
    {
        $this->visit('/services')
            ->click('systemslink')
            ->seePageIs('/services/systems');
    }

    public function testEmailLinkBus()
    {
        $this->visit('/solutions')
            ->click('emailserviceslink')
            ->seePageIs('/services/email');
    }

    public function testBackupLinkBus()
    {
        $this->visit('/solutions')
            ->see('http://partners.carbonite.com/computerwhiz-canberra');

        // would like to navigate to that link too and check it's OK, but
        // phpunit just gives a 404 even though it exists. I think it's going
        // to http://localhost/http://partners.ca... instead
    }

    public function testSystemsLinkBus()
    {
        $this->visit('/solutions')
            ->click('systemslink')
            ->seePageIs('/services/systems');
    }
}
