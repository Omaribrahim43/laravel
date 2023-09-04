<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="row" style="margin: 20px">
        <div class="col-12">
            <h2>Join Two Tables</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Author's name</th>
                        <th scope="col">Book title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        {{-- {{ dd($book) }} --}}
                        <tr>
                            <td>
                                @foreach ($authors as $author)
                                    {{ $author->name }}
                                @endforeach
                            </td>
                            <td>{{ $book->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
