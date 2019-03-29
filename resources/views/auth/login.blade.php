

<!DOCTYPE html PUBLIC "-//w3c//dtd html 4.0 transitional//en">
<!-- saved from url=(0072)https://candidates.cambridgeenglish.org/Members/Login.aspx?action=logout -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie5.css') }} ">
    <title>Cambridge English Online Results Service</title>
    <script src="{{ asset('login/switchcontent.js.descarga') }}" language="javascript" type="text/javascript"></script>
    <script async="" src="{{ asset('login/site24x7rum-min.js.descarga') }}"></script>

</head>
<body>

    
    <div style="padding:0 40 0 250;">
            
<div class="HomePageHeaderBlankDiv1"></div>
<div style="width: 760px;">
    &nbsp;&nbsp;
    <img src="{{ asset('images/CE_Master_Logo_RGB.svg') }}" alt="Cambridge Assessment English" height="45" width="279px">
</div>
<div class="HomePageHeaderBlankDiv"></div>
<div class="HomePageHeaderTitle" style="width:762px">
    &nbsp;&nbsp;Candidate Website
</div>
<table cellspacing="0" cellpadding="0" width="760" border="0">
    <tbody><tr>
        <td>
            <ul class="header_menu">
                
                
                
                
                
                <li id="UctHeader_lstItmHelp" class="header_menu_right"><span class="menu_help">
                    <a id="UctHeader_hlHelp" class="menu_help" href="#">Help</a></span></li></ul>
        </td>
    </tr>
</tbody></table>

        <div class="loginPage_content" style="width:760px">
            <span class="content_header_text3">Welcome to the Results Service for Candidates</span>
            <br>
            <br>
            <table cellpadding="0" cellspacing="0" border="0" width="760px">
                <tbody><tr>
                    <td>
                        This website offers you the quickest way to access your results. By registering
                        for the Results Service, you will be notified by email as soon as your results are
                        released.
                    </td>
                </tr>
            </tbody></table>
            <hr width="760">
            
            <br>
            <table cellpadding="0" cellspacing="0" border="0" width="760">
                <tbody><tr valign="top">
                    <td width="760" align="center">
                        <div class="content_header" style="font-size:small">
                            1 - Register</div>
                        
                        <fieldset class="content">
                            <table cellpadding="0" cellspacing="0" border="0.5" width="100%">
                                <tbody><tr>
                                    <td style="width: 85%">
                                        <p class="content2">
                                            If this is your first time using the site, you will need to register. Click the
                                            Register button and complete the online registration form.
                                            <br>
                                            <br>
                                            You will need the 
                                            <a class="contentBlack tooltip animate blue" data-tool="Your ID Number can be found on your Confirmation of Entry.">
                                            <b>ID Number</b></a> and 
                                            <a class="contentBlack tooltip bottom animate blue" data-tool="Your Secret Number can be found on your Confirmation of Entry.">
                                            <b>Secret Number</b></a> provided on your Confirmation of Entry
                                            in order to register. Speak to your <a href="#" target="_blank" class="content tooltip bottom animate blue" data-tool="If you are not sure which exam centre you took your exam with, your teacher may be able to help you">
                                                exam centre</a> if you need these details.
                                        </p>
                                    </td>
                                    <td align="right" valign="middle">
                                        <a id="hlRegister" title="Register" class="register" href="#">Register</a>
                                    </td>
                                </tr>
                            </tbody></table>
                        </fieldset>
                    </td>
                </tr>
            </tbody></table>
            <hr>
            <br>
            <table cellpadding="0" cellspacing="0" border="0" width="760">
                <tbody><tr>
                    <td align="center">
                        <div class="content_header" style="font-size:small">
                            2 - Login</div>
                        <fieldset class="content">
                            <table cellpadding="0" cellspacing="0" border="0.5" width="100%">
                                <tbody>
                                    <tr>
                                        <td align="left" style="width: 60%;padding: 0;line-height: 19px;">
                                            <p class="content2 contentLogin">
                                                If you have already registered, you can login using the ID Number from your Confirmation
                                                of Entry and the password you chose when you registered.
                                                <br>
                                                <br>
                                                You do not need your Secret Number to login.
                                                <br>
                                                <br>
                                                If you enter the wrong password more than three times, you will not be able to log
                                                on for 30 minutes.</p>
                                        </td>
                                        <td align="right">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" align="right">
                                                            <a id="hlHelp" class="link_help2 tooltip right animate blue" data-tool="Your ID number can be found on your Confirmation of Entry" href="https://candidates.cambridgeenglish.org/Members/Help.aspx" target="_blank">
                                                            What is this?
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <form method="POST" action="{{ route('login') }}">
                                                                    @csrf
                                                        <td>
                                                            <form  method="POST" action="{{ route('login') }} action=">
                                                            <img src="{{ asset('images/Number.gif') }}" class="number2" alt="ID Number">
                                                            ID Number:
                                                        </td>
                                                        <td>
                                                            
                                                            <input  id="email" type="email" class="form-control textbox2{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                            
                                                                        @if ($errors->has('email'))
                                                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td colspan="2" align="right">
                                                            <a id="hlHelpPassword" class="link_help2 tooltip right animate blue" data-tool="Your Password was chosen when you registered to use the site. This is NOT your Secret Number" href="https://candidates.cambridgeenglish.org/Members/Help.aspx" target="_blank">
                                                            What is this?</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('images/Key.gif') }}" class="key2" alt="Password">
                                                            Password:
                                                        </td>
                                                        <td>
                                                            <input id="password" type="password" class="textbox2 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                                            @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" valign="bottom">
                                                        <br>
                                                            
                                                            <div style="float: right; vertical-align:bottom;">
                                                                    <input type="submit" name="btnLogin" value="Log in" onclick="return validate();" id="btnLogin" title="Log in" class="login_button"></div>
                                                   
                                                                </form>
                                                            <div style="float: left;vertical-align:top;">
                                                                <a id="hlForgottenPassword" class="link" href="#">Forgotten your password?</a>
                                                            </div>
                                                            
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td colspan="2" valign="bottom">
                                                        <div id="divErrorList" class="userinput_errorlist">
                                                            
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        </form>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
            </tbody></table>
        </div>
        
<table cellpadding="0" cellspacing="0" border="0" width="756">
<tbody><tr>
    <td style="text-align: right;">© Copyright <a href="">Arturo Ruiz 2019</a></td>
    <td style="text-align: center;">|</td>
    <td style="text-align: center;width: 100px;"><a href="#" target="_blank" title="PDF opens in new window">Terms of Use</a></td>
    <td style="text-align: center;">|</td>
    <td style="text-align: left"><a href="#" target="_blank" title="PDF opens in new window">Data Protection</a></td>
</tr>
</tbody></table>

    </div>
    </form>


</body></html>


