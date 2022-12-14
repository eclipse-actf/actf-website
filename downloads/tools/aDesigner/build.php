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
	$pageKeywords	= "Accessibility Tools Framework, aDesigner, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF aDesigner build instruction</h1>
	<p><ul>
	<li><a href="#requirements">System Requirements</a></li>
	<li><a href="#quickStart">Build aDesigner by using ACTF SDK (recommended)</a></li>
	<li><a href="#source">Build aDesigner from source code</a></li>
	</ul></p>

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
	  <li>For Flash Accessibility mode:  Adobe&reg; Flash Player, Version 8 or above</li>
	  <li>For OpenDocument Accessibility mode:  <a href="http://archive.services.openoffice.org/pub/openoffice-archive/stable/3.2.1/">OpenOffice.org 3.2.x</a></li>
  	 </UL>
	</ul>
	</p>

	<h2><a name="quickStart">Build aDesigner by using ACTF SDK (recommended)</a></h2>
	<p>
	  <ol>
	   <li>Please follow instructions in the <a href="http://www.eclipse.org/actf/docs/developers/ACTF.pdf">ACTF getting started</a> documentation.</li>
	  </ol>
	</p>
	
	<h2><a name="source">Build aDesigner from source code</a></h2>
	<p>
	  <ol>
	  <li>Prepare Eclipse and other pre-reqs. (See <a href="#requirements">System Requirements</a>)</li>
	  <li>Obtain source code</li>
	  <ul>
	   <li>Download Team Project Set file (*.psf).
	    <ul>
	      <li>for Committers: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/psf/committer/aDesigner-committer.zip">zipped aDesigner-committer.psf</a>
	       (Please replace <em>&lt;your_id&gt;</em> with your committer ID.)</li>
	      <li>for others: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/psf/anonymous/aDesigner.zip">zipped aDesigner.psf</a></li>
	    </ul>
	   <li>Unzip the downloaded file and import Team Project Set file (*.psf) from Eclipse's 'File' -&gt; 'Import' -&gt; 'Team' -&gt; 'Team Project Set' menu.
	    <ul>
	      <li>Committers: use your committer id and password</li>
	      <li>Others: user -&gt; "anonymous", password -&gt; "" (null)</li>
	    </ul>
	   <li>Add Classpath Variable for OOo (if needed) from 'Window' -&gt; 'Preferences' -&gt; 'Java' -&gt; 'Build Path' -&gt; 'Classpath Variables' as below:<br>
		Name: OOO_HOME<br>
		Path: &lt;OOo install dir&gt; (e.g., "c:\Program Files\OpenOffice.org 3")<br>
	  </ul> 
	  <li>Launch aDesigner from workspace</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.adesigner' project and select 'aDesigner.product'.</li>
	   <li>Select 'Synchronize' under 'Testing' section.</li>
	   <li>Select 'Launch an Eclipse Application' under 'Testing' section.</li>
	  </ul>
	  <li>Build aDesigner</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.adesigner' project and select 'aDesigner.product'.</li>
	   <li>Open an export product wizard by selecting 'Eclipse product export wizard' under 'Exporting' section and follow the wizard.</li>
	  </ul>
	  </ol>
	</p>
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	