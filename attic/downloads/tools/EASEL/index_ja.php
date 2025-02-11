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

	header("Content-Type: text/html;charset=UTF-8");
	
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
	<li><a href="#overview">概要</a></li>
	<li><a href="#downloads">EASEL開発版 (マイルストーン リリース)</a></li>
	<li><a href="#quickStart">EASELの使い方</a></li>
<!--	<li><a href="build.php">EASELの開発について</a></li> -->
	<li><a href="#requirements">システム要件</a></li>
	</ul></p>

	<h2><a name="overview">概要</a></h2>
	<p>Eclipse ACTF Script Editor Lite (EASEL)は、インターネット上の動画に対して音声ガイドを簡単に付与することを目的として開発された音声ガイド編集ツールで、
音声ガイドの確認・編集のために合成音声を利用できる点が特徴です。
合成音声を用いることで、音声ガイドの内容やスピード・性別等のパラメータを調整しながら、リアルタイムに確認・編集作業を行うことを可能にし、
音声ガイド作成のための手間とコストを抑えることを目指しています。
	<p/>
	
	<h2><a name="downloads">EASEL開発版 (マイルストーン リリース)</a></h2>	
	<p>EASELは現在、開発中です。 
	機能の追加のご希望や、問題点などありましたら、<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=ACTF&component=examples">bugzilla</a>から報告をお願いします。
	</p>

	<p>全てのダウンロードは 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>の条件の下で提供されます。
	</p>
	
	$releaseTable
	
	<ol>
	 <li>上記テーブル内のリンクを選択して、ダウンロードページに進んで下さい。（ファイル内の日付（Build ID）が新しいものが最新版です。）</li>
	 <li>ダウンロードページ内で、サーバーを選んでZipファイルをダウンロードしてください。（[Japan]と書かれたサーバーがお進めです。）</li>
	</ol>
	
	<h2><a name="quickStart">EASELの使い方</a></h2>
	<p>EASELは通常のアプリケーションとして動作します. Zipファイルをダウンロードしたら、希望のフォルダに展開し、easel.exeを選択して起動してください。
	使用方法については、Helpメニューからオンラインヘルプを利用することが出来ますので、是非参照してください。
	</p>
		
	<h2><a name="requirements">システム要件</a></h2>
	<p><ul>
	 <li>オペレーティングシステム<BR>
	 <UL>
	  <LI>Windows&#174; XP SP3 (推奨) もしくはそれ以降のVersion</li>
	 </UL>
	 </li>
  	 <li>ハードウェア
	 <UL>
	  <LI>ハードディスク： 150MB以上</li>
	  <LI>メモリー： 1GB以上</li>
	 </UL>
	 </li>
	 <LI>ソフトウェア
	 <UL>
	  <li>Java Runtime Environment (JRE) 5.0以上</li>
	  <li>Internet Explorer 7.0以上</li>
	  <li>Flashを利用する場合:  Adobe&reg; Flash Player, Version 8以上</li>
	  <li>日本語合成音声エンジン（SAPI 5互換　もしくは ProTalker（ProTalker ActiveXが必要））</li>
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
	