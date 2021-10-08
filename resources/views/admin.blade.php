@include('layout.header')
    <body class="antialiased">
        <div class="container">
            <a href="{{ route('home') }}" class="btn btn-sm btn-dark mt-5"> Home </a>

            <div class="row mt-5">
                <div class="mb-2">
                    @include('layout.notify_errors')
                    @include('layout.notify_success')
                </div>
                <div class="col-md-10 offset-md-1">
                    Welcome Admin,

                    <div class="card mx-5 my-5">
                        <div class="card-header">
                            Create a content
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blogs.create') }}" method="post">
                                @csrf
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title">

                                <p></p>
                                <label for="">Content</label>
                                <textarea id="content" name="content"></textarea>

                                <p></p>
                                <input type="submit" value="Create" class="btn btn-md btn-success">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

@include('layout.footer')
<script>
    tinymce.init({
      selector: 'textarea#content'
    });
</script>
