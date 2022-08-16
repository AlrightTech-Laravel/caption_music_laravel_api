<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container m-5">
        <div class="row">
        <h1 class="text-center col-12">Musics</h1>
        <a href="{{ url('Music_page') }}"><button type="button"  class="btn btn-info">Upload Track</button></a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Track</th>
              </tr>
            </thead>
            <tbody>
                @if(isset($viewMusic))
                @foreach ($viewMusic as $music)
              <tr>
                <th>{{ $music->id }}</th>
                <td>{{ $music->title }}</td>
                <td id="wid1"><a class="btn btn-primary" id="next" href="/audio/mp3/{{$music->mp3}}"
                    onclick="return playAudio();">Play</a>
                    <a class="btn btn-success" id="" href="/audio/mp3/{{$music->mp3}}"
                        download
                  >Download</a>
                    </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<script type="text/javascript">
    var x = document.getElementById('next');
    //alert(x);
    function playAudio() {
    x.play();
    }
    </script>
