@php
    $footer1 = \App\Widget::where('location','footer 1')->first();
    $footer2 = \App\Widget::where('location','footer 2')->first();
    $footer3 = \App\Widget::where('location','footer 3')->first();
    $contact = \App\Setting::where('status','active')->get();
@endphp

<footer>
    <div class="footer-top section-pb section-pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-footer mt-40">
                        <h6 class="title-widget">{{ $footer1 -> name }}</h6>
                        <div class="footer-addres">
                            <div class="widget-content mb--20">
                                {!! $footer1 -> content !!}
                            </div>
                        </div>
                        <ul class="social-icons">
                            @foreach($contact as $social)
                                <li>
                                    <a class="{{ @$social->name }} social-icon" href="{{ @$social->link }}" title="{{ @$social->name }}" target="_blank">
                                        {!! @$social -> icon !!}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                    <div class="widget-footer mt-40">
                        <h6 class="title-widget">{{ $footer2 -> name }}</h6>
                        <div class="widget-content mb--20">
                            {!! $footer2 -> content !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                    <div class="widget-footer mt-40">
                        <h6 class="title-widget">{{ $footer3 -> name }}</h6>
                        <div class="widget-content mb--20">
                            {!! $footer3 -> content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
