@extends('layouts/app')
@section('header')
@include('inc/dashboard-header')
@endsection
@section('content')
<section class="logout py-4">
    <article class="logout__container">
        <div class="logout__bubble">
            <span>
            You have now finished voting for the new TiP SSC
            </span>
            <div class="mt-4">
            Thank you!
            </div>
        </div>
        <form class="mt-5" action="{{ route('logout') }}" method="post">
			@csrf
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-lg client-custom-button-2">log out</button>
            </div>
        </form>
    </article>
</section>
@endsection

@section('footer')
@include('inc/footer')
@endsection
