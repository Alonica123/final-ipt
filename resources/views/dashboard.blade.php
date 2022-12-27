@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container d-flex align-items-center justify-content-center my-5">
        <a href="/my-post" id="dash-link" class="btn btn-primary">
            View post
        </a>
        <p class="text-muted mt-3">
            Click the button above to view a new post on our social media platform. This post will feature updates and
            information about our latest features and events. We hope you enjoy it!
        </p>
    </div>



    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About us</a></li>
                        <li><a href="#" class="text-white">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">FAQ</a></li>
                        <li><a href="#" class="text-white">Help center</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Terms of service</a></li>
                        <li><a href="#" class="text-white">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Social</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i> Facebook</a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="text-muted">Copyright &copy; 2022 My Website</p>
                </div>
            </div>
        </div>
    </footer>


@endsection

<style>
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
