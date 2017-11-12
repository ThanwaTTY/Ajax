<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function myFunction(routes) {
        alert('/AjaxPost/'+routes);
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
 
            url: '/AjaxPost/'+routes,
            type: 'POST',
            data:   {
                        name:'Thanwa',
                        city:'Ayutthaya',
                        token:$('input[name=_token]').val()
                    },
            cache: false,
            success: function(data){
                $('#box').html(data);
            }
        });
    }
</script>
</head>
<body>
<!-- <form action="/AjaxPost/demo1" method="post">
<input type="hidden" name="_token" value="MZLGiDHDfLLGhu7syz1xkRhFiUWI41idSAxq8XIU">
<label for="name">Name :</label>
<input type="text" name="name" id="name">
<input type="submit" value="บันทึก">
</form> -->


<!-- <button >Send an HTTP GET request to a page and get the result back</button> -->
<button onclick="myFunction('demo1')">Demo One!</button>
<button onclick="myFunction('demo2')">Demo Two!</button>
<div id='box'>
    <p id="demo"></p>
</div>
</body>
</html>