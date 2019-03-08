<?php
/**
 * post.php
 * 
 * 文章页面
 * 
 * @author      Meayair
 * @version     2019-03-08 0.5
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('header.php'); ?>
<?php 
$prev = thePrev($this);$next = theNext($this);
$banner = empty($this->fields->banner)?(empty($this->options->banner)?'//wx1.sinaimg.cn/large/0072WRWsly1g0ukz83b8qj30xc0m8dmq.jpg':$this->options->banner):$this->fields->banner;
?>
<body class="body-post">
<div class="skin-container" style="background-image:url(<?php echo $banner?>);">  </div>

<!-- banner -->
        
	        <div class="post container">
		<div class="row">
		    <div class="ArticleIcon" style="text-align: center;">
			<div class="col-xs-3">
			    <a href="<?php echo $this->options->siteUrl; ?>"><img src="<?php $this->options->themeUrl('assets/css/images/home.jpg'); ?>" alt="home"></a>
			</div>
			<div class="col-xs-3">
			    <a <?php echo empty($prev)?'id="noPrev"':'href="'.$prev.'"'; ?>><img src="<?php $this->options->themeUrl('assets/css/images/prev.jpg'); ?>" alt="prev"></a>
			</div>
			<div class="col-xs-3">
			    <a <?php echo empty($next)?'id="noNext"':'href="'.$next.'"'; ?>><img src="<?php $this->options->themeUrl('assets/css/images/next.jpg'); ?>" alt="next"></a>
			</div>
			<div class="col-xs-3">
			    <a href="<?php getRandomPosts('1');?>"><img src="<?php $this->options->themeUrl('assets/css/images/rand.jpg'); ?>" alt="rand"></a>
			</div>
		</div>
			<div class="col-md-12">
			    <div class="article">
					<div class="articleHeader">
						<h1 class="articleTitle"><a><?php $this->title() ?></a></h1>
						<?php if (!empty($this->fields->author)||!empty($this->fields->source)): ?>
						<h4 class="aticleSouce"><a>——<?php echo empty($this->fields->author)?"":" ".$this->fields->author." ";?><?php echo empty($this->fields->source)?"":"《".$this->fields->source."》";?></a></h4>
						<?php endif; ?>
					</div>
					<div class="articleFooter clearfix">
					</div>
				</div>
			</div>
			<div class="col-md-12">
			    <div class="article">
					<?php $this->content(); ?>
				</div>
			</div>
		</div>
	</div>
    
<?php $this->need('footer.php'); ?>
