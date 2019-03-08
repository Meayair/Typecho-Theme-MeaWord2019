<?php
/**
 * footer.php
 * 
 * <footer>
 * 
 * @author      Meayair
 * @version     2019-03-08 0.5
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div id="loading" style="display: block;">
		<div id="loading-center">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
</div>
<?php if (!$this->is('post')): ?>
<!--footer-->
<footer>
	<div class="main-footer">
	    <div class="container">
	        <div class="row footrow">
				<div class="col-md-12">
					<div class="widget linkbox">
						<h4 class="title">友情链接</h4>
						<div class="box friend-links clearfix">
						    <?php echo $this->options->links;?>
						</div>
					</div>
				</div>
	        </div>
	        <div class="row">
	        	<div class="copyright">
	        		<span>Powered by Typecho • <a>Theme MeaWord</a>&nbsp;&nbsp;</span>
	        	</div>
	        </div>
	    </div>
	</div>
</footer>
<?php endif; ?>


<!-- 菜单&侧边栏按钮 -->

<a class="to-top">
	<span class="topicon"><i class="fa fa-angle-up"></i></span>
	<span class="toptext">Top</span>
</a>

<div id="Tip" style="display: none;">
		<div id="Tip-center">
			<h1>没有更多了~</h1>
			<h5>提示信息将于1.5S后关闭</h5>
		</div>
</div>
</body>
</html>