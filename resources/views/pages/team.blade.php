@extends('layouts.master_home')

@section('home_content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
@foreach($teamMembers as $member)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{ asset($member->photo) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{ $member->twitter }}"><i class="icofont-twitter"></i></a>
                  <a href="{{ $member->facebook }}"><i class="icofont-facebook"></i></a>
                  <a href="{{ $member->instagram }}"><i class="icofont-instagram"></i></a>
                  <a href="{{ $member->linkedin }}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $member->name }}</h4>
                <span>{{ $member->position }}</span>
              </div>
            </div>
          </div>
@endforeach
          

        </div>

      </div>
    </section><!-- End Our Team Section -->
@endsection