<!DOCTYPE html>
    <html lang="en">

    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Add Blog</title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    </head>

    <body>

    <div class="blog  pt-20" id="blog-page">
          <div class="row justify-content-center">
             <div class="col-md-5 mb-20">

<form  action="{{url('saveblog')}}" method="post" style="background-color: #f2f2f2;" enctype="multipart/form-data" class="px-3 py-3">
    @csrf

    <div class="m-3 row">
<label for="logo" class="col-sm-3 form-label fw-bold text-md-end">Icon:</label>
<div class="col-sm-9">
<input name="icon" class="form-control" type="file" id="logo">
</div>
</div>

<div class="m-3 row">
<label for="title" class="col-sm-3 form-label fw-bold text-md-end">Title:</label> 
<div class="col-sm-9">              
<input type="title" name="title" id="title" class="form-control" />
</div>
</div>

<div class="m-3 row">
<label for="subtitle" class="col-sm-3 form-label fw-bold text-md-end">Sub Title:</label> 
<div class="col-sm-9">              
<input type="title" name="subtitle" id="subtitle" class="form-control" />
</div>
</div>

<div class="m-3 row">
<label for="content" class="col-sm-3 form-label fw-bold text-md-end">Post:</label> 
<div class="col-sm-9">              
<textarea type="text" name="content" id="content" class="form-control"></textarea>
</div>
</div>


<div class="row">
             <div class="col">
                 <div class="d-flex align-items-center justify-content-end">
                     <button  style="background-color: green" class="btn btn-success m-3" type="submit">Post</button>
                 </div>
             </div>
         </div>

</form>

</div>
          </div>
       </div>
    



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
       </script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
       </script>
</body>
</html>