<?php
/**
 * tools.php
 * 
 * 内容处理相关
 * 
 * @author      Meayair
 * @version     2019-03-08 0.5
 */
 function getRand($limit = 1){    
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
		->where('status = ?','publish')
		->where('type = ?', 'post')
		->where('created <= unix_timestamp(now())', 'post')
		->limit($limit)
		->order('RAND()')
	);
	$content = Typecho_Widget::widget('Widget_Abstract_Contents')->push($result[0]);
	$title = $content['title'];
	$link = $content['permalink'];
	$cid = $content['cid'];
	$query = $db->select()->from('table.fields')
            ->where('table.fields.cid = ?', $cid)
            ->where('table.fields.name = ?', 'source')
            ->limit(1);
    $content = $db->fetchRow($query);
    if ($content) {
            $source = $content['str_value'];
        }
    $query = $db->select()->from('table.fields')
            ->where('table.fields.cid = ?', $cid)
            ->where('table.fields.name = ?', 'author')
            ->limit(1);
    $content = $db->fetchRow($query);
    if ($content) {
            $author = $content['str_value'];
        }
    $query = $db->select()->from('table.fields')
            ->where('table.fields.cid = ?', $cid)
            ->where('table.fields.name = ?', 'banner')
            ->limit(1);
    $content = $db->fetchRow($query);
    if ($content) {
            $banner = $content['str_value'];
        }
    return array(
        "title" => $title,
        "link" => $link,
        "source" => $source,
        "author" => $author,
        "banner" => $banner
        );
}
function getRandomPosts($limit = 1){    
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
		->where('status = ?','publish')
		->where('type = ?', 'post')
		->where('created <= unix_timestamp(now())', 'post')
		->limit($limit)
		->order('RAND()')
	);
	if($result){
		foreach($result as $val){
			$val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
			$post_title = htmlspecialchars($val['title']);
			$permalink = $val['permalink'];
			echo $permalink;
		}
	}
}
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link =  $content['permalink'];
$dis .= $link;
} else {
$dis .= $default;
}
return $dis;
}
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql); 
if ($content) {
$content = $widget->filter($content);
$link = $content['permalink'];
$dis .= $link;
} else {
$dis .= $default;
}
return $dis;
}
?>