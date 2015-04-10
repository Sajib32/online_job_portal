<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
        <style type="text/css">
            body {
    padding: 20px;
}
        </style>

</head>
<body>
   <form class="form-horizontal">
    <div class="form-group has-feedback">
        <label for="fname" class="control-label col-md-2">First Name:</label>
        <div class="col-md-10">
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name" />
            <span class="glyphicon form-control-feedback" id="fname1"></span>
       </div>
    </div>
    <div class="form-group has-feedback">
        <label for="lname" class="control-label col-md-2">Last Name</label>
        <div class="col-md-10">
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last name" />
            <span class="glyphicon form-control-feedback" id="lname1"></span>
        </div>
    </div>  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            <script type="text/javascript">
            $(document).ready(function(){
                $('form').validate({    
    rules: {
        fname: {
            minlength: 6,
            maxlength: 15,
            required: true
        },
        lname: {
            minlength: 3,
            maxlength: 15,
            required: true
        }
    },
    highlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');         
    },
    unhighlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');         
    },
    errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.length) {
                error.insertAfter(element);
            } else {
            error.insertAfter(element);
            }
        } 
 });  
});
            </script>

</body>
</html>