<?php

return array(

    'does_not_exist' => '许可证不存在',
    'user_does_not_exist' => '用户不存在',
    'asset_does_not_exist' 	=> '您正在授权的资产不存在。',
    'owner_doesnt_match_asset' => '您正在授权的资产已经被占用，请选择其他人。',
    'assoc_users'	 => '此许可证已经分配给某个用户，目前不能被删除，请检查资产信息，然后再尝试删除。',


    'create' => array(
        'error'   => '许可证没有被创建，请重试。',
        'success' => '许可证创建成功'
    ),

    'deletefile' => array(
        'error'   => '该文件无法删除，请重试。',
        'success' => '文件成功删除。',
    ),

    'upload' => array(
        'error'   => '文件上传失败，请重试。',
        'success' => '文件上传成功。',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
        'invalidfiles' => '一个或多个文件过大或者属于不被允许的文件类型。允许上传的文件类型有PNG，GIF，JPG，DOC，DOCX，PDF和TXT。',
    ),

    'update' => array(
        'error'   => '许可证更新失败，请重试。',
        'success' => '许可证更新成功。'
    ),

    'delete' => array(
        'confirm'   => '确定删除这条许可信息？',
        'error'   => '删除许可信息的过程中出现了一些问题，请重试。',
        'success' => '许可信息已经被成功删除。'
    ),

    'checkout' => array(
        'error'   => '分配（借出）许可证的过程中出现了一些问题，请重试。',
        'success' => '许可证已经成功借出'
    ),

    'checkin' => array(
        'error'   => '借入许可证的过程中出现了一些问题，请重试。',
        'success' => '许可证已经成功借入。'
    ),

);
