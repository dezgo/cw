@extends('layouts.app')

@section('head')

<meta property="og:type" content="article"/>
<meta property="og:title" content="Don't want windows 10?"/>
<meta property="og:description" content="Microsoft is offering Windows 10 as a free upgrade for eligible Windows 7 and 8/8.1 users. But it's not necessarily a good move."/>
<meta property="og:url" content="{{ url('/blog/never10') }}"/>
<meta property="og:image" content="{{ url('/images/blog/never10/capture1_sm.jpg') }}"/>


@stop


@section('content')

<section class="mbr-section" id="header3-78">
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-12">
                <h3 class="mbr-header__text">Don't want windows 10?</h3>
                <h4>Microsoft is offering Windows 10 as a free upgrade for eligible Windows 7 and 8/8.1 users. But it's not necessarily a good move.</h4>
                <p class="mbr-header__subtext">By Derek Gillett posted Friday 3 June, 2016</p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="content1-79">
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="mbr-article mbr-article--wysiwyg">
            <br>
            <a class="extlink" target="_blank" href="https://www.grc.com/never10.htm">
                <img src="/images/blog/never10/n10-lr.png"><br>
            </a>
            <br>
            Windows 10 is the newest upgrade to Windows. Most people using Windows 7 and 8 currently
            have a free option to upgrade, that will end on 29 July.<br>
            <br>
            Now don't get me wrong here, it's a great update and for those of you who don't mind
            change and are keen to keep up-to-date with the latest, the upgrade is worthwhile. BUT,
            some people just like their computer the way it is, and have ended up inadvertently
            proceeding with the upgrade. Also, it's worthwhile checking that all your programs
            will continue to work under Windows 10. To do that, you'll need to go to the
            manufacturers website for each program you use, and check their system
            requirements. Most mainstream programs will be fine, but if you use some old
            or niche software, you may be out of luck.<br>
            <br>
            Note, if you are already on Windows 10 but don't like it, and importantly, you upgraded within
            the last 30 days, you can revert back to your old Windows. Go to Settings > Updates &amp; security > Recovery >
            Go back to Windows 7/8/8.1).<br>
            <br>
            To ensure the Windows 10 upgrade doesn't occur, can use a tool called
            <a class="extlink" target="_blank" href="https://www.grc.com/never10.htm">Never10</a>.<br>
        </div>
        </div>
        </section>

        @stop
