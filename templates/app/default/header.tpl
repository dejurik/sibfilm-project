<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>{if isset($content.meta_title)}{$content.meta_title}{else}{$config.meta_title}{/if}</title>
		<meta name="keywords" content="{if isset($content.meta_keywords)}{$content.meta_keywords}{else}{$config.meta_keywords}{/if}">
		<meta name="description" content="{if isset($content.meta_description)}{$content.meta_description}{else}{$config.meta_description}{/if}">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="apple-touch-icon" sizes="180x180" href="/templates/app/{$template}/images/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/templates/app/{$template}/images/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/templates/app/{$template}/images/icons/favicon-16x16.png">
		<link rel="manifest" href="/templates/app/{$template}/images/icons/site.webmanifest">

		<link href="/templates/css/output.css" rel="stylesheet" />
	</head>

<body>
	<div id="loader" class="fixed hidden top-0 left-0 h-full w-full bg-white/70 z-[100]">
    	<img class="block absolute right-1/2 top-1/2 z-[150] opacity-100" src="/templates/app/{$template}/images/loading.gif">
	</div>
	<div class="w-full overflow-hidden">
		{include file="default/header-menu.tpl"}