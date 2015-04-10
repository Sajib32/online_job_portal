



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    Midland Bank e-Recruitment System
</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel="shortcut icon" href="img/mid/small.png" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-overrides.css') }}">

    <!-- global styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/elements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icons.css') }}">

    <!-- libraries -->
    <link rel="stylesheet" href="{{ URL::asset('css/lib/uniform.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/select2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/bootstrap.datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/font-awesome.css') }}">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/new-user.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/smoke/smoke.css') }}">


    <!--[if lt IE 9]>
          <script src="js/html5.js"></script>
        <![endif]-->
    <style type="text/css">
        .modalDiv {
            position: fixed;
            top: 0;
            left: 0;
            background-color: black;
            z-index: 99;
            opacity: 0.8;
            filter: alpha(opacity=80);
            -moz-opacity: 0.8;
            min-height: 100%;
            width: 100%;
        }

        .loading {
            font-family: Arial;
            font-size: 10pt;
            border: 2px solid #FF0000;
            width: 200px;
            height: 100px;
            display: none;
            position: fixed;
            background-color: White;
            z-index: 999;
        }

        .error {
            color: Red;
            display: inline-block;
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('css/smoke/form-wizard.css') }}">
<body>
    <form method="post" action="Start.aspx" id="mainForm" class="form-horizontal" role="form">
        <!-- navbar -->
        <header class="navbar navbar-inverse" role="banner" style="margin-top: -15px;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="Midland Bank e-Recruitment Home Page" href="Career.aspx">
                    <img src="img/mid/logo_rr.png" style="height: 48px; width: auto;" alt="logo" />
                    <img src="img/mid/logo.png" style="height: 48px; width: auto;" alt="logo" />

                </a>
            </div>
            <ul class="nav navbar-nav pull-right hidden-xs">
                <li class="settings hidden-xs hidden-sm">
                    <a role="button">
                        <span id="informationStatus"></span>
                    </a>
                </li>
                <li class="settings">
                    
                    <a href='Start.aspx' role='button'>
                        <span id="Label1">Create New Account</span>
                    </a>
                    
                </li>
                
                
                <li class="settings">
                    <a href="Faq.aspx" target="_blank" role="button">
                        <span id="Label2">FAQ</span>
                    </a>
                </li>

                <li class="settings hidden-xs hidden-sm">&nbsp;</li>
            </ul>
        </header>
        <!-- end navbar -->

        <div class="col-md-12">
            <!-- sidebar -->
            
            <div id="sidebar-nav" class="col-md-2" style="padding-top: 0px;">
                <img src="img/mid/leftbar.png" style="width: 100%; height: auto;" />
            </div>
            
            <!-- end sidebar -->

            <div class="content col-md-8">
                
    <div id="pad-wrapper">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div id="fuelux-wizard" class="wizard row">
                    <ul class="wizard-steps">
                        <li data-target="#step1" class="active"><span class="step">1</span>                                 <span class="title">General
                                <br />
                            information</span>                             </li>
                        <li data-target="#step2"><span class="step">2</span>                                 <span class="title">Contact
                                <br />
                            information</span>                             </li>
                        <li data-target="#step3"><span class="step">3</span>                                 <span class="title">Academic
                                <br />
                            Qualification</span>                             </li>
                        <li data-target="#step4"><span class="step">4</span>                                  <span class="title">Employment</span>
                        </li>
                        <li data-target="#step5"><span class="step">5</span>                                 <span class="title">Others</span>                             </li>
                        <li data-target="#step6"><span class="step">6</span>                                 <span class="title">Photograph /
                                <br />
                            CV as pdf format</span>                             </li>
                    </ul>
                </div>
                <div id="MainBodyContent_divResultSubmitted" style="text-align: center;"></div>
                <div class="step-content">
                    <div class="row form-wrapper">
                        <div class="col-md-6">
                            <div class="field-box">
                                <label>Name(Full name):<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$fullnameText" type="text" id="MainBodyContent_fullnameText" class="form-control fullnameText" />
                            </div>
                            <div class="field-box">
                                <div style="width: 100%;">
                                    <div class="col-sm-4" style="padding: 0 2px 0 0;">
                                        First Name:
                                                <br />
                                        <input name="ctl00$MainBodyContent$firstnameText" type="text" id="MainBodyContent_firstnameText" class="form-control" placeholder="First Name" style="width: 100%;" />
                                    </div>
                                    <div class="col-sm-4" style="padding: 0 2px 0 2px;">
                                        Middle Name:
                                                <br />
                                        <input name="ctl00$MainBodyContent$middlenameText" type="text" id="MainBodyContent_middlenameText" class="form-control" placeholder="Middle Name" style="width: 100%;" />
                                    </div>
                                    <div class="col-sm-4" style="padding: 0 0 0 2px;">
                                        Last Name:
                                                <br />
                                        <input name="ctl00$MainBodyContent$lastnameText" type="text" id="MainBodyContent_lastnameText" class="form-control" placeholder="Last Name" style="width: 100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="field-box">
                                <label>Mother's Name:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$mothernameText" id="MainBodyContent_mothernameText" class="form-control mothernameText" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Father's Name:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$fathernameText" id="MainBodyContent_fathernameText" class="form-control fathernameText" type="text" />
                            </div>
                            <div id="MainBodyContent_spouseDiv" class="field-box spouseDiv">
                                <label>Spouse Name:</label>
                                <input name="ctl00$MainBodyContent$spouseNameText" id="MainBodyContent_spouseNameText" class="form-control spouseNameText" type="text" />
                            </div>
                            <div class="field-box">
                                <div style="width: 87%;">
                                    <div class="col-md-6" style="margin-left: -15px;">
                                        <label>Gender:</label>
                                        <div class="ui-select">
                                            <select name="ctl00$MainBodyContent$genderText" id="MainBodyContent_genderText">
    <option value="Male">Male</option>
    <option value="Female">Female</option>

</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Marital Status:</label>
                                        <div class="ui-select">
                                            <select name="ctl00$MainBodyContent$maritalText" id="MainBodyContent_maritalText" class="maritalText">
    <option value="Single">Single</option>
    <option value="Married">Married</option>

</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-box">
                                <div class="col-md-6" style="margin-left: -15px;">
                                    <label>Religion:</label>
                                    <div class="ui-select">
                                        <select name="ctl00$MainBodyContent$ReligionText" id="MainBodyContent_ReligionText">
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Christianity">Christianity</option>
    <option value="Others">Others</option>

</select>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-left: -15px; padding: 0px;">
                                    <label style="width: 150px;">Son of Freedom Fighter</label>
                                    <div class="ui-select">
                                        <select name="ctl00$MainBodyContent$freedomfighter" id="MainBodyContent_freedomfighter">
    <option value="No">No</option>
    <option value="Yes">Yes</option>

</select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field-box">
                                <label>Date of Birth:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$dobText" type="text" id="MainBodyContent_dobText" class="form-control input-datepicker dobText" />
                            </div>
                            <div class="field-box">
                                <label>Email Address:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$emailText" id="MainBodyContent_emailText" class="form-control emailText" data-toggle="tooltip" data-trigger="focus" title="Please insert a valid email address" data-placement="top" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Confirm Email Address:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$confirmEmailText" id="MainBodyContent_confirmEmailText" class="form-control confirmEmailText" data-toggle="tooltip" data-trigger="focus" title="Please insert a valid email address" data-placement="top" type="text" />
                            </div>
                            <div class="field-box">
                                <label>National ID:</label>
                                <input name="ctl00$MainBodyContent$nationalText" type="text" id="MainBodyContent_nationalText" class="form-control" />
                            </div>
                            <div class="field-box">
                                <div class="col-md-6" style="margin-left: -15px;">
                                    <label style="width: 100px;">Home District:</label>
                                    <div class="ui-select">
                                        <select name="ctl00$MainBodyContent$homedistrictText" id="MainBodyContent_homedistrictText">
    <option value="1">B. Baria       </option>
    <option value="2">Bagerhat       </option>
    <option value="3">Bandarban      </option>
    <option value="4">Barisal        </option>
    <option value="5">Bhola          </option>
    <option value="6">Bogra          </option>
    <option value="7">Barguna        </option>
    <option value="8">Chandpur       </option>
    <option value="9">Chapainawabganj</option>
    <option value="10">Chittagong     </option>
    <option value="11">Chuadanga      </option>
    <option value="12">Comilla        </option>
    <option value="13">Cox&#39;s Bazar    </option>
    <option value="14">Dhaka          </option>
    <option value="15">Dinajpur       </option>
    <option value="16">Faridpur       </option>
    <option value="17">Feni           </option>
    <option value="18">Gaibandha      </option>
    <option value="19">Gazipur        </option>
    <option value="20">Gopalgonj      </option>
    <option value="21">Hobigonj       </option>
    <option value="22">Jamalpur       </option>
    <option value="23">Jessore        </option>
    <option value="24">Jhalokathi     </option>
    <option value="25">Jhenaidah      </option>
    <option value="26">Joypurhat      </option>
    <option value="27">Khagrachari    </option>
    <option value="28">Khulna         </option>
    <option value="29">Kishorgonj     </option>
    <option value="30">Kurigram       </option>
    <option value="31">Kushtia        </option>
    <option value="32">Lalmonirhat    </option>
    <option value="33">Laxmipur       </option>
    <option value="34">Madaripur      </option>
    <option value="35">Magura         </option>
    <option value="36">Manikgonj      </option>
    <option value="37">Meherpur       </option>
    <option value="38">MoulaviBazar   </option>
    <option value="39">Munshigonj     </option>
    <option value="40">Mymensingh     </option>
    <option value="41">Naogaon        </option>
    <option value="42">Narail         </option>
    <option value="43">Narayangonj    </option>
    <option value="44">Narshingdi     </option>
    <option value="45">Natore         </option>
    <option value="46">Netrokona      </option>
    <option value="47">Nilphamari     </option>
    <option value="48">Noakhali       </option>
    <option value="49">Pabna          </option>
    <option value="50">Panchagahr     </option>
    <option value="51">Patuakhali     </option>
    <option value="52">Pirojpur       </option>
    <option value="53">Rajbari        </option>
    <option value="54">Rajshahi       </option>
    <option value="55">Rangamati      </option>
    <option value="56">Rangpur        </option>
    <option value="57">Satkhira       </option>
    <option value="58">Shariatpur     </option>
    <option value="59">Sherpur        </option>
    <option value="60">Sirajgonj      </option>
    <option value="61">Sunamgonj      </option>
    <option value="62">Sylhet         </option>
    <option value="63">Tangail        </option>
    <option value="64">Thakurgaon     </option>

</select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="width: 93px;">Blood Group:</label>
                                    <div class="ui-select">
                                        <select name="ctl00$MainBodyContent$bloodgroupDropDown" id="MainBodyContent_bloodgroupDropDown">
    <option value="2">A Negative</option>
    <option value="1">A Positive</option>
    <option value="3">A Unknown</option>
    <option value="8">AB Negative</option>
    <option value="7">AB Positive</option>
    <option value="9">AB Unknown</option>
    <option value="5">B Negative</option>
    <option value="4">B Positive</option>
    <option value="6">B Unknown</option>
    <option value="11">O Negative</option>
    <option value="10">O Positive</option>
    <option value="12">O Unknown</option>
    <option value="13">Unknown</option>

</select>
                                    </div>
                                </div>
                            </div>
                            <div class="field-box">
                                <label>Enter Captcha:<span style="color: #ff0000;"> *</span> </label>
                                <br />
                                <input name="ctl00$MainBodyContent$txtimgcode" type="text" id="MainBodyContent_txtimgcode" class="form-control txtimgcode" oncopy="return false" onpaste="return false" oncut="return false" autocomplete="off" style="width:300px;" />
                                

<script type="text/javascript">
    function ReloadCaptcha() {
        document.getElementById("CaptchaID").src = "/JpegImage.aspx?reloadCaptcha=true&t=" + Math.random();
    }
</script>
<div>
    <p>
        <img id="CaptchaID" src="/JpegImage.aspx" alt="Unable to load Image. Refresh page again." style="margin-left: 5px;" /> &nbsp;&nbsp;&nbsp;
        <a title="Click to generate new image" style="cursor: pointer; text-decoration: none;" onclick="ReloadCaptcha()"><i class="icon-refresh icon-2x"></i></a>
    </p>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wizard-actions text-center">
                <input type="submit" name="ctl00$MainBodyContent$SaveInformation1" value="Save and Continue" onclick="ConfirmStart();" id="MainBodyContent_SaveInformation1" class="btn-glow success SaveInformation1" />
            </div>
        </div>
    </div>

            </div>
            <!-- side right column -->
            <div class="col-md-2" style="position: fixed; right: 0px; top: 0px;">
                
                <img src="img/mid/rightbar.png" style="width: 100%; height: auto;" />
                
                <br />
                <a style="float: right; margin-right: 15px;" target="_blank" href="http://www.midlandbankbd.net/news_media">
                    <h3>Latest News</h3>
                </a>
            </div>
            <!-- end main container -->

        </div>

        <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="educationLabel">Signin With your existing Applicant Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-wrapper">
                            <div class="col-md-12">
                                <div class="field-box">
                                    <label style="width: 115px;">Email Address:</label>
                                    <input name="ctl00$emailFieldText" type="text" id="emailFieldText" class="form-control" oncopy="return false" onpaste="return false" oncut="return false" autocomplete="off" placeholder="E-mail address" style="width: 400px;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Password:</label>
                                    <input name="ctl00$passwordFieldText" type="password" id="passwordFieldText" class="form-control" autocomplete="off" placeholder="Your password" style="width: 400px;" />
                                </div>
                                <div class="field-box">
                                    <label>Enter Captcha: </label>
                                    <input name="ctl00$captchaText" type="text" id="captchaText" oncopy="return false" onpaste="return false" oncut="return false" autocomplete="off" class="form-control captchaText" style="width:300px;clear: both;" />
                                    

<script type="text/javascript">
    function ReloadCaptcha() {
        document.getElementById("CaptchaID").src = "/JpegImage.aspx?reloadCaptcha=true&t=" + Math.random();
    }
</script>
<div>
    <p>
        <img id="CaptchaID" src="/JpegImage.aspx" alt="Unable to load Image. Refresh page again." style="margin-left: 5px;" /> &nbsp;&nbsp;&nbsp;
        <a title="Click to generate new image" style="cursor: pointer; text-decoration: none;" onclick="ReloadCaptcha()"><i class="icon-refresh icon-2x"></i></a>
    </p>
</div>

                                </div>
                                <br />
                                <div class="field-box">
                                    <a href="ForgotPassword.aspx" class="forgot">Forgot password?</a>
                                    <div class="remember">
                                        <input id="remember-me" type="checkbox" />
                                        <label style="width: 115px;" for="remember-me">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" name="ctl00$topSigninBtn" value="Log in" id="topSigninBtn" class="btn btn-primary btn-sm pull-left" />
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="chatModalLabel" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="chatHr">Chat with HR</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-wrapper">
                            <div class="col-md-12">
                                <div class="field-box">
                                    <label style="width: 115px;">Subject:</label>
                                    <div class="ui-select" style="width: 78%;">
                                        <select name="ctl00$chatItemName" id="chatItemName" class="chatItemName">
    <option value="I Can’t Login The Career Site">I Can’t Login The Career Site</option>
    <option value="I Can’t Create Login ID">I Can’t Create Login ID</option>
    <option value="I Can’t Apply By using the Web Site">I Can’t Apply By using the Web Site</option>
    <option value="I Forgotten Entire Login Information">I Forgotten Entire Login Information</option>
    <option value="I Can’t Edit My Resume">I Can’t Edit My Resume</option>
    <option value="Others">Others</option>

</select>
                                    </div>
                                </div>
                                <div class="field-box chatOtherDiv" style="display: none;">
                                    <label style="width: 115px;">Please specify:</label>
                                    <input name="ctl00$otherItemName" type="text" id="otherItemName" class="form-control otherItemName" placeholder="Specify" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Email Address:</label>
                                    <input name="ctl00$chatEmail" type="text" id="chatEmail" class="form-control chatEmail" placeholder="E-mail address" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Contact Number</label>
                                    <input name="ctl00$chatContact" type="text" id="chatContact" class="form-control chatContact" placeholder="Contact Number" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Message:</label>
                                    <textarea name="ctl00$chatMessage" rows="2" cols="20" id="chatMessage" class="form-control chatMessage" placeholder="" style="width: 100%;">
</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" name="ctl00$btnChat" value="Submit" id="btnChat" class="btn btn-primary btn-sm pull-left btnChat" />
                    </div>
                </div>
            </div>
        </div>
        <div class="loading" align="center">
            <h5>Loading. Please wait...</h5>
            <br />
            <img src="img/mid/loading.gif" alt="" />
        </div>

        <footer class="col-md-12" style="background: #ff0000; clear: both; padding: 10px; color: #FFFFFF; position: fixed; bottom: 0px;">
            <div class="col-md-6">
                2014 © <a style="color: #FFFFFF" title="Midland Bank Ltd. official website" href="http://www.midlandbankbd.net/" target="_blank">Midland Bank Ltd.</a> All Rights Reserved. 
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="http://www.midlandbankbd.net/terms_of_service" target="_blank">Terms of Sesrvice</a>
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="GuideLine.aspx" target="_blank">How to Apply</a>
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="#">Feedback</a>
            </div>
            <div class="col-md-6 text-right">Powered by IT Division of Midland Bank Limited</div>
            <div class="clearfix"></div>
        </footer>
    

<script type="text/javascript">
//<![CDATA[
$(document).ready(function () { $('form').submit(); });//]]>
</script>
</form>
    <!-- scripts -->
    <script src="{{ URL::asset('js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme.js') }}"></script>
    <script src="{{ URL::asset('css/smoke/smoke.min.js') }}"></script>

    <script type="text/javascript">
        function showSmokeAlert() {
            smoke.alert('Thanks for submitting your request to Midland Bank e-Recruitment System. We will contact you shortly.', {}, function () { });
        }
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 1) {
                $('.navbar-inverse').addClass('fixed');
            }
            else {
                $('.navbar-inverse').removeClass('fixed');
            }
        });

        function confirmLogout() {
            if (confirm("Do you want to Logout?")) {
                location.href = "Logout.aspx";
            }
        }

        // Chat window

        jQuery('.chatItemName').change(function () {
            var selectValue = $(".chatItemName option:selected").val();
            if (selectValue == "Others") {
                $('.chatOtherDiv').show("slow");
            } else {
                $('.chatOtherDiv').hide("slow");
            }
        });

        jQuery('.btnChat').click(function (e) {
            var selectValue = $(".chatItemName option:selected").val();
            if (selectValue == "others") {
                jQuery('.otherItemName').rules('add', {
                    required: true
                });
            }

            jQuery('.chatEmail').rules('add', {
                required: true
            });

            jQuery('.chatMessage').rules('add', {
                required: true
            });

            if ($('form').valid()) {
                //alert("Hello");
                $($get("btnChat")).click();
            } else {
                // alert("Error");
                e.preventDefault();
                return false;
            }
        });

        // End chat window

        function ShowProgress() {
            setTimeout(function () {
                var modalDiv = $('<div />');
                modalDiv.addClass("modalDiv");
                $('body').append(modalDiv);
                var loading = $(".loading");
                loading.show();
                var top = Math.max($(window).height() / 2 - loading[0].offsetHeight / 2, 0);
                var left = Math.max($(window).width() / 2 - loading[0].offsetWidth / 2, 0);
                loading.css({ top: top, left: left });
            }, 200);
        }
    </script>
    
    <script src="{{ URL::asset('js/bootstrap.datepicker.js') }}"></script>
    <script src="{{ URL::asset('js/Validate/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/Validate/additional-methods.min.js') }}"></script>


    <script type="text/javascript">
        $(function () {
            var selectMarital = $(".maritalText option:selected").val();
            if (selectMarital == "Married") {
                $('.spouseDiv').show("slow");
            } else {
                $('.spouseDiv').hide("slow");
            }

            jQuery('.dobText').attr("readonly", "readonly");

            jQuery('.maritalText').change(function () {
                var selectValue = $(".maritalText option:selected").val();
                if (selectValue == "Married") {
                    $('.spouseDiv').show("slow");
                } else {
                    $('.spouseDiv').hide("slow");
                }
            });

            // datepicker plugin
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            $('.SaveInformation1').on("click", function (e) {

                jQuery('form').validate({
                    errorClass: "error"
                });

                jQuery('.fullnameText').rules('add', {
                    required: true
                });
                jQuery('.mothernameText').rules('add', {
                    required: true
                });
                jQuery('.fathernameText').rules('add', {
                    required: true
                });
                jQuery('.dobText').rules('add', {
                    required: true
                });
                jQuery('.emailText').rules('add', {
                    required: true,
                    email: true
                });
                jQuery('.confirmEmailText').rules('add', {
                    required: true,
                    email: true,
                    equalTo: ".emailText"
                });
                var selectValue = $(".maritalText option:selected").val();
                if (selectValue == "Married") {
                    jQuery('.spouseNameText').rules('add', {
                        required: true
                    });
                }

                if ($('form').valid()) {
                    //alert("Hello");
                    ShowProgress();
                    $($get("SaveInformation1")).click();
                } else {
                    // alert("Error");
                    e.preventDefault();
                    return false;
                }
            });
        });

        function ConfirmStart() {
            var confirm_start = document.createElement("INPUT");
            confirm_start.type = "hidden";
            confirm_start.name = "confirm_start";
            if (confirm("Do you want to Continue?")) {
                confirm_start.value = "Yes";
            } else {
                confirm_start.value = "No";
            }
            document.forms[0].appendChild(confirm_start);
        }

    </script>

</body>
</html>
