@if(@$footer != 'false')
@section('footer')
    <footer id="footer">
        @section('footer.body')
            Copyright &copy; 2015 Material Admin

            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        @endsection
    </footer>
@endsection
@endif
@if(@$loading != 'false')
    <!-- Page Loader -->
    <div class="page-loader">
        <div class="preloader pls-blue">
            <svg class="pl-circular" viewBox="25 25 50 50">
                <circle class="plc-path" cx="50" cy="50" r="20"/>
            </svg>

            <p>{{ __('Please wait...') }}</p>
        </div>
    </div>
@endif
@if(@$js != 'false')
    @include('elements.js')
@else
    @yield('js')
@endif