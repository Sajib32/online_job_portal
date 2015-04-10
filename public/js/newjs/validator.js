function app_form_validator(theForm)
{
	// Applicant Name
	if (theForm.name.value == "")
	{
		alert("Please Enter Applicant's Name.");
		theForm.name.focus();
		return (false);
	}
	// Father Name
	if (theForm.fathername.value == "")
	{
		alert("Please Enter Father's Name.");
		theForm.fathername.focus();
		return (false);
	}
	// Mother Name
	if (theForm.mothername.value == "")
	{
		alert("Please Enter Mother's Name.");
		theForm.mothername.focus();
		return (false);
	}
	// Date of Birth - Day
	if (theForm.b_day.selectedIndex <= 0)
	{
		alert("Please Select Birth Day.");
		theForm.b_day.focus();
		return (false);
	}
	// Date of Birth - Month
	if (theForm.b_month.selectedIndex <= 0)
	{
		alert("Please Select Month of Birth.");
		theForm.b_month.focus();
		return (false);
	}
	// Date of Birth - Year
	if (theForm.b_year.selectedIndex <= 0)
	{
		alert("Please Select Year of Birth.");
		theForm.b_year.focus();
		return (false);
	}
	// Sex - require at least one radio button be selected
	var radioSelected = false;
	for (i = 0;  i < theForm.sex.length;  i++)
	{
		if (theForm.sex[i].checked)
			radioSelected = true;
	}  
	if (!radioSelected)
	{
		alert("Please Select Gender Option.");
		return (false);
	}
	// Religion
	if (theForm.religion.selectedIndex <= 0)
	{
		alert("Please Select Religion Option.");
		theForm.religion.focus();
		return (false);
	}
	// Nantional ID 
	var radioSelected = false;
	var n = 0;
	for (i = 0;  i < theForm.nid.length;  i++)
	{
		if (theForm.nid[i].checked)
		{
			radioSelected = true;
		}
		if (theForm.nid[0].checked)
		{
			if (theForm.nid_no.value == "")
			{
				alert("Please Enter National ID.");
				theForm.nid_no.focus();
				return (false);
			}
		}
		if (theForm.nid[1].checked)
		{
			var n = 1;
		}
	}
	if (!radioSelected)
	{
		alert("Please Select National ID Option.");
		return (false);
	}
	// Passport ID 
	var radioSelected = false;
	var p = 0;
	for (i = 0;  i < theForm.passport.length;  i++)
	{
		if (theForm.passport[i].checked)
		{
			radioSelected = true;
		}
		if (theForm.passport[0].checked)
		{
			if (theForm.passport_no.value == "")
			{
				alert("Please Enter Passport Number.");
				theForm.passport_no.focus();
				return (false);
			}
		}
		if (theForm.passport[1].checked)
		{
			var p = 1;
		}
	}  
	if (!radioSelected)
	{
		alert("Please Select Passport ID Option.");
		return (false);
	}
	
	// Birth Reg 
	var radioSelected = false;
	var b = 0;
	for (i = 0;  i < theForm.breg.length;  i++)
	{
		if (theForm.breg[i].checked)
		{
			radioSelected = true;
		}
		if (theForm.breg[0].checked)
		{
			if (theForm.breg_no.value == "")
			{
				alert("Please Enter Birth Registration Number.");
				theForm.breg_no.focus();
				return (false);
			}
		}
		if (theForm.breg[1].checked)
		{
			var b = 1;
		}
	}  
	if (!radioSelected)
	{
		alert("Please Select Birth Registration Option.");
		return (false);
	}
	
	// no National ID and Passport ID
	var z = n+p+b;
	if (z > 2)
	{
		alert("Applicants Must Have National ID or Passport ID or Birth Registration.");
		return (false);
	}
	// Marital Status
	var radioSelected = false;
	for (i = 0;  i < theForm.mstatus.length;  i++)
	{
		if (theForm.mstatus[i].checked)
		{
			radioSelected = true;
		}
		if (theForm.mstatus[0].checked)
		{
			if (theForm.s_name.value == "")
			{
				alert("Please Enter Spouse Name.");
				theForm.s_name.focus();
				return (false);
			}
		}
	}  
	if (!radioSelected)
	{
		alert("Please Select Marital Status Option.");
		return (false);
	}
	// Fredom Fighter
	if (theForm.ffq.selectedIndex <= 0)
	{
		alert("Please Select Freedom Fighter Option.");
		theForm.ffq.focus();
		return (false);
	}
	
	// Mailing Village
	if (theForm.present_vill.value == "")
	{
		alert("Please Fill up Mailing/Present Address.");
		theForm.present_vill.focus();
		return (false);
	}
	if (theForm.present_vill.value.length > 150)
	{
		alert("Please Enter at Most 150 Characters in the Village Field of Mailing/Present Address.");
		theForm.present_vill.focus();
		return (false);
	}
	// Mailing District
	if (theForm.menu_one.selectedIndex <= 0)
	{
		alert("Please Select District in the Mailing Address.");
		theForm.menu_one.focus();
		return (false);
	}
	// Mailing Upazilla
	if (theForm.menu_one_list.selectedIndex <= 0)
	{
		alert("Please Select Upazila/PS in the Mailing/Present Address.");
		theForm.menu_one_list.focus();
		return (false);
	}
	if (theForm.menu_one_list.value == "Others")
	{
		if (theForm.ops1.value == "")
		{
			alert("Please Enter Upazila/PS in the Mailing/Present Address.");
			theForm.ops1.focus();
			return (false);
		}
	}
	// Mailing Post Office
	if (theForm.present_post.value == "")
	{
		alert("Please  Enter Name of Post Office in the Mailing/Present Address.");
		theForm.present_post.focus();
		return (false);
	}
	
	if (!theForm.copy.checked)
	{
		// Permanent Village
		if (theForm.permanent_vill.value == "")
		{
			alert("Please Fill up Permanent Address.");
			theForm.permanent_vill.focus();
			return (false);
		}
		if (theForm.permanent_vill.value.length > 150)
		{
		alert("Please Enter at Most 150 Characters in the Village Field of Permanent Address.");
		theForm.permanent_vill.focus();
		return (false);
		}
		// Permanent District
		if (theForm.menu_two.selectedIndex <= 0)
		{
			alert("Please Select District in the Permanent Address.");
			theForm.menu_two.focus();
			return (false);
		}
		// Permanent Upazilla
		if (theForm.menu_two_list.selectedIndex <= 0)
		{
			alert("Please Select Upazila/PS in the Permanent Address.");
			theForm.menu_two_list.focus();
			return (false);
		}
		if (theForm.menu_two_list.value == "Others")
		{
			if (theForm.ops2.value == "")
			{
				alert("Please Mention Upazila/PS in the Permanent Address.");
				theForm.ops2.focus();
				return (false);
			}
		}
		// Permanent Post Office
		if (theForm.permanent_post.value == "")
		{
			alert("Please Enter Name of Post Office in the Permanent Address.");
			theForm.permanent_post.focus();
			return (false);
		}
	}
	
  // Contact Mobile
  if (theForm.mobileno.value == "")
  {
		alert("Please Enter Contact Mobile Phone Number.");
		theForm.mobileno.focus();
		return (false);
  }

  	var checkOK = "0123456789";
	var checkStr = theForm.mobileno.value;
	var allValid = true;
	var allNum = "";
	for (i = 0;  i < checkStr.length;  i++)
	{
	ch = checkStr.charAt(i);
	for (j = 0;  j < checkOK.length;  j++)
	if (ch == checkOK.charAt(j))
	break;
	if (j == checkOK.length)
	{
	allValid = false;
	break;
	}
	if (ch != ",")
	allNum += ch;
	}
	if (!allValid)
	{
	alert("Incorrect Mobile Number.");
	theForm.mobileno.focus();
	return (false);
	}

	if (theForm.mobileno.value.length < 11)
	{
		alert("Mobile Number Must be 11 Digits.");
		theForm.mobileno.focus();
		return (false);
	}
	// Confirm Mobile
	if (theForm.mobileno.value != theForm.confirmmobile.value)
	{
		alert("Contact Mobile and Re-type Mobile Number Must be Same.");
		theForm.confirmmobile.focus();
		return (false);
	}
	// email
	if (theForm.email.value == "")
	{
		alert("Please Enter email Addesss.");
		theForm.email.focus();
		return (false);
	}
	// test if valid email address, must have @ and .
	var checkEmail = "@.";
	var checkStr = theForm.email.value;
	var EmailValid = false;
	var EmailAt = false;
	var EmailPeriod = false;
	if (checkStr != "")
	{
		for (i = 0;  i < checkStr.length;  i++)
		{
		ch = checkStr.charAt(i);
		for (j = 0;  j < checkEmail.length;  j++)
		{
		if (ch == checkEmail.charAt(j) && ch == "@")
		EmailAt = true;
		if (ch == checkEmail.charAt(j) && ch == ".")
		EmailPeriod = true;
			  if (EmailAt && EmailPeriod)
				break;
			  if (j == checkEmail.length)
				break;
			}
			// if both the @ and . were in the string
		if (EmailAt && EmailPeriod)
		{
				EmailValid = true
				break;
			}
		}
		if (!EmailValid)
		{
		alert("Invalid eMail Address!");
		theForm.email.focus();
		return (false);
		}
	}
	
	// S.S.C/Equivalent - Exam
	if (theForm.exam1.selectedIndex <= 0)
	{
		alert("Please Select Examination of S.S.C/Equivalent.");
		theForm.exam1.focus();
		return (false);
	}
	// SSC - Board
	if (theForm.institute1.selectedIndex <= 0)
	{
		alert("Please Select S.S.C/Equivalent Board Name.");
		theForm.institute1.focus();
		return (false);
	}
	// S.S.C/Equivalent Roll No
		if (theForm.roll1.value == "")
	{
		alert("Please Enter S.S.C/Equivalent Roll No.");
		theForm.roll1.focus();
		return (false);
	}
	// S.S.C/Equivalent - Result
	if (theForm.result1.selectedIndex <= 0)
	{
		alert("Please Select S.S.C/Equivalent Result.");
		theForm.result1.focus();
		return (false);
	}
	if (theForm.result1.value == "4")
	{
		if (theForm.result_gpa1.value == "" || theForm.result_gpa1.value < 1 || theForm.result_gpa1.value > 4)
		{
			alert("Please Mention S.S.C/Equivalent GPA Correctly.");
			theForm.result_gpa1.focus();
			return (false);
		}
	}
	if (theForm.result1.value == "5")
	{
		if (theForm.result_gpa1.value == "" || theForm.result_gpa1.value < 1 || theForm.result_gpa1.value > 5)
		{
			alert("Please Mention S.S.C/Equivalent GPA Correctly.");
			theForm.result_gpa1.focus();
			return (false);
		}
	}
	// S.S.C/Equivalent - Group
	if (theForm.subject1.selectedIndex <= 0)
	{
		alert("Please Select S.S.C/Equivalent Group.");
		theForm.subject1.focus();
		return (false);
	}
	// S.S.C/Equivalent - year
	if (theForm.year1.selectedIndex <= 0)
	{
		alert("Please Select S.S.C/Equivalent Passing Year.");
		theForm.year1.focus();
		return (false);
	}

	// H.S.C/Equivalent - Exam
	if (theForm.exam2.selectedIndex <= 0)
	{
		alert("Please Select Examination of H.S.C Equivalent.");
		theForm.exam2.focus();
		return (false);
	}
	// H.S.C/Equivalent - Board
	if (theForm.institute2.selectedIndex <= 0)
	{
		alert("Please Select H.S.C/Equivalent Board Name.");
		theForm.institute2.focus();
		return (false);
	}
	// H.S.C/Equivalent Roll No
		if (theForm.roll2.value == "")
	{
		alert("Please Enter H.S.C/Equivalent Roll No.");
		theForm.roll2.focus();
		return (false);
	}
	// H.S.C/Equivalent - Result
	if (theForm.result2.selectedIndex <= 0)
	{
		alert("Please Select H.S.C/Equivalent Result.");
		theForm.result2.focus();
		return (false);
	}
	if (theForm.result2.value == "4")
	{
		if (theForm.result_gpa2.value == "" || theForm.result_gpa2.value < 1 || theForm.result_gpa2.value > 4)
		{
			alert("Please Mention H.S.C/Equivalent GPA Correctly.");
			theForm.result_gpa2.focus();
			return (false);
		}
	}
	if (theForm.result2.value == "5")
	{
		if (theForm.result_gpa2.value == "" || theForm.result_gpa2.value < 1 || theForm.result_gpa2.value > 5)
		{
			alert("Please Mention H.S.C/Equivalent GPA Correctly.");
			theForm.result_gpa2.focus();
			return (false);
		}
	}
	// H.S.C/Equivalent - Group
	if (theForm.subject2.selectedIndex <= 0)
	{
		alert("Please Select H.S.C/Equivalent Group.");
		theForm.subject2.focus();
		return (false);
	}
	// H.S.C/Equivalent - Year
	if (theForm.year2.selectedIndex <= 0)
	{
		alert("Please Select H.S.C/Equivalent Passing Year.");
		theForm.year2.focus();
		return (false);
	}
	// S.S.C/Equivalent < H.S.C/Equivalent
	if(theForm.year1.value >= theForm.year2.value)
	{
		alert("Invalid H.S.C/Equivalent Passing Year.");
		return (false);
	}
	// Require Graduation/Masters Degree
	if(theForm.edu_stage.value > 2)
	{
		// Graduation - Exam
		if (theForm.exam3.selectedIndex <= 0)
		{
			alert("Please Select Examination of Graduation.");
			theForm.exam3.focus();
			return (false);
		}
		if (theForm.exam3.value == "9")
		{
			if (theForm.other_exam3.value == "")
			{
				alert("Please Enter Name of Examination in Gaduation.");
				theForm.other_exam3.focus();
				return (false);
			}
		}
		// Graduation - Subject
		if (theForm.subject3.selectedIndex <= 0)
		{
			alert("Please Select Name of Subject of Graduation.");
			theForm.subject3.focus();
			return (false);
		}
		if (theForm.subject3.value == "999")
		{
			if (theForm.other_subject3.value == "")
			{
				alert("Please Enter Name of Subject in Gaduation.");
				theForm.other_subject3.focus();
				return (false);
			}
		}
		// Graduation - Uni
		if (theForm.institute3.selectedIndex <= 0)
		{
			alert("Please Select University/Institute of Gaduation.");
			theForm.institute3.focus();
			return (false);
		}
		if (theForm.institute3.value == "999")
		{
			if (theForm.other_institute3.value == "")
			{
				alert("Please Enter University/Institute of Gaduation.");
				theForm.other_institute3.focus();
				return (false);
			}
		}
		// Graduation - Result
		if (theForm.result3.selectedIndex <= 0)
		{
			alert("Please Select Graduation Result.");
			theForm.result3.focus();
			return (false);
		}
		if (theForm.result3.value == "4")
		{
			if (theForm.result_gpa3.value == "" || theForm.result_gpa3.value < 1 || theForm.result_gpa3.value > 4)
			{
				alert("Please Mention Graduation GPA Correctly.");
				theForm.result_gpa3.focus();
				return (false);
			}
		}
		if (theForm.result3.value == "5")
		{
			if (theForm.result_gpa3.value == "" || theForm.result_gpa3.value < 1 || theForm.result_gpa3.value > 5)
			{
				alert("Please Mention Graduation GPA Correctly.");
				theForm.result_gpa3.focus();
				return (false);
			}
		}
		// PASSED for MBBS
		if (theForm.exam3.value != "3" && theForm.result3.value == "7")
		{
			alert("Passed Option is Only Allowed for MBBS/BDS.");
			theForm.result3.focus();
			return (false);
		}
		// Graduation - Year
		if (theForm.year3.selectedIndex <= 0)
		{
			alert("Please Select Graduation Passing Year.");
			theForm.year3.focus();
			return (false);
		}
		// Graduation - Duration
		if (theForm.duration3.selectedIndex <= 0)
		{
			alert("Please Select Graduation Course Duration.");
			theForm.duration3.focus();
			return (false);
	
		}
		// H.S.C/Equivalent > GRA
		if(theForm.year2.value >= theForm.year3.value)
		{
			alert("Invalid Graduation Passing Year.");
			return (false);
		}
		//Masters
		if (theForm.edu_mas.value > 0)
		{
			if (theForm.masters.checked)
			{
				// Masters - Exam
				if (theForm.exam4.selectedIndex <= 0)
				{
					alert("Please Select Examination of Masters Degree.");
					theForm.exam4.focus();
					return (false);
				}
				if (theForm.exam4.value == "9")
				{
					if (theForm.other_exam4.value == "")
					{
						alert("Please Enter Name of Examination of Masters Degree.");
						theForm.other_exam4.focus();
						return (false);
					}
				}
				// Masters - Subject
				if (theForm.subject4.selectedIndex <= 0)
				{
					alert("Please Select Name of Subject of Masters Degree.");
					theForm.subject4.focus();
					return (false);
				}
				if (theForm.subject4.value == "999")
				{
					if (theForm.other_subject4.value == "")
					{
						alert("Please Enter Name of Subject of Masters Degree.");
						theForm.other_subject4.focus();
						return (false);
					}
				}
				// Masters - Uni
				if (theForm.institute4.selectedIndex <= 0)
				{
					alert("Please Select University/Institute of Masters Degree.");
					theForm.institute4.focus();
					return (false);
				}
				if (theForm.institute4.value == "999")
				{
					if (theForm.other_institute4.value == "")
					{
						alert("Please Enter Name of University/Institute of Masters Degree.");
						theForm.other_institute4.focus();
						return (false);
					}
				}
				// Masters - Result
				if (theForm.result4.selectedIndex <= 0)
				{
					alert("Please Select Masters Degree Result.");
					theForm.result4.focus();
					return (false);
				}
				if (theForm.result4.value == "4")
				{
					if (theForm.result_gpa4.value == "" || theForm.result_gpa4.value < 1 || theForm.result_gpa4.value > 4)
					{
						alert("Please Mention Masters Degree GPA Correctly.");
						theForm.result_gpa4.focus();
						return (false);
					}
				}
				if (theForm.result4.value == "5")
				{
					if (theForm.result_gpa4.value == "" || theForm.result_gpa4.value < 1 || theForm.result_gpa4.value > 5)
					{
						alert("Please Mention Masters Degree GPA Correctly.");
						theForm.result_gpa4.focus();
						return (false);
					}
				}
				// Masters - Year
				if (theForm.year4.selectedIndex <= 0)
				{
					alert("Please Select Masters Degree Passing Year.");
					theForm.year4.focus();
					return (false);
				}
				// Masters - Duration
				if (theForm.duration4.selectedIndex <= 0)
				{
					alert("Please Select Masters Degree Course Duration.");
					theForm.duration4.focus();
					return (false);
				}
				// GRA > MAS
				if(theForm.year3.value >= theForm.year4.value)
				{
					alert("Invalid Masters Degree Passing Year.");
					return (false);
				}
			}
		}
		
		// Mandatory of Masters
		if (theForm.edu_stage.value == "4")
		{
			if (!theForm.masters.checked)
			{
				alert("Masters Degree is Requried.");
				return (false);
			}
		}
	}
	
	//Job
	if (theForm.job_exp.value > 1)
	{
		if(!theForm.job_no.checked)
		{
			alert("Experience is Requried.");
			return (false);
		}
	}
	
	// Computer
	if (theForm.cl.checked)
	{
		
		if (theForm.computer_literacy.value == "")
		{
			alert("Please Mention Computer Literacy.");
			theForm.computer_literacy.focus();
			return (false);
		}
		if (theForm.computer_literacy.value.length > 250)
		{
			alert("Please Enter at Most 250 Characters in the Field of Computer Literacy.");
			theForm.computer_literacy.focus();
			return (false);
		}
	}
	// Curricular
	if (theForm.ca.checked)
	{
		
		if (theForm.curricular.value == "")
		{
			alert("Please Mention Extra Curricular Activities.");
			theForm.curricular.focus();
			return (false);
		}
		if (theForm.curricular.value.length > 250)
		{
			alert("Please Enter at Most 250 Characters in the Field of Extra Curricular Activities.");
			theForm.curricular.focus();
			return (false);
		}
	}
	// References 01 ....................
	// Name
	if (theForm.ref_name_1.value == "")
	{
		alert("Please Enter Name of Reference 01.");
		theForm.ref_name_1.focus();
		return (false);
	}
	// Designation
	if (theForm.ref_post_1.value == "")
	{
		alert("Please Enter Designation of Reference 01.");
		theForm.ref_post_1.focus();
		return (false);
	}
	// Organization
	if (theForm.ref_org_1.value == "")
	{
		alert("Please Enter Organization Name of Reference 01.");
		theForm.ref_org_1.focus();
		return (false);
	}
	// Contact
	if (theForm.ref_contact_1.value == "")
	{
		alert("Please Enter Contact Number of Reference 01.");
		theForm.ref_contact_1.focus();
		return (false);
	}
	// ref email 01
	// test if valid ref_mail_1 address, must have @ and .
	var checkEmail = "@.";
	var checkStr = theForm.ref_mail_1.value;
	var EmailValid = false;
	var EmailAt = false;
	var EmailPeriod = false;
	if (checkStr != "")
	{
		for (i = 0;  i < checkStr.length;  i++)
		{
		ch = checkStr.charAt(i);
		for (j = 0;  j < checkEmail.length;  j++)
		{
		if (ch == checkEmail.charAt(j) && ch == "@")
		EmailAt = true;
		if (ch == checkEmail.charAt(j) && ch == ".")
		EmailPeriod = true;
			  if (EmailAt && EmailPeriod)
				break;
			  if (j == checkEmail.length)
				break;
			}
			// if both the @ and . were in the string
		if (EmailAt && EmailPeriod)
		{
				EmailValid = true
				break;
			}
		}
		if (!EmailValid)
		{
		alert("Invalid eMail Address of References 01!");
		theForm.ref_mail_1.focus();
		return (false);
		}
	}
	// References 02 ....................
	// Name
	if (theForm.ref_name_2.value == "")
	{
		alert("Please Enter Name of Reference 02.");
		theForm.ref_name_2.focus();
		return (false);
	}
	// Designation
	if (theForm.ref_post_2.value == "")
	{
		alert("Please Enter Designation of Reference 02.");
		theForm.ref_post_2.focus();
		return (false);
	}
	// Organization
	if (theForm.ref_org_2.value == "")
	{
		alert("Please Enter Organization Name of Reference 02.");
		theForm.ref_org_2.focus();
		return (false);
	}
	// Contact
	if (theForm.ref_contact_2.value == "")
	{
		alert("Please Enter Contact Number of Reference 02.");
		theForm.ref_contact_2.focus();
		return (false);
	}
	// ref email 02
	// test if valid email address, must have @ and .
	var checkEmail = "@.";
	var checkStr = theForm.ref_mail_2.value;
	var EmailValid = false;
	var EmailAt = false;
	var EmailPeriod = false;
	if (checkStr != "")
	{
		for (i = 0;  i < checkStr.length;  i++)
		{
		ch = checkStr.charAt(i);
		for (j = 0;  j < checkEmail.length;  j++)
		{
		if (ch == checkEmail.charAt(j) && ch == "@")
		EmailAt = true;
		if (ch == checkEmail.charAt(j) && ch == ".")
		EmailPeriod = true;
			  if (EmailAt && EmailPeriod)
				break;
			  if (j == checkEmail.length)
				break;
			}
			// if both the @ and . were in the string
		if (EmailAt && EmailPeriod)
		{
				EmailValid = true
				break;
			}
		}
		if (!EmailValid)
		{
		alert("Invalid eMail Address of References 02!");
		theForm.ref_mail_2.focus();
		return (false);
		}
	}
	
	// Validation Code
	if (theForm.code.value != theForm.validation.value)
	{
		alert("Incorrect Validation Code");
		theForm.validation.focus();
		return (false);
	}
	
	document.images["im"].src = "images/pload.gif";
}

//Masters
function masfd()
{
	if (document.getElementById('masters').checked)
	{
		document.getElementById('exam4').disabled = false;
		document.getElementById('other_exam4').disabled = false;
		document.getElementById('result4').disabled = false;
		document.getElementById('result_gpa4').disabled = false;
		document.getElementById('subject4').disabled = false;
		document.getElementById('other_subject4').disabled = false;
		document.getElementById('year4').disabled = false;
		document.getElementById('institute4').disabled = false;
		document.getElementById('other_institute4').disabled = false;
		document.getElementById('duration4').disabled = false;
	}
	if (!document.getElementById('masters').checked)
	{
		document.getElementById('exam4').disabled = true;
		document.getElementById('other_exam4').disabled = true;
		document.getElementById('result4').disabled = true;
		document.getElementById('result_gpa4').disabled = true;
		document.getElementById('subject4').disabled = true;
		document.getElementById('other_subject4').disabled = true;
		document.getElementById('year4').disabled = true;
		document.getElementById('institute4').disabled = true;
		document.getElementById('other_institute4').disabled = true;
		document.getElementById('duration4').disabled = true;
	}
}

// Permanent address Disable
function fd()
{
	if (document.getElementById('copy').checked)
	{
		document.getElementById('permanent_care').value = "";
		document.getElementById('permanent_care').disabled = true;
		
		document.getElementById('permanent_vill').value = "";
		document.getElementById('permanent_vill').disabled = true;
		
		document.getElementById('menu_two').value = "";
		document.getElementById('menu_two').disabled = true;
		
		document.getElementById('menu_two_list').value = "";
		document.getElementById('menu_two_list').disabled = true;
		
		document.getElementById('permanent_post').value = "";
		document.getElementById('permanent_post').disabled = true;
	
		document.getElementById('permanent_pcode').value = "";
		document.getElementById('permanent_pcode').disabled = true
	}
	
	if (!document.getElementById('copy').checked)
	{
		document.getElementById('permanent_care').value = "";
		document.getElementById('permanent_care').disabled = false;
		
		document.getElementById('permanent_vill').value = "";
		document.getElementById('permanent_vill').disabled = false;
				
		document.getElementById('permanent_post').value = "";
		document.getElementById('permanent_post').disabled = false;
		
		document.getElementById('menu_two').value = "";
		document.getElementById('menu_two').disabled = false;
		
		document.getElementById('menu_two_list').value = "";
		document.getElementById('menu_two_list').disabled = false;
		
		document.getElementById('permanent_pcode').value = "";
		document.getElementById('permanent_pcode').disabled = false;
	}
}

//Computer
function clfd()
{
	if (document.getElementById('cl').checked)
	{
		document.getElementById('computer_literacy').disabled = false;
	}
	if (!document.getElementById('cl').checked)
	{
		document.getElementById('computer_literacy').disabled = true;
	}
}
//Curriculer
function cafd()
{
	if (document.getElementById('ca').checked)
	{
		document.getElementById('curricular').disabled = false;
	}
	if (!document.getElementById('ca').checked)
	{
		document.getElementById('curricular').disabled = true;
	}
}

// Customize Alpha set -----------------------------------------------------------------------------------
//var letters=' ABCÃ‡DEFGHIJKLMNÃ‘OPQRSTUVWXYZabcÃ§defghijklmnÃ±opqrstuvwxyzÃ Ã¡Ã€ÃÃ©Ã¨ÃˆÃ‰Ã­Ã¬ÃÃŒÃ¯ÃÃ³Ã²Ã“Ã’ÃºÃ¹ÃšÃ™Ã¼Ãœ'
var letters=' -ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'
var numbers='1234567890'
var flot='.1234567890'
var signs=',.:;@-\''
var mathsigns='+-=()*/'
//var custom='<>#$%&?Â¿'
var custom='#(),.-/:'

function alpha(e,allow)
{
	// Backspace and Delete
	var charCode = (e.which) ? e.which : e.keyCode 
    if (charCode == 8 || charCode == 46) return true;
	
	var k;
	k=document.all?parseInt(e.keyCode): parseInt(e.which);
	return (allow.indexOf(String.fromCharCode(k))!=-1);
}