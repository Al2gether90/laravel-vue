@extends('layouts.skel')

@section('skel_scripts')
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/common.js') }}"></script>
@endsection

@section('skel_styles')
@endsection

@section('skel_content')
    <!-- /.wrapbox start-->
    <div class="wrapbox">
        @include('layouts.admin-bar-top')
        @include('layouts.admin-nav-top')
        <div class="clearfix"></div>

        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger mt-30">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        @yield('content')

        @include('layouts.main-footer')
    </div>
    <!-- /.wrapbox ends-->

    @yield('scripts')
@endsection
