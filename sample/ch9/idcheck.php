<?php
    $idList = array('test', 'test1', 'test2');
    $userid = $_GET['userid'];
    $result = array_search($userid, $idList);
    if( $result === false)  //반드시 === 를 써야 한다
        echo '{"result":"success"}';
    else
        echo '{"result":"fail"}';
?>
