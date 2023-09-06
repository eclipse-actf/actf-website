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
	$pageTitle 		= "miChecker v3における評価ルールの変更点";
	$pageKeywords	= "Accessibility Tools Framework, miChecker, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	header("Content-Type: text/html;charset=UTF-8");
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>miChecker v3への移行について</h1>
	<p>miChecker v3への移行では、miChecker内で利用しているブラウザをサポートが終了したInternet Explorer相当のブラウザから、
	Microsoft Edge相当のブラウザに変更するなどの実行環境の大幅な更新に加え、評価ルールの詳細化および調整を実施しています。
	本ページでは、v3.00への移行時に行われた評価ルールの変更について、v2からの差分を中心にその概要を説明します。<br>
	(miCheckerの更新履歴の詳細については、miCheckerに付属の「4_更新履歴.txt」もご参照ください)
	</p>

	<h2>miChecker v3における評価ルールの変更点の概要</h2>
	<h3>複雑なテーブルにおけるth要素とscope属性に関する評価</h3>
	<p>
	複雑なテーブルにおけるth要素とscope属性に関して指摘を行う際のメッセージを詳細化しています。
	</p>
	<h3>同一テキストの繰り返しに関する評価</h3>
	<p>
	同一テキストの繰り返しについて指摘を行う際に、同じリソースに対する隣接する画像リンクとテキストリンクが対象となる場合と、連続する画像が対象になる場合で指摘を分離しています。
	それぞれの状況に応じて問題点の確認および対応を進めてください
	
	<h4>v2での指摘事項</h4>
	<ul>
		<li>同一テキストの繰り返しがあります (問題の可能性大)</li>
	</ul>
	
	<h4>v3での指摘事項</h4>
	<ul>
		<li>同じリソースに対するリンクに同一のテキストが繰り返し用いられています。a要素の中に画像とテキストをまとめた上で画像の代替テキストをalt=&quot;&quot;と設定することを検討してください　（問題の可能性大）</li>
		<li>同一テキストの繰り返しがあります。もし支援技術がこの画像を無視するべき場合は、alt=&quot;&quot;と設定してください　（要判断箇所）</li>
	</ul>
	
	</p>
	<h3>長い代替テキストが用いられていた場合の評価</h3>
	<p>
	長い代替テキストが用いられていた場合に、longdescではなくaria-describedbyなどの利用を促すよう指摘を変更しています。
	</p>
　	<h3>固定サイズフォントが用いられていた場合の評価</h3>
	対象ブラウザの変更（Internet Explorer相当からMicrosoft Edge相当への変更）に伴い、固定サイズフォントが用いられていた場合の問題の区分を変更しています。
	最新のブラウザでは問題とならない場合が一般的になっていますので、もしmiChecker（v2系）を利用して指摘を受けた場合は、対象ブラウザでの実際の挙動を確認して対応を行ってください（要判断箇所相当として取り扱ってください）。

		
	<h2 id="contact">miChecker に関する問い合わせ</h2>
    <p>
    miCheckerについての技術的な質問や問い合わせは、ACTFプロジェクトの<a href="https://www.eclipse.org/forums/index.php/f/136/">フォーラム</a>で行うことが出来ます。  <br/>
    もし、ACTF に起因する問題を発見した場合は、次の<a href="https://github.com/eclipse-actf/org.eclipse.actf/issues">Eclipse ACTFプロジェクトのGithubレポジトリ</a>より報告を行うことが出来ます。<br/>
    フォーラム、問題報告サイトのいずれにおいても、日本語での対応も可能ですので、是非ご活用ください。
    </p>
    <ul>
      <li>フォーラムへの投稿にはEclipseのアカウントが必要になります。初めての際は<a href="https://accounts.eclipse.org/user/register">登録ページ</a>より、アカウントの作成をお願いします。 </li>
      <li>問題報告にはGithubのアカウントが必要になります。初めての際はGithubへのSign Up（アカウントの作成）をお願いします。 </li>
    </ul>
		
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	