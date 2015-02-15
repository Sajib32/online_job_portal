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
    </head>
     <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
       <![endif]-->
       <div class="content">
            <h1>Basic Demo</h1>

            <script>
                $(function ()
                {
                   var form = $("#example-form");
                   
             
                    form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    
});
                });

            </script>
        <form id="example-form" action="#">
         <div>
                <h3>First Step</h3>
                <section>
                    <label for="userName">User name *</label>
                    <input id="userName" name="userName" type="text" class="required">
                    <label for="password">Password *</label>
                    <input id="password" name="password" type="text" class="required">
                    <label for="confirm">Confirm Password *</label>
                    <input id="confirm" name="confirm" type="text" class="required">
                    <p>(*) Mandatory</p>
                </section>

                <h3>Second Step</h3>
                <section>
                    <label for="name">First name *</label>
                    <input id="name" name="name" type="text" class="required">
                    <label for="surname">Last name *</label>
                    <input id="surname" name="surname" type="text" class="required">
                    <label for="email">Email *</label>
                    <input id="email" name="email" type="text" class="required email">
                    <label for="address">Address</label>
                    <input id="address" name="address" type="text">
                    <p>(*) Mandatory</p>
                </section>

                <h3>Third Step</h3>
                <section>
                    <ul>
                        <li>Foo</li>
                        <li>Bar</li>
                        <li>Foobar</li>
                    </ul>
        </section>

                <h3>Forth Step</h3>
                <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
        </section>
            </div>
            </form>
        </div>
   
    </body>
</html>