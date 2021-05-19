
<h1>Upload File</h1>

<form action="uploadFile" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="file" name="file"><br>
	<button type="submit">Submit</button>
</form>

<h1>{{ __('profile.welcome') }}</h1>		
<a href="">{{ __('profile.home') }}</a>
<a href="">{{ __('profile.about') }}</a>
<a href="">{{ __('profile.list') }}</a>
<a href="">{{ __('profile.contact') }}</a>