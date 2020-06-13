@extends('layouts.app')

@section('title', 'Create an Emoji Postcard')

@section('content')
    <div class="container">
        <h1>EmojiGram Logo</h1>

        <card-creator
            supported-countries="{{ json_encode( config('emojigram.supported_countries'))  }}"
            supported-us-states="{{ json_encode(config('emojigram.supported_us_states')) }}"
        ></card-creator>

        <div class="content">
            <div class="row">
                <div class="col-md-2 col-xs-2">
                    <img src="{!! url('emojione/svg/1f4b2.svg') !!}" alt="">
                </div>
                <div class="col-md-10 col-xs-10">
                    <h5>Pay From Anywhere!</h5>
                    <p>EmojiGram supports card payments from 130+ countries, we also support <strong>PayPal</strong> and <strong>Bitcoin</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-xs-2">
                    <img src="{!! url('emojione/svg/1f3e4.svg') !!}" alt="">
                </div>
                <div class="col-md-10 col-xs-10">
                    <h5>Send To Anywhere!</h5>
                    <p>You can send an EmojiGram to almost ANYONE in the world, in over 130 countries.</p>
                </div>
            </div>
        </div>
    </div>

@stop
