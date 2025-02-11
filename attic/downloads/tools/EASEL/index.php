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
	$pageTitle 		= "Eclipse ACTF Script Editor Lite (EASEL)";
	$pageKeywords	= "Accessibility Tools Framework, EASEL, Script Editor, accessibility, ACTF, Eclipse, audio description, multimedia";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('tools', 'EASEL');
	
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>Eclipse ACTF Script Editor Lite (EASEL)</h1>
	<p><ul>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#downloads">EASEL Releases</a></li>
	<li><a href="#quickStart">Getting started</a></li>
<!--	<li><a href="build.php">Building EASEL</a></li> -->
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="overview">Overview</a></h2>
	<p>The use of multimedia content has increased dramatically over the last 
	few years, but people with limited or no vision have not been able to fully 
	enjoy the benefits of these advances. For example, there are so many movies on the Internet,
	however, almost none of them have audio descriptions.
	</p>
	<p>The Eclipse ACTF Script Editor Lite (EASEL) aims to provide an environment to easily edit audio descriptions for these movies, 
	and it also tries to reduce cost of audio description by using audio synthesis.
	<p/>
	
	<h2><a name="downloads">EASEL Milestone Releases</a></h2>	
	<p>EASEL is now in early prototype phase. Please submit any enhancement request, bug reports, and so on to <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=ACTF&component=examples">bugzilla</a>.
	</p>

	<p>All downloads are provided under the terms and conditions of the 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>.
	</p>
	
	$releaseTable
	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>EASEL is an Eclipse RCP application. Download and unpack a zip file, 
	and execute easel.exe in the "EASEL" folder. 
<!--	Online help is available from Help menu. -->
	</p>
		
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP SP3 (recommended) or above</li>
	 </UL>
	 </li>
  	 <li>Hardware
	 <UL>
	  <LI>150MB+ disk space</li>
	  <LI>1GB+ memory</li>
	 </UL>
	 </li>
	 <LI>Software
	 <UL>
	  <li>Java Runtime Environment (JRE) 5.0 or above</li>
	  <li>Internet Explorer 7.0 or above</li>
	  <li>To use Flash Content:  Adobe&reg; Flash Player, Version 8 or above</li>
	  <li>Text-to-Speech (TTS) engines (SAPI 5 compatible)</li>
  	 </UL>
  	 </li>
	</ul>
	</p>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	