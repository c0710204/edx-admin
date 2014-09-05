<?php
// User courses (last) activity

$data=$edxApp->studentCourseActivity($USERID, [], 5);
//print_r($data);

$body=[];

if (count($data)) {

    $body[]="<table class='table table-condensed table-striped'>";
    $body[]= "<thead>";
    $body[]= "<th>Org</th>";
    $body[]= "<th>Course</th>";
    $body[]= "<th>Module type</th>";
    $body[]= "<th width=150>Datetime</th>";
    $body[]= "</thead>";
    $body[]= "<tbody>";
    foreach ($data as $k => $r) {
        //print_r($r);
        $body[]= "<tr>";
        //$body[]= "<td>".$r['id'];
        $body[]= "<td>".explode("/", $r['course_id'])[0]."</a>";
        $body[]= "<td title='".$r['course_id']."'><a href='../course/?id=".$r['course_id']."'>".$edxApp->courseName($r['course_id'])."</a>";

        $body[]= "<td><a href='../course_unit/?id=".$r['module_id']."''>".$r['module_type'];
        //$body[]= "<td>state";
        $r['created']=str_replace(date("Y-m-d"), "", $r['created']);
        $body[]= "<td width=150>".substr($r['created'], 0, 16);

        $body[]= "</tr>";
    }
    $body[]= "</tbody>";
    $body[]= "</table>";

} else {
    $body[]="<pre>No activity</pre>";
}

$footer=[];
$footer[]="<a href='../user_activity/?user_id=$USERID' class='btn btn-primary'><i class='fa fa-clock-o'></i> See all activity</a>";

$box=new Admin\Box;
$box->type("primary");
$box->title("<i class='fa fa-clock-o'></i> Last activity <small>courseware_studentmodule</small>");
echo $box->html($body, $footer);

?>
<div id='moreAccess'></div>

<script>
</script>