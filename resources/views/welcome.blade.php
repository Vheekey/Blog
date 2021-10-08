@include('layout.header')
    <body class="antialiased">
        <div class="container">
            <a href="{{ route('blog-admin') }}" class="btn btn-sm btn-dark mt-5"> Admin </a>

            @if (count($blogs) < 1)
            <div class="row mt-5 font-weight-bold">
                Sorry! We do not have any posts currently. Please check back in a bit.
            </div>
            @else
            <div class="row mt-5">
                @foreach ($blogs as $item)
                <div class="col-md-4 offset-md-1">
                    <div class="card mx-5 my-5">
                        <div class="card-header font-weight-bold h3" style="text-transform: capitalize">
                            {{ $item->title }}
                        </div>
                        <div class="card-body">
                            {!! $item->content !!}
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endif

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mb-5">
                @if($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    {{ $blogs->appends(request()->except('page'))->links() }}

                @endif
            </div>
        </div>
    </body>

@include('layout.footer')

