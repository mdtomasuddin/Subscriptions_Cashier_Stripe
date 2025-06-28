    @include('layouts.nav')

@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>Subscription Plans</h1>
        <div class="row">

            @foreach($plans as $plan)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2>{{ $plan->name }}</h2>
                        </div>
                        <div class="card-body">
                            <p>{{ $plan->description }}</p>
                            <p>Price: ${{ $plan->amount }} </p>
                          
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
