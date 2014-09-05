<?php
// course unit - unit location

$body=[];
$foot=[];


$parents=[];
$uid=$unit_id;
while ($parent = $edxCourse->unitParent($uid)) {
    $parents[]=$parent;
    $uid=$parent;
}

if (count($parents)) {

    $parents=array_reverse($parents);

    $body[]="<ul class=location>";

    foreach ($parents as $parent) {
        $u=$edxCourse->unit($parent);
        $body[]="<li>";
        $body[]= $edxapp->categoryIcon($u['_id']['category']);//Icon
        $body[]= " <a href='?id=$parent' title='".ucfirst($u['_id']['category'])."'>";
        $body[]= $edxCourse->unitName($parent)."</a><br />";
        $body[]="<ul class=location>";
    }

    //the current unit
    $body[]="<li>";
    $body[]= $edxapp->categoryIcon($category)." $unitName<br />";
    $body[]="</ul>";
}

$box=new Admin\SolidBox;
//$box->type("primary");
$box->icon('fa fa-crosshairs');
$box->title('Location');
$box->body($body);
echo $box->html();

?>
<style>
ul.location {
    list-style-type: none;
}
</style>