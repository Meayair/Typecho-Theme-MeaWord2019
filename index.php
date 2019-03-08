<?php 
/**
 *MeaWord：极简主题
 * 
 * 作者：<a href="https://www.meayair.com">Meayair</a>
 * 
 * @package     Typecho Theme MeaWord
 * @author      Meayair
 * @version     0.5
 * @link        https://www.meayair.com
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
<?php $this->need('header.php'); ?>
<body>

<!-- banner -->
<div class="banner" style="background-image: url(<?echo empty($this->options->bg)?'//wx4.sinaimg.cn/large/0072WRWsly1g0ud1urpyuj31kw0eln3i.jpg':$this->options->bg;?>);">
	<!-- 菜单按钮 -->
	<!-- <div class="menu menuicon hidden-xs">
		<i class="fa fa-bars"></i>
	</div> -->
	<!-- header -->
	<div class="header container">
		<!--个人信息-->
		<div class="row">
			<div class="col-md-12">
				<div class="personInfo">
					<div class="logo">
						    <a href="<?php echo $this->options->siteUrl; ?>"><img src="<?echo empty($this->options->logo)?'//wx1.sinaimg.cn/mw690/0072WRWsly1g0u4z5187kj305p05pwes.jpg':$this->options->logo;?>" alt="logo"></a>
						
					</div>
					<div class="logoTheme">
						<h1><?php echo empty($this->options->IndexName)?$this->options->title:$this->options->IndexName ?></h1>
					</div>
				</div>				
			</div>
		</div>
	</div> 
</div><!--文章列表-->
<div id="list">
	<?php while($this->next()): ?>
        <div class="articleList container">
		<div class="row">
			<div class="col-md-12">
			    <div class="article">
					<div class="articleHeader">
						<h1 class="articleTitle"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
						<?php if (!empty($this->fields->author)||!empty($this->fields->source)): ?>
						<h4 class="aticleSouce"><a>——<?php echo empty($this->fields->author)?"":" ".$this->fields->author." ";?><?php echo empty($this->fields->source)?"":"《".$this->fields->source."》";?></a></h4>
						<?php endif; ?>
					</div>
					<div class="articleFooter clearfix">
						<ul class="articleStatu">
							<li><i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php endwhile; ?>
</div>
    <div id="pagination"><?php if(ceil($this->getTotal() / $this->parameter->pageSize)>1)$this->pageLink('加载更多','next');else echo"<span>没有了~</span>" ?></div>
<?php $this->need('footer.php'); ?>
