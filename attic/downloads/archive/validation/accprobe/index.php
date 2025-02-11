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
	$pageTitle 		= "ACTF - Accessibility Probe (archive)";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, accessibility probe, Eclipse";
	$pageAuthor		= "Mike Squillace";
	
include('../../../../projectNav.php');
		include('../../../../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>ACTF Accessibility Probe (archive)</h1>
	<p>This componentry is no longer actively developed or supported in Eclipse ACTF project. 
	Further development and enhancements of AccProbe will be directed by the IAccessible2 community residing at the 
	<a href="http://www.linuxfoundation.org/collaborate/workgroups/accessibility/iaccessible2">Linux Foundation</a>.
	</p>
	
<p><ul>
<li><a href="#overview">Overview</a></li>
<li><a href="#downloads">AccProbe Releases</a></li>
<li><a href="#quickStart">Getting started</a></li>
<li><a href="#building">Building AccProbe</a></li>
</ul></p>
<h2><a name="overview">Overview</a></h2>
<p>The <strong>Accessibility Probe</strong> (AccProbe)  is a standalone, Eclipse Rich-Client Product (RCP) application that provides 
	a view of the <a href="http://msdn2.microsoft.com/en-us/library/ms697707.aspx">
	Microsoft Active Accessibility (MSAA)</a> or <a href="http://www.linux-foundation.org/en/Accessibility/IAccessible2">IAccessible2</a> 
	hierarchy of a currently running application or rendered document and of the properties of the accessible objects of that application 
or document. It can also serve as an event monitor for tracking the events
fired by these accessible objects. It is meant to combine the functionality of tools like Microsoft's Inspect32, AccExplore, 
and AccEvent into one easy-to-use application for accessibility testing and debugging.</p>

	<h2><a name="downloads">AccProbe Releases</a></h2>

<table width='80%' border='2'>
<tr>
<th>File</th>
<th>Version</th>
<th>Build ID</th>
<th>Size</th>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/tools/accprobe/0.4.4/actf-accprobe-I200910221349-win32-incubation.zip">actf-accprobe-I200910221349-win32-incubation.zip</a></td>
<td>0.4.4</td>
<td>I200910221349</td>
<td>15461KB</td>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/tools/accprobe/0.4.3/actf-accprobe-I200902231433-win32-incubation.zip">actf-accprobe-I200902231433-win32-incubation.zip</a></td>
<td>0.4.3</td>
<td>I200902231433</td>
<td>15444KB</td>
</tr>
</table>



	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>Since AccProbe is an Eclipse RCP application, it couldn't be easier to use!  Simply unpack the archive you choose to download 
	from the list above to a directory of your choosing.  A top-level 
	'accprobe' directory will be created for you.  Within this directory, double-click accprobe.exe and you're off!  For more
	detailed instructions and using AccProbe, consult the User's Guide also found in the 'accprobe' directory.</p>
	
	<p><strong>Note</strong>: If you intend to inspect or monitor an <a href="http://www.linux-foundation.org/en/Accessibility/IAccessible2/SoftwareDirectory">IAccessible2-enabled application</a>, you will 
	need to register the IAccessible2Proxy.dll packaged with AccProbe.  You do this as follows:</p>
	<p>regsvr32 dllname</p>
	<p>where 'dllname' is the full path to the IAccessible2Proxy.dll, &lt;ACCPROBE_INSTALL_DIR/accprobe/org.eclipse.actf.accservice.win32.ia2_&lt;version&gt;/IAccessible2Proxy.dll&gt;.</p>
	
	<h2><a name="building">Building AccProbe</a></h2>
<p>There are several steps for building AccProbe, depending upon whether or not you wish 
to build the requisite dlls:</p>

<p><ul>
<li>obtain the source code:<ul>
	<li>if you have not done so before, <a href="../../../../contributors.php">establish a connection to the ACTF CVS repository</a></li>
	<li>checkout the following plugins from the org.eclipse.actf.common/plugins directory:<ul>
		<li>org.eclipse.actf.core</li>
		<li>org.eclipse.actf.model</li>
		<li>org.eclipse.actf.model.javapp</li>
		<li>org.eclipse.actf.accservice</li>
		<li>org.eclipse.actf.accservice.win32.ia2-fragment</li>
		<li>org.eclipse.actf.accservice.win32.msaa-fragment</li>
	</ul></li>
	<li>checkout the following features from the org.eclipse.actf.common/features directory:<ul>
		<li>org.eclipse.actf.model-feature</li>
		<li>org.eclipse.actf.accservice-feature</li>
	</ul></li>
	<li>checkout the following plugin from the org.eclipse.actf.examples/plugins directory:<ul>
		<li>org.eclipse.actf.examples.accprobe</li>
	</ul></li>
	<li>checkout the following feature from the org.eclipse.actf.examples/features directory:<ul>
		<li>org.eclipse.actf.examples.accprobe-feature</li>
	</ul></li>
</ul></li>
<li>You will also need the following bundles from the <a href="http://www.eclipse.org/orbit">Orbit project</a> for an IDE build<ul>
<li>org.apache.commons.beanutils</li>
<li>org.apache.commons.collections</li>
<li>org.apache.commons.jxpath</li>
<li>org.apache.commons.logging</li>
</ul><br>Download the bundles, drop them into your plugins directory, and restart the workbench.</li>
<li>build the AccProbe product:<ol>
	<li>Select File&gt;Export... and choose Plug-inDevelopment&gt;Eclipse Product</li>
	<li>Click Next</li>
	<li>Select /org.eclipse.actf.examples.accprobe/accprobe.product for the Configuration or Browse to it</li>
	<li>Type 'accprobe' as the root directory and check the synchronize chekcbox</li>
	<li>Select either an archive or directory to which to export the product and provide the remaining requisite information</li>
	<li>Click Finish</li>
</ol></li>
<li><a href="http://www.linux-foundation.org/en/Accessibility/IAccessible2/ComProxyDLL">build the IAccessible2Proxy.dll</a> (optional)</li>
<li><a href="buildingACTFDlls.html">build the MSAA- and IAccessible2-specific dlls for ACTF</a> (optional)</li>
</ul></p>
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	