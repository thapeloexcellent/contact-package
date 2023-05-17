    <!DOCTYPE html>
    <html lang="en">

    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Blog</title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    </head>

    <body>

       <div class="blog  pt-20" id="blog-page">
          <div class="row justify-content-center">
             <div class="col-md-10 mb-20">

                <h2 style="color: #64bc5c" class="text-center mb-5  font-bold text-5xl md:text-5xl">Blog Posts</h2>

                <div class="d-flex justify-content-center align-items-center">
                   <div class="row py-10">

                      @foreach($blog as $blog)
                      <div class="col-md-4 col-sm-6 mb-4">
                         <a href="{{ url('/') }}">
                            <div class="card">
                               <img src="{{ asset('images/'.$blog->icon)}}" class="card-img" alt="Your Image">
                               <div class="card-body">
                                  <h2 style="color: #64bc5c" class="card-title font-bold text-gray-90">{{$blog['title']}}</h2>
                                  <p class="card-text">{{$blog['subtitle']}}</p>
                               </div>
                            </div>
                         </a>
                      </div>
                      @endforeach
                   </div>
                </div>

             </div>
          </div>
       </div>


       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
       </script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
       </script>
    </body>

    </html>