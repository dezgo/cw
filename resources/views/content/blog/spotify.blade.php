@extends('layouts.app')

@section('head')

<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Free Music!"/>
<meta property="og:description" content="Streaming music has opened new options for music on demand"/>
<meta property="og:url" content="{{ url('/blog/spotify') }}"/>
<meta property="og:site_name" content="Computer Whiz - Canberra"/>
<meta property="og:image" content="{{ url('/images/blog/spotify/capture1_sm.jpg') }}"/>


@stop


@section('content')

<style>
body {
        font-family: Helvetica, Arial, sans-serif;
}
a.extlink {
  text-decoration: underline;
  color: black;
}
</style>

<section class="mbr-section" id="header3-78">
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-12">
                <h3 class="mbr-header__text">FREE MUSIC!</h3>
                <p class="mbr-header__subtext">By Derek Gillett posted 1 July, 2016</p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="content1-79">
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="mbr-article mbr-article--wysiwyg">
            Do you remember a time when boom boxes were amazing, apparently people
            even walked around with these massive units on one shoulder! And to get
            some great music, you had to record it off the radio? I remember sitting
            in my bedroom listening to the DJ finish up his spiel, finger poised over
            the pause button on my stereo (I'd already got the tape to the right position and
            pressed the tricky play-record-pause
            combo so I'd be as fast as possible when that song came on.
            The DJ's voice would stop, I'd release pause, that amazing song I'd be dying to
            catch on tape would start, and I'd wait patiently for the song to end so I could do
            the same thing again before the DJ came back on. Ahh the days!<br>
            <br>
            Well kids, you have it so much easier these days! No longer do you have to
            hover patiently by the radio for that song you love to come on, because streaming
            music is here, and it's free! Sure there are advertisements that play
            intermitently, but hey, ad-supported music is still free music right?<br>
            <br>
            So in this article, I'll talk about one such service called 'Spotify', what
            it does, and how you can get started.<br>
            <br>
            <h4>Download</h4>
            First step, head on over to <a class="extlink" href="https://www.spotify.com" target="_blank">
            https://www.spotify.com</a>. You'll see their homepage, which currently looks like this:<br>
            <br>
            <img src="/images/blog/spotify/capture1_sm.jpg"><br>
            <br>
            Click 'Download', which will take you to their signup page. You'll need to fill this in
            to continue. You could sign up with your Facebook account, or just create a new account
            for Spotify.
            <br>
            <img src="/images/blog/spotify/capture2.jpg"><br>
            <br>
            Once you've created your account, the software should download automatically.<br>
            <br>
            <img src="/images/blog/spotify/capture3_sm.jpg"><br>
            <br>
            Once the installer has downloaded, click on it to run. It will initially download<br>
            <br>
            <img src="/images/blog/spotify/spotify-downloading.jpg"><br>
            <br>
            And once that's done, you'll get a login box<br>
            <br>
            <img src="/images/blog/spotify/login.jpg"><br>
            <br>
            Enter the username and password you used when you signed up above (or use Facebook if you chose that option) and click 'Log In'.
            You might then be prompted with a Windows Firewall message like the one below. If so, you'll need to click
            'Allow access' to continue.<br>
            <br>
            <img src="/images/blog/spotify/firewall-warning.jpg"><br>
            <br>
            Now you're in! You'll see a window like the one below<br>
            <br>
            <img src="/images/blog/spotify/main-window-text.jpg"><br>
            <br>
            And that's it! Have a look around. You can play any music in Spotify's collection, and trust me, it's massive!
            Whether you like pop, classical, jazz, or something entirely different, there's a very good chance you'll
            find it. While you use the free version, you'll hear the occassional advertisement, including plenty of ads
            encouraging you to upgrade. The premium version currently costs $11.99 per month, and they also have a family
            option for $17.99 per month which you and up to 5 others can use (note they must all reside at the same address).<br>
            <br>
            So if you've been unsure how to get music onto your computer up to now, this is your answer. A very simple, free option
            which I use daily.
        </div>
    </div>
</section>

@stop
