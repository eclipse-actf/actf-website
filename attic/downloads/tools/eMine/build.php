<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ACTF - eMine";
	$pageKeywords	= "Accessibility Tools Framework, eMine, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF team";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>Overview of ACTF eMine</h1>
	<p>eMine (Web Page Transcoding Based on Eye Tracking) is a research project that aims to improve the user experience in constrained environments
	 (such as mobile web or screen reader users) by using a novel application of eye tracking technology. 
	 In brief, by relating scanpaths to the underlying source code of web pages, 
	 this project aims to transcode web pages such that they are easier to access in constrained environments.<br>
	 (For more details about the eMine project, please visit <a href="http://cng.ncc.metu.edu.tr/content/emine.php">eMine project homepage</a>. [Jump to external Web site.])
	 </p>
	<p>As a first step of eMine project, this example extracts and shows the block structure by using some visual cues and tag properties of the nodes. 
	</p>
	<h1>ACTF eMine build instruction</h1>
	<p>To download and build an eMine project, please follow instructions below.</p>
	<p><a href="eMine_development.pdf">eMine build instruction (PDF format)</a>	
	</p>
	<br>
	<h1>Acknowledgments</h1>
	We wish to acknowledge the support of the Scientific and Technological Research Council of Turkey (TUBITAK)
	for the eMine project. 
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	