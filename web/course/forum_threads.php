<?php
// course forums
$htm=$footer=[];



$threads=$edxForum->threads($course_id);



if ($threads->count()) {
    
    $htm[]="<table class='table table-condensed table-striped'>";
    $htm[]="<thead>";
    $htm[]="<th>Thread</th>";
    //$htm[]="<th>Author</th>";
    //$htm[]="<th>Date</th>";

    $htm[]="</thead>";
    $htm[]="<tbody>";
    foreach ($threads as $r) {
        $htm[]="<tr>";
        //$htm[]="<td>".$r['_id'];
        $htm[]="<td><i class='fa fa-comments-o'></i> <a href='../forumthread/?id=".$r['_id']."'>".$r['title']."</a>";
        $htm[]=" <i class=text-muted>by ".$r['author_username']."</i>";
        //$htm[]="<td width=100>".date("Y-m-d", $r['created_at']->sec);
        //echo "<pre>".print_r($r, true)."</pre>";
    }
    $htm[]="</tbody>";
    $htm[]="</table>";
} else {
    $htm[]="<pre>No forum data</pre>";
}

$box=new Admin\Box;
if ($threads->count()) {
    $box->type("success");
} else {
    $box->type("default");
}
$box->icon('fa fa-comments');
$box->title($threads->count()." forum thread(s)");
$box->collapsed(!$threads->count());
//$box->collapsed(true);//always collapsed

echo $box->html($htm, $footer);
//echo $admin->box("danger", "<i class='fa fa-comments'></i> Forum threads <small>".$threads->count()." threads</small>", $htm, $footer);
