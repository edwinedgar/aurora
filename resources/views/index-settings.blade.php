@extends('welcome')
@section('content')


        

        
        <div class="card card-style">
            <div class="content mt-0 mb-2">
                <div class="list-group list-custom-large mb-4">
                    <a href="#" data-toggle-theme class="show-on-theme-light">
                        <i class="fa font-14 fa-moon bg-brown1-dark rounded-sm"></i>
                        <span>Dark Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-toggle-theme class="show-on-theme-dark">
                        <i class="fa font-14 fa-lightbulb bg-yellow1-dark rounded-sm"></i>
                        <span>Light Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-highlights">
                        <i class="fa font-14 fa-brush bg-highlight color-white rounded-sm"></i>
                        <span>Color Scheme</span>
                        <strong>A tone of Colors, Just for You</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-share">
                        <i class="fa font-14 fa-share-alt bg-red2-dark rounded-sm"></i>
                        <span>Share Azures</span>
                        <strong>Just one tap! We'll do the rest!</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-language">
                        <i class="fa font-14 fa-globe bg-green1-dark rounded-sm"></i>
                        <span>Language Picker</span>
                        <strong>A Sample for Demo Purposes</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                </div>
                
                <h5>Did you know?</h5>
                <p>
                    Fast loading, great support, premium quality. We have a tone of awesome features, that make us stand out from our competitors.
                </p>
                <div class="divider mb-1"></div>
                <div class="list-group list-custom-large">
                    <a href="#" data-menu="menu-tips-1" class="border-0">
                        <i class="fa font-14 fa-gift bg-magenta2-light rounded-sm"></i>
                        <span>Tap Here to Start</span>
                        <strong>A few Tips About Azures</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                </div>
            </div>  
        </div>
        
        <div class="card card-style preload-img" data-src="images/pictures/20.jpg">
            <div class="card-body text-center">
                <h1 class="color-white pt-4">Feature Requests</h1>
                <p class="color-white mt-n2 mb-3 pb-1">We're always listening to your feedback</p>
                <p class="boxed-text-xl color-white opacity-80 pb-2">
                    Do you like Azures, but want a specific feature? Please send us Feedback and feature suggestions and we'll consider it for future updates!
                </p>
                <a href="#" class="btn btn-m rounded-sm btn-border btn-center-l border-white color-white font-900 text-uppercase mb-4">Request Feature</a>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
</div>


    @endsection  

    