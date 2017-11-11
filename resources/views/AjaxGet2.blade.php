<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function myFunction(routes) {
        $.ajax({
            url: '/AjaxGet2/'+routes,
            type: 'get',
            data:   {
                        name:'Thanwa',
                        city:'Ayutthaya'
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

<!-- <button >Send an HTTP GET request to a page and get the result back</button> -->
<button onclick="myFunction('demo3')">Demo One!</button>
<button onclick="myFunction('demo4')">Demo Two!</button>
<div id='box'>
    <p id="demo"></p>
</div>
</body>
</html>