<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicon.ico')}}">

    <title>{{ config('app.name', 'EtudiantNet') }}</title>
    <meta charset="utf-8" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/logo.jpg')}}" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{asset('css/bootstrap3.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <!-- CSS only -->
</head>
<body>
    {{--@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <label for="name" class="">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}

	<div class="image-container set-full-height" style="background-image: url('{{asset('assets/img/smoke-376543_1920.jpg')}}')">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
                            {{-- <form method="POST" action="{{ route('register') }}"> --}}
                                @csrf
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Build Your Profile
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">About</a></li>
			                            <li><a href="#account" data-toggle="tab">Account</a></li>
			                            <li><a href="#address" data-toggle="tab">Address</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<h4 class="info-text"> Let's start with the basic information</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="{{asset('assets/img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label for="name" class="control-label">{{ __('Name') }} <small>(required)</small></label>
                                                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                      @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
			                                          <label for="LastName" class="control-label">{{ __('LastName') }} <small>(required)</small></label>
                                                      <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                                      @error('LastName')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">
                                                            assignment_ind
                                                            </i>
													</span>
													<div class="form-group label-floating">
			                                          <label for="name" class="control-label">{{ __('ID card number') }} <small>(required)</small></label>
                                                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                      @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">vpn_key</i>
													</span>
													<div class="form-group label-floating">
													  <label for="password" class="control-label">{{ __('Password') }} <small>(required)</small></label>
                                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                      @error('password')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">vpn_key</i>
													</span>
													<div class="form-group label-floating">
													  <label for="password-confirm" class="control-label">{{ __('Confirm Password') }} <small>(required)</small></label>
                                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label for="email" class="control-label">{{ __('E-Mail Address') }} <small>(required)</small></label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> What are you Looking for?</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-6">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                    <i class="fa fa-search-plus"></i>
		                                                </div>
		                                                <h6>Find a house </h6>
		                                            </div>
		                                        </div>

		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
                                                            <i class="fa fa-plus-circle"></i>		                                                </div>
		                                                <h6>Add a house</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Are you living in a nice area? </h4>
		                                    </div>
                                            <div class="col-sm-5 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">University</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-5  ">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Degree</label>
		                                            <input type="text" class="form-control" value="">
		                                        </div>
		                                    </div>
                                            <div class="col-sm-4 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Government</label>
	                                            	<select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Ariana"> Ariana </option>
	                                                	<option value="Béja"> Béja </option>
	                                                	<option value="Ben Arous"> Ben Arous </option>
	                                                	<option value="Bizerte"> Bizerte </option>
	                                                	<option value="Gabès"> Gabès </option>
	                                                	<option value="Gafsa"> Gafsa </option>
	                                                	<option value="Jendouba"> Jendouba </option>
	                                                	<option value="Kairouan"> Kairouan </option>
	                                                	<option value="Kasserine">Kasserine</option>
	                                                	<option value="Kebili">Kebili</option>
	                                                	<option value="Kef">Kef</option>
	                                                	<option value="Mahdia">Mahdia</option>
	                                                	<option value="Manouba">Manouba</option>
	                                                	<option value="Medenine">Medenine</option>
	                                                	<option value="Monastir">Monastir</option>
	                                                	<option value="Nabeul">Nabeul</option>
	                                                	<option value="Sfax">Sfax</option>
	                                                	<option value="Sidi Bouzid">Sidi Bouzid</option>
	                                                	<option value="Siliana">Siliana</option>
	                                                	<option value="Sousse">Sousse</option>
	                                                	<option value="Tataouine">Tataouine</option>
	                                                	<option value="Tozeur">Tozeur</option>
	                                                	<option value="Tunis">Tunis</option>
	                                                	<option value="Zaghouan">Zaghouan</option>
	                                            	</select>
		                                        </div>
		                                    </div>
                                            <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">City</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
                                            <div class="col-sm-3 ">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">University City</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>


                                            <div class="col-sm-4 col-sm-offset-1 ">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Gender</label>
	                                            	<select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Women"> Female </option>
	                                                	<option value="Men"> Male </option>
	                                            	</select>
		                                        </div>
		                                    </div>
                                            <div class="col-sm-3 ">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Phone</label>
                                                    <input name="phone" type="tel" class="form-control">
		                                        </div>
		                                    </div>
                                            <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Age</label>
                                                    <input name="phone" type="tel" class="form-control">
		                                        </div>
		                                    </div>
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="">Birthday</label>
		                                            <input type="date" class="form-control" >
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                        <button type="submit" class="class='btn btn-finish btn-fill  btn-wd' name='finish' value='Finish'">
                                            {{ __('Register') }}
                                        </button>

		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->


	</div>
</body>
	<!--   Core JS Files   -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('js/material-bootstrap-wizard.js')}}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>
