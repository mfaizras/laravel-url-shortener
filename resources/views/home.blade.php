<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="justify-content-center" style="background-color:#f7fafc;">

    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle" style="width: 70%">
            <div class="text-center text-uppercase mb-3">
                <h1><b>URL Shortener</b></h1>
            </div>
            <div class="card">
                <div class="card-body">
                    @if ($errors->all())
                        <div class="alert alert-danger mb-3">
                            @foreach ($errors->all() as $message)
                                <p>{{ $message }}</p>
                            @endforeach
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {!! session('success') !!}
                        </div>
                    @endif
                    @if (session()->has('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ !!session('failed') }}
                        </div>
                    @endif
                    <form action="/" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="url"
                                placeholder="http://yoururl.domain/">
                            <label for="floatingInput">Your Long Url</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">{{ url()->full() }}/</span>
                            <input type="text" class="form-control" name="alias" id="basic-url"
                                aria-describedby="basic-addon3" placeholder="alias">
                        </div>
                        <button class="btn btn-primary rounded-pill container-fluid">Get my Shorten URL</button>
                    </form>
                </div>
            </div>

            <div class="mt-3 ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                <a href="{{ url('') }}/api" class="text-black">Api Documentation</a>
            </div>
            <!-- footer -->
            <div class="position-static text-black bottom-0 text-center p-1 mb-2 mt-3" style="width: 100%">
                <div class="container">© 2022. Made with <i class="fa-solid fa-heart"></i> by <a
                        href="http://faizrashid.my.id/" class="text-black"> Faiz Rashid</a> (mfaizras@gmail.com)</div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
