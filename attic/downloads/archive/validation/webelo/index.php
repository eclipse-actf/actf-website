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
	$pageTitle 		= "ACTF - Web Validation Componentry (Webelo) (archive)";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, webelo, web validation, Eclipse";
	$pageAuthor		= "Mike Squillace";
	
include('../../../../projectNav.php');
		include('../../../../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>ACTF Web Validation Componentry (archive)</h1>
	<p>This componentry is no longer actively developed or supported.</p>
<p><ul>
<li><a href="#overview">Overview</a></li>
<li><a href="#downloads">Webelo Releases</a></li>
<li><a href="#quickStart">Getting started</a></li>
<!-- <li><a href="#building">Building Webelo</a></li> -->
</ul></p>

<h2><a name="overview">Overview</a></h2>
<p><strong>ACTF Webelo</strong> is a collection of Eclipse plugins that allow web content authors and web application developers to 
perform accessibility compliance validations of their content or applications.  Webelo leverages both 
the new <a href="http://www.eclipsecon.com/swt/R3_3/new_and_noteworthy.html">SWT Mozilla browser widget</a> 
and the <a href="http://java.sun.com/docs/books/tutorial/reflect/">Java Reflection API</a> to perform 
dynamic, non-invasive, and fully configurable validations of your web content or applications.  Webelo is unique in that it 
performs validations against the runtime structures in the Document Object Model (DOM) rendered by the browser rather than on the markup from which that DOM was parsed.  The 
componentry comes packaged with a validation document for assessing accessibility compliance against  
the <a href="http://www.ibm.com/able/guidelines/web/accessweb.html">IBM Web Accessibility Checklist, v3.5</a>.  
Documentation is available in the standard Eclipse help system but is incomplete.</p> 

	<p>The initial release of Webelo, v0.1.0, can be used to validate only static web content that resides on the local machine or at a 
	specified URL.  "Static," here, means that the entirety of the DOM is created from the underlying HTML file and that no 
	modifications are made to the DOM once the initial page is loaded.  Future releases will contain 
	functionality for validating such modifications and more dynamic content.  Also note that, given the very early stage of this portion of ACTF, 
	API and UI components are likely to change without notice.</p>
	
	<h2><a name="downloads">Webelo Releases</a></h2>
	<p>Webelo releases come in two flavors, runtime and SDK releases.  Runtime releases provide all of the functionality 
	to enable web content authors and application developers to 
	perform dynamic validations and accessibility compliance evaluations from within the WTP, JEE, or other web-related perspectives.  SDK builds provide all source code and an API 
	reference for those wishing to expand the functionality of Webelo, build their own rulebases, or customize the validation engine.</p>
	
<table width='80%' border='2'>
<tr>
<th>File</th>
<th>Version</th>
<th>Build ID</th>
<th>Size</th>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/components/webelo/0.2.0/actf-webelo-sdk-incubation-I200811131001.zip">actf-webelo-sdk-incubation-I200811131001.zip</a></td>
<td>0.2.0</td>
<td>I200811131001</td>
<td>7420KB</td>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/components/webelo/0.2.0/actf-webelo-runtime-incubation-I200811131001.zip">actf-webelo-runtime-incubation-I200811131001.zip</a></td>
<td>0.2.0</td>
<td>I200811131001</td>
<td>4739KB</td>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/components/webelo/0.1.1/actf-webelo-sdk-incubation-N200809081012.zip">actf-webelo-sdk-incubation-N200809081012.zip</a></td>
<td>0.1.1</td>
<td>N200809081012</td>
<td>4736KB</td>
</tr>
<tr>
<td><a href="http://archive.eclipse.org/technology/actf/validation/components/webelo/0.1.1/actf-webelo-runtime-incubation-N200809081012.zip">actf-webelo-runtime-incubation-N200809081012.zip</a></td>
<td>0.1.1</td>
<td>N200809081012</td>
<td>4171KB</td>
</tr>
</table>
	
	<h2><a name="quickStart">Getting started</a></h2>
    <p><strong>Note</strong>: You must download and register <a href="http://developer.mozilla.org/en/docs/XULRunner">XULRunner, v1.8.1.3</a> in order 
    to use Webelo.  Follow the instructions on that page for downloading and installing XULRunner.</p>
    
    	<p>The best way to get started with Webelo is to read the provided documentation, accessed from within the help system.  There are 
	several tasks to review in order to familiarize yourself with the components.  Once becoming familiar with basic tasks, you can refer to more 
	detailed sections of the documentation.  You can also try right-clicking on any .htm, .html, or .xhtml file 
	and selecting Open with...&gt;ACTF Mozilla Browser.</p>


</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	