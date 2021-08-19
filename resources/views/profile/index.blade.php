@extends('layouts.profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @foreach ($profiles as $profile)
            <div class="row">
                <div class="profile col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="caption mx-auto">
                                <div class="body p-1">
                                    <span>
                                    <h5>{{ str_limit($profile->name,60) }}</h5>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <span>
                            <p class="body mx-auto">{{ str_limit($profile->gender, 650) }}</p>   
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span>
                            <p class="body mx-auto">{{ str_limit($profile->hobby, 650) }}</p>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span>
                            <p class="body mx-auto">{{ str_limit($profile->introduction, 650) }}</p>
                            </span>
                         </div>   
                    </div>
                </div>
            </div>
        @endforeach
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
            </div>
        </div>
    </div>
    </div>
@endsection