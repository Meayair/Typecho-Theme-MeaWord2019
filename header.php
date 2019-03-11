<?php
/**
 * header.php
 * 
 * <head>
 * 
 * @author      Meayair
 * @version     2019-03-08 0.5
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php if ($this->is('index')): ?>
    <title><?php $this->options->title() ?> | <?php $this->options->description() ?></title>
    <?php else: ?>
    <title><?php $this->title() ?> | <?php $this->options->description() ?></title>
    <?php endif; ?>
    <?php $this->header(); ?>
    <meta name="HandheldFriendly" content="True" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?echo empty($this->options->logo)?'//wx1.sinaimg.cn/mw690/0072WRWsly1g0u4z5187kj305p05pwes.jpg':$this->options->logo;?>">
	<link rel='stylesheet' id='bootstrap-css'  href='//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css?ver=3.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css'  href='//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=3.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='style-css'  href='<?php $this->options->themeUrl('assets/css/style.css'); ?>' type='text/css' media='all' />
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
</head>