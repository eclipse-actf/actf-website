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
	$pageTitle 		= "ACTF Contributors Information";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
	include('projectNav.php');
		include('rightCol.php');
	
	# End: page-specific settings
	#
			
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<div id="midcolumn">
<h1>Git Repository</h1>
<p>The source code of the ACTF project can be found in the Git Repository. 
To access repository list, please visit &quot;<a href="https://projects.eclipse.org/projects/technology.actf/developer">Developer Resources</a>&quot; tab of <a href="http://projects.eclipse.org/projects/technology.actf">ACTF project page</a>.</p>
<p>For more details to use Git in Eclipse, please visit <a href="http://wiki.eclipse.org/EGit/User_Guide">EGit User Guide</a> page.</p>

<h1>Development Guidelines</h1>
<h2 id="naming">1. Naming Conventions</h2>
<p>Naming Conventions in the ACTF project follow the <a href="http://wiki.eclipse.org/Naming_Conventions">Eclipse Naming 
Conventions</a> except for Java packages containing 'internal', 'tests', or 'examples'.</p>

<h3 name="package" id="package">Java Packages</h3>
<p>One of the main goals of this naming convention is to make it easy to find the component to which any given class belongs. 
The general form of java package names is as follows:</p>
<ul>
<li>org.eclipse.actf.&lt;component&gt;[.*]</li>
</ul>
<p name="group" id="group">
Currently, ACTF includes the components listed below. This table also shows the subcomponents within each ACTF component. The 
<a href="#dir">directory structure of the Git repository</a> is defined based on this grouping.</p>
<table border="1">
<tr>
  <th>Group</th>
  <th>Component name</th>
  <th>Description</th>
</tr>
<tr>
  <th rowspan="6">common</th>
  <td>accservice	</td>
  <td>includes components for accessing native accessibility architectures and APIs</td>
</tr>
<tr>
  <td>core</td>
  <td><i>is reserved for future use</i></td>
</tr>
<tr><td>model</td>
  <td>includes components to support access to runtime properties of GUI components, document elements, and other runtime structures. It also includes typical application plugins as Editor Extensions.</td>
</tr>
<tr>
  <td>mediator</td>
  <td>includes mediator services.</td>
</tr>
<tr>
  <td>repository</td>
  <td>includes repository services.</td>
</tr>
<tr>
  <td>util</td>
  <td>includes common utilities for other ACTF components.</td>
</tr>
<tr>
  <th>ai</th>
  <td>ai</td>
  <td>includes components for adaptive interfaces.</td>
</tr>
<tr>
  <th>examples</th>
  <td>examples</td>
  <td>includes exemplary applications.</td>
</tr>
<tr>
  <th>validation</th>
  <td>validation</td>
  <td>includes validation engine, rulebase manager, interfaces for and base implementations of rulesets and rules and so on.</td>
</tr>
<tr>
  <th rowspan="2">visualization</th>
  <td>report</td>
  <td>includes report generators.</td>
</tr>
<tr>
  <td>visualization</td>
  <td>includes accessibility/usability visualization engines.</td>
</tr>
</table>

<p>In the ACTF project, the reserved words 'internal', 'tests', or 'examples' may appear after the component name. For example, 
<tt>org.eclipse.actf.validation.tests</tt> indicates test cases that are used for the validation component. The prefered usage is 
to put the reserved names in the fifth position, leaving the fourth position for the component name. In addition to 
this, each component has its own ui components in the ACTF project. So, the word "ui" may appear after the component name as well.</p>

<p>The names of internal/tests/examples/ui packages in ACTF will be:</p>
<ul>
   <li>org.eclipse.actf.&lt;component&gt;.internal[.*] - internal packages of &lt;component&gt;</li>
   <li>org.eclipse.actf.&lt;component&gt;.tests[.*] - test packages of &lt;component&gt; </li>
   <li>org.eclipse.actf.&lt;component&gt;.examples[.*] - examples of &lt;component&gt;</li>
   <li>org.eclipse.actf.&lt;component&gt;.ui[.*] - ui components of &lt;component&gt;</li>
</ul>

<h2 name="dir" id="dir">2. Directory structure</h2>
<p>We will ask you to organize your files as described below. Basically you will need to create the following directory 
structure for each subdirectory you own under the <a href="#group">ACTF component group</a>:</p>

<table cellpadding="2" cellspacing="2" border="1">
  <tr>
    <td colspan="1"><b style="color:darkgreen">Directory structure</b></td>
  </tr>
<tr valign="top"><td>
<pre>/gitroot/actf/
  org.eclipse.actf.<i>[group]</i>.git/
    plugins
    doc
    tests
    features
</pre>
</td></tr>
<tr valign="top"><td colspan="1">
<ol><li> plugins: 
<ul><li> the plugins that provide the function
</li></ul>
</li><li> doc:
<ul><li> the doc plugins
</li></ul>
</li><li> tests:
<ul><li> the test plugins
</li></ul>
</li><li> features:
<ul><li> the SDK feature (to generate a bundle that includes source + the plugins) and fragments
</li><li> all main, source, test, doc, and example features and fragments
</li></ul>
</li></ol>
</td></tr></table>

<p>The projects containing features and fragments must be suffixed by <i>-feature</i> and <i>-fragment</i> respectively.</p>


<h2>3. Coding conventions</h2>
<p>The ACTF project uses the built-in Java-convention in Eclipse.</p>

<h2>4. Namespace URI conventions</h2>
<p>To avoid unexpected propagation, namespace URIs in ACTF project will be defined as follows:</p>
<ul>
<li>http://www.eclipse.org/projects/actf/&lt;component&gt;[/*]</li>
</ul>
<p>
If you need to create new namespaces, please submit a request to the newsgroup.
</p>

<h2 id="API">5. APIs</h2>
<p>In ACTF, all internal APIs are in internal packages 
and currently are not exported to others. 
(see also <a href="#naming">Naming Conventions</a>)
</p>
<p>
All public APIs exported to others are currently provisional. 
ACTF plans to freeze the APIs after reflecting community feedback in Indigo release (0.9), 
then all APIs will be graduating from provisional in Juno release (1.0).
</p>

<h2>6. Others</h2>
<p>
For more details about development conventions and guidelines, please visit  
<a href="http://wiki.eclipse.org/Development_Conventions_and_Guidelines">Eclipse development guidelines</a> page.
</p>	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
