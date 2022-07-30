
<!-- start footer area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="navbar-brand">
                            <a href="index.html">
                                <img src="{{asset('upload/footer_logo/'.$setting->footer_logo)}}" alt="Logo" style="width: 200px;height: 70px" />
                            </a>
                        </div>
                        <p>{!! $setting->notes !!}</p>
                        <div class="contact-info">
                            <div class="content">
                                <a href="tel:{{$setting->phone}}"><i class='bx bx-phone'></i>{{$setting->phone}}</a>
                            </div>
                            <div class="content">
                                <a href="mailto:{{$setting->email}}"><i class='bx bx-envelope'></i>{{$setting->email}}</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>Latest News</h5>
                        <ul class="footer-news">
                        @foreach($blos as $blo)
                            <li class="content">
                                <a href="blog-details.html">{{$blo->name}}</a>
                                <span>{{$blo->created_at->diffforhumans()}}</span>
                                <hr>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>Quick Links</h5>
                        <ul class="footer-links">
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="destinations.html">FAQ</a>
                            </li>
                            <li>
                                <a href="blog-style-1.html">Latest Blog</a>
                            </li>
                            <li>
                                <a href="team.html">Privacy</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>Latest Travel</h5>
                        <a href="{{$setting->footer_image_link}}" target="_blank"><img src="{{asset('upload/footer_image/'.$setting->footer_image)}}" alt="" style="width: 100%;height: 300px"></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copy-right-area">
            <div class="container">
                <div class="copy-right-content">
                    <p>
                        Copyright @<script>document.write(new Date().getFullYear())</script>   Garden. Powered By
                        <a href="https://faroukgroup.com/" target="_blank">
                            Farouk Group
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->
