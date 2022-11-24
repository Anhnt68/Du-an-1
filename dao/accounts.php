<?php

function insert_account($accountName, $accountPass, $accountPhone, $accountEmail, $accountAddress)
{
    $sql = "insert into accounts(accountName, accountPass,accountPhone,accountEmail,accountAddress) values('$accountName','$accountPass','$accountPhone','$accountEmail','$accountAddress')";
    pdo_execute($sql);
}


function checkUser($accountEmail, $accountPass)
{
    $sql = "select * from accounts where accountEmail = '" . $accountEmail . "' AND accountPass = '" . $accountPass . "'";
    $account = pdo_query_one($sql);
    return $account;
}
