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
	$pageTitle 		= "ACTF Archived Downloads";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
include('../../projectNav.php');
		include('../../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


	<div id="midcolumn">
	<h1>ACTF Archived Downloads</h1>

	<h2 id="release08">ACTF Previous Release (0.8 (Helios) and later)</h2>
	<p>
	
	<!--<a href="../newandnoteworthy/08/actf-08.html">ACTF 0.8 New and Noteworthy</a>-->
	
	</p>
	<div class="homeitem3col">
		<h3>Visualization SDK</h3>
		<p>ACTF Visualization SDK includes two types of extensible visualization engines 
		(Blind usability visualization engine and low-vision simulation engine) and several reusable view components. 
		These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
		From this milestone release, major features of visualization part, such as blind usability visualization, low-vision simulation,
		Flash content inspection function, etc., can be used in Eclipse IDE by selecting each accessibility perspective.
		Please visit <a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.actf">ACTF plan page</a>
		for more details about the updates.
		</p>
		<h4>1.4 (Neon)</h4>
		<p>
			<b>Update Site: </b>
			<a href="http://download.eclipse.org/technology/actf/1.4/update-site/">
			http://download.eclipse.org/technology/actf/1.4/update-site/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.4/actf-visualization-1.4.0-win32.zip">
			actf-visualization-1.4.0-win32.zip <img src="../images/go-bottom.png" alt=""></a>
		</p>		
		<h4>1.3 (Mars)</h4>
		<p>
			<b>Update Site: </b>
			<a href="http://download.eclipse.org/technology/actf/1.3/update-site/">
			http://download.eclipse.org/technology/actf/1.3/update-site/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.3/actf-visualization-1.3.1-win32.zip">
			actf-visualization-1.3.1-win32.zip <img src="../images/go-bottom.png" alt=""></a><br>		
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.3/actf-visualization-1.3.0-win32.zip">
			actf-visualization-1.3.0-win32.zip <img src="../images/go-bottom.png" alt=""></a>		
		</p>		
		<h4>1.2 (Luna)</h4>
		<p>
			<b>Update Site: </b>
			<a href="http://archive.eclipse.org/technology/actf/update-site/1.2/">
			http://archive.eclipse.org/technology/actf/update-site/1.2/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.2/actf-visualization-1.2.0-win32.zip">
			actf-visualization-1.2.0-win32.zip <img src="../images/go-bottom.png" alt=""></a>
		</p>
		<h4>1.1 (Kepler)</h4>
		<p>
			<b>Update Site: </b>
			<a href="http://archive.eclipse.org/technology/actf/update-site/1.1/">
			http://archive.eclipse.org/technology/actf/update-site/1.1/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.1/actf-visualization-1.1.0-win32.zip">
			actf-visualization-1.1.0-win32.zip <img src="../images/go-bottom.png" alt=""></a>
		</p>
		<h4>1.0 (Juno)</h4>
		<p>
			<b>Update Site: </b>
			<a href="http://archive.eclipse.org/technology/actf/update-site/1.0.2/">
			http://archive.eclipse.org/technology/actf/update-site/1.0.2/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.0/actf-visualization-1.0.2-win32.zip">
			actf-visualization-1.0.2-win32.zip <img src="../images/go-bottom.png" alt=""></a><br>				
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.0/actf-visualization-1.0.1-win32.zip">
			actf-visualization-1.0.1-win32.zip <img src="../images/go-bottom.png" alt=""></a><br>		
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/1.0/actf-visualization-1.0.0-win32.zip">
			actf-visualization-1.0.0-win32.zip <img src="../images/go-bottom.png" alt=""></a>
		</p>
		<h4>0.9 (Indigo)</h4>
		<p>
			<b>Other downloads: </b><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.9.2-win32-incubation.zip">
			actf-visualization-0.9.2-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.9.1-win32-incubation.zip">
			actf-visualization-0.9.1-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.9.0-win32-incubation.zip">
			actf-visualization-0.9.0-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a>
		</p>
		<h4>0.8 (Helios)</h4>
		<p>
			<b>Other downloads: </b><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.8.2-win32-incubation.zip">
			actf-visualization-0.8.2-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.8.1-win32-incubation.zip">
			actf-visualization-0.8.1-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
			<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.8.0-win32-incubation.zip">
			actf-visualization-0.8.0-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a>
		</p>
	</div>
	<hr class="clearer" />


<h2 id="release07">ACTF Previous Release (0.7 (Galileo))</h2>

<div class="homeitem3col">
	<h3>Visualization SDK</h3>
	<p>ACTF Visualization SDK includes two types of extensible visualization engines 
	(Blind usability visualization engine and low-vision simulation engine) and several reusable view components. 
	These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
	</p>
	<p>
	<b>Other downloads: </b><br>
		<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.7.2-win32-incubation.zip">
		actf-visualization-0.7.2-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
		<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.7.1-win32-incubation.zip">
		actf-visualization-0.7.1-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a><br>
		<a href="http://archive.eclipse.org/technology/actf/sdk/actf-visualization-0.7.0-win32-incubation.zip">
		actf-visualization-0.7.0-win32-incubation.zip <img src="../../images/go-bottom.png" alt=""></a>
	</p>
	<p>
	(Please try <a href="tools/aDesigner/index.php">ACTF aDesigner</a>, too. aDesigner is an exemplary tool developed on top of the Validation SDK.)
	</p>

</div>

<hr class="clearer" />	

<h2 id="release05">ACTF Previous Release (0.5)</h2>

<div class="homeitem3col">
	<h3>Visualization SDK</h3>
	<p>ACTF Visualization SDK includes two types of extensible visualization engines 
	(Blind usability visualization engine and low-vision simulation engine) and several reusable view components. 
	These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
	</p>
	<p>
	<b>Other download: </b>
	<a href="http://archive.eclipse.org/technology/actf/sdk/0.5.0/actf-visualization-sdk-200810080000-incubation.zip">
	actf-visualization-sdk-200810080000-incubation.zip<img src="../../images/go-bottom.png" alt=""></a>
	</p>

	<h3>Alternative Interface SDK</h3>
	<p>ACTF Alternative Interface SDK provides middleware components to make multimedia content controllable via alternative input methods, to add audio descriptions or captions, and to transform user interfaces by using external metadata.	
	</p>
	<p>
	<b>Other download: </b>
	<a href="http://archive.eclipse.org/technology/actf/sdk/0.5.0/actf-ai-sdk-200810080000-incubation.zip">
	actf-ai-sdk-200810080000-incubation.zip<img src="../../images/go-bottom.png" alt=""></a>
	</p>
	<p>
	(Please try <a href="tools/aiBrowser/index.php">ACTF aiBrowser</a>, too. aiBrowser is an exemplary tool developed on top of the Alternative Interface SDK.)
	</p>


</div>

	<hr class="clearer" />	
	<h2 id="tools">ACTF Validation Components</h2>
	<div class="homeitem3col">
	<h3>Overview</h3>
	<p>
	ACTF Validation Components are now dormant and have no down stream dependencies or consumers of which we are aware. 
	ACTF community decided to remove it from the ACTF project (see <A href="http://dev.eclipse.org/mhonarc/lists/actf-dev/msg00286.html">ACTF developers list archive</a>).
	The entire source code and artifacts of Validation Components are archived and listed below.
	</p>
	<p>
	Further development and enhancements of AccProbe will be directed by the IAccessible2 community residing at the 
	<a href="http://www.linuxfoundation.org/collaborate/workgroups/accessibility/iaccessible2">Linux Foundation</a>.
	</p>
	<h3>Archived Source Files</h3>
	<p>
	The last snapshot of ACTF CVS that includes Validation Components is available from <a href="http://archive.eclipse.org/technology/actf/src/actf-20100301.zip">here</a>.
	</p>

	<h3>Java Validation Componentry (Javaco)</h3>
	<p><a href="validation/javaco/index.php">Javaco<img src="../../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the Java developer from within the JDT to perform 
	accessibility compliance validations of Java applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
	evaluation need not be a distinct part of the testing cycle.  Other components allow the developer to unit-test their GUI-based 
	applications for accessibility, correcting accessibility deficiencies right in the source code.</p>

    <h3>Web Validation Componentry (Webelo)</h3>
    <p><a href="validation/webelo/index.php">Webelo<img src="../../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the web content author 
    or web appplication developer from within the WTP, JEE, or JDT to perform 
    accessibility compliance validations of web content or applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
    evaluation need not be a distinct part of the testing cycle.</p>

	
	<h3>Accessibility Probe (AccProbe)</h3>
	
	<p><a href="validation/accprobe/index.php">Accessibility Probe<img src="../../images/go-bottom.png" alt=""></a> is a standalone, Eclipse Rich-Client Product (RCP) application that provides 
	a view of the accessible object hierarchy of a currently running application or rendered document and of the properties of the accessible objects of that application 
or document. It can also serve as an event monitor for tracking the events
fired by these accessible objects. It is meant to combine the functionality of a variety of accessibility testing tools 
(such as inspection and event-monitoring tools) into one easy-to-use application for accessibility testing and debugging.</p>
	<p>Please visit the <a href="http://www.linuxfoundation.org/collaborate/workgroups/accessibility/iaccessible2">IAccessible2 community</a> residing at 
	the Linux Foundation to find the latest version of the tool.	
	</p>
	</div>

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
