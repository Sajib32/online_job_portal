<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/jquery.steps.css') }}">
        <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="{{ URL::asset('js/jquery.cookie-1.3.1.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.steps.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.validate.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::asset('js/formValidation.js') }}"></script>
        <script src="{{ URL::asset('js/formValidation.min.js') }}"></script>

       
    </head>
     <body>  
<script type="text/javascript">
$(function() {
    $("#form1").steps({
        headerTag: "h2",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
             $("#form1").validate().settings.ignore = ":disabled,:hidden";
             return $("#form1").valid();
        },
        onFinishing: function(event, currentIndex) {
            $("#form1").validate().settings.ignore = ":disabled";
            return $("#form1").valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    }).validate({
        errorPlacement: function(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });            

});
</script>
<form id="form1"  runat="server">          
            <h2>First Step</h2>
            <fieldset>
                  <legend> First Step Info </legend>  
                    <label for="userName">User name *</label>
                    <input id="userName" name="userName" type="text" class="required">
                    <label for="password">Password *</label>
                    <input id="password" name="password" type="text" class="required">
                    <label for="confirm">Confirm Password *</label>
                    <input id="confirm" name="confirm" type="text" class="required">
                    <p>(*) Mandatory</p>

            </fieldset>

            <h2>Second Step</h2>
            <fieldset>
                <legend>Second Step Info</legend>   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                    sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                    Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.

            </fieldset>                                             
</form>
    </body>
</html>