<html>
<head>
</head>
<body>

<select>
    <option>Select employ</option>
    <?php
    mysql_connect('localhost','root','');
    mysql_select_db('admin');
    $query="select userid, firstname from admin_login_info ";
    $result=mysql_query($query);
    while(list($id, $name)=mysql_fetch_row($result)) {
    if($selected==$name) {
    echo "<option value=\"".$id."\" selected=\"selected\">".$name."</option>";
    } else {
        echo "<option value=\"".$id."\">".$name."</option>";
    }
}
    ?>
</select>

</body>
</html> 
