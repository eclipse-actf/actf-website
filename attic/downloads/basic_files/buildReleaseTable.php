<?php

// Author: Mike Squillace; masquill@us.ibm.com
// Author: Kentarou FUKUDA: kentarou@jp.ibm.com

$columns = array("File", "Version", "Build ID", "Size");
$downloadsDirName = $App->getDownloadBasePath() . "/";
$projectName = "technology/actf";
$rootDirName = $downloadsDirName . $projectName;

$archiveDirName = "/home/data2/httpd/archive.eclipse.org/technology/actf";

// Sorts by newest file first
function date_cmp ($archiveMap1, $archiveMap2) {
   $f1stats = stat($archiveMap1['parentDir'] . $archiveMap1['fileName']);
   $f2stats = stat($archiveMap2['parentDir'] . $archiveMap2['fileName']);
   return $f2stats['mtime']-$f1stats['mtime'];
}

// construct row entries for each dev build
// parameters:
// $category - one of 'tools' or 'components'
// $elementName - name of tool or component
//
// directory structure is assumed to be:
// $rootDirName/$category/$elementName/version/archive
function generateReleaseTableRows ($isArchive, $category, $elementName){
   ini_set("max_execution_time",10);
   $dirName = $GLOBALS['rootDirName'] . '/' . $category . '/' . $elementName;
   if($isArchive){
   		$dirName = $GLOBALS['archiveDirName'] . '/' . $category . '/' . $elementName;
   }
   $archiveMaps = array();

   	// read version directories
   	if (($dir = @opendir($dirName))) {
   		while (false !== ($versionDirName = readdir($dir))) {
     		if ($versionDirName == "." || $versionDirName == "..") {
     			continue;
     		}
     		
      		if (preg_match('/[0-9]+\.[0-9]+\.[0-9]+/',$versionDirName)) {
         		$version = $versionDirName;
         		$versionDirName = $dirName . '/' . $versionDirName;
   				
   				// read archives
   				if (($versionDir = @opendir($versionDirName))) {
   					while (false !== ($fileName = readdir($versionDir))) {
     					if ($fileName == "." || $fileName == "..") {
     						continue;
     					}
     					$archivePattern = '/.*\-' . $elementName . '\-(runtime|sdk)?\-?(incubation\-)?([nNiIsSmM]?[0-9]+).*\.zip/';
     					if (preg_match($archivePattern, $fileName, $matches)) {
     						$archiveMaps[] = array(
     							'fileName' => $fileName,
     							'parentDir' => $versionDirName . '/',
     							'version' => $version,
     							'buildId' => $matches[3]
     						);
     					}
     				} // next archive file
     				
     				@closedir($versionDir);
     			}
     		}
      	} // next version directory
      	
      	@closedir($dir);
   	} 

   	usort($archiveMaps, "date_cmp");
   	$str = "";
   	foreach ($archiveMaps as $archive) {
         $str = $str . "<tr>\n";
         
         // name and URL
         $str = $str . "<td>";
         $fileName = $archive['fileName'];
         $dir = $archive['parentDir'];
         $relativePath = substr($dir, stripos($dir, $GLOBALS['projectName']));
         if($isArchive){
         	$str = $str . "<a href=\"http://archive.eclipse.org/" . $relativePath . $fileName . "\">";
         }else{         
         	$str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=/" . $relativePath . $fileName . "\">";
         }
         $str = $str . $fileName . "</a>";
         $str = $str . "</td>\n";
         
         // version
         $str = $str . "<td>";
         $str = $str . $archive['version'];
         $str = $str . "</td>\n";
         
         // build id
         $str = $str . "<td>";
         $str = $str . $archive['buildId'];
         $str = $str . "</td>\n";
         
         // file size
         $str = $str . "<td>";
         $file = $dir . $fileName;
         $fileInfo = stat($file);
         $str = $str . round($fileInfo['size'] / 1024) . "KB";
         $str = $str . "</td>\n";
         
         $str = $str . "</tr>\n";
   	}
   	
   	return $str;
}

function generateColumnHeaders () {
$str = "<tr>\n";
	foreach ($GLOBALS['columns'] as $column) {
		$str = $str . "<th>" . $column . "</th>\n";
	}
	$str = $str . "</tr>\n";
	
	return $str;
}

function generateReleaseTable ($category, $elementName) {
	$releaseTable = "<table width='80%' border='2'>\n";
	$releaseTable = $releaseTable . generateColumnHeaders();
	$releaseTable = $releaseTable . generateReleaseTableRows(false, $category, $elementName);
	$releaseTable = $releaseTable . "</table>\n";
	return $releaseTable;
}

function generateArchiveTable ($category, $elementName) {
	$releaseTable = "<table width='80%' border='2'>\n";
	$releaseTable = $releaseTable . generateColumnHeaders();
	$releaseTable = $releaseTable . generateReleaseTableRows(true, $category, $elementName);
	$releaseTable = $releaseTable . "</table>\n";
	return $releaseTable;
}



?>