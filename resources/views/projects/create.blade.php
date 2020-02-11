<!DOCTYPE html>
<html>
<head>
    <title>PROJECT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>


<body>
<h1>Your are on Create Project</h1>

<form method="POST" action="/projects/create">

{{csrf_field()}}
    <div>
        <input type="text"  name="title" placeholder="Enter Your Name" class=" form-control  {{$errors->has('title') ? 'form-control is-invalid': ''}}" value="{{old('title')}}" ></div>

        <div class="col-sm-3">
            <small  id="titleerror" class="text-danger">
                @if ($errors->has('title'))
                    <span>{{ $errors->first('title') }}</span>
                @endif
            </small>

        </div>

    </div>

  <div>
      <textarea style="margin-top: 12px"  rows="4" cols="50" name="description" class="form-control {{$errors->has('description') ? 'form-control is-invalid': ''}}" placeholder="Enter your Description" >{{old('description')}}</textarea>

      <div class="col-sm-3">
          <small  class="text-danger">
              @if ($errors->has('description'))
                  <span>{{ $errors->first('description') }}</span>
              @endif
          </small>

      </div>

  </div>

    <div style="margin-top: 2%">
        <button type="submit"  class="btn btn-primary">Submit Your Data</button>


    </div>



</form>

</body>
</html>
