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
                <h1 class="mt-3"><b>URL Shortener</b></h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <strong>
                        <h3 class="text-uppercase">Create Shorten URL from API</h3>
                    </strong>
                    <h5 class="mt-3">Endpoint</h5>
                    <code>
                        <b>GET</b> {{ url('') }}/api/create
                    </code>
                    <h5 class="mt-3">Parameters</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <td>Name</td>
                                <td>Type</td>
                                <td>Description</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>url</td>
                                <td>String</td>
                                <td><b>Required</b></td>
                            </tr>
                            <tr>
                                <td>alias</td>
                                <td>String</td>
                                <td>Optional</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="mt-3">Response</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <td style="width: 20%">Action</td>
                                <td>Response</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Error</b> : Parameter Not Valid</td>
                                <td><code>
                                        {
                                        "status": "error",
                                        "message": {
                                        "url": [
                                        "Fill The URL Form"
                                        ]
                                        }
                                        }
                                    </code></td>
                            </tr>
                            <tr>
                                <td><b>Success</b> : Url Create Succesfully</td>
                                <td><code>{"status":"success","message":"Data Added
                                        Succesfully","alias":"yt10","url":"http:\/\/url-shortener.test\/yt10"}</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
