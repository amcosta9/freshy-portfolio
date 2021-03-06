@extends('layouts.app-forward')

@section('title', '{ A C }')

@section('content')
  <nav class="navbar navbar-expand-md raleway">
    <a class="navbar-brand" href="/">AC</a>

    <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="centered-container raleway">
    <section class="title">
      <span class="hello">Hello new friend,</span><br>
      <span class="ariel roboto-slab">I'm Ariel.</span>
    </section>

    <section class="paragraph">
      <p>
        I'm a developer.  Here's where I'm supposed to tell you that my only passion is to write brilliant, concise
        code and that I'm saving the world, one web page at a time.  And sure, that's typically my goal.  But honestly,
        I'm taking it commit by commit, all the while looking forward to my next ice cream cone. 🍦
      </p>
    </section>

    <section class="social">
      <ul class="list-inline">
        <li class="list-inline-item social-link">
          <a href="https://twitter.com/arielbear99" target="_blank">
            <img class="social-icon-img" src="{{ asset('storage/icon-twitter.png') }}" alt="twitter-icon">
          </a>
        </li>
        <li class="list-inline-item social-link">
          <a href="https://www.linkedin.com/in/arielmcosta/" target="_blank">
            <img class="social-icon-img" src="{{ asset('storage/icon-linkedin.png') }}" alt="linkedin-icon">
          </a>
        </li>
        <li class="list-inline-item social-link">
          <a class="mail-link"
             href="mailto:hello@arielcosta.com">
            <img class="social-icon-img" src="{{ asset('storage/icon-mailbox.png') }}" alt="mail-icon">
          </a>
        </li>
      </ul>
    </section>
  </div>
@endsection