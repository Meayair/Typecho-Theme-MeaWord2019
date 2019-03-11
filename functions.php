<?php
require_once("libs/tools.php");
function themeFields($layout) {
    $author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, NULL, _t('原作者'), _t('填写作者名或原创或空'));
    $layout->addItem($author);
    
    $source = new Typecho_Widget_Helper_Form_Element_Textarea('source', NULL, NULL, _t('出处'), _t('填写出处，或为空'));
    $layout->addItem($source);
    $banner = new Typecho_Widget_Helper_Form_Element_Text('banner', NULL, NULL, _t('文章背景图'), _t('填入一个图片url作为文章背景图。'));
    $layout->addItem($banner);
}

function themeConfig($form) {
	//基础设置
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, NULL, _t('首页名称'), _t('首页名称，会显示在文章列表的上面'));
    $form->addInput($IndexName);

    $bg = new Typecho_Widget_Helper_Form_Element_Text('bg', NULL, NULL, _t('首页大图'), _t('填入一个图片url作为首页大图'));
    $form->addInput($bg);
    
    $banner = new Typecho_Widget_Helper_Form_Element_Text('banner', NULL, '//wx1.sinaimg.cn/large/0072WRWsly1g0ukz83b8qj30xc0m8dmq.jpg', _t('文章背景图'), _t('填入一个图片url作为默认文章背景图'));
    $form->addInput($banner);
	
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('LOGO'), _t('填入一个图片url作为logo'));
    $form->addInput($logo);
    
    $links = new Typecho_Widget_Helper_Form_Element_Text('links', NULL, '<li><a target="_blank" href="https://www.meayair.com/">Meayair博客</a></li>', _t('友情链接'), _t('填写友情链接（需用li和a标签包住）'));
    $form->addInput($links);
}
?>