<!DOCTYPE html PUBLIC "-//w3c//dtd html 4.0 transitional//en">
<!-- saved from url=(0062)https://candidates.cambridgeenglish.org/Members/MyDetails.aspx -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Cambridge English Online Results Service - My Details</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<link rel="stylesheet" type="text/css" href="{{ asset('css/ie5.css') }}">
		
	</head>
	<body>

			
			<div>
				    
<div class="HomePageHeaderBlankDiv1"></div>
<div style="width: 760px;">
    &nbsp;&nbsp;<img src="{{ asset('images/CE_Master_Logo_RGB.svg') }}" alt="Cambridge Assessment English" height="45" width="279px">
</div>
<div class="HomePageHeaderBlankDiv"></div>
<div class="HomePageHeaderTitle" style="width:762px">
    &nbsp;&nbsp;Candidate Website
</div>
<table cellspacing="0" cellpadding="0" width="760" border="0">
    <tbody><tr>
        <td>
            <ul class="header_menu">
                
                <li id="UctHeader_lstItmHome" class="header_menu_left"><span class="menu_home">
                    <a id="UctHeader_hlHome" class="menu_home" href="/home">Home</a></span></li>
                <li id="UctHeader_lstItmMyDetails" class="header_menu_left_current"><span class="menu_mydetails">
                    <a id="UctHeader_hlMyDetails" class="menu_mydetails_current" href="/MyDetails">My details</a></span></li>
                <li id="UctHeader_lstItmExamInfo" class="header_menu_left"><span class="menu_examinfo">
                    <a id="UctHeader_hlExamInfo" class="menu_examinfo" href="/Information">Information on our exams</a></span></li>
                <li id="UctHeader_lstLogOut" class="header_menu_right"><span class="menu_logout">
                    <a id="UctHeader_hlLogout" class="menu_logout" href="">Logout</a></span></li>
                <li id="UctHeader_lstItmHelp" class="header_menu_right"><span class="menu_help">
                    <a id="UctHeader_hlHelp" class="menu_help" href="#">Help</a></span></li></ul>
        </td>
    </tr>
</tbody></table>

				<table cellpadding="0" cellspacing="0" border="0" width="760">
					<tbody><tr>
						<td>
							<div class="content2">
								<div class="mydetails">My Details</div>
								
								<fieldset class="content">
									<span class="content_header_text2">Personal Details</span><br>
									<table cellpadding="0" cellspacing="0" border="0" width="100%">
										<tbody><tr>
											<td width="185"><label class="mydetails_label_name">Name:</label></td>
											<td><span id="lblUserName" class="label5">
													@if (Auth::check())
													{{Auth::user()->name_complete}}
												@else
													need to login
												@endif</span>
									
										</tr>
										<tr>
											<td></td>
											<td><a href="http://cambridgeesol-centres.org/centres/centreContactDetails.do?centreNumber=EC002&amp;qualification=ALL&amp;source=candidateexam" id="btnContactCentre" target="_blank" class="link" title="Contact Centre">If your name is wrong, contact your centre</a><br><br>
											</td>
										</tr>
										<tr>
											<td><img alt="Email" src="{{ asset('images/Mail.gif') }}" class="mail"><label class="label">Email Address:</label></td>
											<td><input name="txbEmailAddress" type="text" id="txbEmailAddress" class="textbox" value="{{Auth::user()->email}}"></td>
										</tr>
									</tbody></table>
								</fieldset>
								<fieldset class="content">
									<span class="content_header_text2">Password Details</span><br>
									<p class="content">Passwords must have at least 8 characters, made up of letters and at least 2 numbers.</p>
									<table cellpadding="0" cellspacing="0" border="0" width="100%">
										<tbody><tr>
											<td width="185"><img alt="Key" src="{{ asset('images/Key.gif') }}" class="key"><label class="label">Old Password:</label></td>
											<td><input name="txbPasswordOld" type="password" id="txbPasswordOld" class="textbox"></td>
										</tr>
										<tr>
											<td><img alt="Key" src="{{ asset('images/Key.gif') }}" class="key"><label class="label">New Password:</label></td>
											<td><input name="txbPasswordNew" type="password" id="txbPasswordNew" class="textbox"></td>
										</tr>
										<tr>
											<td><img alt="Key" src="{{ asset('images/Key.gif') }}" class="key"><label class="label" style="WIDTH: 112px; HEIGHT: 14px">Confirm Password:</label></td>
											<td><input name="txbPasswordConfirm" type="password" id="txbPasswordConfirm" class="textbox"></td>
										</tr>
									</tbody></table>
								</fieldset>
								<fieldset class="content">
									<span class="content_header_text2">Updates</span><br>
									<table>
										<tbody><tr>
											<td><input name="chbUpdates" type="checkbox" id="chbUpdates" class="checkbox" tabindex="80"></td>
											<td><label for="chbUpdates">From time to time Cambridge Assessment English may contact you via email, if you wish to receive them please tick this box. Your data will not be used for any purposes other than those specified in the terms of use and will not be passed to any third party.</label></td>
										</tr>
									</tbody></table>
								</fieldset>
								<fieldset class="content_centre">
								    <input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" class="button" title="Submit">
								</fieldset>
							</div>
						</td>
						<td width="148px">&nbsp;</td>
					</tr>
				</tbody></table>
				
<table cellpadding="0" cellspacing="0" border="0" width="756">
<tbody><tr>
    <td style="text-align: right;">© Copyright <a href="">Arturo Ruiz 2019</a> </td>
    <td style="text-align: center;">|</td>
    <td style="text-align: center;width: 100px;"><a href="https://candidates.cambridgeenglish.org/Resources/Terms%20of%20Use%20for%20Candidate%20Results%20Servic1.pdf" target="_blank" title="PDF opens in new window">Terms of Use</a></td>
    <td style="text-align: center;">|</td>
    <td style="text-align: left"><a href="http://www.cambridgeenglish.org/footer/data-protection/" target="_blank" title="PDF opens in new window">Data Protection</a></td>
</tr>
</tbody></table>

			</div>
		</form>
	
</body></html>