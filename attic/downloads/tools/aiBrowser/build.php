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
	$pageTitle 		= "ACTF - aDesigner";
	$pageKeywords	= "Accessibility Tools Framework, aiBrowser, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF aiBrowser build instruction</h1>
	<p><ul>
	<li><a href="#quickStart">Getting started</a></li>
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="quickStart">Getting started</a></h2>
	<p><ul>
	  <li>Obtain source code</li>
	  <ul>
	   <li>Prepare Eclipse and other pre-reqs. (See <a href="#requirements">System Requirements</a>)</li>
	   <li>Download Team Project Set file (*.psf).</li>
	    <ul>
	      <li>for Committers: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/psf/committer/aiBrowser-committer.zip">zipped aiBrowser-committer.psf</a>
	       (Please replace <em>&lt;your_id&gt;</em> with your committer ID.)</li>
	      <li>for others: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/psf/anonymous/aiBrowser.zip">zipped aiBrowser.psf</a></li>
	    </ul>
	   <li>Unzip the downloaded file and import Team Project Set file (*.psf) from Eclipse's 'File' -&gt; 'Import' -&gt; 'Team' -&gt; 'Team Project Set' menu.</li>
	    <ul>
	      <li>Committers: use your committer id and password</li>
	      <li>Others: user -&gt; "anonymous", password -&gt; "" (null)</li>
	    </ul>
	  </ul> 
	  <li>Launch aiBrowser from workspace</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.aibrowser' project and select 'aibrowser.product'.</li>
	   <li>Select 'Synchronize' under 'Testing' section.</li>
	   <li>Select 'Launch an Eclipse Application' under 'Testing' section.</li>
	  </ul>
	  <li>Build aiBrowser</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.aibrowser' project and select 'aibrowser.product'.</li>
	   <li>Open an export product wizard by selecting 'Eclipse product export wizard' under 'Exporting' section and follow the wizard.</li>
	   <li>Follow 'readme.txt' in 'org.eclipse.actf.examples.aibrowser-installer' project.</li>
	  </ul>
	</p>
	
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP or above
	 </UL>
	 <LI>Software
	 <UL>
	  <li><a href="http://www.eclipse.org/downloads/moreinfo/jre.php">Java Runtime Environment (JRE) 5.0 or above</a></li>
	  <li><a href="http://archive.eclipse.org/eclipse/downloads/drops/R-3.8.2-201301310800/">Eclipse SDK 3.8.x</a> 
	  and <a href="http://eclipse.org/egit/download/">EGit</a></li>	  
	  <li>Internet Explorer 7.0 or above</li>
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
	