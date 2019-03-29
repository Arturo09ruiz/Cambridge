<!DOCTYPE html PUBLIC "-//w3c//dtd html 4.0 transitional//en">
<!-- saved from url=(0063)https://candidates.cambridgeenglish.org/Members/HomeResult.aspx -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cambridge English Online Results Service - Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie5.css') }}">


</head>
<body>





<div>

	
</div>
    
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

                                <div class="menu_logout dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="UctHeader_hlLogout" class="menu_logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                        <li id="UctHeader_lstItmHelp" class="header_menu_right"><span class="menu_help">
                            <a id="UctHeader_hlHelp" class="menu_help" href="#">Help</a></span></li>
                        
                            
         </ul>
        </td>
    </tr>
</tbody></table>


        <div class="content">
            <span class="content_header_text3">Welcome
                <span id="lblCandidateName">@if (Auth::check())
                    {{Auth::user()->name_complete}}
                @else
                    need to login
                @endif</span>
            </span>
            <br>
            <br>
            <table cellpadding="0" cellspacing="0" border="0" width="736">
                <tbody><tr valign="top">
                    <td rowspan="2">
                        <fieldset class="content">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody><tr>
                                    <td>
                                        <span class="content_header_text">Your result is available</span><br>
                                        <p class="content2">
                                            If you want to see your Statement of Results, you will need to have <a href="#" target="_blank" class="link" title="Download Adobe">Adobe Reader</a> on your
                                            computer.
                                        </p>
                                    </td>
                                    <td valign="bottom" align="right">
                                        <a target="_blank" name="btnExamResult" id="btnExamResult" title="Open PDF report in new window" class="arturo button" style="width:130px;" href="	@if (Auth::check())
                                        {{Auth::user()->link}}
                                    @else
                                        need to login
                                    @endif">Statement of Results</a>
                                    </td>
                                </tr>
                            </tbody></table>
                        </fieldset>
                        <p class="content2">
                            Your result is now available and you can see it on this page. If you have been awarded
                            a passing grade in the examination, your certificate will be posted to your centre
                            within 4-8 weeks and they will either send it onto you or will contact you to make
                            other arrangements. <b>If you want to see how well you did in each paper, click on the
                                Statement of Result button. (Please note that a breakdown of results is not available
                                for Delta Module One).</b><br>
                        </p>
                        <p class="content2">
                            The name that is shown on the Statement of Results will be the name published on
                            your certificate. If your name is not correct, please <a href="#" id="btnContactCentre" target="_blank" class="link" title="Contact Centre">contact your Examination Centre</a>
                            immediately.
                        </p>
                        <p class="content2">
                            You should also contact your Centre with any other results queries or if you want
                            information about other Cambridge English qualifications.
                        </p>
                        <p class="content2">
                            Cambridge Assessment English reserves the right to amend the information given before
                            the issue of certificates to successful candidates.<br>
                            <br>
                            You will need to install Adobe Acrobat to view your statement of results.
                        </p>
                        <p>
                            <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">
                                <img alt="Download Adobe" src="{{ asset('images/AdobeReader.gif') }}"></a>
                        </p>
                        
                    </td>
                    <td width="30" rowspan="2">
                        &nbsp;
                    </td>
                    <td width="250">
                        <div class="content_header">
                            Your Result</div>
                        <fieldset class="content">
                            <span class="content_header_text">Exam</span>
                            
                            <br>
                            <span id="lblExamTitle" class="label4">Preliminary English Test</span>
                        </fieldset>
                        <fieldset class="content">
                            <span class="content_header_text">Result</span>
                            <br>
                            <strong>
                                <span id="lblResult" class="label4">Council of Europe Level B2</span>
                            </strong>
                        </fieldset>
                        <fieldset class="content">
                            <span class="content_header_text_overall_score">Overall score</span>
                            <br>
                            <strong>
                                <span id="lblOverallScore" class="label4">179</span>
                            </strong>
                            <br>
                            <span id="spnOverallScore">For component level scores and an explanation of the scale,
                                see the
                                <a  style="display:inline-block;width:136px;"><b><u>Statement of Results</u></b></a>
                            </span>
                            <br>
                            <br>
                        </fieldset>
                        <fieldset id="fldSendResult" class="content">
                            <span class="content_header_text_overall_score">Verifying results</span>
                            <br>
                            <br>
                            <span id="spnSendResult">
                                If you have been asked by an organisation or institution
                                to prove that your result is genuine, please follow the link below to send your
                                result electronically to the organisation for them to check.
                            </span>
                            <br>
                            <br>
                            
                            <a id="aSendResult" href="#">
                                <span id="spanSendResult">
		                            <strong>Send my result</strong>
	                            </span>
                            </a>
                        </fieldset>                        
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <br>
                        <br>
                        <a href="#" title="opens in new window" target="_blank">
                            <img src="{{ asset('images/CER_6001_7Y07_Candidate_Support_Exam_Preparation_168x67.jpg') }}" alt="Candidate Support - Exam preparation" width="168" height="67"></a>
                        <br>
                        <br>
                        <a href="#" title="opens in new window" target="_blank">
                            <img src="{{ asset('images/CER_6001_7Y07_Buy_Official_Exam_Preparation_banner_AB.jpg') }} " alt="Buy now - Online Preparation Materials" width="168"></a>
                    </td>
                </tr>
            </tbody></table>
        </div>
        <br>
        
<table cellpadding="0" cellspacing="0" border="0" width="756">
<tbody><tr>
    <td style="text-align: right;">© Copyright <a href="">Arturo Ruiz 2019 </a> </td>
    <td style="text-align: center;">|</td>
    <td style="text-align: center;width: 100px;"><a href="#" target="_blank" title="PDF opens in new window">Terms of Use</a></td>
    <td style="text-align: center;">|</td>
    <td style="text-align: left"><a href="#" target="_blank" title="PDF opens in new window">Data Protection</a></td>
</tr>
</tbody></table>

    </div>

<style>
.arturo{
    transform: translate(px)
}

</style>
</body></html>