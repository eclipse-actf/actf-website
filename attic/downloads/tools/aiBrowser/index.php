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
	$pageTitle 		= "ACTF - aiBrowser";
	$pageKeywords	= "Accessibility Tools Framework, aiBrowser, accessibility, ACTF, Eclipse, Accessibility Internet Browser for Multimedia, multimedia";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('tools', 'aiBrowser');
	
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF Accessibility Internet Browser for Multimedia (aiBrowser)</h1>
	<p><ul>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#downloads">aiBrowser Releases</a></li>
	<li><a href="#quickStart">Getting started</a></li>
	<li><a href="build.php">Building aiBrowser</a></li> 
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="overview">Overview</a></h2>
	<p>The use of multimedia content has increased dramatically over the last 
	few years, but people with limited or no vision have not been able to fully 
	enjoy the benefits of these advances. This new multimedia browsing 
	accessibility tool provides people with visual impairments a level of control 
	more comparable to a sighted person using a mouse. For example, while enjoying
	a streaming video, visually impaired people can now select the <b>play</b> 
	button by simply pressing a predefined shortcut key instead of searching in 
	the content for buttons that control the video.
	</p>
	<p>Users can also adjust the volume of an individual source in order to 
	identify and listen to different sound sources without losing track of the 
	screen-reading software because of the sound of a video. If a content creator 
	wants to provide a voice narrative for a video, he can write a text script as 
	a piece of metadata; the tool adds the audio descriptions by using text-to-speech 
	engines.  Future plans for extending this technology include enabling flexible 
	audio speed control and contributing this work to an open-source development project.  
	Such contribution will accelerate development and adoption of tools that make 
	Web-based multimedia content accessible to the visually impaired.
	<p/>
	
	<h2><a name="downloads">aiBrowser Releases</a></h2>	
	<p>There are two types of downloads, installer (exe file) and zip file. To use 
	aiBrowser with JAWS screen reader, download an installer version of aiBrowser.
	</p>

	<p>All downloads are provided under the terms and conditions of the 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>.
	</p>
	
	<p>Zip File<br>
	$releaseTable
	</p>
	
	<p>Installer<br>
	<table width='80%' border='2'>
	 <tr>
	  <th>File</th>
	  <th>Version</th>
	  <th>Build ID</th>
	  <th>Size</th>
	 </tr>
	<tr>
	  <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/tools/aiBrowser_installer/0.0.1/actf-aiBrowser-200803112200-win32-incubation.exe">
	  actf-aiBrowser-200803112200-win32-incubation.exe</a></td>
	  <td>0.0.1</td>
	  <td>200803112200</td>
	  <td>23781KB</td>
	  </tr>
	</table>
	</p>
	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>ACTF aiBrowser is an Eclipse RCP application. So, you can easily launch 
	aiBrowser by executing the 'aiBrowser.exe'.
	</p>

	<ul>
	<li><strong>Installer version: </strong>
	Download and execute an installer. Then, follow the instructions from the 
	installation wizard. After the installation, you can start aiBrowser from 
	'All Programs' menu > 'ACTF Accessibility Internet Browser' > 'aiBrowser'. 
	Online help is available from Help menu.
	</li>
	<li><strong>Zip file version: </strong>
	Download and unpack a zip file, and execute aiBrowser.exe in the aiBrowser 
	folder. Online help is available from Help menu.
	</li>
		
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP SP2 (recommended) or above
	 </UL>
  	 <li>Hardware
	 <UL>
	  <LI>50MB disk space for installation
	  <LI>100MB disk space (150MB recommended)
	  <LI>512MB memory (1GB+ recommended)
	 </UL>
	 <LI>Software
	 <UL>
	  <li>Java Runtime Environment (JRE) 5.0 or above</li>
	  <li>Internet Explorer 6.0 or above</li>
	  <li>To use Flash Content:  Adobe&reg; Flash Player, Version 8 or above</li>
  	 </UL>
	</ul>
	</p>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	