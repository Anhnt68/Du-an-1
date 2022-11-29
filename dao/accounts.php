<?php

function insert_account($accountName, $accountPass, $accountPhone, $accountEmail, $accountAddress, $accountImage)
{
    $sql = "insert into accounts(accountName, accountPass,accountPhone,accountEmail,accountAddress,accountImage) values('$accountName','$accountPass','$accountPhone','$accountEmail','$accountAddress','$accountImage')";
    pdo_execute($sql);
}


function checkUser($accountEmail, $accountPass)
{
    $sql = "select * from accounts where accountEmail = '" . $accountEmail . "' AND accountPass = '" . $accountPass . "'";
    $account = pdo_query_one($sql);
    return $account;
}

function updateAccount($id, $accountName, $accountPass, $accountPhone, $accountEmail, $accountAddress, $accountImage)
{
    $sql = "update accounts set accountName='" . $accountName . "', accountPass='" . $accountPass . "', accountPhone='" . $accountPhone . "', accountEmail='" . $accountEmail . "', accountAddress='" . $accountAddress . "',accountImage='" . $accountImage . "' where id=" . $id;
    pdo_execute($sql);
}

function customer_check_email($accountEmail)
{
    $sql = "select * from accounts where accountEmail ='" . $accountEmail . "'";
    $check = pdo_query_one($sql);
    return $check;
}

function loadall_taikhoan()
{
    $sql = "select * from accounts order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id)
{
    $sql = "delete from accounts where id =" . $id;
    pdo_execute($sql);
}
