//Enable JOB
function jfd()
{
	if (document.getElementById('job_no').checked)
	{
		document.getElementById('total_exp').disabled = false;
		document.getElementById('organization1').disabled = false;
		document.getElementById('job_post1').disabled = false;
		document.getElementById('t_day1').disabled = false;
		document.getElementById('t_month1').disabled = false;
		document.getElementById('t_year1').disabled = false;
		document.getElementById('f_day1').disabled = false;
		document.getElementById('f_month1').disabled = false;
		document.getElementById('f_year1').disabled = false;
		document.getElementById('job_res1').disabled = false;
		document.getElementById('job_button').disabled = false;
	}
	if (!document.getElementById('job_no').checked)
	{
		document.getElementById('total_exp').disabled = true;
		document.getElementById('organization1').disabled = true;
		document.getElementById('job_post1').disabled = true;
		document.getElementById('t_day1').disabled = true;
		document.getElementById('t_month1').disabled = true;
		document.getElementById('t_year1').disabled = true;
		document.getElementById('f_day1').disabled = true;
		document.getElementById('f_month1').disabled = true;
		document.getElementById('f_year1').disabled = true;
		document.getElementById('job_res1').disabled = true;
		document.getElementById('job_button').disabled = true;
	}

}