<?php 

use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('Change Colour Theme');
$U->login('admin', 'pepito.P0', 'Admin User');

$I->amOnPage('/admin/settings.php?section=theme_essential_generic');

// Config gral
$I->fillField('s_theme_essential_siteicon', 'cogs');
$I->selectOption('#id_s_theme_essential_pagewidth', 'Ancho variable');
$I->checkOption('#id_s_theme_essential_layout');
$I->checkOption('#id_s_theme_essential_editicons');
$I->selectOption('#id_s_theme_essential_navbarsep','Soporte delgado');
$I->fillField('s_theme_essential_copyright','UNIVERSIDAD ADOLFO IBANEZ');
$I->fillField('s_theme_essential_customcss','
		
		
.socials img {
    border-radius: 0px;
}

.socials img:hover {
    box-shadow: 0px 0px 5px 0px rgb(255, 255, 255);
}

.btn-success {
    color: rgb(255, 255, 255);
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
    background-color: rgb(40, 40, 40);
    background-image: none;
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border-radius: 0px;
    border-width: 0px;
}

.btn-danger:focus, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(40, 40, 40);
    background-image: none;
    border-width: 0px;
    border-radius: 0px;
}

.btn-danger {
    background-color: rgb(40, 40, 40);
    background-image: none;
    border-width: 0px;
    border-radius: 0px;
}

.btn-danger:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(60, 60, 60);
}

 .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(60, 60, 60);
}

.btn:hover, .btn:focus {
    color: rgb(51, 51, 51);
    text-decoration: none;
    background-position: 0px -15px;
    transition: background-position 0.1s linear 0s;
    background-image: none;
    border-radius: 0px;
}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(60, 60, 60);
}
.btn:hover, .btn:focus {
    color: rgb(51, 51, 51);
    text-decoration: none;
    background-position: 0px -15px;
    transition: background-position 0.1s linear 0s;
}

.btn-success, .btn-warning, .btn-info, .btn-danger {
    color: rgb(255, 255, 255) !important;
}

.user-enroller-panel {
    border-width: 0px 0px 0px 0px;
}

.user-enroller-panel .uep-search-results .user .options .enrol {
    border-radius: 0px;
}

textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    border-radius: 5px;
    height: 20px;
}

#id_s_theme_essential_customcss {
    min-width: 50%;
    height: 70px;
}

#rubriccriteria3802levelsNEWID1 {
    max-width: 30%;
}

#rubriccriteria3802levelsNEWID2 {
    border-radius: 5px;
    height: 20px;
    max-width: 30%;
}

.performanceinfo var {
    border-radius: 0px;
}

.performanceinfo {
    border-radius: 0px;
}

select {
    border-radius: 0px;
}

.fa {
    color: rgb(64, 154, 230);
}

.back-to-top {
    color: rgb(64, 154, 230);
}

.back-to-top:hover {
    color: rgb(116, 172, 219);
}

input.form-submit:hover, input#id_submitbutton:hover, input#id_submitbutton2:hover, .path-admin .buttons input[type="submit"]:hover, td.submit input:hover, input.form-submit:focus, input#id_submitbutton:focus, input#id_submitbutton2:focus, .path-admin .buttons input[type="submit"]:focus, td.submit input:focus, input.form-submit:active, input#id_submitbutton:active, input#id_submitbutton2:active, .path-admin .buttons input[type="submit"]:active, td.submit input:active, input.form-submit.active, input#id_submitbutton.active, input#id_submitbutton2.active, .path-admin .buttons input.active[type="submit"], td.submit input.active, input.form-submit.disabled, input#id_submitbutton.disabled, input#id_submitbutton2.disabled, .path-admin .buttons input.disabled[type="submit"], td.submit input.disabled, input.form-submit[disabled], input#id_submitbutton[disabled], input#id_submitbutton2[disabled], .path-admin .buttons input[type="submit"][disabled], td.submit input[disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(40, 110, 210);
    border-radius: 0px;
}

input.form-submit, input#id_submitbutton, input#id_submitbutton2, .path-admin .buttons input[type="submit"], td.submit input {
    background-image: none;
    border-color: rgba(0, 0, 0, 0.25);
}

button, input.form-submit, input[type="button"], input[type="submit"], input[type="reset"] {
    font-size: 12px;
    border-width: 0px;
    border-color: rgba(0, 0, 0, 0.1);
    border-radius: 0px;
    box-shadow: none;
    border-radius: 0px;
}

#notice .singlebutton + .singlebutton input, .submit.buttons input[name="cancel"] {
    box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
    display: inline-block;
    padding: 4px 12px;
    margin-bottom: 0px;
    font-size: 12px;
    line-height: 20px;
    color: rgb(255, 255, 255);
    text-align: center;
    text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
    vertical-align: middle;
    cursor: pointer;
    background-color: rgb(65, 154, 234);
    background-image: none;
    background-repeat: repeat-x;
    border-width: 0px;
    border-style: solid;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgb(179, 179, 179);
    border-radius: 0px;
}

#notice .singlebutton + .singlebutton input:hover, .submit.buttons input[name="cancel"]:hover, #notice .singlebutton + .singlebutton input:focus, .submit.buttons input[name="cancel"]:focus, #notice .singlebutton + .singlebutton input:active, .submit.buttons input[name="cancel"]:active, #notice .singlebutton + .singlebutton input.active, .submit.buttons input.active[name="cancel"], #notice .singlebutton + .singlebutton input.disabled, .submit.buttons input.disabled[name="cancel"], #notice .singlebutton + .singlebutton input[disabled], .submit.buttons input[name="cancel"][disabled] {

    color: rgb(255, 255, 255);
    background-color: rgb(40, 110, 210);

}

button:hover, input.form-submit:hover, input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover, button:focus, input.form-submit:focus, input[type="button"]:focus, input[type="submit"]:focus, input[type="reset"]:focus {
    color: rgb(255, 255, 255);
    text-decoration: none;
    background-position: 0px -15px;
    transition: background-position 0.2s linear 0s;
}

button:hover, input.form-submit:hover, input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover, button:focus, input.form-submit:focus, input[type="button"]:focus, input[type="submit"]:focus, input[type="reset"]:focus, button:active, input.form-submit:active, input[type="button"]:active, input[type="submit"]:active, input[type="reset"]:active, button.active, input.form-submit.active, input.active[type="button"], input.active[type="submit"], input.active[type="reset"], button.disabled, input.form-submit.disabled, input.disabled[type="button"], input.disabled[type="submit"], input.disabled[type="reset"], button[disabled], input.form-submit[disabled], input[type="button"][disabled], input[type="submit"][disabled], input[type="reset"][disabled] {
    color: rgb(51, 51, 51);
    background-color: rgb(65, 154, 234);
}

button, input.form-submit, input[type="button"], input[type="submit"], input[type="reset"] {
    display: inline-block;
    padding: 4px 12px;
    margin-bottom: 0px;
    font-size: 12px;
    line-height: 20px;
    color: rgb(255, 255, 255);
    text-align: center;
    text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
    vertical-align: middle;
    cursor: pointer;
    background-color: rgb(65, 154, 234);
    background-image: none;
    background-repeat: repeat-x;
    border-width: 1px;
    border-style: solid;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgb(179, 179, 179);
    border-radius: 4px;
    box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
margin-top: 5px;
}

button:hover, input.form-submit:hover, input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover, button:focus, input.form-submit:focus, input[type="button"]:focus, input[type="submit"]:focus, input[type="reset"]:focus, button:active, input.form-submit:active, input[type="button"]:active, input[type="submit"]:active, input[type="reset"]:active, button.active, input.form-submit.active, input.active[type="button"], input.active[type="submit"], input.active[type="reset"], button.disabled, input.form-submit.disabled, input.disabled[type="button"], input.disabled[type="submit"], input.disabled[type="reset"], button[disabled], input.form-submit[disabled], input[type="button"][disabled], input[type="submit"][disabled], input[type="reset"][disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(40, 110, 210);
    border-radius: 0px;
}

button, input.form-submit, input[type="button"], input[type="submit"], input[type="reset"] {
    display: inline-block;
    padding: 4px 12px;
    margin-bottom: 0px;
margin-bottom: 5px;
    font-size: 12px;
    line-height: 20px;
    color: rgb(255, 255, 255);
    text-align: center;
    text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
    vertical-align: middle;
    cursor: pointer;
    background-color: rgb(65, 154, 234);
    background-image: none;
    background-repeat: repeat-x;
    border-width: 0px;
    border-style: solid;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgb(179, 179, 179);
    border-radius: 0px;
    box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
}

button, input.form-submit, input[type="button"], input[type="submit"], input[type="reset"] {
    font-size: 12px;
    border-width: 0px;
    border-color: rgba(0, 0, 0, 0.1);
    box-shadow: none;
    border-radius: 0px;
}

.navbar .btn-navbar {
background-color: rgb(40, 40, 40);
background-image: none;
border-radius: 0px;
border-width: 0px;
box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.1) inset, 0px 0px 0px rgba(255, 255, 255, 0.075);
margin-top: 7px;
}

.navbar .btn-navbar:hover, .navbar .btn-navbar:focus, .navbar .btn-navbar:active, .navbar .btn-navbar.active, .navbar .btn-navbar.disabled, .navbar .btn-navbar[disabled] {
    color: rgb(255, 255, 255);
    background-color: rgb(60, 60, 60);
    border-radius: 0px;
    border-width: 0px;
}

.block-region.{
padding: 20px;
}

#region-main {
    padding-right: 0px;
    padding-left: 20px;
}

#page-site-index .unlist {
list-style-type: none; 
margin: 0px;
display: inline-block;
}

a:hover {
        color: #409AE6;
        text-decoration: none;
}

.coursebox > .info > .coursename a {
background-position: left 0.2em;
}

.row-fluid .span3{
width: 20%;
}

.row-fluid .span4 {
    width: 25%;
}

.row-fluid .span8 {
    width: 75%;
}

.content{
min-width:120px;
}

.block{
padding: 8px;
border: 1px solid rgb(225, 225, 225);
margin-bottom: 10px;
border-radius: 0px;
background: none repeat scroll 0% 0% white;
}

#page-site-index .unlist li, #page-site-index .coursebox {
float: left;
width: 175px; 
height: 85px; 
        padding:5px; 
margin: 8px;
border-radius: 0px;
        background: rgb(230,230,230);
}


#page-site-index .unlist li:hover {
border-color:#A6A6A6;
border-top-color: #FFF;
border-left-color: #FFF;
border-right-color:#FFF;
/* IE 6 y 7 */
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="white", endColorstr="#BCBCBC", gradientType="0");
/* IE 8 y 9 */
-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="white", endColorstr="#BCBCBC", gradientType="0");
background: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
/* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(0,0,0,0.2)), to(white));
    /* Safari 5.1+, Chrome 10+ */
    background: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    /* Firefox 3.6+ */
    background: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    /* Opera 11.10+ */
    background: -o-linear-background(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    /* IE 10 */
    background: -ms-linear-background(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
}

#page-site-index .unlist .info, #page-site-index .coursebox .info {width:95%;}

#page-site-index .coursebox .name {
font-size: 13px;
    text-transform: lowercase;
    width: 90%;
}

#page-site-index .unlist .summary, #page-site-index .coursebox .moreinfo, #page-site-index .coursebox .enrolmenticons, #page-site-index .coursebox .content .summary {display:none;}

#page-site-index .teachers {
border: solid #BBB 1px;
border-top: solid #FFF 1px;
position: relative;
/* IE 6 y 7 */
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#FBFBFB", endColorstr="#E2E2E2", gradientType="0");
/* IE 8 y 9 */
-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#FBFBFB", endColorstr="#E2E2E2", gradientType="0");
background: linear-gradient(top, #FBFBFB, #E2E2E2);
/* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#E2E2E2), to(#FBFBFB));
    /* Safari 5.1+, Chrome 10+ */
    background: -webkit-linear-gradient(top, #FBFBFB, #E2E2E2);
    /* Firefox 3.6+ */
    background: -moz-linear-gradient(top, #FBFBFB, #E2E2E2);
    /* Opera 11.10+ */
    background: -o-linear-background(top, #FBFBFB, #E2E2E2);
    /* IE 10 */
    background: -ms-linear-background(top, #FBFBFB, #E2E2E2);
    margin: 0px -6px 0px 2px;
border-radius: 5px;
width:100%;
}

.openteachers {
text-align: right;
      cursor:pointer;
}

#page-site-index .unlist .info .teachers li, #page-site-index .coursebox .content .teachers li  {
float: none;
height: 1%;
background:none;
margin-left: -3px;
margin-top: -1px;
margin-bottom: 2px;
padding: 0px;
line-height: 12px;
filter:none;
-ms-filter:none;
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
}

#page-site-index .unlist .info .editing, #page-site-index .coursebox .content .editing {display:visibility;}
#page-site-index .unlist .info .editing li, #page-site-index .coursebox .content .editing li {
border:none;
background:none;
margin-left: -8px;
visibility: visible;
line-height: 0.1em;
filter:none;
-ms-filter:none;
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;}
#page-site-index .coursebox {
    border-color: #CCC;
border-style:none;
}

#page-header {
background: white;
}

div.wrs_editor img { 
max-width: none; 
}

span.wirisimagemathinput img { 
margin: 0 !important; 
max-width: none; 
}

.paging a {text-decoration:underline; font-size:9pt;}


.essential-colours-alternative2
.nav-tabs li a { 
color: rgb(241, 172, 219); 
}

.essential-colours-alternative2
.nav-tabs li a:hover { 
color: #eeeeee; 
}

.essential-colours-alternative3
.nav-tabs li a { 
color: #cccccc; 
}

.essential-colours-alternative3
.nav-tabs li a:hover { 
color: #FCF3BA; 
}

.essential-colours-alternative1
.nav-tabs li a { 
color: #99BEDE; 
}

.essential-colours-alternative1
.nav-tabs .disable li a { 
color: #023E73; 
}

.essential-colours-alternative1
.nav>.disabled>a {
color: #555;
background: #fff;
}

.essential-colours-alternative2
.nav>.disabled>a {
color: #BC007D;
background: #fff;
}

.essential-colours-alternative3
.nav>.disabled>a {
color: #666666;
background: #fff;
}

.essential-colours-alternative1
.nav-tabs>.active>a, .nav-tabs>.active>a:hover, .nav-tabs>.active>a:focus  {
color: #023E73;
cursor: default;
background-color: #fff;
border: 1px solid #ddd;
border-bottom-color: transparent;
}

.essential-colours-alternative2
.nav-tabs>.active>a, .nav-tabs>.active>a:hover, .nav-tabs>.active>a:focus  {
color: #BC007D;
cursor: default;
background-color: #fff;
border: 1px solid #ddd;
border-bottom-color: transparent;
}

.essential-colours-alternative3
.nav-tabs>.active>a, .nav-tabs>.active>a:hover, .nav-tabs>.active>a:focus  {
color: #666666;
cursor: default;
background-color: #fff;
border: 1px solid #ddd;
border-bottom-color: transparent;
}
		
		');
$I->click('Save Changes');



?>