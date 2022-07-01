<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fashion Formula</title>
</head>
<body style="margin: 0; width: 800px;">
    @if (!isEnvironment('production'))
    <p style="font-family: Arial; font-size: 14px; text-align: center;">This email is generated by a testing environment.</p>
    @endif
    <div style="background-color: #eaeaea; border-bottom: 1px solid #e6e6e6;">
        <div>&nbsp;</div>
        <center><img src="{{ asset('images/logo.png') }}" alt="Fashion Formula" /></center>
        <div>&nbsp;</div>
    </div>

    @yield('content')

    <div style="border-top: 1px dashed #FFF; padding-top: 30px; padding-bottom: 30px; background-color: #1bb9b2; background-image: url('{{asset('images/tile-pickout.png') }}');">
        <center>
            <p style="letter-spacing: 1px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin: 0; color: black; font-size: 20px;"><a href="http://www.fashion-formula.com" target="_blank" style="color: #fff; text-decoration: none;">WWW.FASHION-FORMULA.COM</a></p>
        </center>
    </div>    
</body>
</html>