<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset('style/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-bg-light navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
    </div>
    </nav>
 

    <div class="container mt-5">
    <a href="{{ route('image.create') }}" class="ml-3 btn btn-md btn-warning"><i class="fa-solid fa-plus"></i> Post image</a>

       

        @php($counter=0)
        <div class="container">
        @while($counter < count($images))
            <div class="row mb-3">
            @for($x=0;  $x< 3; $x++)
                @if($counter>=count($images))
                    @break
                @endif

                @php($image=$images[$counter++])
                <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div style="height: 250px; overflow:hidden;" class="img-thumbnail">
                            <img class="card-img-top" src="/storage/{{ $image->url_image }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> <strong> {{$image->title }} </strong></h5>
                        <p >{{ substr($image->description,0,25) }} ...</p>
                        <a  href="{{ route('image.show',$image->id) }}">detail</a>
                    </div>
                </div>                             
                </div>
                @endfor
            </div>
        @endwhile
        </div>
    </div>

    
    
    <script src="https://kit.fontawesome.com/4344e7fc95.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
