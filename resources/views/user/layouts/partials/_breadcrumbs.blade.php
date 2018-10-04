@section('breadcrumbs')
    @if(isset($crumbs) || isset($actions))
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">

                <h3 class="text-themecolor">
                    @yield('title')
                </h3>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> 
                        <a href="#"> Home </a>
                    </li>

                    @if(isset($crumbs) && $crumbs)
                        @foreach($crumbs as $i => $item)
                            @if(isset($item['url']) && isset($item['title']))
                                <li class="breadcrumb-item" >
                                    <a href='{{ $item['url'] }}'>
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ol>

            </div>
            @if(isset($actions) && $actions)
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                    <div class="title-action">
                        @foreach($actions as $i => $item)
                            @if(isset($item['url']) && isset($item['title']))
                              <a href='{{ $item['url'] }}' class='btn btn-success {{isset($item["class"]) ? $item["class"] : ""}}'>{!! $item['title'] !!}
                              </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    @endif
@endsection
