@extends('layouts.app')

@section('head')
<title>About</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <img alt="Derek" src="/images/derek.png">
            </div>
            <div class="col-md-8">
                <h4><b>Derek Gillett, founder and technician</b></h4>
                My
                goal is to provide an approachable, friendly, I.T. support service to home &amp;
                business users in the local area.<br>
                <br>
                I also love to
                teach people how to use computers, and technology generally. There's
                an art to conveying meaning in the technology field. There are so many
                technical terms, like 'power-cycling' your modem, or the myriad of ways
                to describe your connection to the internet - 3G, 4G, wifi, data, ADSL.
                The trick to teaching people technology is to gently introduce these terms
                and describe what they mean ... then describe that again in a different way,
                and repeat patiently until that ah-ha moment arrives.<br>
                <br>
                When I'm not in front of a computer, you'll often find me hitting the running tracks
                near our home in Red Hill. I also love audio books and often
                have one playing in the car or while running.
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img alt="spacer" src="/images/spacer.gif" height="50">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img alt="Adriana" src="/images/adriana.png">
            </div>
            <div class="col-md-8">
                <h4><b>Adriana Gillett, graphic/web designer</b></h4>
                I've always been very artistic. With a love of art in mind, I first studied
                Fine Arts. I then went on to obtain a Bachelor's degree in Graphic Design.
                Creating beautiful things has long been a passion of mine, whether it's
                an eye-catching website, or a colourful abstract painting, I'm totally in
                my element during those creative moments.<br>
                <br>
                In my free time, you might find me enjoying a movie, taking a stroll
                by the lake, cooking something yummy, or just enjoying the company
                of my beautiful family.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <Br>
        @include('includes.contact')
    </div>
</div>
@stop
