@extends('layouts.main')
@section('content')

	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Sign up</h2>
                </div>
                	{{ Form::open(array('url'=>'jobseeker/create', 'class'=>'form', 'id'=>'msform')) }}
					<!-- progressbar -->
					<ul id="progressbar">
						<li class="active">Account Setup</li>
						<li>Social Profiles</li>
						<li>Personal Details</li>
					</ul>
                	<fieldset>
							<div class="form-control">
							<label class="col-lg-3 control-label">Username</label>
							<div class="col-lg-5">
							<input type="text" class="form-control" name="username" />
							</div>
							</div>
							<div class="form-group">
							<label class="col-lg-3 control-label">Email address</label>
							<div class="col-lg-5">
							<input type="text" class="form-control" name="email" />
							</div>
							</div>
							<div class="form-group">
							<label class="col-lg-3 control-label">Password</label>
							<div class="col-lg-5">
							<input type="password" class="form-control" name="password" />
							</div>
							</div>
							<input type="button" name="previous" class="previous action-button" value="Previous" />
							<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset>
						<h2 class="fs-title">Social Profiles</h2>
						<h3 class="fs-subtitle">Your presence on the social network</h3>
						{{ Form::label('mothers_name', 'Mothers Name:') }}
						{{ Form::text('mothers_name', null,array('class' => 'form-control', 'placeholder' => 'Your Name')) }}
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset>
						<h2 class="fs-title">Personal Details</h2>
						<h3 class="fs-subtitle">We will never sell it</h3>
						<input type="text" name="fname" placeholder="First Name" />
						<input type="text" name="lname" placeholder="Last Name" />
						<input type="text" name="phone" placeholder="Phone" />
						<textarea name="address" placeholder="Address"></textarea>
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="submit" name="submit" class="submit action-button" value="Submit" />
					</fieldset>
					{{ Form::close() }}
            </div>
        </div>
    </div>



<script>
$(document).ready(function() {
    $('#msform').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            applicants_name: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },
                    stringLength: {
                        min: 8,
                        message: 'The password must have at least 8 characters'
                    }
                }
            },
            birthday: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The date of birth is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            }
        }
    });
});
</script>


@stop