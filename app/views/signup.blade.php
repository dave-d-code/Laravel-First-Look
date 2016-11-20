<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup forms</title>
	<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
</head>
<body>

<h1>Laravel ACME Newsletter signup</h1>
<!-- laravel forms: im expecting to to be to add id, class, & name to pass values back into model hopefully -->

<!-- open the form and set action to the view template -->
<!-- will need to look how to send back to a controller?? -->
{{Form::open(array('url' => 'thanks'))}}

{{-- first form element. text field for form element  --}}
{{Form::label('email', 'Email Address')}}
{{Form::text('email')}}

{{-- Select list input --}}
{{Form::label('os', 'Operating System')}}
{{Form::select('os', array(
		'linux'=>'Linux',
		'mac'=>'Mac OS X',
		'windows'=>'Windows',
))}}

{{-- comments entry 3rd array parameter to hold html attributes --}}
{{Form::label('comment', 'Comments')}}
{{Form::textarea('comment', '', array('placeholder'=>'what are your interests?'))}}

{{-- checkbox with label after --}}
{{Form::checkbox('agree', 'yes', false)}}
{{Form::label('agree', 'I agree to your terms of service')}}

{{-- Form submit --}}
{{Form::submit('Sign up')}}




<!-- Close the form -->
{{Form::close()}}

	
</body>
</html>