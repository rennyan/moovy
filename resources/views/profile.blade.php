@extends('layouts.main')

@section('main')
<div class="blog-details-area blog-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-post-item blog-details-wrap">
                    <div class="blog-post-content">
                        <h2 class="title text-center">My Profile</h2>
                        <div class="avatar-post mt-40 mb-80">
                            <div class="post-avatar-img">
                                <img src="img/blog/post_avatar_img.png" alt="img">
                            </div>
                            <div class="post-avatar-content">
                            @foreach ($user as $users)
                                <h5><strong>Name : </strong> {{ $users->name }}</h5>
                                <p><strong>Email : </strong> {{ $users->email }}</p>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection