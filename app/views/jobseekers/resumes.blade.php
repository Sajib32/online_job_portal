
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script><title>Power Grid Company of Bangladesh Limited (PGCB)</title>

<link rel="stylesheet" href="{{ URL::asset('css/style_new.css')}}">
<script src="{{ URL::asset('js/newjs/ajax.js') }}"></script>
<script src="{{ URL::asset('js/newjs/FormManager.js') }}"></script>
<script src="{{ URL::asset('js/newjs/form_submit.js') }}"></script>
<script src="{{ URL::asset('js/newjs/GetList.js') }}"></script>
<script src="{{ URL::asset('js/newjs/gpaBox.js') }}"></script>
<script src="{{ URL::asset('js/newjs/uniBox.js') }}"></script>
<script src="{{ URL::asset('js/newjs/subBox.js') }}"></script>
<script src="{{ URL::asset('js/newjs/examBox.js') }}"></script>
<script src="{{ URL::asset('js/newjs/validator.js') }}"></script>
<script src="{{ URL::asset('js/newjs/other_ps.js') }}"></script>
<script src="{{ URL::asset('js/newjs/JobAddField.js') }}"></script>
<script src="{{ URL::asset('js/newjs/JobEnable.js') }}"></script>

<script type="text/javascript">
function dependencies()
{
    setupDependencies('app_form'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
}

objImage = new Image();
function download()
{
    // preload the image file
    objImage.src="img/pload.gif";
}

// Loading------------------------------------------------------
function changeVisibility1()
{
    document.images["loading1"].style.visibility="visible";
}
function changeVisibility2()
{
    document.images["loading2"].style.visibility="visible";
}
function changeVisibility3()
{
    document.images["loading3"].style.visibility="visible";
}
function changeVisibility_hsc()
{
    document.images["loading_hsc"].style.visibility="visible";
}
function changeVisibility4()
{
    document.images["loading4"].style.visibility="visible";
}
</script>

<noscript>
    <style type="text/css">
        #appbody {display:none;}
    </style>
    <h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
</noscript>

</head>
<body id="appbody" ondragstart="return false" onselectstart="return false" onLoad="download(), dependencies();">
<form action="preview.php" method="post" onsubmit="return app_form_validator(this)" name="app_form" id="app_form">
            
            <input type="hidden" name="edu_stage" id="edu_stage" value="2" />
            <input type="hidden" name="job_exp" id="job_exp" value="1" />
            <input type="hidden" name="edu_mas" id="edu_mas" value="0" />

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>
 
    <tr>
                <td height="25" align="left" valign="middle" bgcolor="#006699">
                    <table border="0" cellpadding="5" cellspacing="0" class="black10">
                        <tr>
                          <td  width="80"align="left" valign="middle"><a href="home.php" class="link-home">Home</a></td>
                          <td align="left" valign="middle"><a href="imsize.php" class="link02">Photo/Signature Validator</a></td>
                          <td align="center" valign="middle">&#8226;</td>
                          <td align="left" valign="middle"><a href="options/plog.php" class="link02">Download Applicant's Copy</a></td>
                          <td align="center" valign="middle">&#8226;</td>
                          <td align="left" valign="middle"><a href="options/pay.php" class="link02">Payment Status</a></td>
                        </tr>
                    </table>
                </td>
            </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E3E3E3">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black14">
        
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Applicant’s Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="name" type="text" class="textfield03" id="name" onkeypress="return alpha(event,letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Father’s Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="fathername" type="text" class="textfield03" id="fathername" onkeypress="return alpha(event,letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Mother’s Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="mothername" type="text" class="textfield03" id="mothername" onkeypress="return alpha(event,letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black14">Date of Birth<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><span class="black12">Day</span>
            <select name="b_day" class="textfield02" id="b_day">
              <option>Select</option>
                <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>
            <span class="black12">Month</span>
            <select name="b_month" class="textfield02" id="b_month">
              <option value="0" selected="selected">Select</option>
              
                <option value="01">01 - January</option>
                <option value="02">02 - February</option>
                <option value="03">03 - March</option>
                <option value="04">04 - April</option>
                <option value="05">05 - May</option>
                <option value="06">06 - June</option>
                <option value="07">07 - July</option>
                <option value="08">08 - August</option>
                <option value="09">09 - September</option>
                <option value="10">10 - October</option>
                <option value="11">11 - November</option>
                <option value="12">12 - December</option>
            </select>
            <span class="black12">Year</span>
            <select name="b_year" class="textfield02" id="b_year">
              <option>Select</option>
                <option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option>
            </select></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Gender<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3">
            <label>
                <input type="radio" name="sex" value="1" id="sex_01" />
                <span class="black12">Male</span>
            </label>
            <label>
                  <input type="radio" name="sex" value="2" id="sex_02" />
                  <span class="black12">Female</span>
            </label>
            <label>
                  <input type="radio" name="sex" value="3" id="sex_03" />
                  <span class="black12">Others</span>
            </label></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black14">Nationality<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black14">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="30%" align="left" valign="middle"><select name="nationality" class="textfield02" id="nationality">
                <option value="Bangladeshi" selected="selected">Bangladeshi</option>
                </select></td>
              <td width="40%" align="right" valign="middle" class="black14">Religion<span class="red12">*</span> :</td>
              <td width="25%" align="right" valign="middle"><select name="religion" class="textfield02" id="religion">
                <option value="0" selected="selected">Select One</option>
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christianity">Christianity</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Others">Others</option>
              </select></td>
              <td width="5%" align="left" valign="middle">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">National ID<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black14">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
                  <input name="nid" type="radio" id="nid_01" value="1" /> <span class="black12">Yes</span></label>
                <label><span class="black11">[National ID Number]</span> 
                  <input name="nid_no" id="xplod" type="text" class="DEPENDS ON nid BEING 1"  maxlength="20" onkeypress="return alpha(event,numbers)"></label>
                <label><input type="radio" name="nid" value="2" id="nid_02" /> <span class="black12">No</span></label></td>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">Passport ID<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black14">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
            <input type="radio" name="passport" value="1" id="passpost_01" />
            <span class="black12">Yes</span></label>
            <label><span class="black11">[Passport Number]</span>
              <input name="passport_no" type="text" id="xplod" class="DEPENDS ON passport BEING 1" onkeypress="return alpha(event,numbers+letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" />
            </label>
            <label>
              <input type="radio" name="passport" value="2" id="passpost_02" />
              <span class="black12">No</span>
            </label>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">Birth Registration<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black14">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
            <input type="radio" name="breg" value="1" id="breg_01" />
            <span class="black12">Yes</span></label>
            <label><span class="black11">[Registration Number]</span>
              <input name="breg_no" type="text" id="xplod" class="DEPENDS ON breg BEING 1" onkeypress="return alpha(event,numbers+letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" />
            </label>
            <label>
              <input type="radio" name="breg" value="2" id="breg_02" />
              <span class="black12">No</span>
            </label>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Marital Status<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3"><label>
            <input type="radio" name="mstatus" value="1" id="mstatus_01" />
            <span class="black12">Married</span></label>
            <label><span class="black11">[Spouse Name]</span>
              <input name="s_name" type="text" id="xplod" class="DEPENDS ON mstatus BEING 1" onkeypress="return alpha(event,letters)" onBlur="javascript:{this.value = this.value.toUpperCase(); }" />
            </label>
            <label>
              <input type="radio" name="mstatus" value="2" id="mstatus_02" />
              <span class="black12">Single</span>
            </label></td>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Freedom Fighter<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3"><select name="ffq" class="textfield02" id="ffq">
                <option value="0" selected="selected">Select One</option>
                <option value="2">Child of Freedom Fighter</option>
                <option value="3">Grand Child of Freedom Fighter</option>
              </select></td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td td height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black14">Present Address<span class="red12">*</span></td>
                </tr>
                <tr>
                  <td width="47%" align="left" valign="middle">Care of</td>
                  <td width="53%" align="left" valign="middle">
                    <input name="present_care" type="text" class="textfield06" id="present_care" onkeypress="return alpha(event,letters)" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">
                  Village/Town/<br />
                  Road/House/Flat</td>
                  <td width="53%" align="left" valign="middle">
                    <textarea name="present_vill" cols="45" rows="2" class="textfield06" id="present_vill" onkeypress="return alpha(event,letters+numbers+custom)"></textarea>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">District</td>
                  <td align="left" valign="middle">
                    <select name="menu_one" class="textfield06a" id="menu_one" onchange="get_one_list(this); changeVisibility1(this)">
                    <option value="0" selected="selected">Select a District</option>
                    <option value="26">Bagerhat</option><option value="64">Bandarban</option><option value="32">Barguna</option><option value="29">Barisal</option><option value="30">Bhola</option><option value="10">Bogra</option><option value="54">Brahamanbaria</option><option value="56">Chandpur</option><option value="13">Chapai Nawabganj</option><option value="60">Chittagong</option><option value="19">Chuadanga</option><option value="55">Comilla</option><option value="61">Cox`s Bazar</option><option value="40">Dhaka</option><option value="03">Dinajpur</option><option value="45">Faridpur</option><option value="59">Feni</option><option value="08">Gaibanda</option><option value="41">Gazipur</option><option value="47">Gopalganj</option><option value="53">Habiganj</option><option value="09">Jaipurhat</option><option value="36">Jamalpur</option><option value="23">Jessore</option><option value="28">Jhalokhathi</option><option value="20">Jhenaidah</option><option value="62">Khagrachhari</option><option value="25">Khulna</option><option value="38">Kishorganj</option><option value="07">Kurigram</option><option value="17">Kushtia</option><option value="05">Lalmonirhat</option><option value="57">Luxmipur</option><option value="48">Madaripur</option><option value="21">Magura</option><option value="39">Manikganj</option><option value="18">Meharpur</option><option value="52">Mouluvibazar</option><option value="44">Munshiganj</option><option value="34">Mymensingh</option><option value="11">Naogaon</option><option value="22">Narail</option><option value="43">Narayanganj</option><option value="42">Narsingdi</option><option value="12">Natore</option><option value="33">Netrokona</option><option value="04">Nilphamari</option><option value="58">Noakhali</option><option value="16">Pabna</option><option value="01">Panchagarh</option><option value="31">Patuakhali</option><option value="27">Pirojpur</option><option value="46">Rajbari</option><option value="14">Rajshahi</option><option value="63">Rangamati</option><option value="06">Rangpur</option><option value="24">Satkhira</option><option value="49">Shariatpur</option><option value="35">Sherpur</option><option value="15">Sirajganj</option><option value="50">Sunamganj</option><option value="51">Sylhet</option><option value="37">Tangail</option><option value="02">Thakurgaon</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">P.S./Upazila <img src="img/loader.gif" border="0" align="absmiddle" name ="loading1" style="visibility:hidden"/></td>
                  <td align="left" valign="middle">
                    <select name="menu_one_list" class="textfield06a" id="menu_one_list" onchange="Show_ops1TextBox(this.id,'ops1');">
                      <option value="0"selected="selected">Select a P.S./Upazila</option>
                      </select><br />
                      <input name="ops1" type="text" class="textfield06" id="ops1" style="VISIBILITY: hidden" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office</td>
                  <td align="left" valign="middle">
                    <input name="present_post" type="text" class="textfield06" id="present_post" onkeypress="return alpha(event,letters)" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code</td>
                  <td align="left" valign="middle">
                    <input name="present_pcode" type="text" class="textfield06" id="present_pcode" onkeypress="return alpha(event,numbers)" />
                  </td>
                </tr>
              </table></td>
              <td width="1%" align="left" valign="middle">&nbsp;</td>
              <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td td height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black14">Permanent Address<span class="red12">*</span> <input name="copy" type="checkbox" id="copy" value="yes" onClick="fd();"/><span class="black11i">same as present address</span></td>
                </tr>
                <tr>
                  <td width="47%" align="left" valign="middle">Care of</td>
                  <td width="53%" align="left" valign="middle">
                    <input name="permanent_care" type="text" class="textfield06" id="permanent_care" onkeypress="return alpha(event,letters)" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">
                  Village/Town/<br />
                  Road/House/Flat</td>
                  <td width="53%" align="left" valign="middle">
                    <textarea name="permanent_vill" cols="45" rows="2" class="textfield06" id="permanent_vill" onkeypress="return alpha(event,letters+numbers+custom)"></textarea>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Home District</td>
                  <td align="left" valign="middle">
                    <select name="menu_two" class="textfield06a" id="menu_two" onchange="get_two_list(this); changeVisibility2(this)">
                    <option value="0" selected="selected">Select a District</option>
                    <option value="26">Bagerhat</option><option value="64">Bandarban</option><option value="32">Barguna</option><option value="29">Barisal</option><option value="30">Bhola</option><option value="10">Bogra</option><option value="54">Brahamanbaria</option><option value="56">Chandpur</option><option value="13">Chapai Nawabganj</option><option value="60">Chittagong</option><option value="19">Chuadanga</option><option value="55">Comilla</option><option value="61">Cox`s Bazar</option><option value="40">Dhaka</option><option value="03">Dinajpur</option><option value="45">Faridpur</option><option value="59">Feni</option><option value="08">Gaibanda</option><option value="41">Gazipur</option><option value="47">Gopalganj</option><option value="53">Habiganj</option><option value="09">Jaipurhat</option><option value="36">Jamalpur</option><option value="23">Jessore</option><option value="28">Jhalokhathi</option><option value="20">Jhenaidah</option><option value="62">Khagrachhari</option><option value="25">Khulna</option><option value="38">Kishorganj</option><option value="07">Kurigram</option><option value="17">Kushtia</option><option value="05">Lalmonirhat</option><option value="57">Luxmipur</option><option value="48">Madaripur</option><option value="21">Magura</option><option value="39">Manikganj</option><option value="18">Meharpur</option><option value="52">Mouluvibazar</option><option value="44">Munshiganj</option><option value="34">Mymensingh</option><option value="11">Naogaon</option><option value="22">Narail</option><option value="43">Narayanganj</option><option value="42">Narsingdi</option><option value="12">Natore</option><option value="33">Netrokona</option><option value="04">Nilphamari</option><option value="58">Noakhali</option><option value="16">Pabna</option><option value="01">Panchagarh</option><option value="31">Patuakhali</option><option value="27">Pirojpur</option><option value="46">Rajbari</option><option value="14">Rajshahi</option><option value="63">Rangamati</option><option value="06">Rangpur</option><option value="24">Satkhira</option><option value="49">Shariatpur</option><option value="35">Sherpur</option><option value="15">Sirajganj</option><option value="50">Sunamganj</option><option value="51">Sylhet</option><option value="37">Tangail</option><option value="02">Thakurgaon</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">P.S./Upazila <img src="img/loader.gif" border="0" align="absmiddle" name ="loading2" style="visibility:hidden"/></td>
                  <td align="left" valign="middle">
                    <select name="menu_two_list" class="textfield06a" id="menu_two_list" onchange="Show_ops1TextBox(this.id,'ops2');">
                      <option  value="0"selected="selected">Select a P.S./Upazila</option>
                    </select><br />
                    <input name="ops2" type="text" class="textfield06" id="ops2" style="VISIBILITY: hidden" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office</td>
                  <td align="left" valign="middle">
                    <input name="permanent_post" type="text" class="textfield06" id="permanent_post" onkeypress="return alpha(event,letters)" />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code</td>
                  <td align="left" valign="middle">
                    <input name="permanent_pcode" type="text" class="textfield06" id="permanent_pcode" onkeypress="return alpha(event,numbers)" />
                  </td>
                </tr>
              </table></td>
              <td width="3%" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Mobile Number<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black14">
            <tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="mobileno" type="text" class="textfield02" id="mobileno" maxlength="11" onkeypress="return alpha(event,numbers)" /></td>
              <td width="70%" align="left" valign="middle" class="red11">Please mention a Mobile Number of any operator. Relevant information will be sent by SMS to that number.</td>
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
        <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black14">Confirm Mobile<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black14">
            <tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="confirmmobile" type="text" class="textfield02" id="confirmmobile" maxlength="11" onkeypress="return alpha(event,numbers)" /></td>
              <td width="70%" align="left" valign="middle" class="black11">&laquo; Please Retype Mobile Number.</td>
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black14">eMail<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><input name="email" type="text" class="textfield03" id="email" /></td>
        </tr>

        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="97%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" height="30" align="left" valign="middle">Academic Qualifications:</td>
                  <td width="1%" height="30" align="left" valign="middle">&nbsp;</td>
                  <td width="49%" height="30" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">SSC or Equivalent Level<span class="red12">*</span></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam1" class="textfield06a" id="exam1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">S.S.C</option><option value="2">Dakhil</option><option value="3">S.S.C Vocational</option><option value="4">O Level/Cambridge</option><option value="5">S.S.C Equivalent</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute1" class="textfield06a" id="institute1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Comilla</option><option value="3">Rajshahi</option><option value="4">Jessore</option><option value="5">Chittagong</option><option value="6">Barisal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="20">Others</option>
                          </select></td>
                        </tr>
                         <tr>
                          <td height="25" align="left" valign="middle">Roll No</td>
                          <td height="25" align="left" valign="middle"><input name="roll1" type="text" class="textfield07b" id="roll1" onkeypress="return alpha(event,numbers)" /></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black14" style="margin-bottom:1px;">
                            <tr>
                              <td width="55%" align="left" valign="middle"><select name="result1" class="textfield07" id="result1" onchange="Show_GpaTextBox(this.id,'result_gpa1');" >
                                <option value="0"selected="selected">Select</option>
                                <option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option value="4">GPA(out of 4)</option>
                                <option value="5">GPA(out of 5)</option>
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks1">
                              <input name="result_gpa1" class="textfield_gpa" id="result_gpa1" style="VISIBILITY: hidden" onkeypress="return alpha(event,flot)" size="4" maxlength="4" /></td>
                              <td align="left" valign="middle" id="Caption_Marks1" class="black11">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group</td>
                          <td align="left" valign="middle"><select name="subject1" class="textfield07" id="subject1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="9">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year1" class="textfield07" id="year1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                  <td rowspan="2" align="left" valign="middle">&nbsp;</td>
                  <td class="bdr02" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">HSC or Equivalent Level<span class="red12">*</span></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam2" class="textfield06a" id="exam2" onchange="get_sub_hsc(this), changeVisibility_hsc(this)">
                            <option  value="0"selected="selected">Select One</option>
                            <option value="1">H.S.C</option><option value="2">Alim</option><option value="3">Business Management</option><option value="4">Diploma in Engineering</option><option value="5">A Level/Sr. Cambridge</option><option value="6">H.S.C Equivalent</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute2" class="textfield06a" id="institute2">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Comilla</option><option value="3">Rajshahi</option><option value="4">Jessore</option><option value="5">Chittagong</option><option value="6">Barisal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="20">Others</option>
                          </select></td>
                        </tr>
                        <td height="25" align="left" valign="middle">Roll No</td>
                        <td height="25"align="left" valign="middle"><input name="roll2" type="text" class="textfield07b" id="roll2" onkeypress="return alpha(event,numbers)"/></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black14" style="margin-bottom:1px;">
                            <tr>
                              <td width="55%" align="left" valign="middle"><select name="result2" class="textfield07" id="result2" onchange="Show_GpaTextBox(this.id,'result_gpa2');" >
                                <option value="0"selected="selected">Select</option>
                                <option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option value="4">GPA(out of 4)</option>
                                <option value="5">GPA(out of 5)</option>
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks2"><input name="result_gpa2" class="textfield_gpa" id="result_gpa2" style="VISIBILITY: hidden"  onkeypress="return alpha(event,flot)" size="4" maxlength="4" /></td>
                            <td width="20%" align="left" valign="middle" id="Caption_Marks2" class="black11">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group <img src="img/loader.gif" border="0" align="absmiddle" name ="loading_hsc" style="visibility:hidden"/></td>
                          <td align="left" valign="middle"><select name="subject2" class="textfield07" id="subject2">
                            <option value="0"selected="selected">Select One</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year2" class="textfield07" id="year2">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                </tr>
              </table></td>
              <td width="3%" align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold">Graduation/Equivalent Level</td>
                  <td align="left" valign="middle" bgcolor="#A2A2A2" class="subblack14">&nbsp;</td>
                </tr>
                <tr>
                  <td width="19%" align="left" valign="top">Examination</td>
                  <td width="34%" align="left" valign="middle">
                    <select name="exam3" class="textfield06a" id="exam3" onchange="get_sub_gra(this), Show_ExamTextBox(this.id,'other_exam3'), changeVisibility3(this);">
                      <option  value="0"selected="selected">Select One</option>
                      <option value="1">B.Sc (Engineering/Architecture)</option><option value="4">Honours</option><option value="5">Pass Course</option>
                    </select>
                    <input name="other_exam3" type="text" class="textfield06" id="other_exam3" style="VISIBILITY: hidden" onkeypress="return alpha(event,letters)" />
                  </td>
                  <td width="17%" align="left" valign="top">Result</td>
                  <td width="30%" align="left" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="black14" style="margin-bottom:1px;">
                    <tr>
                      <td width="55%" align="left" valign="middle">
                        <select name="result3" class="textfield07" id="result3" onchange="Show_GpaTextBox(this.id,'result_gpa3');" >
                            <option value="0"selected="selected">Select One</option>
                            <option value="1">1st Class</option>
                            <option value="2">2nd Class</option>
                            <option value="3">3rd Class</option>
                            <option value="4">CGPA(out of 4)</option>
                            <option value="5">CGPA(out of 5)</option>
                        </select>
                      </td>
                      <td width="25%" align="left" valign="middle" id="TextBox_Marks3">
                      <input name="result_gpa3" class="textfield_gpa" id="result_gpa3" style="VISIBILITY: hidden" onkeypress="return alpha(event,flot)" size="4" maxlength="4" /></td>
                    <td width="20%" align="left" valign="middle" id="Caption_Marks3" class="black11">&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">Subject/Degree <img src="img/loader.gif" border="0" align="absmiddle" name ="loading3" style="visibility:hidden"/></td>
                  <td align="left" valign="top">
                    <select name="subject3" class="textfield06a" id="subject3" onchange="Show_SubTextBox(this.id,'other_subject3');">
                      <option value="0"selected="selected">Select One</option>
                    </select>
                    <input name="other_subject3" type="text" class="textfield06" id="other_subject3" style="VISIBILITY: hidden" onkeypress="return alpha(event,letters)" />
                  </td>
                  <td align="left" valign="top">Passing Year</td>
                  <td align="left" valign="top">
                    <select name="year3" class="textfield07" id="year3">
                      <option value="0" selected="selected">Select One</option>
                      <option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">University/Institute</td>
                  <td align="left" valign="middle"><select name="institute3" class="textfield06a" id="institute3" onchange="Show_UniTextBox(this.id,'other_institute3');">
                        <option value="0"selected="selected">Select One</option>
                        <option value="111">Bangabandhu Sheikh Mujib Medical University</option><option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="113">Bangladesh Agricultural University,Mymensingh</option><option value="114">Bangladesh Open University</option><option value="115">Bangladesh University of Engineering & Technology</option><option value="116">Bangladesh University of Professionals</option><option value="117">Chittagong University of Engineering & Technology</option><option value="118">Chittagong Veterinary and Animal Sciences University</option><option value="119">Comilla University</option><option value="120">Dhaka University</option><option value="121">Dhaka University of Engineering & Technology</option><option value="122">Hajee Mohammad Danesh Science & Technology University</option><option value="123">Islamic University</option><option value="124">Jagannath University</option><option value="125">Jahangirnagar University</option><option value="126">Jatiya Kabi Kazi Nazrul Islam University</option><option value="127">Jessore Science & Technology University</option><option value="128">Khulna University</option><option value="129">Khulna University of Engineering and Technology</option><option value="130">Mawlana Bhashani Science & Technology University</option><option value="131">National University</option><option value="132">Noakhali Science & Technology University</option><option value="133">Pabna University of Science and Technology</option><option value="134">Patuakhali Science And Technology University</option><option value="135">Rajshahi University</option><option value="136">Rajshahi University of Engineering & Technology</option><option value="137">Rangpur University</option><option value="138">Shahjalal University of Science & Technology</option><option value="139">Sher-e-Bangla Agricultural University</option><option value="140">Sylhet Agricultural University</option><option value="141">University of Chittagong</option><option value="222">Ahsanullah University of Science and Technology</option><option value="223">America Bangladesh University</option><option value="224">American International University Bangladesh</option><option value="225">ASA University Bangladesh</option><option value="226">Asian University of Bangladesh</option><option value="227">Atish Dipankar University of Science & Technology</option><option value="228">Bangladesh Islami University</option><option value="229">Bangladesh University</option><option value="230">Bangladesh University of Business & Technology (BUBT)</option><option value="231">BGC Trust University Bangladesh, Chittagong</option><option value="232">BRAC University</option><option value="233">Central Women's University</option><option value="234">City University</option><option value="235">Daffodil International University</option><option value="236">Darul Ihsan University</option><option value="237">Dhaka International University</option><option value="238">East Delta University , Chittagong</option><option value="239">East West University</option><option value="240">Eastern University</option><option value="241">Gono Bishwabidyalay</option><option value="242">Green University of Bangladesh</option><option value="243">IBAIS University</option><option value="244">Independent University, Bangladesh</option><option value="245">International Islamic University, Chittagong</option><option value="246">International University of Business Agriculture & Technology</option><option value="247">Leading University, Sylhet</option><option value="248">Manarat International University</option><option value="249">Metropolitan University, Sylhet</option><option value="250">North South University</option><option value="251">Northern University Bangladesh</option><option value="252">Premier University, Chittagong</option><option value="253">Presidency University</option><option value="254">Prime University</option><option value="255">Primeasia University</option><option value="256">Queens University</option><option value="257">Royal University of Dhaka</option><option value="258">Shanto Mariam University of Creative Technology</option><option value="259">Southeast University</option><option value="260">Southern University of Bangladesh , Chittagong</option><option value="261">Stamford University, Bangladesh</option><option value="262">State University Of Bangladesh</option><option value="263">Sylhet International University, Sylhet</option><option value="264">The Millenium University</option><option value="265">The Peoples University of Bangladesh</option><option value="266">The University of Asia Pacific</option><option value="267">United International University</option><option value="268">University of Development Alternative</option><option value="269">University of Information Technology & Sciences</option><option value="270">University of Liberal Arts Bangladesh</option><option value="271">University of Science & Technology, Chittagong</option><option value="272">University of South Asia</option><option value="273">Uttara University</option><option value="274">Victoria University of Bangladesh</option><option value="275">World University of Bangladesh</option><option value="333">Asian University for Women</option><option value="334">Islamic University of Technology</option><option value="335">South Asian University</option><option value="401">Dhaka Medical College</option><option value="402">Sir Salimullah Medical College</option><option value="403">Mymensingh Medical College</option><option value="404">Chittagong Medical College</option><option value="405">Rajshahi Medical College</option><option value="406">MAG Osmani Medical College</option><option value="407">Sher-E-Bangla Medical College</option><option value="408">Rangpur Medical College</option><option value="409">Comilla Medical College</option><option value="410">Khulna Medical College</option><option value="411">Shaheed Ziaur Rahman Medical College</option><option value="412">Dinajpur Medical College</option><option value="413">Faridpur Medical College</option><option value="414">Shaheed Suhrawardy Medical College</option><option value="415">Pabna Medical College</option><option value="416">Noakhali Medical College</option><option value="417">Cox's Bazar Medical College</option><option value="418">Jessore Medical College</option><option value="419">Shaheed Nazrul Islam Medical College</option><option value="420">Kushtia Medical College</option><option value="421">Satkhira Medical College</option><option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="501">Feni Medical College,Feni</option><option value="502">Gono Bishwabidyalay, Savar, Dhaka</option><option value="503">Ad-din Womens Medical College, Dhaka</option><option value="504">Anwer Khan Modern Medical College, Dhaka</option><option value="505">Bangladesh Medical College</option><option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="507">BGC Trust Medical College, Chittagong</option><option value="508">Central Medical College, Comilla</option><option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="510">Community Based Medical College (cbmc), Mymensingh</option><option value="511">Community Medical College, Dhaka</option><option value="512">Delta Medical College, Dhaka</option><option value="513">Dhaka National Medical College</option><option value="514">Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet</option><option value="515">Eastern Medical College, Comilla</option><option value="516">Enam Medical College, Savar, Dhaka</option><option value="517">Sylhet Women`s Medical College, Sylhet</option><option value="518">Green Life Medical College,Dhaka</option><option value="519">Holy Family Red Crescent Medical College, Dhaka</option><option value="520">Ibrahim Medical College, Dhaka</option><option value="521">Ibn Sina Medical College, Dhaka</option><option value="522">International Medical College, Gazipur</option><option value="523">Islami Bank Medical College, Rajshahi</option><option value="524">Jahurul Islam Medical College, Kishoregonj</option><option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="526">Khawja Yunus Ali Medical College, Sirajganj</option><option value="527">Kumudini Medical College, Tangail</option><option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="529">Maulana Bhasani Medical College</option><option value="530">Medical College for Women and Hospital, Dhaka</option><option value="531">Nightingale Medical College, Dhaka</option><option value="532">North Bengal Medical College, Sirajganj</option><option value="533">North East Medical College, Sylhet</option><option value="534">Northern International Medical College, Dhaka</option><option value="535">Northern Private Medical College, Rangpur</option><option value="536">Popular Medical College & Hospital, Dhaka</option><option value="537">Prime Medical College, Rangpur</option><option value="538">Rangpur Community Hospital Medical College</option><option value="539">Sahabuddin Medical College and Hospital</option><option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="541">Shahabuddin Medical College, Dhaka</option><option value="542">Z. H. Sikder Women`s Medical College</option><option value="543">Southern Medical College, Chittagong</option><option value="544">Tairunnessa Memorial Medical College, Gazipur</option><option value="545">TMSS Medical College,Bogra</option><option value="546">University Of Science and Technology Chittagong. IAMS</option><option value="547">Uttara Adhunik Medical College,Dhaka</option><option value="548">Military Institute of Science and Technology (MIST)</option><option value="999">Others</option>
                      </select>
                      <input name="other_institute3" type="text" class="textfield06" id="other_institute3" style="VISIBILITY: hidden" onkeypress="return alpha(event,letters)" /></td>
                  <td align="left" valign="top">Course Duration</td>
                  <td align="left" valign="top">
                    <select name="duration3" class="textfield07" id="duration3">
                      <option>Select One</option>
                      <option value="01">01 Year</option>
                      <option value="02">02 Years</option>
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>
                      <option value="06">06 Years</option>
                    </select>
                  </td>
                </tr>
              </table>
              </td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr class="gap01">
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            
            
            
          </table></td>
        </tr>
        <tr>
          <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="97%" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td colspan="3" height="25" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold">Job Experience
                        <input name="job_no" type="checkbox" id="job_no" value="1" onclick="jfd();" />
                        <span class="black10">if applicable
                        </td>
                      <td align="left" valign="middle" bgcolor="#A2A2A2" class="black12">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="19%" align="left" valign="middle">Total Experience</td>
                      <td width="36%" align="left" valign="middle"><select name="total_exp" class="textfield02a" id="total_exp" disabled>
                            <option selected="selected" value="0">Year</option>
                            <option value="1">01 Year</option>
                            <option value="2">02 Years</option>
                            <option value="3">03 Years</option>
                            <option value="4">04 Years</option>
                            <option value="5">05 Years</option>
                            <option value="6">06 Years</option>
                            <option value="7">07 Years</option>
                            <option value="8">08 Years</option>
                            <option value="9">09 Years</option>
                            <option value="10">10 Years</option>
                            <option value="11">11 Years</option>
                            <option value="12">12 Years</option>
                            <option value="13">13 Years</option>
                            <option value="14">14 Years</option>
                            <option value="15">15 Years</option>
                        </select></td>
                      <td width="15%" align="left" valign="middle">&nbsp;</td>
                      <td width="30%" align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="19%" align="left" valign="middle">Designation/Post</td>
                      <td width="36%" align="left" valign="middle">
                        <input name="job_post1" type="text" class="textfield06" id="job_post1" onkeypress="return alpha(event,letters)" disabled />
                      </td>
                      <td width="15%" align="left" valign="middle">Organization</td>
                      <td width="30%" align="left" valign="middle">
                        <input name="organization1" type="text" class="textfield06" id="organization1" onkeypress="return alpha(event,letters)" disabled />
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Length of Service</td>
                      <td align="left" valign="middle"><select name="t_day1" class="textfield02a" id="t_day1" disabled>
                        <option selected="selected" value="0">Day</option>
                        <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                        </select>
                         <select name="t_month1" class="textfield02a" id="t_month1" disabled>
                          <option selected="selected" value="0">Month</option>
                          
                <option value="01">01 - January</option>
                <option value="02">02 - February</option>
                <option value="03">03 - March</option>
                <option value="04">04 - April</option>
                <option value="05">05 - May</option>
                <option value="06">06 - June</option>
                <option value="07">07 - July</option>
                <option value="08">08 - August</option>
                <option value="09">09 - September</option>
                <option value="10">10 - October</option>
                <option value="11">11 - November</option>
                <option value="12">12 - December</option>
                          </select>
                        <select name="t_year1" class="textfield02a" id="t_year1" disabled>
                          <option selected="selected" value="0">Year</option>
                          <option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
                          </select>
                        <br />
                        ------------------- to -------------------<br />
                        <select name="f_day1" class="textfield02a" id="f_day1" disabled>
                          <option selected="selected" value="0">Day</option>
                          <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                          </select>
                        <select name="f_month1" class="textfield02a" id="f_month1" disabled>
                          <option value="0" selected="selected">Month</option>
                          
                <option value="01">01 - January</option>
                <option value="02">02 - February</option>
                <option value="03">03 - March</option>
                <option value="04">04 - April</option>
                <option value="05">05 - May</option>
                <option value="06">06 - June</option>
                <option value="07">07 - July</option>
                <option value="08">08 - August</option>
                <option value="09">09 - September</option>
                <option value="10">10 - October</option>
                <option value="11">11 - November</option>
                <option value="12">12 - December</option>
                          </select>
                        <select name="f_year1" class="textfield02a" id="f_year1" disabled>
                          <option selected="selected" value="0">Year</option>
                           <option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
                          </select>
                        <br /></td>
                      <td align="left" valign="middle">Responsibilities</td>
                      <td align="left" valign="middle">
                        <textarea name="job_res1" cols="45" rows="4" class="textfield06" id="job_res1" onkeypress="return alpha(event,letters+numbers+custom)" disabled></textarea>
                        </td>
                    </tr>
                  </table></td>
                  <td width="3%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="60" align="center" valign="middle"><div id='job_fields'></div>
                     <div id='job_addmorelink'>
                        <span class="red10bold">Adding more field may blank some previous field(s)! So first add fields as much as needed</span></br>
                        <input name="job_button" id="job_button" type="button" onClick="addJobField(2)" value="Add More Job Description!" disabled>
                        <input type="hidden" name="number_job_fields" value="2" />
                    </div></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              </tr>
          <tr>
              <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">
              <input name="cl" type="checkbox" id="cl" value="1" onclick="clfd();" /><br />
                Computer Literacy<br />
                <span class="black11">within 250 characters</span></td>
              <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
              <td align="left" valign="middle" bgcolor="#E3E3E3">
              <textarea name="computer_literacy" rows="4" class="textfieldLarge" id="computer_literacy" disabled></textarea></td>
          </tr>
          <tr>
              <td align="left" valign="middle" bgcolor="#E3E3E3" class="black14">
              <input name="ca" type="checkbox" id="ca" value="1" onclick="cafd();" /><br />
                Extra Curricular<br />
                <span class="black11">within 250 characters</span></td>
              <td align="center" valign="middle" bgcolor="#E3E3E3" class="black14">:</td>
              <td align="left" valign="middle" bgcolor="#E3E3E3">
              <textarea name="curricular" rows="4" class="textfieldLarge" id="curricular" disabled></textarea></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="48%" class="bdr02"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" bgcolor="#A2A2A2" class="black14">&nbsp;References 01<span class="red12">*</span></td>
                    </tr>
                  <tr>
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                      <tr>
                        <td width="48%" height="30">Name</td>
                        <td width="42%" height="30"><input name="ref_name_1" type="text" class="textfield06" id="ref_name_1" onkeypress="return alpha(event,letters)" /></td>
                        </tr>
                      <tr>
                        <td>Designation</td>
                        <td><input name="ref_post_1" type="text" class="textfield06" id="ref_post_1" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>Organization/Address</td>
                        <td><input name="ref_org_1" type="text" class="textfield06" id="ref_org_1" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>Contact Number</td>
                        <td><input name="ref_contact_1" type="text" class="textfield06" id="ref_contact_1" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>eMail</td>
                        <td><input name="ref_mail_1" type="text" class="textfield06" id="ref_mail_1" /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                <td width="1%">&nbsp;</td>
                <td width="48%" class="bdr02"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" bgcolor="#A2A2A2" class="black14">&nbsp;References 02<span class="red12">*</span></td>
                    </tr>
                  <tr>
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                      <tr>
                        <td width="58%" height="30">Name</td>
                        <td width="42%" height="30"><input name="ref_name_2" type="text" class="textfield06" id="ref_name_2" onkeypress="return alpha(event,letters)" /></td>
                        </tr>
                      <tr>
                        <td>Designation</td>
                        <td><input name="ref_post_2" type="text" class="textfield06" id="ref_post_2" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>Organization/Address</td>
                        <td><input name="ref_org_2" type="text" class="textfield06" id="ref_org_2" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>Contact Number</td>
                        <td><input name="ref_contact_2" type="text" class="textfield06" id="ref_contact_2" onkeypress="return alpha(event,letters+numbers+custom)" /></td>
                        </tr>
                      <tr>
                        <td>eMail</td>
                        <td><input name="ref_mail_2" type="text" class="textfield06" id="ref_mail_2" /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                <td width="3%">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr>
              <td align="left" valign="middle" bgcolor="#FFFFFF" class="black14">Validation Code<span class="red12">*</span></td>
              <td align="center" valign="middle" bgcolor="#FFFFFF" class="black14">:</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="43%" align="left" valign="middle"><iframe name="t_img" src="txtimg.php?v_code=695VO52O" width="220" height="40" marginwidth="5" marginheight="5" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe></td>
                  <td width="37%" align="left" valign="middle"><input type="hidden" name="code" id="code" value="695VO52O" />
                <input name="validation" type="text" class="textfield01" id="validation" /></td>
                <td width="20%" align="left" valign="middle"><span class="black10">&laquo; Enter the Code</span></td>
                </tr>
              </table></td>
            </tr>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2" class="black11">
            <input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)"/>
            The above information is correct and I would like to go to the next step.</td>
        </tr>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="button" id="button" value="   Next   " disabled /></td>
        </tr>
        <tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          <img name="im" src="images/blank.png"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="#006699" class="black10">For any inconvenience, please contact with 9553663, 9550514, 9560064, 9558054 9 (Ext-211 or 283 or 242)</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="80%" align="left" valign="middle">&copy;2015 Power Grid Company of Bangladesh Limited (PGCB), All Rights Reserved.</td>
          <td width="10%" align="left" valign="middle">Powered by</td>
          <td width="9%" align="left" valign="middle"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="61" height="38">
            <param name="movie" value="tt_logo.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="6.0.65.0" />
            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="tt_logo.swf" width="61" height="38">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <param name="swfversion" value="6.0.65.0" />
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
</form><script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-2.newrelic.com","5bc9520784","3426442","MlJTYUADDxUAUUReXQsYZEdbTQAWEV5ZVFMRXl5bHBIJFg==",0,1013,new Date().getTime(),"","","","",""]);</script></body>
</html>
