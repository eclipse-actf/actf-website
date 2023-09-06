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
	$pageTitle 		= "miCheckerについて";
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
	<h1 id="about">miChecker について</h1>
	<p><a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/michecker.html">「みんなのアクセシビリティ評価ツールmiChecker」</a>
	（以下、miChecker）は、JIS X 8341-3:2016（高齢者・障害者等配慮設計指針－情報通信における機器，ソフトウェア及びサービス－第３部：ウェブコンテンツ）に
	基づくウェブアクセシビリティ対応の取組を支援するために、総務省が開発し、提供するアクセシビリティ評価ツールです。
	その第一の目的はアクセシビリティ検証作業の支援です。加えて、付属文書等に沿って検証作業を行うことで、関連する知識の習得が可能です。
    </p>

    <p>
	miCheckerのソースコードは、その機能・性能・品質の向上と、アクセシブルなウェブの普及を目的として、
	総務省よりEclipse　Accessibility Tools Framework (ACTF)に寄贈され、一般に公開されると共に、継続的な改善が実施されています。
	</p>

	<h2 id="download">miChecker の入手方法</h2>
	<p>
	miCheckerの最新版は総務省の
	<a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/michecker.html">みんなのアクセシビリティ評価ツール： （miChecker（エムアイチェッカー） ダウンロードページ</a>
	から入手してください。また、miCheckerの開発手順等は<a href="build_ja.php">こちら</a>で公開されていますので、あわせて是非ご活用下さい。
    </p>

    <h2 id="download">miChecker に関する問い合わせ</h2>
    <p>
    miCheckerについての技術的な質問や問い合わせは、ACTFプロジェクトの<a href="https://www.eclipse.org/forums/index.php/f/136/">フォーラム</a>で行うことが出来ます。  <br/>
    もし、ACTF に起因する問題を発見した場合は、次の<a href="https://github.com/eclipse-actf/org.eclipse.actf/issues">Eclipse ACTFプロジェクトのGithubレポジトリ</a>より報告を行うことが出来ます。<br/>
    フォーラム、問題報告サイトのいずれにおいても、日本語での対応も可能ですので、是非ご活用ください。
    </p>
    <ul>
      <li>フォーラムへの投稿にはEclipseのアカウントが必要になります。初めての際は<a href="https://accounts.eclipse.org/user/register">登録ページ</a>より、アカウントの作成をお願いします。 </li>
      <li>問題報告にはGithubのアカウントが必要になります。初めての際はGithubへのSign Up（アカウントの作成）をお願いします。 </li>
    </ul>

<!--    
    <h2 id="misc">miChecker 関連情報</h2>
    <p>
    miChecker本体の更新とあわせて、ワークシートなどの付属文書の更新作業も進められています。miChecker本体が更新されるまでの間は、
    以下のリンクから最新版の付属文書を入手した上でご活用下さい。
	</p>
	<p>
     <a href="worksheet_ja.zip">miChecker用ワークシート<img src="../../../images/go-bottom.png" alt=""></a>　（zip形式： Excel形式およびODF形式のワークシートが含まれます）
    </p>

    <p>全てのダウンロードは 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> の条件の下で提供されます。
    </p>
	<br>
-->	
<!--		
	<div style="text-align:right">
	<a href="build.php">instructions in English</a>
	</div>
-->
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	