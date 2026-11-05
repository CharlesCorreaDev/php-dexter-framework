# Hooks | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/hooks

---

On this page

You can listen to these events using [listener](https://github.com/LiveHelperChat/lhchatevents). See [bootstrap.php](https://github.com/LiveHelperChat/lhchatevents/blob/master/lhchatevents/bootstrap/bootstrap.php#L18) file

## How to implement custom notification callback for started or closed chat?[​](#how-to-implement-custom-notification-callback-for-started-or-closed-chat "Direct link to How to implement custom notification callback for started or closed chat?")

Let say you want to receive a sms message then users request a chat. Or just send chat data to some external service. This is very easy archievable just using extension. For example I suggest to have a look at <https://github.com/LiveHelperChat/livehelperchat-extensions/tree/master/sevabot>

It uses one live helper chat provided events

- chat.chat\_started - <https://github.com/LiveHelperChat/livehelperchat-extensions/blob/master/sevabot/bootstrap/bootstrap.php#L14>
  This event is fired then user starts a chat from chat widget, standard chat window or from read operator message.

Also chat has antoher even which you can use then chat is closed

- chat.close - <https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/lib/core/lhchat/lhchat.php#L1024>
  This even you can use then chat is closed and you want to pass some information to third party service.

## How to verify a user before starting a chat?[​](#how-to-verify-a-user-before-starting-a-chat "Direct link to How to verify a user before starting a chat?")

1. You will need LHC since 2.04 version
2. Also this extension <https://github.com/LiveHelperChat/livehelperchat-extensions/tree/master/verifyuser>
3. Now just download this extension and put it in extension folder, so it should look like `extension/verifyuser/...`
4. Activate this extension in settings.ini.php file `'extensions' => array('verifyuser')`
5. Now you can just edit verifyuser/bootstrap/bootstrap.php file there will be defined callback which get's all the chat data. <https://github.com/LiveHelperChat/livehelperchat-extensions/blob/master/verifyuser/bootstrap/bootstrap.php#L21>

Also instead of pure DB check you can use curl or whatever you want.

## Form Module[​](#form-module "Direct link to Form Module")

### form.file.download[​](#formfiledownload "Direct link to form.file.download")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhform/download.php>  
**Line:** 17  
**Purpose:** Triggered when a file is downloaded from a form.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.file.download', array('filename' => $file->content_array[$attr_name]['filename']));
```

### form.embedcode[​](#formembedcode "Direct link to form.embedcode")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhform/embedcode.php>  
**Line:** 3  
**Purpose:** Triggered when form embed code is generated.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.embedcode', array());
```

### form.file.download[​](#formfiledownload-1 "Direct link to form.file.download")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhform/downloaditem.php>  
**Line:** 91  
**Purpose:** Triggered when a file is downloaded from a form item.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.file.download', array('filename' => $content['filename']));
```

### form.index[​](#formindex "Direct link to form.index")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhform/index.php>  
**Line:** 3  
**Purpose:** Triggered when form index page is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.index', array());
```

## Questionary Module[​](#questionary-module "Direct link to Questionary Module")

### questionaire.before\_option\_chosen[​](#questionairebefore_option_chosen "Direct link to questionaire.before_option_chosen")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/votingwidget.php>  
**Line:** 124  
**Purpose:** Triggered before a question option is chosen.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionaire.before_option_chosen', array('voting' => & $votingAnswer, 'errors' => & $Errors));
```

### questionaire.option\_chosen[​](#questionaireoption_chosen "Direct link to questionaire.option_chosen")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/votingwidget.php>  
**Line:** 129  
**Purpose:** Triggered after a question option is chosen.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionaire.option_chosen', array('voting' => & $votingAnswer));
```

### questionaire.before\_feedback\_left[​](#questionairebefore_feedback_left "Direct link to questionaire.before_feedback_left")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/votingwidget.php>  
**Line:** 177  
**Purpose:** Triggered before feedback is left.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionaire.before_feedback_left', array('feedback' => & $answer, 'errors' => & $Errors));
```

### questionaire.feedback\_left[​](#questionairefeedback_left "Direct link to questionaire.feedback_left")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/votingwidget.php>  
**Line:** 182  
**Purpose:** Triggered after feedback is left.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionaire.feedback_left', array('feedback' => & $answer));
```

### questionary.list[​](#questionarylist "Direct link to questionary.list")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/list.php>  
**Line:** 5  
**Purpose:** Triggered when questionary list is rendered.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionary.list', array('tpl' => & $tpl));
```

### questionary.edit[​](#questionaryedit "Direct link to questionary.edit")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/edit.php>  
**Line:** 5  
**Purpose:** Triggered when questionary edit page is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionary.edit', array('questionary' => $Question));
```

### questionary.new[​](#questionarynew "Direct link to questionary.new")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhquestionary/newquestion.php>  
**Line:** 5  
**Purpose:** Triggered when a new questionary is created.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('questionary.new', array('questionary' => $Data));
```

## File Module[​](#file-module "Direct link to File Module")

### file.storescreenshot.before\_store[​](#filestorescreenshotbefore_store "Direct link to file.storescreenshot.before_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 41  
**Purpose:** Triggered before a screenshot is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.storescreenshot.before_store', array('errors' => & $errors, 'chat' => & $chat, 'data' => $_POST['data']));
```

### file.download\_verified[​](#filedownload_verified "Direct link to file.download_verified")

**Purpose:** Verified file was downloadd by operator. Listen for this event to inform third party systems about verified file download.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.download_verified', array('chat' => $chat, 'user' => erLhcoreClassUser::instance()->getUserData(true), 'chat_file' => $file));
```

### file.verify\_img\_file[​](#fileverify_img_file "Direct link to file.verify_img_file")

**Purpose:** Uploaded file should be verified. Listen for this event to have your own flow for verifying files.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.verify_img_file', array('chat'=> $chat, 'chat_file' => $upload_handler->uploadedFile));
```

### file.verify[​](#fileverify "Direct link to file.verify")

**Purpose:** Uploaded file verification status was requested. You can listen for this event to modify verification messagesd. Should be done in extension.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.verify', array('response' => & $response, 'chat_file' => $file));
```

### chat.sync\_back\_office[​](#chatsync_back_office "Direct link to chat.sync_back_office")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 49  
**Purpose:** Triggered to sync back office after screenshot.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.sync_back_office');
```

### file.storescreenshot.screenshot\_path[​](#filestorescreenshotscreenshot_path "Direct link to file.storescreenshot.screenshot_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 71  
**Purpose:** Triggered to determine screenshot path.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.storescreenshot.screenshot_path', array('path' => & $path, 'storage_id' => $storageID));
```

### file.storescreenshot.store[​](#filestorescreenshotstore "Direct link to file.storescreenshot.store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 114  
**Purpose:** Triggered when a screenshot is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.storescreenshot.store', array('chat_file' => & $fileUpload));
```

### chat.messages\_added\_passive[​](#chatmessages_added_passive "Direct link to chat.messages_added_passive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 138  
**Purpose:** Triggered after screenshot is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.messages_added_passive', array(
```

### chat.screenshot\_ready[​](#chatscreenshot_ready "Direct link to chat.screenshot_ready")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/storescreenshot.php>  
**Line:** 144  
**Purpose:** Triggered when a screenshot is ready.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.screenshot_ready', array(
```

### file.before\_file\_new\_admin.file\_store[​](#filebefore_file_new_adminfile_store "Direct link to file.before_file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/new.php>  
**Line:** 14  
**Purpose:** Triggered before a new file is stored (admin).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.before_file_new_admin.file_store', array('errors' => & $errors));
```

### file.new.file\_path[​](#filenewfile_path "Direct link to file.new.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/new.php>  
**Line:** 23  
**Purpose:** Triggered to determine new file path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.new.file_path', array('path' => & $path));
```

### file.file\_new\_admin.file\_store[​](#filefile_new_adminfile_store "Direct link to file.file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/new.php>  
**Line:** 28  
**Purpose:** Triggered when a new file is stored (admin).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.file_new_admin.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### file.new\_path[​](#filenew_path "Direct link to file.new_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/new.php>  
**Line:** 56  
**Purpose:** Triggered to determine new file path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.new_path', array('result' => & $Result));
```

### file.uploadfileadmin.file\_path[​](#fileuploadfileadminfile_path "Direct link to file.uploadfileadmin.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileadminonlineuser.php>  
**Line:** 14  
**Purpose:** Triggered to determine file path for admin uploaded file (online user).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfileadmin.file_path',array('path' => & $path, 'storage_id' => $onlineUser->id));
```

### file.uploadfileadmin.file\_store[​](#fileuploadfileadminfile_store "Direct link to file.uploadfileadmin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileadminonlineuser.php>  
**Line:** 28  
**Purpose:** Triggered when an admin uploads a file (online user).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfileadmin.file_store', array('chat_file' => $ upload_handler->uploadedFile));
```

### file.download[​](#filedownload "Direct link to file.download")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/downloadfile.php>  
**Line:** 79  
**Purpose:** Triggered when a file is downloaded.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.download', array('chat_file' => $file));
```

### file.uploadfile.file\_path[​](#fileuploadfilefile_path "Direct link to file.uploadfile.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileonline.php>  
**Line:** 11  
**Purpose:** Triggered to determine file path for online user uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_path', array(
```

### file.uploadfile.file\_store[​](#fileuploadfilefile_store "Direct link to file.uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileonline.php>  
**Line:** 45  
**Purpose:** Triggered when an online user uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_store', array(
```

### file.list\_path[​](#filelist_path "Direct link to file.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/list.php>  
**Line:** 45  
**Purpose:** Triggered to determine file list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.list_path', array('result' => & $Result));
```

### file.edit\_path[​](#fileedit_path "Direct link to file.edit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/edit.php>  
**Line:** 44  
**Purpose:** Triggered to determine file edit path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.edit_path', array('result' => & $Result));
```

### file.before\_user\_uploadfile.file\_store[​](#filebefore_user_uploadfilefile_store "Direct link to file.before_user_uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfile.php>  
**Line:** 49  
**Purpose:** Triggered before a user uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.before_user_uploadfile.file_store', array('errors' => & $errors));
```

### file.uploadfile.file\_path[​](#fileuploadfilefile_path-1 "Direct link to file.uploadfile.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfile.php>  
**Line:** 56  
**Purpose:** Triggered to determine file path for user uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_path', array('path' => & $path, 'storage_id' => $chat->id));
```

### file.uploadfile.file\_store[​](#fileuploadfilefile_store-1 "Direct link to file.uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfile.php>  
**Line:** 86  
**Purpose:** Triggered when a user uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_store', array('chat'=> $chat, 'chat_file' => $upload_handler->uploadedFile));
```

### file.uploadfile.after\_save[​](#fileuploadfileafter_save "Direct link to file.uploadfile.after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfile.php>  
**Line:** 122  
**Purpose:** Triggered after a user uploaded file is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.after_save', array('chat'=> $chat, 'chat_file' => $upload_handler->uploadedFile));
```

### file.configuration\_path[​](#fileconfiguration_path "Direct link to file.configuration_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/configuration.php>  
**Line:** 217  
**Purpose:** Triggered to determine file configuration path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.configuration_path', array('result' => & $Result));
```

### file.before\_admin\_uploadfile.file\_store[​](#filebefore_admin_uploadfilefile_store "Direct link to file.before_admin_uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileadmin.php>  
**Line:** 8  
**Purpose:** Triggered before an admin uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.before_admin_uploadfile.file_store', array('errors' => & $errors));
```

### file.uploadfileadmin.file\_path[​](#fileuploadfileadminfile_path-1 "Direct link to file.uploadfileadmin.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileadmin.php>  
**Line:** 18  
**Purpose:** Triggered to determine file path for admin uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfileadmin.file_path', array('path' => & $path, 'storage_id' => $chat->id));
```

### file.uploadfileadmin.file\_store[​](#fileuploadfileadminfile_store-1 "Direct link to file.uploadfileadmin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfile/uploadfileadmin.php>  
**Line:** 33  
**Purpose:** Triggered when an admin uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfileadmin.file_store', array('chat'=> $chat, 'chat_file' => $upload_handler->uploadedFile));
```

## Mailing Module[​](#mailing-module "Direct link to Mailing Module")

### mailconv.file.verify\_start[​](#mailconvfileverify_start "Direct link to mailconv.file.verify_start")

**Purpose:** Mail file verification should start

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.file.verify_start', array('mail' => $mail, 'chat_file' => $file));
```

### mailconv.file.download\_verified[​](#mailconvfiledownload_verified "Direct link to mailconv.file.download_verified")

**Purpose:** Sensitive mail file was downloaded. Listen for this event to send notification.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.file.download_verified', array('mail' => $mail, 'user' => erLhcoreClassUser::instance()->getUserData(true), 'chat_file' => $file));
```

### mail.list\_export\_columns[​](#maillist_export_columns "Direct link to mail.list_export_columns")

**File:** <https://github.com/LiveHelperChat/livehelperchat/blob/7c0ec7dbc9cf1bb1efa6a632bb09a8d3706c716a/lhc_web/lib/core/lhmailconv/lhmailconvexport.php#L148>
**Line:** 39  
**Purpose:** To have custom column title

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.list_export_columns',array('items' => & $firstRow));
```

### mail.list\_export\_item\_data[​](#maillist_export_item_data "Direct link to mail.list_export_item_data")

**File:** <https://github.com/LiveHelperChat/livehelperchat/blob/7c0ec7dbc9cf1bb1efa6a632bb09a8d3706c716a/lhc_web/lib/core/lhmailconv/lhmailconvexport.php#L308>
**Line:** 39  
**Purpose:** To have custom column data

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.list_export_item_data',array('item' => & $itemCSV, 'conversation' => $item));
```

### theme.temppath[​](#themetemppath "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailing/import.php>  
**Line:** 39  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath', array('dir' => & $dir));
```

### theme.temppath[​](#themetemppath-1 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailing/importcampaign.php>  
**Line:** 36  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath', array('dir' => & $dir));
```

## Browse Offer Module[​](#browse-offer-module "Direct link to Browse Offer Module")

### browseoffer.index[​](#browseofferindex "Direct link to browseoffer.index")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhbrowseoffer/index.php>  
**Line:** 3  
**Purpose:** Triggered when browse offer index page is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('browseoffer.index', array());
```

### browseoffer.htmlcode[​](#browseofferhtmlcode "Direct link to browseoffer.htmlcode")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhbrowseoffer/htmlcode.php>  
**Line:** 3  
**Purpose:** Triggered when browse offer HTML code is generated.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('browseoffer.htmlcode', array());
```

## Department Module[​](#department-module "Direct link to Department Module")

### department.edit\_department\_group[​](#departmentedit_department_group "Direct link to department.edit_department_group")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhdepartment/editgroup.php>  
**Line:** 58  
**Purpose:** Triggered when a department group is edited.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('department.edit_department_group',array('department_group' => & $Departament_group));
```

### department.modified[​](#departmentmodified "Direct link to department.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhdepartment/new.php>  
**Line:** 37  
**Purpose:** Triggered when a department is modified (new).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('department.modified',array('department' => $Departament));
```

### department.modified[​](#departmentmodified-1 "Direct link to department.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhdepartment/edit.php>  
**Line:** 111  
**Purpose:** Triggered when a department is modified (edit).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('department.modified',array('department' => $Departament));
```

## Group Chat Module[​](#group-chat-module "Direct link to Group Chat Module")

### group\_chat.list\_path[​](#group_chatlist_path "Direct link to group_chat.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/list.php>  
**Line:** 38  
**Purpose:** Triggered to determine group chat list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.list_path',array('result' => & $Result));
```

### group\_chat.remove\_group\_chat[​](#group_chatremove_group_chat "Direct link to group_chat.remove_group_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/leave.php>  
**Line:** 27  
**Purpose:** Triggered when a group chat is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.remove_group_chat', array('chat' => & $item));
```

### group\_chat.web\_add\_msg\_admin[​](#group_chatweb_add_msg_admin "Direct link to group_chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/addmessage.php>  
**Line:** 74  
**Purpose:** Triggered when a web message is added by admin in a group chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.web_add_msg_admin', array('msg' => & $msg,'chat' => & $groupChat));
```

### group\_chat.new\_group\_chat\_room[​](#group_chatnew_group_chat_room "Direct link to group_chat.new_group_chat_room")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/startchatwithoperator.php>  
**Line:** 67  
**Purpose:** Triggered when a new group chat room is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.new_group_chat_room', array('chat' => & $groupChat));
```

### group\_chat.new\_group\_chat\_member[​](#group_chatnew_group_chat_member "Direct link to group_chat.new_group_chat_member")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/startchatwithoperator.php>  
**Line:** 77  
**Purpose:** Triggered when a new group chat member is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.new_group_chat_member', array('member' => & $newMember));
```

### group\_chat.new\_group\_chat\_member[​](#group_chatnew_group_chat_member-1 "Direct link to group_chat.new_group_chat_member")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/startchatwithoperator.php>  
**Line:** 86  
**Purpose:** Triggered when a new group chat member is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.new_group_chat_member', array('member' => & $newMember));
```

### group\_chat.new\_group\_chat\_message[​](#group_chatnew_group_chat_message "Direct link to group_chat.new_group_chat_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgroupchat/startchatwithoperator.php>  
**Line:** 95  
**Purpose:** Triggered when a new group chat message is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.new_group_chat_message', array('member' => & $newMember));
```

## Mail Conversation Module[​](#mail-conversation-module "Direct link to Mail Conversation Module")

### mailconv.new\_mail\_from\_chat[​](#mailconvnew_mail_from_chat "Direct link to mailconv.new_mail_from_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/sendemail.php>  
**Line:** 31  
**Purpose:** Triggered when a new mail is sent from chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.new_mail_from_chat', array(
```

### mailconv.new\_mail\_from\_vars[​](#mailconvnew_mail_from_vars "Direct link to mailconv.new_mail_from_vars")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/sendemail.php>  
**Line:** 40  
**Purpose:** Triggered when a new mail is sent from variables.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.new_mail_from_vars', array(
```

### mailconv.before\_send[​](#mailconvbefore_send "Direct link to mailconv.before_send")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/sendemail.php>  
**Line:** 65  
**Purpose:** Triggered before mail is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.before_send', array(
```

### mailconv.editor\_options[​](#mailconveditor_options "Direct link to mailconv.editor_options")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/loadmainconv.php>  
**Line:** 224  
**Purpose:** Triggered to modify mail conversation editor options.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.editor_options',array('options' => & $editorOptions));
```

### mail.subject\_add[​](#mailsubject_add "Direct link to mail.subject_add")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/apilabelmessage.php>  
**Line:** 35  
**Purpose:** Triggered when a subject is added to a mail.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.subject_add',array('user_id' => $currentUser->getUserID(), 'message' => & $message, 'init' => 'op', 'subject_id' => $Params['user_parameters_unordered']['subject']));
```

### mail.subject\_remove[​](#mailsubject_remove "Direct link to mail.subject_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/apilabelmessage.php>  
**Line:** 46  
**Purpose:** Triggered when a subject is removed from a mail.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.subject_remove',array('user_id' => $currentUser->getUserID(), 'message' => & $message, 'init' => 'op', 'subject_id' => $Params['user_parameters_unordered']['subject']));
```

### file.new.file\_path[​](#filenewfile_path-1 "Direct link to file.new.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/uploadfile.php>  
**Line:** 14  
**Purpose:** Triggered to determine new file path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.new.file_path', array('path' => & $path));
```

### file.file\_new\_admin.file\_store[​](#filefile_new_adminfile_store-1 "Direct link to file.file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/uploadfile.php>  
**Line:** 19  
**Purpose:** Triggered when a new file is stored (admin).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.file_new_admin.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### mailconv.list\_filter[​](#mailconvlist_filter "Direct link to mailconv.list_filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/conversations.php>  
**Line:** 82  
**Purpose:** Triggered to filter mail conversation list.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.list_filter',array('filter' => & $filterParams, 'uparams' => $Params['user_parameters_unordered']));
```

### mailconv.replace\_variables[​](#mailconvreplace_variables "Direct link to mailconv.replace_variables")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/searchtemplate.php>  
**Line:** 73  
**Purpose:** Triggered to replace mail conversation variables.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailconv.replace_variables', array(
```

### file.new.file\_path[​](#filenewfile_path-2 "Direct link to file.new.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/uploadimage.php>  
**Line:** 14  
**Purpose:** Triggered to determine new file path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.new.file_path', array('path' => & $path));
```

### file.file\_new\_admin.file\_store[​](#filefile_new_adminfile_store-2 "Direct link to file.file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/uploadimage.php>  
**Line:** 19  
**Purpose:** Triggered when a new file is stored (admin).

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.file_new_admin.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### chat.related\_actions[​](#chatrelated_actions "Direct link to chat.related_actions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/relatedtickets.php>  
**Line:** 25  
**Purpose:** Triggered to perform related actions for mail conversation.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.related_actions', array('chat' => $chat, 'filter' => & $filter));
```

### theme.temppath[​](#themetemppath-2 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/importtemplate.php>  
**Line:** 17  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath', array('dir' => & $dir));
```

### chat.before\_save\_remarks[​](#chatbefore_save_remarks "Direct link to chat.before_save_remarks")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailconv/saveremarks.php>  
**Line:** 22  
**Purpose:** Triggered before mail conversation remarks are saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_save_remarks', array('chat' => & $Chat, 'errors' => & $errors));
```

## Chat Module[​](#chat-module "Direct link to Chat Module")

### chat.online\_users\_get\_list[​](#chatonline_users_get_list "Direct link to chat.online_users_get_list")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/onlineusers.php>  
**Line:** 219  
**Purpose:** Triggered to get online users list.

```
$statusDispatch = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.online_users_get_list', array('filter' => $filter, 'attr_filter' => $filterAttributeEvent));
```

### chat.onlineusers\_attr[​](#chatonlineusers_attr "Direct link to chat.onlineusers_attr")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/onlineusers.php>  
**Line:** 256  
**Purpose:** Triggered to modify online users attributes.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.onlineusers_attr',array('attr' => & $attributes,'attr_remove' => & $attributes_remove));
```

### chat.onlineusers\_path[​](#chatonlineusers_path "Direct link to chat.onlineusers_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/onlineusers.php>  
**Line:** 285  
**Purpose:** Triggered to determine online users path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.onlineusers_path',array('result' => & $Result));
```

### chat.chatcheckoperatormessage[​](#chatchatcheckoperatormessage "Direct link to chat.chatcheckoperatormessage")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatcheckoperatormessage.php>  
**Line:** 32  
**Purpose:** Triggered to check operator message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatcheckoperatormessage', array('proactive_active' => & $proactiveInviteActive));
```

### chat.extendcookie[​](#chatextendcookie "Direct link to chat.extendcookie")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/extendcookie.php>  
**Line:** 13  
**Purpose:** Triggered when chat cookie is extended.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.extendcookie', array('vid' => (string)$Params['user_parameters']['vid']));
```

### chat.data\_changed[​](#chatdata_changed "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/changestatus.php>  
**Line:** 40  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $chat, 'user' => $currentUser));
```

### chat.searchprovider[​](#chatsearchprovider "Direct link to chat.searchprovider")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/searchprovider.php>  
**Line:** 173  
**Purpose:** Triggered to search for a chat provider.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.searchprovider', array('offset' => $offset, 'search' => $search, 'scope' => $Params['user_parameters']['scope']));
```

### chat.syncadmininterface.pendingchats[​](#chatsyncadmininterfacependingchats "Direct link to chat.syncadmininterface.pendingchats")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncadmininterface.php>  
**Line:** 668  
**Purpose:** Triggered to sync admin interface pending chats.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncadmininterface.pendingchats',array('additional_filter' => & $additionalFilter));
```

### chat.syncadmininterface[​](#chatsyncadmininterface "Direct link to chat.syncadmininterface")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncadmininterface.php>  
**Line:** 1066  
**Purpose:** Triggered to sync admin interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncadmininterface',array('main_attr' => & $mainSyncAttributes, 'lists' => & $ReturnMessages, 'v' => & $version));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/refreshcustomfields.php>  
**Line:** 48  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat', array(
```

### chat.auto\_preload[​](#chatauto_preload "Direct link to chat.auto_preload")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/loadmaindata.php>  
**Line:** 69  
**Purpose:** Triggered during chat auto preload.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_preload',array('chat' => $chat, 'load_previous' => & $loadPrevious));
```

### chat.loadmainchatdata[​](#chatloadmainchatdata "Direct link to chat.loadmainchatdata")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/loadmaindata.php>  
**Line:** 146  
**Purpose:** Triggered when main chat data is loaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.loadmainchatdata',array(
```

### chat.msg\_removed[​](#chatmsg_removed "Direct link to chat.msg_removed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/deletemsg.php>  
**Line:** 30  
**Purpose:** Triggered after a message is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.msg_removed', array('msg' => $removeMessage, 'chat' => $chat));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsguser.php>  
**Line:** 29  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsguser.php>  
**Line:** 52  
**Purpose:** Triggered before a user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved',array('msg' => & $msg,'chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsguser.php>  
**Line:** 94  
**Purpose:** Triggered when a chat is unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### chat.addmsguser[​](#chataddmsguser "Direct link to chat.addmsguser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsguser.php>  
**Line:** 100  
**Purpose:** Triggered when a user adds a message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.addmsguser',array('files' => $files, 'chat' => & $chat, 'msg' => & $msg));
```

### chat.addmsguser\_webhook[​](#chataddmsguser_webhook "Direct link to chat.addmsguser_webhook")

**File:** <https://github.com/LiveHelperChat/livehelperchat/commit/0dbda405f4e9fb6adc379c345788a23fcdd80848>
**Purpose:** Triggered when a user adds a message via incoming webhook.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.addmsguser_webhook', array(  
    'chat' => & $chat,  
    'msg' => $msg,  
    'source' => 'webhook',  
    'webhook' => & $incomingWebhook,  
    'webhook_data' => $payloadAll,  
    'webhook_msg' => $payloadMessage  
));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsguser.php>  
**Line:** 126  
**Purpose:** Triggered when auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered',array('chat' => & $chat));
```

### chat.dashboardwidgets[​](#chatdashboardwidgets "Direct link to chat.dashboardwidgets")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/dashboardwidgets.php>  
**Line:** 68  
**Purpose:** Triggered to populate dashboard widgets.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.dashboardwidgets',array('supported_widgets' => & $supportedWidgets));
```

### chat.abstract\_click[​](#chatabstract_click "Direct link to chat.abstract_click")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/abstractclick.php>  
**Line:** 22  
**Purpose:** Triggered on abstract click.

```
$workflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.abstract_click', array('payload' => $Params['user_parameters']['payload'], 'msg' => & $msg, 'chat' => & $chat));
```

### theme.temppath[​](#themetemppath-3 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendmassmessage.php>  
**Line:** 10  
**Purpose:** Triggered to get theme temporary path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### chat.sendnotice[​](#chatsendnotice "Direct link to chat.sendnotice")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendmassmessage.php>  
**Line:** 142  
**Purpose:** Triggered when a notice is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.sendnotice', array('errors' => & $Errors));
```

### onlineuser.proactive\_send\_invitation[​](#onlineuserproactive_send_invitation "Direct link to onlineuser.proactive_send_invitation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendmassmessage.php>  
**Line:** 265  
**Purpose:** Triggered when proactive invitation is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.proactive_send_invitation', array('ou' => & $visitor));
```

### file.before\_screenshot\_addoperacion[​](#filebefore_screenshot_addoperacion "Direct link to file.before_screenshot_addoperacion")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addoperation.php>  
**Line:** 24  
**Purpose:** Triggered before screenshot add operation.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.before_screenshot_addoperacion',array('chat' => & $Chat, 'errors' => & $errors));
```

### cobrowse.before\_started[​](#cobrowsebefore_started "Direct link to cobrowse.before_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addoperation.php>  
**Line:** 27  
**Purpose:** Triggered before cobrowse is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('cobrowse.before_started',array('chat' => & $Chat, 'errors' => & $errors));
```

### chat.added\_operation[​](#chatadded_operation "Direct link to chat.added_operation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addoperation.php>  
**Line:** 44  
**Purpose:** Triggered when operation is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.added_operation',array('chat' => & $Chat));
```

### chat.getstatus\_old[​](#chatgetstatus_old "Direct link to chat.getstatus_old")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/getstatus.php>  
**Line:** 90  
**Purpose:** Triggered to get chat status old.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.getstatus_old',array(
```

### chat.getstatus[​](#chatgetstatus "Direct link to chat.getstatus")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/getstatus.php>  
**Line:** 132  
**Purpose:** Triggered to get chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.getstatus',array('tpl' => & $tpl, 'theme' => $theme, 'validUnits' => $validUnits));
```

### chat.added\_operation[​](#chatadded_operation-1 "Direct link to chat.added_operation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addonlineoperation.php>  
**Line:** 47  
**Purpose:** Triggered when online operation is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.added_operation',array('chat' => & $chat));
```

### chat.before\_msg\_user\_update[​](#chatbefore_msg_user_update "Direct link to chat.before_msg_user_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatemsguser.php>  
**Line:** 34  
**Purpose:** Triggered before user message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_update',array('msg' => & $msg,'chat' => & $chat));
```

### chat.newcannedmsg[​](#chatnewcannedmsg "Direct link to chat.newcannedmsg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/newcannedmsg.php>  
**Line:** 3  
**Purpose:** Triggered when new canned message is created.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.newcannedmsg', array());
```

### chat.before\_newcannedmsg[​](#chatbefore_newcannedmsg "Direct link to chat.before_newcannedmsg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/newcannedmsg.php>  
**Line:** 27  
**Purpose:** Triggered before new canned message is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_newcannedmsg', array('departments' => $userDepartments, 'scope' => 'global', 'errors' => & $Errors, 'msg' => & $CannedMessage));
```

### chat.newcannedmsg\_saved[​](#chatnewcannedmsg_saved "Direct link to chat.newcannedmsg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/newcannedmsg.php>  
**Line:** 42  
**Purpose:** Triggered when new canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.newcannedmsg_saved', array('msg' => & $CannedMessage));
```

### chat.newcannedmsg\_path[​](#chatnewcannedmsg_path "Direct link to chat.newcannedmsg_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/newcannedmsg.php>  
**Line:** 64  
**Purpose:** Triggered to get new canned message path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.newcannedmsg_path',array('result' => & $Result));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/accepttransfer.php>  
**Line:** 78  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-1 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/accepttransfer.php>  
**Line:** 107  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.chat\_transfer\_accepted[​](#chatchat_transfer_accepted "Direct link to chat.chat_transfer_accepted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/accepttransfer.php>  
**Line:** 173  
**Purpose:** Triggered when chat transfer is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfer_accepted',array('chat' => & $chat));
```

### chat.delete[​](#chatdelete "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/delete.php>  
**Line:** 13  
**Purpose:** Triggered when chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete', array('chat' => & $chat, 'user' => $currentUser));
```

### chat.subject\_add[​](#chatsubject_add "Direct link to chat.subject_add")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/subject.php>  
**Line:** 30  
**Purpose:** Triggered when subject is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.subject_add',array('user_id' => $currentUser->getUserID(), 'chat' => & $chat, 'init' => 'op', 'subject_id' => $Params['user_parameters_unordered']['subject']));
```

### chat.canned\_msg\_before\_save[​](#chatcanned_msg_before_save "Direct link to chat.canned_msg_before_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsgedit.php>  
**Line:** 45  
**Purpose:** Triggered before a canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.canned_msg_before_save',array('departments' => $userDepartments, 'errors' => & $Errors, 'msg' => & $Msg, 'scope' => 'global'));
```

### chat.canned\_msg\_after\_save[​](#chatcanned_msg_after_save "Direct link to chat.canned_msg_after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsgedit.php>  
**Line:** 51  
**Purpose:** Triggered after a canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.canned_msg_after_save',array('msg' => & $Msg));
```

### chat.cannedmsgedit\_path[​](#chatcannedmsgedit_path "Direct link to chat.cannedmsgedit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsgedit.php>  
**Line:** 87  
**Purpose:** Triggered to determine canned message edit path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsgedit_path',array('result' => & $Result));
```

### chat.blockedusers[​](#chatblockedusers "Direct link to chat.blockedusers")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/blockedusers.php>  
**Line:** 3  
**Purpose:** Triggered when blocked users page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.blockedusers', array());
```

### chat.blockedusres\_path[​](#chatblockedusres_path "Direct link to chat.blockedusres_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/blockedusers.php>  
**Line:** 169  
**Purpose:** Triggered to determine blocked users path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.blockedusres_path',array('result' => & $Result));
```

### chat.delete[​](#chatdelete-1 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/list.php>  
**Line:** 25  
**Purpose:** Triggered when a chat is deleted from list.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete', array('chat' => & $chatToDelete, 'user' => $currentUser));
```

### chat.list\_filter[​](#chatlist_filter "Direct link to chat.list_filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/list.php>  
**Line:** 92  
**Purpose:** Triggered to filter chat list.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_filter',array('filter' => & $filterParams, 'uparams' => $Params['user_parameters_unordered']));
```

### chat.delete[​](#chatdelete-2 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/list.php>  
**Line:** 166  
**Purpose:** Triggered when a chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete', array('chat' => & $item, 'user' => $currentUser));
```

### chat.list\_items[​](#chatlist_items "Direct link to chat.list_items")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/list.php>  
**Line:** 243  
**Purpose:** Triggered to modify chat list items.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_items',array('filter' => & $items, 'uparams' => $Params['user_parameters_unordered']));
```

### chat.list\_path[​](#chatlist_path "Direct link to chat.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/list.php>  
**Line:** 283  
**Purpose:** Triggered to determine chat list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_path',array('result' => & $Result));
```

### chat.chat[​](#chatchat "Direct link to chat.chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chat.php>  
**Line:** 87  
**Purpose:** Triggered when chat page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat',array('result' => & $Result, 'tpl' => & $tpl, 'params' => & $Params, 'chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat-1 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/userclosechat.php>  
**Line:** 78  
**Purpose:** Triggered when chat is unread by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### chat.explicitly\_closed[​](#chatexplicitly_closed "Direct link to chat.explicitly_closed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/userclosechat.php>  
**Line:** 87  
**Purpose:** Triggered when chat is explicitly closed by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.explicitly_closed',array('chat' => & $chat));
```

### chat.geoconfiguration[​](#chatgeoconfiguration "Direct link to chat.geoconfiguration")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/geoconfiguration.php>  
**Line:** 3  
**Purpose:** Triggered when geo configuration page is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.geoconfiguration', array());
```

### chat.startchat\_data\_fields[​](#chatstartchat_data_fields "Direct link to chat.startchat_data_fields")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 158  
**Purpose:** Triggered to modify start chat form data fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.startchat_data_fields',array('data_fields' => & $startDataFields, 'params' => $Params));
```

### chat.before\_chat\_started[​](#chatbefore_chat_started "Direct link to chat.before_chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 321  
**Purpose:** Triggered before chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_started',array('chat' => & $chat, 'errors' => & $Errors, 'offline' => (isset($additionalParams['offline']) && $additionalParams['offline'] == true)));
```

### chat.chat\_offline\_request\_presend[​](#chatchat_offline_request_presend "Direct link to chat.chat_offline_request_presend")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 346  
**Purpose:** Triggered before offline request is send.

```
$attributePresend = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_presend',array(
```

### chat.chat\_offline\_request[​](#chatchat_offline_request "Direct link to chat.chat_offline_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 359  
**Purpose:** Triggered when chat offline request is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request',array(
```

### chat.chat\_offline\_request\_saved[​](#chatchat_offline_request_saved "Direct link to chat.chat_offline_request_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 375  
**Purpose:** Triggered after chat offline request is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_saved', array(
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 468  
**Purpose:** Triggered before auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered', array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.before\_auto\_responder\_message[​](#chatbefore_auto_responder_message "Direct link to chat.before_auto_responder_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 480  
**Purpose:** Triggered before auto responder message is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_message', array('chat' => & $chat, 'responder' => & $responder));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-1 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 510  
**Purpose:** Triggered when auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 540  
**Purpose:** Triggered when chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started',array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.startchat[​](#chatstartchat "Direct link to chat.startchat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchat.php>  
**Line:** 716  
**Purpose:** Triggered to modify start chat form.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.startchat',array('result' => & $Result,'tpl' => & $tpl, 'params' => & $Params, 'inputData' => & $inputData));
```

### chat.update\_chat\_vars[​](#chatupdate_chat_vars "Direct link to chat.update_chat_vars")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatejsvars.php>  
**Line:** 53  
**Purpose:** Triggered to update chat variables.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.update_chat_vars', array(
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-1 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatejsvars.php>  
**Line:** 67  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat', array(
```

### chat.before\_msg\_admin\_update[​](#chatbefore_msg_admin_update "Direct link to chat.before_msg_admin_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatemsg.php>  
**Line:** 61  
**Purpose:** Triggered before admin message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_update',array('msg' => & $msg,'chat' => & $Chat));
```

### chat.message\_updated[​](#chatmessage_updated "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatemsg.php>  
**Line:** 100  
**Purpose:** Triggered after a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msg, 'chat' => & $Chat));
```

### chat.message\_updated\_admin[​](#chatmessage_updated_admin "Direct link to chat.message_updated_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updatemsg.php>  
**Line:** 103  
**Purpose:** Triggered after a message is updated by admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated_admin', array('user' => $currentUser->getUserData(true),'msg' => & $msg, 'chat' => & $Chat));
```

### chat.before\_edit\_previous\_admin\_returned[​](#chatbefore_edit_previous_admin_returned "Direct link to chat.before_edit_previous_admin_returned")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/editprevious.php>  
**Line:** 41  
**Purpose:** Triggered before edit previous admin returned.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_edit_previous_admin_returned', array('response' => & $array));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-2 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/updateattribute.php>  
**Line:** 48  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat', array(
```

### chat.online\_users\_get\_list[​](#chatonline_users_get_list-1 "Direct link to chat.online_users_get_list")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/jsononlineusers.php>  
**Line:** 44  
**Purpose:** Triggered to get online users list.

```
$statusDispatch = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.online_users_get_list', array('filter' => $filter));
```

### chat.before\_quote\_admin\_returned[​](#chatbefore_quote_admin_returned "Direct link to chat.before_quote_admin_returned")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/quotemessage.php>  
**Line:** 64  
**Purpose:** Triggered before quote admin returned.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_quote_admin_returned',array('response' => & $array));
```

### chat.before\_downloadtxt[​](#chatbefore_downloadtxt "Direct link to chat.before_downloadtxt")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/downloadtxt.php>  
**Line:** 13  
**Purpose:** Triggered before chat transcript is downloaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_downloadtxt',array('chat' => & $chat, 'errors' => & $errors));
```

### chat.syncadmin[​](#chatsyncadmin "Direct link to chat.syncadmin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncadmin.php>  
**Line:** 114  
**Purpose:** Triggered to sync admin interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncadmin',array('response' => & $response, 'messages' => $Messages, 'chat' => $Chat));
```

### chat.listchatconfig\_path[​](#chatlistchatconfig_path "Direct link to chat.listchatconfig_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/listchatconfig.php>  
**Line:** 52  
**Purpose:** Triggered to determine chat config list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.listchatconfig_path',array('result' => & $Result));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-1 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncuser.php>  
**Line:** 48  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.syncuser.operator\_typing[​](#chatsyncuseroperator_typing "Direct link to chat.syncuser.operator_typing")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncuser.php>  
**Line:** 109  
**Purpose:** Triggered when operator is typing.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncuser.operator_typing',array('chat' => & $chat));
```

### chat.before\_chat\_closed\_tpl[​](#chatbefore_chat_closed_tpl "Direct link to chat.before_chat_closed_tpl")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncuser.php>  
**Line:** 150  
**Purpose:** Triggered before chat closed template is rendered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_closed_tpl',array('chat' => & $chat, 'tpl' => & $tpl));
```

### chat.syncuser[​](#chatsyncuser "Direct link to chat.syncuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncuser.php>  
**Line:** 218  
**Purpose:** Triggered to sync user interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncuser',array('chat' => & $chat, 'response' => & $responseArray));
```

### chat.before\_chat\_closed\_tpl[​](#chatbefore_chat_closed_tpl-1 "Direct link to chat.before_chat_closed_tpl")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/syncuser.php>  
**Line:** 253  
**Purpose:** Triggered before chat closed template is rendered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_closed_tpl',array('chat' => & $chat, 'tpl' => & $tpl));
```

### chat.before\_print[​](#chatbefore_print "Direct link to chat.before_print")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/printchat.php>  
**Line:** 13  
**Purpose:** Triggered before chat is printed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_print',array('chat' => & $chat, 'errors' => & $errors));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-2 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transfertohuman.php>  
**Line:** 13  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.genericbot\_chat\_command\_transfer[​](#chatgenericbot_chat_command_transfer "Direct link to chat.genericbot_chat_command_transfer")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transfertohuman.php>  
**Line:** 40  
**Purpose:** Triggered to handle generic bot chat command transfer.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_transfer', array(
```

### chat.before\_save\_reaction[​](#chatbefore_save_reaction "Direct link to chat.before_save_reaction")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/reaction.php>  
**Line:** 30  
**Purpose:** Triggered before reaction is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_save_reaction',array('chat' => & $chat, 'errors' => & $errors));
```

### chat.before\_print[​](#chatbefore_print-1 "Direct link to chat.before_print")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readchatmail.php>  
**Line:** 15  
**Purpose:** Triggered before chat e-mail is printed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_print',array('chat' => & $chat, 'errors' => & $errors));
```

### chat.before\_send[​](#chatbefore_send "Direct link to chat.before_send")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendchat.php>  
**Line:** 40  
**Purpose:** Triggered before chat is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_send',array('chat' => & $chat, 'errors' => & $Errors));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-2 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/modifychat.php>  
**Line:** 33  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $currentUser->getUserID()));
```

### chat.modified[​](#chatmodified "Direct link to chat.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/modifychat.php>  
**Line:** 51  
**Purpose:** Triggered when chat is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.modified', array('chat' => & $chat, 'params' => $Params));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-3 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/modifychat.php>  
**Line:** 85  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $currentUser->getUserID()));
```

### chat.modified[​](#chatmodified-1 "Direct link to chat.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/modifychat.php>  
**Line:** 138  
**Purpose:** Triggered when chat is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.modified', array('chat' => & $chat, 'params' => $Params));
```

### chat.delete[​](#chatdelete-3 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/deletechatadmin.php>  
**Line:** 18  
**Purpose:** Triggered when chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete',array('chat' => & $chat, 'user' => $currentUser));
```

### chat.checkchatstatus[​](#chatcheckchatstatus "Direct link to chat.checkchatstatus")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/checkchatstatus.php>  
**Line:** 168  
**Purpose:** Triggered to check chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.checkchatstatus',array('chat' => & $chat, 'response' => & $responseArray));
```

### chat.geoadjustment[​](#chatgeoadjustment "Direct link to chat.geoadjustment")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/geoadjustment.php>  
**Line:** 3  
**Purpose:** Triggered when geo adjustment page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.geoadjustment', array());
```

### chat.geoadjustment\_path[​](#chatgeoadjustment_path "Direct link to chat.geoadjustment_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/geoadjustment.php>  
**Line:** 104  
**Purpose:** Triggered to determine geo adjustment path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.geoadjustment_path',array('result' => & $Result));
```

### chat.before\_startchatwithoperator[​](#chatbefore_startchatwithoperator "Direct link to chat.before_startchatwithoperator")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchatwithoperator.php>  
**Line:** 56  
**Purpose:** Triggered before chat is started with operator.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_startchatwithoperator',array('errors' => & $Errors));
```

### chat.startchatwithoperator\_started[​](#chatstartchatwithoperator_started "Direct link to chat.startchatwithoperator_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/startchatwithoperator.php>  
**Line:** 99  
**Purpose:** Triggered when chat is started with operator.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.startchatwithoperator_started',array('chat' => & $chat, 'transfer' => & $transfer));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-3 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/usertyping.php>  
**Line:** 34  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat', array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### vote.action[​](#voteaction "Direct link to vote.action")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/voteaction.php>  
**Line:** 29  
**Purpose:** Triggered on vote action.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('vote.action', array('chat' => & $chat));
```

### chat.getstatusembed\_old[​](#chatgetstatusembed_old "Direct link to chat.getstatusembed_old")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/getstatusembed.php>  
**Line:** 74  
**Purpose:** Triggered to get chat status embed old.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.getstatusembed_old',array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsgadmin.php>  
**Line:** 52  
**Purpose:** Triggered when a web message is added by admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-4 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsgadmin.php>  
**Line:** 125  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg,'chat' => & $Chat));
```

### chat.data\_changed[​](#chatdata_changed-1 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsgadmin.php>  
**Line:** 277  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $Chat, 'user' => $currentUser));
```

### chat.accept[​](#chataccept "Direct link to chat.accept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsgadmin.php>  
**Line:** 279  
**Purpose:** Triggered when chat is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.accept',array('chat' => & $Chat, 'user' => $currentUser));
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-1 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/addmsgadmin.php>  
**Line:** 319  
**Purpose:** Triggered when a web message is added by admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array('msg' => & $msg,'chat' => & $Chat, 'ou' => (isset($onlineuser) ? $onlineuser : null)));
```

### chat.chathistory[​](#chatchathistory "Direct link to chat.chathistory")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chathistory.php>  
**Line:** 11  
**Purpose:** Triggered when chat history is accessed.

```
$commandResponse = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chathistory', array('chat' => $chat));
```

### chat.chatwidget\_data\_field[​](#chatchatwidget_data_field "Direct link to chat.chatwidget_data_field")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 183  
**Purpose:** Triggered to modify chat widget form data fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatwidget_data_field',array('data_fields' => & $startDataFields, 'params' => $Params));
```

### chat.before\_chat\_started[​](#chatbefore_chat_started-1 "Direct link to chat.before_chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 347  
**Purpose:** Triggered before chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_started', array('chat' => & $chat, 'errors' => & $Errors, 'offline' => (isset($additionalParams['offline']) && $additionalParams['offline'] == true)));
```

### chat.chat\_offline\_request\_presend[​](#chatchat_offline_request_presend-1 "Direct link to chat.chat_offline_request_presend")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 364  
**Purpose:** Triggered before offline request is send.

```
$attributePresend = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_presend',array(
```

### chat.chat\_offline\_request[​](#chatchat_offline_request-1 "Direct link to chat.chat_offline_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 377  
**Purpose:** Triggered when chat offline request is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request',array(
```

### chat.chat\_offline\_request\_saved[​](#chatchat_offline_request_saved-1 "Direct link to chat.chat_offline_request_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 393  
**Purpose:** Triggered after chat offline request is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_saved', array(
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-1 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 502  
**Purpose:** Triggered before auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered',array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.before\_auto\_responder\_message[​](#chatbefore_auto_responder_message-1 "Direct link to chat.before_auto_responder_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 514  
**Purpose:** Triggered before auto responder message is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_message',array('chat' => & $chat, 'responder' => & $responder));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-2 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 546  
**Purpose:** Triggered when auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-1 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 578  
**Purpose:** Triggered when chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started',array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.chatwidget[​](#chatchatwidget "Direct link to chat.chatwidget")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidget.php>  
**Line:** 783  
**Purpose:** Triggered to modify start chat form.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatwidget',array('result' => & $Result, 'tpl' => & $tpl, 'params' => & $Params, 'inputData' => & $inputData));
```

### chat.unread\_chat[​](#chatunread_chat-2 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetclosed.php>  
**Line:** 177  
**Purpose:** Triggered when chat is unread by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat', array('chat' => & $chat));
```

### chat.explicitly\_closed[​](#chatexplicitly_closed-1 "Direct link to chat.explicitly_closed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetclosed.php>  
**Line:** 186  
**Purpose:** Triggered when chat is explicitly closed by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.explicitly_closed', array('chat' => & $chat, 'msg' => (isset($msg) ? $msg : null)));
```

### chat.visitor\_regular\_closed[​](#chatvisitor_regular_closed "Direct link to chat.visitor_regular_closed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetclosed.php>  
**Line:** 188  
**Purpose:** Triggered when chat is closed by visitor.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.visitor_regular_closed', array('chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat-3 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetclosed.php>  
**Line:** 225  
**Purpose:** Triggered when chat is unread by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat', array('chat' => & $chat));
```

### chat.explicitly\_closed[​](#chatexplicitly_closed-2 "Direct link to chat.explicitly_closed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetclosed.php>  
**Line:** 232  
**Purpose:** Triggered when chat is explicitly closed by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.explicitly_closed', array('chat' => & $chat, 'msg' => (isset($msg) ? $msg : null)));
```

### chat.before\_chat\_transfered[​](#chatbefore_chat_transfered "Direct link to chat.before_chat_transfered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 19  
**Purpose:** Triggered before chat is transfered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_transfered', array('chat' => & $Chat, 'errors' => & $errors, 'scope' => $transferScope));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-5 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 43  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $currentUser->getUserID()));
```

### chat.chat\_owner\_changed[​](#chatchat_owner_changed "Direct link to chat.chat_owner_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 60  
**Purpose:** Triggered when chat owner is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_owner_changed', array('chat' => & $Chat, 'user' => $currentUser->getUserData()));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-6 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 86  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $user->id));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-7 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 91  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $currentUser->getUserID()));
```

### chat.chat\_owner\_changed[​](#chatchat_owner_changed-1 "Direct link to chat.chat_owner_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 124  
**Purpose:** Triggered when chat owner is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_owner_changed', array('chat' => & $Chat, 'user' => $user));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-8 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 198  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $currentUser->getUserID()));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-9 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 212  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $userTo->id));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-10 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 218  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $currentUser->getUserID()));
```

### chat.chat\_transfered[​](#chatchat_transfered "Direct link to chat.chat_transfered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/transferuser.php>  
**Line:** 268  
**Purpose:** Triggered when chat is transfered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfered', array('scope' => $transferScope, 'chat' => & $Chat, 'transfer' => $Transfer));
```

### chat.cannedmsg[​](#chatcannedmsg "Direct link to chat.cannedmsg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsg.php>  
**Line:** 3  
**Purpose:** Triggered when canned message page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsg', array());
```

### chat.cannedmsg\_before\_remove[​](#chatcannedmsg_before_remove "Direct link to chat.cannedmsg_before_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsg.php>  
**Line:** 123  
**Purpose:** Triggered before canned message is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsg_before_remove',array('msg' => & $Msg));
```

### chat.cannedmsg\_path[​](#chatcannedmsg_path "Direct link to chat.cannedmsg_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/cannedmsg.php>  
**Line:** 352  
**Purpose:** Triggered to determine canned message path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsg_path',array('result' => & $Result));
```

### chat.blockuser[​](#chatblockuser "Direct link to chat.blockuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/blockuser.php>  
**Line:** 3  
**Purpose:** Triggered when block user page is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.blockuser', array());
```

### chat.operator\_inactivemode\_changed[​](#chatoperator_inactivemode_changed "Direct link to chat.operator_inactivemode_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/loadinitialdata.php>  
**Line:** 100  
**Purpose:** Triggered when operator inactive mode is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_inactivemode_changed', array('user' => & $userData, 'reason' => 'page_reload'));
```

### chat.loadinitialdata[​](#chatloadinitialdata "Direct link to chat.loadinitialdata")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/loadinitialdata.php>  
**Line:** 279  
**Purpose:** Triggered when initial data is loaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.loadinitialdata',array('lists' => & $response));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-3 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatcheckstatus.php>  
**Line:** 68  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat',array('chat_id' => $chatId));
```

### chat.chat\_transfer\_accepted[​](#chatchat_transfer_accepted-1 "Direct link to chat.chat_transfer_accepted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/adminchat.php>  
**Line:** 68  
**Purpose:** Triggered when chat transfer is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfer_accepted',array('chat' => & $chat));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-11 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/adminchat.php>  
**Line:** 75  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-12 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/adminchat.php>  
**Line:** 109  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.data\_changed[​](#chatdata_changed-2 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/adminchat.php>  
**Line:** 152  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $chat,'user' => $currentUser));
```

### chat.accept[​](#chataccept-1 "Direct link to chat.accept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/adminchat.php>  
**Line:** 156  
**Purpose:** Triggered when chat is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.accept',array('chat' => & $chat,'user' => $currentUser));
```

### chat.set\_sub\_status[​](#chatset_sub_status "Direct link to chat.set_sub_status")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/setsubstatus.php>  
**Line:** 16  
**Purpose:** Triggered when chat sub status is set.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.set_sub_status',array('chat' => & $chat));
```

### chat.before\_edit\_previous\_user\_returned[​](#chatbefore_edit_previous_user_returned "Direct link to chat.before_edit_previous_user_returned")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/editprevioususer.php>  
**Line:** 18  
**Purpose:** Triggered before edit previous user returned.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_edit_previous_user_returned',array('response' => & $array));
```

### chat.nickchanged[​](#chatnickchanged "Direct link to chat.nickchanged")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetchat.php>  
**Line:** 125  
**Purpose:** Triggered when chat nick is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.nickchanged', array('chat' => & $chat));
```

### chat.chatwidgetchat[​](#chatchatwidgetchat "Direct link to chat.chatwidgetchat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/chatwidgetchat.php>  
**Line:** 149  
**Purpose:** Triggered when chat widget chat page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatwidgetchat',array('result' => & $Result , 'tpl' => & $tpl, 'params' => & $Params, 'chat' => & $chat));
```

### chat.related\_actions[​](#chatrelated_actions-1 "Direct link to chat.related_actions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/relatedactions.php>  
**Line:** 22  
**Purpose:** Triggered to perform related actions for chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.related_actions', array('chat' => $chat, 'filter' => & $filter));
```

### chat.readoperatormessage\_data\_field[​](#chatreadoperatormessage_data_field "Direct link to chat.readoperatormessage_data_field")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 111  
**Purpose:** Triggered to modify read operator message form data fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.readoperatormessage_data_field',array('data_fields' => & $startDataFields, 'params' => $Params));
```

### chat.validate\_department[​](#chatvalidate_department "Direct link to chat.validate_department")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 440  
**Purpose:** Triggered to validate department.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_department', array('input_form' => $inputData));
```

### chat.validate\_read\_operator\_message[​](#chatvalidate_read_operator_message "Direct link to chat.validate_read_operator_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 455  
**Purpose:** Triggered to validate read operator message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_read_operator_message',array('errors' => & $Errors, 'input_form' => & $inputData, 'chat' => & $chat));
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-2 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 568  
**Purpose:** Triggered before auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered', array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-3 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 593  
**Purpose:** Triggered when auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-3 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 618  
**Purpose:** Triggered before auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered', array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-4 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 644  
**Purpose:** Triggered when auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-2 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 689  
**Purpose:** Triggered when chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started',array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.readoperatormessage[​](#chatreadoperatormessage "Direct link to chat.readoperatormessage")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/readoperatormessage.php>  
**Line:** 885  
**Purpose:** Triggered when read operator message page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.readoperatormessage',array('tpl' => $tpl, 'params' => & $Params));
```

### chat.nick\_changed[​](#chatnick_changed "Direct link to chat.nick_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/editnick.php>  
**Line:** 49  
**Purpose:** Triggered when chat nick is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.nick_changed',array('chat' => & $chat));
```

### chat.before\_save\_remarks[​](#chatbefore_save_remarks-1 "Direct link to chat.before_save_remarks")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/saveremarks.php>  
**Line:** 24  
**Purpose:** Triggered before chat remarks are saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_save_remarks',array('chat' => & $Chat, 'errors' => & $errors));
```

### chat.user\_reopened[​](#chatuser_reopened "Direct link to chat.user_reopened")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/reopen.php>  
**Line:** 79  
**Purpose:** Triggered when chat is reopened by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.user_reopened',array('chat' => & $chat));
```

### chat.maintenance\_path[​](#chatmaintenance_path "Direct link to chat.maintenance_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/maintenance.php>  
**Line:** 37  
**Purpose:** Triggered to determine maintenance path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.maintenance_path',array('result' => & $Result));
```

### chat.sendnotice[​](#chatsendnotice-1 "Direct link to chat.sendnotice")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendnotice.php>  
**Line:** 103  
**Purpose:** Triggered when a notice is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.sendnotice', array('errors' => & $Errors));
```

### onlineuser.proactive\_send\_invitation[​](#onlineuserproactive_send_invitation-1 "Direct link to onlineuser.proactive_send_invitation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/sendnotice.php>  
**Line:** 236  
**Purpose:** Triggered when proactive invitation is send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.proactive_send_invitation', array('ou' => & $visitor));
```

### chat.holdaction\_defaultmsg[​](#chatholdaction_defaultmsg "Direct link to chat.holdaction_defaultmsg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/holdaction.php>  
**Line:** 97  
**Purpose:** Triggered to get hold action default message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.holdaction_defaultmsg',array('msg' => & $msgText, 'chat' => & $chat));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-13 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/holdaction.php>  
**Line:** 116  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat));
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-2 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchat/holdaction.php>  
**Line:** 157  
**Purpose:** Triggered when a web message is added by admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array('msg' => & $msg, 'chat' => & $chat, 'ou' => null));
```

## User Module[​](#user-module "Direct link to User Module")

### user.grouplist\_path[​](#usergrouplist_path "Direct link to user.grouplist_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/grouplist.php>  
**Line:** 27  
**Purpose:** Triggered to determine group list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.grouplist_path', array('result' => & $Result));
```

### chat.operator\_visibility\_changed[​](#chatoperator_visibility_changed "Direct link to chat.operator_visibility_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/setinvisible.php>  
**Line:** 19  
**Purpose:** Triggered when operator visibility is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_visibility_changed',array('user' => & $userData, 'reason' => 'user_action'));
```

### user.editgroup\_path[​](#usereditgroup_path "Direct link to user.editgroup_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/editgroup.php>  
**Line:** 199  
**Purpose:** Triggered to determine edit group path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.editgroup_path',array('result' => & $Result));
```

### user.user\_created[​](#useruser_created "Direct link to user.user_created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/new.php>  
**Line:** 98  
**Purpose:** Triggered when user is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.user_created',array('userData' => & $UserData, 'password' => $UserData->password_front));
```

### user.new\_path[​](#usernew_path "Direct link to user.new_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/new.php>  
**Line:** 141  
**Purpose:** Triggered to determine new user path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.new_path', array('result' => & $Result));
```

### chat.operator\_inactivemode\_changed[​](#chatoperator_inactivemode_changed-1 "Direct link to chat.operator_inactivemode_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/setinactive.php>  
**Line:** 53  
**Purpose:** Triggered when operator inactive mode is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_inactivemode_changed',array('user' => & $userData, 'reason' => 'user_action'));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/setoffline.php>  
**Line:** 31  
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $userData, 'reason' => 'user_action'));
```

### user.autologinconfig\_path[​](#userautologinconfig_path "Direct link to user.autologinconfig_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/autologinconfig.php>  
**Line:** 100  
**Purpose:** Triggered to determine autologin config path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.autologinconfig_path', array('result' => & $Result));
```

### user.deleted[​](#userdeleted "Direct link to user.deleted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/delete.php>  
**Line:** 73  
**Purpose:** Triggered when user is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.deleted',array('userData' => $departament));
```

### user.logout[​](#userlogout "Direct link to user.logout")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/logout.php>  
**Line:** 17  
**Purpose:** Triggered when user logs out.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.logout',array('user' => & $lhUser));
```

### user.after\_logout[​](#userafter_logout "Direct link to user.after_logout")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/logout.php>  
**Line:** 21  
**Purpose:** Triggered after user logs out.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.after_logout',array('user' => & $lhUser));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-1 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 193  
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $UserData, 'reason' => 'user_action'));
```

### user.after\_user\_departments\_update[​](#userafter_user_departments_update "Direct link to user.after_user_departments_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 268  
**Purpose:** Triggered after user departments are updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.after_user_departments_update', array('user' => & $UserData));
```

### chat.canned\_msg\_before\_save[​](#chatcanned_msg_before_save-1 "Direct link to chat.canned_msg_before_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 318  
**Purpose:** Triggered before canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.canned_msg_before_save',array('errors' => & $Errors, 'msg' => & $cannedMessage, 'scope' => 'user'));
```

### chat.canned\_msg\_after\_save[​](#chatcanned_msg_after_save-1 "Direct link to chat.canned_msg_after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 350  
**Purpose:** Triggered after canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.canned_msg_after_save',array('msg' => & $cannedMessage));
```

### user.account[​](#useraccount "Direct link to user.account")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 458  
**Purpose:** Triggered when user account page is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.account', array('userData' => & $UserData, 'tpl' => & $tpl, 'params' => $Params));
```

### user.account\_result[​](#useraccount_result "Direct link to user.account_result")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/account.php>  
**Line:** 466  
**Purpose:** Triggered to modify user account result.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.account_result', array('result' => & $Result));
```

### chat.operator\_always\_online\_status\_changed[​](#chatoperator_always_online_status_changed "Direct link to chat.operator_always_online_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/setalwaysonline.php>  
**Line:** 26  
**Purpose:** Triggered when operator always online status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_always_online_status_changed',array('user' => & $userData, 'reason' => 'user_action'));
```

### user.autologinconfig\_path[​](#userautologinconfig_path-1 "Direct link to user.autologinconfig_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/passwordrequirements.php>  
**Line:** 144  
**Purpose:** Triggered to determine autologin config path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.autologinconfig_path', array('result' => & $Result));
```

### user.user\_modified[​](#useruser_modified "Direct link to user.user_modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/edit.php>  
**Line:** 102  
**Purpose:** Triggered when user is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.user_modified',array('userData' => & $UserData, 'password' => $UserData->password_front));
```

### user.edit\_user\_window[​](#useredit_user_window "Direct link to user.edit_user_window")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/edit.php>  
**Line:** 273  
**Purpose:** Triggered to modify user edit window.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit_user_window',array('userData' => & $UserData, 'tpl' => & $tpl, 'params' => $Params));
```

### user.edit\_path[​](#useredit_path "Direct link to user.edit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/edit.php>  
**Line:** 284  
**Purpose:** Triggered to determine edit user path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit_path',array('result' => & $Result));
```

### theme.temppath[​](#themetemppath-4 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/import.php>  
**Line:** 29  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### user.2fa\_intercept[​](#user2fa_intercept "Direct link to user.2fa_intercept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/updatepassword.php>  
**Line:** 61  
**Purpose:** Triggered to intercept 2FA.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.2fa_intercept', array('current_user' => erLhcoreClassUser::instance()));
```

### user.updatepassword[​](#userupdatepassword "Direct link to user.updatepassword")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/updatepassword.php>  
**Line:** 86  
**Purpose:** Triggered after user password is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.updatepassword', array('result' => & $Result));
```

### user.userlist\_path[​](#useruserlist_path "Direct link to user.userlist_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/userlist.php>  
**Line:** 123  
**Purpose:** Triggered to determine user list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.userlist_path',array('result' => & $Result));
```

### user.login\_site\_access[​](#userlogin_site_access "Direct link to user.login_site_access")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/login.php>  
**Line:** 123  
**Purpose:** Triggered to modify login site access.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.login_site_access', array('loginSiteAccess' => & $possibleLoginSiteAccess));
```

### user.login\_before\_authenticate[​](#userlogin_before_authenticate "Direct link to user.login_before_authenticate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/login.php>  
**Line:** 83  
**Purpose:** Triggered before user is authenticated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.login_before_authenticate', array('errors' => & $beforeLoginAuthenticateErrors, 'tpl' => & $tpl));
```

### user.third\_party\_login[​](#userthird_party_login "Direct link to user.third_party_login")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/login.php>  
**Line:** 150  
**Purpose:** Triggered during third party login.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.third_party_login', array(
```

### user.login\_after\_success\_authenticate[​](#userlogin_after_success_authenticate "Direct link to user.login_after_success_authenticate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/login.php>  
**Line:** 192  
**Purpose:** Triggered after user is successfully authenticated.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.login_after_success_authenticate', array('current_user' => & $currentUser, 'tpl' => & $tpl));
```

### user.2fa\_intercept[​](#user2fa_intercept-1 "Direct link to user.2fa_intercept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/login.php>  
**Line:** 216  
**Purpose:** Triggered to intercept 2FA during login.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.2fa_intercept', array('remember' => (isset($_POST['rememberMe']) && $_POST['rememberMe'] == 1),'is_external' => $isExternalRequest, 'current_user' => $currentUser));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-2 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/setopstatus.php>  
**Line:** 40  
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $user, 'reason' => 'user_action'));
```

### user.newgroup\_path[​](#usernewgroup_path "Direct link to user.newgroup_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/newgroup.php>  
**Line:** 92  
**Purpose:** Triggered to determine new group path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.newgroup_path', array('result' => & $Result));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-3 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhuser/loginasuser.php>  
**Line:** 25  
**Purpose:** Triggered when operator status is changed during login as user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed', array('user' => & $user, 'reason' => 'user_action'));
```

### chat.delete[​](#chatdelete-4 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/deletechat.php>  
**Line:** 12  
**Purpose:** Triggered when chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete',array('chat' => & $chat,'user' => $currentUser));
```

### chat.desktop\_client\_deleted[​](#chatdesktop_client_deleted "Direct link to chat.desktop_client_deleted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/deletechat.php>  
**Line:** 13  
**Purpose:** Triggered when chat is deleted from desktop client.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.desktop_client_deleted',array('chat' => & $chat,'user' => $currentUser));
```

### chat.chat\_transfer\_accepted[​](#chatchat_transfer_accepted-2 "Direct link to chat.chat_transfer_accepted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/accepttransfer.php>  
**Line:** 44  
**Purpose:** Triggered when chat transfer is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfer_accepted',array('chat' => & $chat));
```

### chat.chat\_transfer\_accepted[​](#chatchat_transfer_accepted-3 "Direct link to chat.chat_transfer_accepted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/accepttransferbychat.php>  
**Line:** 24  
**Purpose:** Triggered when chat transfer is accepted by chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfer_accepted',array('chat' => & $chat));
```

### chat.data\_changed[​](#chatdata_changed-3 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/chatdata.php>  
**Line:** 71  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $chat,'user' => $currentUser));
```

### chat.accept[​](#chataccept-2 "Direct link to chat.accept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/chatdata.php>  
**Line:** 75  
**Purpose:** Triggered when chat is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.accept',array('chat' => & $chat,'user' => $currentUser));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-4 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/setonlinestatus.php>  
**Line:** 26  
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $UserData, 'reason' => 'user_action'));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-14 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/addmsgadmin.php>  
**Line:** 47  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg, 'chat' => & $Chat));
```

### chat.desktop\_client\_admin\_msg[​](#chatdesktop_client_admin_msg "Direct link to chat.desktop_client_admin_msg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/addmsgadmin.php>  
**Line:** 57  
**Purpose:** Triggered when admin message is send from desktop client.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.desktop_client_admin_msg',array('msg' => & $msg,'chat' => & $Chat));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-15 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/transferuser.php>  
**Line:** 33  
**Purpose:** Triggered before admin message is saved during transfer.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $userTo->id));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-16 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/transferuser.php>  
**Line:** 40  
**Purpose:** Triggered before admin message is saved during transfer.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $Chat, 'user_id' => $currentUser->getUserID()));
```

### chat.chat\_transfered[​](#chatchat_transfered-1 "Direct link to chat.chat_transfered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/transferuser.php>  
**Line:** 52  
**Purpose:** Triggered when chat is transfered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfered', array('chat' => & $Chat, 'transfer' => $Transfer, 'msg' => $msg));
```

### xml.lists[​](#xmllists "Direct link to xml.lists")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxml/lists.php>  
**Line:** 202  
**Purpose:** Triggered to modify XML lists.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xml.lists', array('list' => & $response));
```

### chat.genericbot\_arguments[​](#chatgenericbot_arguments "Direct link to chat.genericbot_arguments")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/argumenttemplates.php>  
**Line:** 7  
**Purpose:** Triggered to modify generic bot arguments.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_arguments', array(
```

### theme.temppath[​](#themetemppath-5 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/botimportgroup.php>  
**Line:** 17  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### chat.list\_path[​](#chatlist_path-1 "Direct link to chat.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/listexceptions.php>  
**Line:** 40  
**Purpose:** Triggered to determine chat list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_path',array('result' => & $Result));
```

### chat.genericbot\_exceptions[​](#chatgenericbot_exceptions "Direct link to chat.genericbot_exceptions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/newtrgroup.php>  
**Line:** 13  
**Purpose:** Triggered to modify generic bot exceptions.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_exceptions', array('exceptions' => & $exceptions));
```

### bot.list\_commands[​](#botlist_commands "Direct link to bot.list_commands")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/commands.php>  
**Line:** 40  
**Purpose:** Triggered to list bot commands.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('bot.list_commands',array('result' => & $Result));
```

### bot.list\_conditions[​](#botlist_conditions "Direct link to bot.list_conditions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/conditions.php>  
**Line:** 40  
**Purpose:** Triggered to list bot conditions.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('bot.list_conditions',array('result' => & $Result));
```

### chat.list\_path[​](#chatlist_path-2 "Direct link to chat.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/list.php>  
**Line:** 40  
**Purpose:** Triggered to determine chat list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_path',array('result' => & $Result));
```

### theme.temppath[​](#themetemppath-6 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/listrestapi.php>  
**Line:** 34  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### chat.list\_path[​](#chatlist_path-3 "Direct link to chat.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/listrestapi.php>  
**Line:** 81  
**Purpose:** Triggered to determine chat list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_path',array('result' => & $Result));
```

### chat.genericbot\_exceptions[​](#chatgenericbot_exceptions-1 "Direct link to chat.genericbot_exceptions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/editexception.php>  
**Line:** 26  
**Purpose:** Triggered to modify generic bot exceptions.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_exceptions', array('exceptions' => & $exceptions));
```

### theme.temppath[​](#themetemppath-7 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/import.php>  
**Line:** 15  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-4 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/buttonclicked.php>  
**Line:** 21  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.reaction\_visitor[​](#chatreaction_visitor "Direct link to chat.reaction_visitor")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/buttonclicked.php>  
**Line:** 95  
**Purpose:** Triggered when visitor reacts to button.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.reaction_visitor', array('chat' => & $chat, 'msg' => & $msg));
```

## GenericBot Module[​](#genericbot-module "Direct link to GenericBot Module")

### chat.reaction\_visitor[​](#chatreaction_visitor-1 "Direct link to chat.reaction_visitor")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/buttonclicked.php>  
**Line:** 172  
**Purpose:** Triggered when a visitor reacts to a button click.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.reaction_visitor', array(
```

### chat.genericbot\_exceptions[​](#chatgenericbot_exceptions-2 "Direct link to chat.genericbot_exceptions")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/newexception.php>  
**Line:** 13  
**Purpose:** Triggered when generic bot encounters exceptions.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_exceptions', array('exceptions' => & $exceptions));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-5 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhgenericbot/updatebuttonclicked.php>  
**Line:** 19  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

## Permission Module[​](#permission-module "Direct link to Permission Module")

### permission.newrole\_path[​](#permissionnewrole_path "Direct link to permission.newrole_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpermission/newrole.php>  
**Line:** 66  
**Purpose:** Triggered to determine new role path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('permission.newrole_path', array('result' => & $Result));
```

### lhpermission.getmodulename[​](#lhpermissiongetmodulename "Direct link to lhpermission.getmodulename")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpermission/request.php>  
**Line:** 46  
**Purpose:** Triggered to get module name.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('lhpermission.getmodulename',array('module' => $module, 'name' => & $moduleName));
```

### permission.roles\_path[​](#permissionroles_path "Direct link to permission.roles_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpermission/roles.php>  
**Line:** 12  
**Purpose:** Triggered to determine roles path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('permission.roles_path', array('result' => & $Result));
```

### permission.editrole\_path[​](#permissioneditrole_path "Direct link to permission.editrole_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpermission/editrole.php>  
**Line:** 228  
**Purpose:** Triggered to determine edit role path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('permission.editrole_path', array('result' => & $Result));
```

### permission.editrole\_path[​](#permissioneditrole_path-1 "Direct link to permission.editrole_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpermission/editfunction.php>  
**Line:** 53  
**Purpose:** Triggered to determine edit role path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('permission.editrole_path', array('result' => & $Result));
```

## Notifications Module[​](#notifications-module "Direct link to Notifications Module")

### notifications.list\_path[​](#notificationslist_path "Direct link to notifications.list_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhnotifications/list.php>  
**Line:** 41  
**Purpose:** Triggered to determine notifications list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('notifications.list_path',array('result' => & $Result));
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-1 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhnotifications/subscribe.php>  
**Line:** 63  
**Purpose:** Triggered before a user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved',array('msg' => & $msg, 'chat' => & $chat));
```

## Speech Module[​](#speech-module "Direct link to Speech Module")

### chat.cannedmsgedit\_path[​](#chatcannedmsgedit_path-1 "Direct link to chat.cannedmsgedit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhspeech/editdialect.php>  
**Line:** 45  
**Purpose:** Triggered to determine canned message edit path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsgedit_path',array('result' => & $Result));
```

### chat.speech\_defaultlanguage\_path[​](#chatspeech_defaultlanguage_path "Direct link to chat.speech_defaultlanguage_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhspeech/defaultlanguage.php>  
**Line:** 55  
**Purpose:** Triggered to determine speech default language path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.speech_defaultlanguage_path',array('result' => & $Result));
```

### chat.cannedmsgedit\_path[​](#chatcannedmsgedit_path-2 "Direct link to chat.cannedmsgedit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhspeech/editlanguage.php>  
**Line:** 45  
**Purpose:** Triggered to determine canned message edit path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.cannedmsgedit_path',array('result' => & $Result));
```

### speech.before\_getchatdialect[​](#speechbefore_getchatdialect "Direct link to speech.before_getchatdialect")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhspeech/getchatdialect.php>  
**Line:** 8  
**Purpose:** Triggered before getting chat dialect.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('speech.before_getchatdialect',array('chat' => & $chat, 'errors' => & $errors));
```

### speech.getchatdialect[​](#speechgetchatdialect "Direct link to speech.getchatdialect")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhspeech/getchatdialect.php>  
**Line:** 15  
**Purpose:** Triggered to get chat dialect.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('speech.getchatdialect',array('chat' => & $chat));
```

## Chatbox Module[​](#chatbox-module "Direct link to Chatbox Module")

### chatbox.before\_msg\_user\_saved[​](#chatboxbefore_msg_user_saved "Direct link to chatbox.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatbox/addmsguser.php>  
**Line:** 34  
**Purpose:** Triggered before a user message is saved in chatbox.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.before_msg_user_saved',array('msg' => & $msg,'chat' => & $Chat));
```

### chatbox.new[​](#chatboxnew "Direct link to chatbox.new")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatbox/new.php>  
**Line:** 5  
**Purpose:** Triggered when a new chatbox is created.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.new', array('chatbox' => $chatbox));
```

### chatbox.list[​](#chatboxlist "Direct link to chatbox.list")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatbox/list.php>  
**Line:** 3  
**Purpose:** Triggered when chatbox list is rendered.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.list', array());
```

### chatbox.configuration[​](#chatboxconfiguration "Direct link to chatbox.configuration")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatbox/configuration.php>  
**Line:** 5  
**Purpose:** Triggered when chatbox configuration is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.configuration', array('tpl' => & $tpl));
```

### chatbox.before\_created[​](#chatboxbefore_created "Direct link to chatbox.before_created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatbox/chatwidget.php>  
**Line:** 32  
**Purpose:** Triggered before chatbox is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.before_created', array('errors' => & $errors));
```

## Canned Message Module[​](#canned-message-module "Direct link to Canned Message Module")

### theme.temppath[​](#themetemppath-8 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcannedmsg/import.php>  
**Line:** 23  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath', array('dir' => & $dir));
```

### cannedmsg.filter[​](#cannedmsgfilter "Direct link to cannedmsg.filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcannedmsg/filter.php>  
**Line:** 68  
**Purpose:** Triggered to filter canned messages.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('cannedmsg.filter',array('q' => $q, 'cannedmessages' => & $cannedMessagesFormated, 'chat' => & $chat));
```

## FAQ Module[​](#faq-module "Direct link to FAQ Module")

### faq.new[​](#faqnew "Direct link to faq.new")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/new.php>  
**Line:** 5  
**Purpose:** Triggered when a new FAQ is created.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.new', array('faq' => $faq));
```

### faq.before\_created[​](#faqbefore_created "Direct link to faq.before_created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/new.php>  
**Line:** 18  
**Purpose:** Triggered before a FAQ is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.before_created', array('faq' => & $faq, 'errors' => & $Errors));
```

### faq.created[​](#faqcreated "Direct link to faq.created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/new.php>  
**Line:** 23  
**Purpose:** Triggered after a FAQ is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.created', array('faq' => & $faq));
```

### faq.view[​](#faqview "Direct link to faq.view")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/view.php>  
**Line:** 5  
**Purpose:** Triggered when a FAQ is viewed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.view', array('faq' => $faq));
```

### faq.before\_filled\_by\_user[​](#faqbefore_filled_by_user "Direct link to faq.before_filled_by_user")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/faqwidget.php>  
**Line:** 250  
**Purpose:** Triggered before a FAQ is filled by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.before_filled_by_user', array('faq' => & $item_new, 'errors' => & $Errors));
```

### faq.filled\_by\_user[​](#faqfilled_by_user "Direct link to faq.filled_by_user")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/faqwidget.php>  
**Line:** 259  
**Purpose:** Triggered after a FAQ is filled by user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.filled_by_user', array('faq' => & $item_new));
```

### faq.list[​](#faqlist "Direct link to faq.list")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfaq/list.php>  
**Line:** 5  
**Purpose:** Triggered when FAQ list is rendered.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('faq.list', array('tpl' => & $tpl));
```

## Voice & Video Module[​](#voice--video-module "Direct link to Voice & Video Module")

### chat.validstatus\_chat[​](#chatvalidstatus_chat-6 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhvoicevideo/join.php>  
**Line:** 14  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-7 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhvoicevideo/call.php>  
**Line:** 13  
**Purpose:** Triggered to validate chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-17 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhvoicevideo/joinop.php>  
**Line:** 66  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg, 'chat' => & $chat));
```

## Theme Module[​](#theme-module "Direct link to Theme Module")

### theme.temppath[​](#themetemppath-9 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhtheme/import.php>  
**Line:** 15  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### theme.temppath[​](#themetemppath-10 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhtheme/import.php>  
**Line:** 98  
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

## Chat Archive Module[​](#chat-archive-module "Direct link to Chat Archive Module")

### chat.archive\_deleted[​](#chatarchive_deleted "Direct link to chat.archive_deleted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatarchive/deletearchivechat.php>  
**Line:** 14  
**Purpose:** Triggered when chat archive is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.archive_deleted',array('chat' => & $chat));
```

### chatarchive.archive\_path[​](#chatarchivearchive_path "Direct link to chatarchive.archive_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatarchive/archive.php>  
**Line:** 11  
**Purpose:** Triggered to determine chat archive path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatarchive.archive_path',array('result' => & $Result));
```

### chatarchive.archive\_path[​](#chatarchivearchive_path-1 "Direct link to chatarchive.archive_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatarchive/configuration.php>  
**Line:** 75  
**Purpose:** Triggered to determine chat archive path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatarchive.archive_path',array('result' => & $Result));
```

## Mail Archive Module[​](#mail-archive-module "Direct link to Mail Archive Module")

### mailarchive.archive\_path[​](#mailarchivearchive_path "Direct link to mailarchive.archive_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhmailarchive/archive.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailarchive/archive.php%60)
**Line:** 11
**Purpose:** Triggered to determine mail archive path.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailarchive.archive_path',array('result' => & $Result));
```

### mailarchive.archive\_path[​](#mailarchivearchive_path-1 "Direct link to mailarchive.archive_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhmailarchive/configuration.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhmailarchive/configuration.php%60)
**Line:** 75
**Purpose:** Triggered to determine mail archive path.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mailarchive.archive_path',array('result' => & $Result));
```

## Survey Module[​](#survey-module "Direct link to Survey Module")

### chat.set\_sub\_status[​](#chatset_sub_status-1 "Direct link to chat.set_sub_status")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/choosesurvey.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/choosesurvey.php%60)
**Line:** 13
**Purpose:** Triggered when chat sub status is set.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.set_sub_status',array('chat' => & $chat));
```

### survey.filled[​](#surveyfilled "Direct link to survey.filled")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/fillinline.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/fillinline.php%60)
**Line:** 40
**Purpose:** Triggered after survey is filled.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('survey.filled', array('chat' => & $chat, 'survey' => $survey, 'survey_item' => & $surveyItem));
```

### survey.filled[​](#surveyfilled-1 "Direct link to survey.filled")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/fill.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/fill.php%60)
**Line:** 58
**Purpose:** Triggered after survey is filled.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('survey.filled', array('chat' => & $chat, 'survey' => $survey, 'survey_item' => & $surveyItem));
```

### survey.filled[​](#surveyfilled-2 "Direct link to survey.filled")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/fillwidget.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/fillwidget.php%60)
**Line:** 69
**Purpose:** Triggered after survey is filled.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('survey.filled', array('chat' => & $chat, 'survey' => $survey, 'survey_item' => & $surveyItem));
```

### chat.unread\_chat[​](#chatunread_chat-4 "Direct link to chat.unread_chat")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/backtochat.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/backtochat.php%60)
**Line:** 58
**Purpose:** Triggered when chat is unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### survey.back\_to\_chat[​](#surveyback_to_chat "Direct link to survey.back_to_chat")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsurvey/backtochat.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsurvey/backtochat.php%60)
**Line:** 75
**Purpose:** Triggered when visitor goes back to chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('survey.back_to_chat',array('chat' => & $chat, 'msg' => & $msg));
```

## System Module[​](#system-module "Direct link to System Module")

### chat.notice\_update[​](#chatnotice_update "Direct link to chat.notice_update")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsystem/notice.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsystem/notice.php%60)
**Line:** 49
**Purpose:** Triggered when chat notice is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.notice_update',array());
```

### user.update\_stats[​](#userupdate_stats "Direct link to user.update_stats")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsystem/usersactions.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsystem/usersactions.php%60)
**Line:** 19
**Purpose:** Triggered when user stats are updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.update_stats',array('user' => $user));
```

### user.userlist\_path[​](#useruserlist_path-1 "Direct link to user.userlist_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhsystem/usersactions.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhsystem/usersactions.php%60)
**Line:** 48
**Purpose:** Triggered to determine user list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.userlist_path',array('result' => & $Result));
```

## XMP Module[​](#xmp-module "Direct link to XMP Module")

### xmp.configuration[​](#xmpconfiguration "Direct link to xmp.configuration")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhxmp/configuration.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhxmp/configuration.php%60)
**Line:** 3
**Purpose:** Triggered when XMP configuration is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xmp.configuration', array());
```

## Co-browse Module[​](#co-browse-module "Direct link to Co-browse Module")

### cobrowse.before\_store\_node\_map[​](#cobrowsebefore_store_node_map "Direct link to cobrowse.before_store_node_map")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhcobrowse/storenodemap.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcobrowse/storenodemap.php%60)
**Line:** 42
**Purpose:** Triggered before node map is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('cobrowse.before_store_node_map', array('data' => json_decode($_POST['data']), 'errors' => & $errors));
```

### chat.sync\_back\_office[​](#chatsync_back_office-1 "Direct link to chat.sync_back_office")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhcobrowse/storenodemap.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcobrowse/storenodemap.php%60)
**Line:** 61
**Purpose:** Triggered to sync back office.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.sync_back_office');
```

## Statistic Module[​](#statistic-module "Direct link to Statistic Module")

### chat.operator\_status\_changed[​](#chatoperator_status_changed-5 "Direct link to chat.operator_status_changed")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 45
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed', array('user' => & $user, 'reason' => 'user_action'));
```

### chat.statistic[​](#chatstatistic "Direct link to chat.statistic")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 68
**Purpose:** Triggered to perform statistic.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.statistic', array());
```

### statistic.uparams\_append[​](#statisticuparams_append "Direct link to statistic.uparams_append")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 71
**Purpose:** Triggered to append user parameters.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.uparams_append',array('uparams' => & $Params['user_parameters_unordered']));
```

### statistic.valid\_tabs[​](#statisticvalid_tabs "Direct link to statistic.valid_tabs")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 117
**Purpose:** Triggered to validate statistic tabs.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.valid_tabs', array(
```

### statistic.active\_filter[​](#statisticactive_filter "Direct link to statistic.active_filter")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 223
**Purpose:** Triggered to perform active filter.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.active_filter',array('filter' => & $filterParams, 'uparams' => $Params['user_parameters_unordered']));
```

### statistic.process\_active\_tab[​](#statisticprocess_active_tab "Direct link to statistic.process_active_tab")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 274
**Purpose:** Triggered to process active tab.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.process_active_tab', array(
```

### statistic.chatsstatistic\_filter[​](#statisticchatsstatistic_filter "Direct link to statistic.chatsstatistic_filter")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 457
**Purpose:** Triggered to perform chats statistic filter.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.chatsstatistic_filter',array('filter' => & $filterParams, 'uparams' => $Params['user_parameters_unordered']));
```

### statistic.process\_tab[​](#statisticprocess_tab "Direct link to statistic.process_tab")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 851
**Purpose:** Triggered to process statistic tab.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.process_tab', array(
```

### chat.statistic\_path[​](#chatstatistic_path "Direct link to chat.statistic_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhstatistic/statistic.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhstatistic/statistic.php%60)
**Line:** 863
**Purpose:** Triggered to determine chat statistic path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.statistic_path',array('result' => & $Result));
```

## Views Module[​](#views-module "Direct link to Views Module")

### views.editview[​](#viewseditview "Direct link to views.editview")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhviews/edit.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhviews/edit.php%60)
**Line:** 24
**Purpose:** Triggered when view is edited.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('views.editview', array(
```

### views.export[​](#viewsexport "Direct link to views.export")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhviews/exportview.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhviews/exportview.php%60)
**Line:** 31
**Purpose:** Triggered when view is exported.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('views.export', array(
```

### views.loadview[​](#viewsloadview "Direct link to views.loadview")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhviews/loadview.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhviews/loadview.php%60)
**Line:** 131
**Purpose:** Triggered when view is loaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('views.loadview', array(
```

## Front Module[​](#front-module "Direct link to Front Module")

### chat.setting.new\_dashboard[​](#chatsettingnew_dashboard "Direct link to chat.setting.new_dashboard")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhfront/default.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhfront/default.php%60)
**Line:** 10
**Purpose:** Triggered when new dashboard settings are applied.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.setting.new_dashboard',array('new_dashboard' => & $new_dashboard));
```

## Webhooks Module[​](#webhooks-module "Direct link to Webhooks Module")

### webhooks.event[​](#webhooksevent "Direct link to webhooks.event")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhwebhooks/dispatch.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwebhooks/dispatch.php%60)
**Line:** 81
**Purpose:** Triggered when webhook event is dispatched.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch($callParams['event_name'], $args);
```

### theme.temppath[​](#themetemppath-11 "Direct link to theme.temppath")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhwebhooks/incomingwebhooks.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwebhooks/incomingwebhooks.php%60)
**Line:** 34
**Purpose:** Triggered to determine temporary theme path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### webhooks.list\_path[​](#webhookslist_path "Direct link to webhooks.list_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhwebhooks/incomingwebhooks.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwebhooks/incomingwebhooks.php%60)
**Line:** 85
**Purpose:** Triggered to determine webhooks list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('webhooks.list_path',array('result' => & $Result));
```

### chat.webhook\_incoming[​](#chatwebhook_incoming "Direct link to chat.webhook_incoming")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhwebhooks/incoming.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwebhooks/incoming.php%60)
**Line:** 48
**Purpose:** Triggered when webhook incoming is processed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.webhook_incoming', array(
```

### webhooks.list\_path[​](#webhookslist_path-1 "Direct link to webhooks.list_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhwebhooks/configuration.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwebhooks/configuration.php%60)
**Line:** 40
**Purpose:** Triggered to determine webhooks list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('webhooks.list_path',array('result' => & $Result));
```

## Abstract Module[​](#abstract-module "Direct link to Abstract Module")

### abstract.new\_identifier\_general[​](#abstractnew_identifier_general "Direct link to abstract.new_identifier_general")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/new.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/new.php%60)
**Line:** 3
**Purpose:** Triggered when new abstract record is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.new_'.strtolower($Params['user_parameters']['identifier']).'_general', array());
```

### abstract.before\_created\_objectclass[​](#abstractbefore_created_objectclass "Direct link to abstract.before_created_objectclass")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/new.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/new.php%60)
**Line:** 36
**Purpose:** Triggered before abstract record is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.before_created.'.strtolower($objectClass),array('object' => & $objectData, 'errors' => & $Errors));
```

### abstract.created\_objectclass[​](#abstractcreated_objectclass "Direct link to abstract.created_objectclass")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/new.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/new.php%60)
**Line:** 51
**Purpose:** Triggered after abstract record is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.created.'.strtolower($objectClass),array('object' => & $objectData));
```

### abstract.new\_identifier\_path[​](#abstractnew_identifier_path "Direct link to abstract.new_identifier_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/new.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/new.php%60)
**Line:** 119
**Purpose:** Triggered to determine new abstract record path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.new_'.strtolower($Params['user_parameters']['identifier']).'_path', array('result' => & $Result));
```

### abstract.delete\_identifier\_general[​](#abstractdelete_identifier_general "Direct link to abstract.delete_identifier_general")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/delete.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/delete.php%60)
**Line:** 3
**Purpose:** Triggered when abstract record is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.delete_'.strtolower($Params['user_parameters']['identifier']).'_general', array());
```

### abstract.list\_identifier\_general[​](#abstractlist_identifier_general "Direct link to abstract.list_identifier_general")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/list.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/list.php%60)
**Line:** 3
**Purpose:** Triggered when abstract record list is rendered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.list_'.strtolower($Params['user_parameters']['identifier']).'_general', array());
```

### abstract.list\_identifier\_path[​](#abstractlist_identifier_path "Direct link to abstract.list_identifier_path")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/list.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/list.php%60)
**Line:** 146
**Purpose:** Triggered to determine abstract record list path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.list_'.strtolower($Params['user_parameters']['identifier']).'_path', array('result' => & $Result));
```

### abstract.edit\_identifier\_general[​](#abstractedit_identifier_general "Direct link to abstract.edit_identifier_general")

**File:** [https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc\_web/modules/lhabstract/edit.php`](https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/edit.php%60)
**Line:** 3
**Purpose:** Triggered when abstract record is edited.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.edit_'.strtolower($Params['user_parameters']['identifier']).'_general', array());
```

## Abstract Module[​](#abstract-module-1 "Direct link to Abstract Module")

### abstract.edit\_\*\_path[​](#abstractedit__path "Direct link to abstractedit__path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhabstract/edit.php>  
**Line:** 128  
**Purpose:** Triggered when an abstract record is edited. The \* is replaced with the identifier of the abstract record.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.edit_'.strtolower($Params['user_parameters']['identifier']).'_path', array('result' => & $Result));
```

## Paid Chat Module[​](#paid-chat-module "Direct link to Paid Chat Module")

### paidchat.expired\_path[​](#paidchatexpired_path "Direct link to paidchat.expired_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpaidchat/invalidhash.php>  
**Line:** 11  
**Purpose:** Triggered when a paid chat has expired.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('paidchat.expired_path',array('result' => & $Result));
```

### paidchat.settings\_path[​](#paidchatsettings_path "Direct link to paidchat.settings_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpaidchat/settings.php>  
**Line:** 61  
**Purpose:** Triggered when paid chat settings are accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('paidchat.settings_path',array('result' => & $Result));
```

### paidchat.removedpaidchat\_path[​](#paidchatremovedpaidchat_path "Direct link to paidchat.removedpaidchat_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhpaidchat/removedpaidchat.php>  
**Line:** 11  
**Purpose:** Triggered when a paid chat is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('paidchat.removedpaidchat_path',array('result' => & $Result));
```

## Cron Module[​](#cron-module "Direct link to Cron Module")

### chat.workflow.started[​](#chatworkflowstarted "Direct link to chat.workflow.started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcron/workflow.php>  
**Line:** 10  
**Purpose:** Triggered when the chat workflow process is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.started',array());
```

### chat.pending\_process\_workflow[​](#chatpending_process_workflow "Direct link to chat.pending_process_workflow")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcron/workflow.php>  
**Line:** 33, 67  
**Purpose:** Triggered when a pending chat is processed by the workflow.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.pending_process_workflow',array('chat' => & $chat));
```

### chat.workflow[​](#chatworkflow "Direct link to chat.workflow")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcron/workflow.php>  
**Line:** 155  
**Purpose:** Triggered during the chat workflow process.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow',array());
```

### chat.modified[​](#chatmodified-2 "Direct link to chat.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcron/encrypt.php>  
**Line:** 41  
**Purpose:** Triggered when a chat is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.modified', array('chat' => & $chat));
```

### chat.check\_archive[​](#chatcheck_archive "Direct link to chat.check_archive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhcron/util/check_archives.php>  
**Line:** 15  
**Purpose:** Triggered when checking chat archives.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.check_archive', array('archive' => $archiveRange));
```

## Translation Module[​](#translation-module "Direct link to Translation Module")

### translate.before\_messagetranslated[​](#translatebefore_messagetranslated "Direct link to translate.before_messagetranslated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhtranslation/starttranslation.php>  
**Line:** 13  
**Purpose:** Triggered before a message is translated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.before_messagetranslated', array('chat' => & $chat, 'errors' => & $errors));
```

## Rest API Module[​](#rest-api-module "Direct link to Rest API Module")

### chat.trans\_lhcbo[​](#chattrans_lhcbo "Direct link to chat.trans_lhcbo")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/trans/lhcbo.php>  
**Line:** 190  
**Purpose:** Triggered during chat translation in the back office.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.trans_lhcbo', array(
```

### chat.chatcheckoperatormessage[​](#chatchatcheckoperatormessage-1 "Direct link to chat.chatcheckoperatormessage")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/chatcheckoperatormessage.php>  
**Line:** 50  
**Purpose:** Triggered when checking operator messages in a chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatcheckoperatormessage', array('proactive_active' => & $proactiveInviteActive));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-8 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsguser.php>  
**Line:** 30  
**Purpose:** Triggered when validating the chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-2 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsguser.php>  
**Line:** 50  
**Purpose:** Triggered before a user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved',array('msg' => & $msg,'chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat-5 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsguser.php>  
**Line:** 86  
**Purpose:** Triggered when a chat is marked as unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### chat.addmsguser[​](#chataddmsguser-1 "Direct link to chat.addmsguser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsguser.php>  
**Line:** 92  
**Purpose:** Triggered when a user message is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.addmsguser',array('chat' => & $chat, 'msg' => & $msg, 'init' => 'restapi'));
```

### chat.data\_changed[​](#chatdata_changed-4 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/setchatstatus.php>  
**Line:** 43  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $chat, 'user_data' => $userData));
```

### user.user\_created[​](#useruser_created-1 "Direct link to user.user_created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/user.php>  
**Line:** 98  
**Purpose:** Triggered when a user is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.user_created', array('userData' => & $user, 'password' => $user->password_front));
```

### department.modified[​](#departmentmodified-2 "Direct link to department.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/department.php>  
**Line:** 104  
**Purpose:** Triggered when a department is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('department.modified',array('department' => $dep, 'payload_data' => $requestBody));
```

### file.before\_admin\_uploadfile.file\_store[​](#filebefore_admin_uploadfilefile_store-1 "Direct link to file.before_admin_uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/file.php>  
**Line:** 13  
**Purpose:** Triggered before an admin uploads a file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.before_admin_uploadfile.file_store', array('errors' => & $errors));
```

### file.new.file\_path[​](#filenewfile_path-3 "Direct link to file.new.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/file.php>  
**Line:** 22  
**Purpose:** Triggered when a new file path is generated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.new.file_path', array('path' => & $path));
```

### file.file\_new\_admin.file\_store[​](#filefile_new_adminfile_store-3 "Direct link to file.file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/file.php>  
**Line:** 27  
**Purpose:** Triggered when a new admin file is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.file_new_admin.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### file.download[​](#filedownload-1 "Direct link to file.download")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/file.php>  
**Line:** 82  
**Purpose:** Triggered when a file is downloaded.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.download', array('chat_file' => $file));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-6 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/setoperatorstatus.php>  
**Line:** 47  
**Purpose:** Triggered when an operator's status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $userData, 'reason' => 'rest_api'));
```

### api.fetchchat[​](#apifetchchat "Direct link to api.fetchchat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/chat.php>  
**Line:** 97  
**Purpose:** Triggered when fetching a chat via API.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('api.fetchchat', array('chat' => & $chat));
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-4 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/startchat.php>  
**Line:** 176  
**Purpose:** Triggered before an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered', array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.before\_auto\_responder\_message[​](#chatbefore_auto_responder_message-2 "Direct link to chat.before_auto_responder_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/startchat.php>  
**Line:** 188  
**Purpose:** Triggered before an auto-responder message is sent.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_message', array('chat' => & $chat, 'responder' => & $responder));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-5 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/startchat.php>  
**Line:** 205  
**Purpose:** Triggered when an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-3 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/startchat.php>  
**Line:** 227  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started',array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.syncuser.operator\_typing[​](#chatsyncuseroperator_typing-1 "Direct link to chat.syncuser.operator_typing")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/fetchchatmessages.php>  
**Line:** 80  
**Purpose:** Triggered when an operator is typing.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncuser.operator_typing',array('chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat-6 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/closechatasvisitor.php>  
**Line:** 66  
**Purpose:** Triggered when chat is unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### chat.operator\_status\_changed[​](#chatoperator_status_changed-7 "Direct link to chat.operator_status_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/setonlinestatus.php>  
**Line:** 32  
**Purpose:** Triggered when operator status is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_status_changed',array('user' => & $user, 'reason' => 'restapi_action'));
```

### restapi.swagger[​](#restapiswagger "Direct link to restapi.swagger")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/swagger.php>  
**Line:** 29  
**Purpose:** Triggered when swagger is generated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('restapi.swagger', array(
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-18 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsgadmin.php>  
**Line:** 164  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg,'chat' => & $Chat));
```

### chat.data\_changed[​](#chatdata_changed-5 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsgadmin.php>  
**Line:** 242  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed',array('chat' => & $Chat, 'user_data' => $userData));
```

### chat.accept[​](#chataccept-3 "Direct link to chat.accept")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsgadmin.php>  
**Line:** 244  
**Purpose:** Triggered when chat is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.accept',array('chat' => & $Chat, 'user_data' => $userData));
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-3 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/addmsgadmin.php>  
**Line:** 279  
**Purpose:** Triggered when web admin message is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array('msg' => & $msg,'chat' => & $Chat));
```

### chat.operator\_visibility\_changed[​](#chatoperator_visibility_changed-1 "Direct link to chat.operator_visibility_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/setinvisibilitystatus.php>  
**Line:** 45  
**Purpose:** Triggered when operator visibility is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.operator_visibility_changed',array('user' => & $userData, 'reason' => 'rest_api'));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-4 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhrestapi/updatechatattributes.php>  
**Line:** 32  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat', array(
```

## Widget Rest API Module[​](#widget-rest-api-module "Direct link to Widget Rest API Module")

### chat.validstatus\_chat[​](#chatvalidstatus_chat-9 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/addmsguser.php>  
**Line:** 64  
**Purpose:** Triggered when chat status is valid.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-3 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/addmsguser.php>  
**Line:** 86  
**Purpose:** Triggered before user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved',array('msg' => & $msg,'chat' => & $chat));
```

### chat.unread\_chat[​](#chatunread_chat-7 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/addmsguser.php>  
**Line:** 153  
**Purpose:** Triggered when chat is unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat',array('chat' => & $chat));
```

### chat.addmsguser[​](#chataddmsguser-2 "Direct link to chat.addmsguser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/addmsguser.php>  
**Line:** 179  
**Purpose:** Triggered when user message is added.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.addmsguser',array('chat' => & $chat, 'msg' => & $msg));
```

### widgetrestapi.getinvitation[​](#widgetrestapigetinvitation "Direct link to widgetrestapi.getinvitation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/getinvitation.php>  
**Line:** 296  
**Purpose:** Triggered when widget invitation is retrieved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.getinvitation',array('output' => & $outputResponse, 'ou' => $onlineUser, 'theme' => (isset($theme) ? $theme : null)));
```

### chat.before\_chat\_started[​](#chatbefore_chat_started-2 "Direct link to chat.before_chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitoffline.php>  
**Line:** 89  
**Purpose:** Triggered before chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_chat_started', array('chat' => & $chat, 'errors' => & $Errors, 'offline' => (isset($additionalParams['offline']) && $additionalParams['offline'] == true)));
```

### chat.chat\_offline\_request\_presend[​](#chatchat_offline_request_presend-2 "Direct link to chat.chat_offline_request_presend")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitoffline.php>  
**Line:** 116  
**Purpose:** Triggered before offline request is send.

```
$attributePresend = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_presend', array(
```

### chat.chat\_offline\_request[​](#chatchat_offline_request-2 "Direct link to chat.chat_offline_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitoffline.php>  
**Line:** 139  
**Purpose:** Triggered when offline request is made.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request', array(
```

### chat.chat\_offline\_request\_saved[​](#chatchat_offline_request_saved-2 "Direct link to chat.chat_offline_request_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitoffline.php>  
**Line:** 172  
**Purpose:** Triggered when offline request is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_offline_request_saved', array(
```

### chat.process\_invitation[​](#chatprocess_invitation "Direct link to chat.process_invitation")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 253  
**Purpose:** Triggered when invitation is processed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.process_invitation',array(
```

## Widget REST API Module[​](#widget-rest-api-module-1 "Direct link to Widget REST API Module")

### chat.process\_invitation\_ou[​](#chatprocess_invitation_ou "Direct link to chat.process_invitation_ou")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 262  
**Purpose:** Triggered when processing an invitation.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.process_invitation_ou',array(
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-5 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 471  
**Purpose:** Triggered before an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered',array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.before\_auto\_responder\_message[​](#chatbefore_auto_responder_message-3 "Direct link to chat.before_auto_responder_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 483  
**Purpose:** Triggered before an auto-responder message is sent.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_message',array('chat' => & $chat, 'responder' => & $responder));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-6 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 526  
**Purpose:** Triggered when an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-4 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 600  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started', array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.chat\_started[​](#chatchat_started-5 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/submitonline.php>  
**Line:** 606  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started', array('chat' => & $chat, 'msg' => $messageInitial));
```

### chat.chatcheckoperatormessage[​](#chatchatcheckoperatormessage-2 "Direct link to chat.chatcheckoperatormessage")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/checkinvitation.php>  
**Line:** 43  
**Purpose:** Triggered when checking operator message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatcheckoperatormessage', array('proactive_active' => & $proactiveInviteActive));
```

### widgetrestapi.uisettings[​](#widgetrestapiuisettings "Direct link to widgetrestapi.uisettings")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/uisettings.php>  
**Line:** 47  
**Purpose:** Triggered during widget UI settings retrieval.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.uisettings', array('output' => & $outputResponse, 'chat' => $chat));
```

### widgetrestapi.screensharesettings[​](#widgetrestapiscreensharesettings "Direct link to widgetrestapi.screensharesettings")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/screensharesettings.php>  
**Line:** 22  
**Purpose:** Triggered during screenshare settings retrieval.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.screensharesettings', array('output' => & $settings));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-10 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/fetchmessages.php>  
**Line:** 67  
**Purpose:** Triggered when validating chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

### chat.syncuser.operator\_typing[​](#chatsyncuseroperator_typing-2 "Direct link to chat.syncuser.operator_typing")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/fetchmessages.php>  
**Line:** 140  
**Purpose:** Triggered when operator is typing.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncuser.operator_typing',array('chat' => & $chat));
```

### chat.messages\_read[​](#chatmessages_read "Direct link to chat.messages_read")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/fetchmessages.php>  
**Line:** 200  
**Purpose:** Triggered when messages are read.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.messages_read',array('chat' => & $chat));
```

### chat.messages\_delivered[​](#chatmessages_delivered "Direct link to chat.messages_delivered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/fetchmessages.php>  
**Line:** 215  
**Purpose:** Triggered when messages are delivered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.messages_delivered',array('chat' => & $chat));
```

### chat.syncuser[​](#chatsyncuser-1 "Direct link to chat.syncuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/fetchmessages.php>  
**Line:** 254  
**Purpose:** Triggered during user synchronization.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.syncuser',array('chat' => & $chat, 'response' => & $responseArray));
```

### widgetrestapi.onlinesettings[​](#widgetrestapionlinesettings "Direct link to widgetrestapi.onlinesettings")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/onlinesettings.php>  
**Line:** 1145  
**Purpose:** Triggered during online settings retrieval.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.onlinesettings', array('ou_vid' => $Params['user_parameters_unordered']['vid'], 'output' => & $outputResponse));
```

### chat.chatwidgetchat[​](#chatchatwidgetchat-1 "Direct link to chat.chatwidgetchat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/initchat.php>  
**Line:** 78  
**Purpose:** Triggered during chat widget initialization.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatwidgetchat',array('params' => & $Params, 'chat' => & $chat));
```

### widgetrestapi.initchat[​](#widgetrestapiinitchat "Direct link to widgetrestapi.initchat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/initchat.php>  
**Line:** 376  
**Purpose:** Triggered during init chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.initchat', array('output' => & $outputResponse, 'chat' => $chat));
```

### chat.checkchatstatus[​](#chatcheckchatstatus-1 "Direct link to chat.checkchatstatus")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/checkchatstatus.php>  
**Line:** 185  
**Purpose:** Triggered when checking chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.checkchatstatus',array('chat' => & $chat, 'response' => & $responseArray));
```

### chat.before\_send[​](#chatbefore_send-1 "Direct link to chat.before_send")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/sendmailsettings.php>  
**Line:** 18  
**Purpose:** Triggered before sending mail.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_send', array('chat' => & $chat, 'errors' => & $Errors));
```

### widgetrestapi.settings\_department\_verify[​](#widgetrestapisettings_department_verify "Direct link to widgetrestapi.settings_department_verify")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/settings.php>  
**Line:** 50  
**Purpose:** Triggered during department settings verification.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.settings_department_verify', array('department' => & $departmentUpdated));
```

### widgetrestapi.settings\_department\_after\_verify[​](#widgetrestapisettings_department_after_verify "Direct link to widgetrestapi.settings_department_after_verify")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/settings.php>  
**Line:** 62  
**Purpose:** Triggered after department settings verification.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.settings_department_after_verify', array('department' => & $department, 'output' => & $outputResponse));
```

### chat.chatcheckoperatormessage[​](#chatchatcheckoperatormessage-3 "Direct link to chat.chatcheckoperatormessage")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/settings.php>  
**Line:** 113  
**Purpose:** Triggered when checking operator message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chatcheckoperatormessage', array('proactive_active' => & $proactiveInviteActive));
```

### widgetrestapi.analytics\_events[​](#widgetrestapianalytics_events "Direct link to widgetrestapi.analytics_events")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/settings.php>  
**Line:** 586  
**Purpose:** Triggered during analytics events retrieval.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.analytics_events', array('events' => & $optionEvents));
```

### widgetrestapi.settings[​](#widgetrestapisettings "Direct link to widgetrestapi.settings")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/settings.php>  
**Line:** 653  
**Purpose:** Triggered during widget settings retrieval.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.settings', array('output' => & $outputResponse));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-5 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/chatcheckstatus.php>  
**Line:** 62  
**Purpose:** Triggered when chat data has changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat',array('chat_id' => $chatId));
```

### chat.validstatus\_chat[​](#chatvalidstatus_chat-11 "Direct link to chat.validstatus_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhwidgetrestapi/setsiteaccess.php>  
**Line:** 15  
**Purpose:** Triggered when validating chat status.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validstatus_chat',array('chat' => & $chat, 'valid_statuses' => & $validStatuses));
```

## Audit Module[​](#audit-module "Direct link to Audit Module")

### chat.reload\_backoffice[​](#chatreload_backoffice "Direct link to chat.reload_backoffice")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhaudit/configuration.php>  
**Line:** 21  
**Purpose:** Triggered when back office is reloaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.reload_backoffice',array());
```

### audit.login\_history[​](#auditlogin_history "Direct link to audit.login_history")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhaudit/loginhistory.php>  
**Line:** 46  
**Purpose:** Triggered during login history audit.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('audit.login_history',array('result' => & $Result));
```

## Chat settings Module[​](#chat-settings-module "Direct link to Chat settings Module")

### chat.startchatformsettings\_path[​](#chatstartchatformsettings_path "Direct link to chat.startchatformsettings_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/modules/lhchatsettings/startchatformsettings.php>  
**Line:** 55  
**Purpose:** Triggered during start chat form settings path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.startchatformsettings_path',array('result' => & $Result));
```

## Abstract Module[​](#abstract-module-2 "Direct link to Abstract Module")

### lhabstract.erlhabstractmodelwidgettheme.posdefinition[​](#lhabstracterlhabstractmodelwidgetthemeposdefinition "Direct link to lhabstract.erlhabstractmodelwidgettheme.posdefinition")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/pos/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 26  
**Purpose:** Triggered during widget theme position definition.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('lhabstract.erlhabstractmodelwidgettheme.posdefinition',array('def' => & $def));
```

## Form Module[​](#form-module-1 "Direct link to Form Module")

### form.on\_form\_render[​](#formon_form_render "Direct link to form.on_form_render")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 58  
**Purpose:** Triggered when a form is rendered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.on_form_render',array('form' => & $form, 'errors_internal' => self::$errorsInternal, 'errors' => & self::$errors));
```

### file.uploadfile.file\_path[​](#fileuploadfilefile_path-2 "Direct link to file.uploadfile.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 810  
**Purpose:** Triggered when determining the file path for an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_path', array('path' => & $path, 'storage_id' => $chat->id));
```

### file.uploadfile.file\_store[​](#fileuploadfilefile_store-2 "Direct link to file.uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 841  
**Purpose:** Triggered when storing an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### form.fill.file\_path[​](#formfillfile_path "Direct link to form.fill.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 911  
**Purpose:** Triggered when determining the file path for a filled form.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.fill.file_path',array('path' => & $dir, 'storage_id' => $formCollected->id));
```

### form.fill.store\_file[​](#formfillstore_file "Direct link to form.fill.store_file")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 920  
**Purpose:** Triggered when storing a file for a filled form.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.fill.store_file',array('file_params' => & $params));
```

### form.filled[​](#formfilled "Direct link to form.filled")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhform/lhformrenderer.php>  
**Line:** 928  
**Purpose:** Triggered when a form is filled.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.filled',array('form' => & $formCollected));
```

## Core tpl Module[​](#core-tpl-module "Direct link to Core tpl Module")

### tpl.new[​](#tplnew "Direct link to tpl.new")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtpl/tpl.php>  
**Line:** 104  
**Purpose:** Triggered when a new template object is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('tpl.new', array('tpl' => & $this));
```

## Mail conversation statistic Module[​](#mail-conversation-statistic-module "Direct link to Mail conversation statistic Module")

### mail.statistic.messagesperinterval[​](#mailstatisticmessagesperinterval "Direct link to mail.statistic.messagesperinterval")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 7  
**Purpose:** Triggered when calculating messages per interval statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.messagesperinterval',array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.messagesperuser[​](#mailstatisticmessagesperuser "Direct link to mail.statistic.messagesperuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 114  
**Purpose:** Triggered when calculating messages per user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.messagesperuser',array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.messagesperdep[​](#mailstatisticmessagesperdep "Direct link to mail.statistic.messagesperdep")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 140  
**Purpose:** Triggered when calculating messages per department statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.messagesperdep',array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.avginteractionperdep[​](#mailstatisticavginteractionperdep "Direct link to mail.statistic.avginteractionperdep")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 166  
**Purpose:** Triggered when calculating average interaction time per department statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.avginteractionperdep',array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.avginteractionperuser[​](#mailstatisticavginteractionperuser "Direct link to mail.statistic.avginteractionperuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 195  
**Purpose:** Triggered when calculating average interaction time per user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.avginteractionperuser',array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.messagesperhour[​](#mailstatisticmessagesperhour "Direct link to mail.statistic.messagesperhour")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 224  
**Purpose:** Triggered when calculating messages per hour statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.messagesperhour', array('params_execution' => $params_execution, 'filter' => $filter));
```

### mail.statistic.attrbyperinterval[​](#mailstatisticattrbyperinterval "Direct link to mail.statistic.attrbyperinterval")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 345  
**Purpose:** Triggered when calculating attribute by per interval statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.statistic.attrbyperinterval', array('params_execution' => $filterParams, 'filter' => $filter));
```

### mail\_statistic.export\_csv[​](#mail_statisticexport_csv "Direct link to mail_statistic.export_csv")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvstatistic.php>  
**Line:** 587  
**Purpose:** Triggered during mail statistic CSV export.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail_statistic.export_csv',array('fp' => $fp, 'type' => $type, 'data' => $statistic));
```

## Mail conversation parser Module[​](#mail-conversation-parser-module "Direct link to Mail conversation parser Module")

### mail.conversation\_started[​](#mailconversation_started "Direct link to mail.conversation_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvparser.php>  
**Line:** 799  
**Purpose:** Triggered when a mail conversation is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation_started',array(
```

### mail.conversation\_started\_passive[​](#mailconversation_started_passive "Direct link to mail.conversation_started_passive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvparser.php>  
**Line:** 804  
**Purpose:** Triggered when a mail conversation is started passively.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation_started_passive',array(
```

### mail.conversation\_reply[​](#mailconversation_reply "Direct link to mail.conversation_reply")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvparser.php>  
**Line:** 944  
**Purpose:** Triggered when a mail conversation is replied to.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation_reply',array(
```

### mail.conversation\_reply\_passive[​](#mailconversation_reply_passive "Direct link to mail.conversation_reply_passive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvparser.php>  
**Line:** 949  
**Purpose:** Triggered when a mail conversation is replied to passively.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation_reply_passive',array(
```

### mail.conversation\_started[​](#mailconversation_started-1 "Direct link to mail.conversation_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhmailconv/lhmailconvparser.php>  
**Line:** 1051  
**Purpose:** Triggered when a mail conversation is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation_started',array(
```

## Chat command Module[​](#chat-command-module "Direct link to Chat command Module")

### chat.customcommand[​](#chatcustomcommand "Direct link to chat.customcommand")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 171  
**Purpose:** Triggered when a custom command is executed.

```
$commandResponse = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.customcommand', array('command' => $commandData['command'], 'argument' => $commandData['argument'], 'params' => $params));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-19 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 248  
**Purpose:** Triggered before a message from admin is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $params['chat']));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-20 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 283  
**Purpose:** Triggered before a message from admin is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg, 'chat' => & $params['chat']));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-21 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 330  
**Purpose:** Triggered before a message from admin is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved',array('msg' => & $msg, 'chat' => & $params['chat']));
```

### chat.chat\_transfered\_force[​](#chatchat_transfered_force "Direct link to chat.chat_transfered_force")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 455  
**Purpose:** Triggered when a chat is transferred forcefully.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_transfered_force', array('chat' => & $params['chat']));
```

### chat.delete[​](#chatdelete-5 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatcommand.php>  
**Line:** 699  
**Purpose:** Triggered before chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete', array(
```

## Chat Mail[​](#chat-mail "Direct link to Chat Mail")

### chatmail.setup\_smtp[​](#chatmailsetup_smtp "Direct link to chatmail.setup_smtp")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatmail.php>  
**Line:** 8  
**Purpose:** Triggered when setting up SMTP for chat mail.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatmail.setup_smtp', array(
```

## Chat Helper[​](#chat-helper "Direct link to Chat Helper")

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-22 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchathelper.php>  
**Line:** 185  
**Purpose:** Triggered before an admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $params['chat'], 'user_id' => $user_id));
```

### chat.before\_msg\_admin\_saved (2)[​](#chatbefore_msg_admin_saved-2-1 "Direct link to chat.before_msg_admin_saved (2)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchathelper.php>  
**Line:** 270  
**Purpose:** Triggered before an admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.before\_msg\_admin\_saved (3)[​](#chatbefore_msg_admin_saved-3-1 "Direct link to chat.before_msg_admin_saved (3)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchathelper.php>  
**Line:** 293  
**Purpose:** Triggered before an admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

### chat.before\_msg\_admin\_saved (4)[​](#chatbefore_msg_admin_saved-4-1 "Direct link to chat.before_msg_admin_saved (4)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchathelper.php>  
**Line:** 327  
**Purpose:** Triggered before an admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $userData->id));
```

## Chat View Resque[​](#chat-view-resque "Direct link to Chat View Resque")

### views.update\_vew[​](#viewsupdate_vew "Direct link to views.update_vew")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatviewresque.php>  
**Line:** 97  
**Purpose:** Triggered when updating a view.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('views.update_vew', array(
```

## Chat Webhook Continous[​](#chat-webhook-continous "Direct link to Chat Webhook Continous")

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-4 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookcontinous.php>  
**Line:** 275  
**Purpose:** Triggered when a web message is added by an admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

## Chat Statistic[​](#chat-statistic "Direct link to Chat Statistic")

### statistic.gettoptodaysoperators[​](#statisticgettoptodaysoperators "Direct link to statistic.gettoptodaysoperators")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 10  
**Purpose:** Triggered when getting top today's operators statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.gettoptodaysoperators',array('limit' => $limit, 'offset' => $offset, 'filter' => $filter));
```

### statistic.getnumberofchatspermonth[​](#statisticgetnumberofchatspermonth "Direct link to statistic.getnumberofchatspermonth")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 118  
**Purpose:** Triggered when getting the number of chats per month statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatspermonth',array('params_execution' => $paramsExecution, 'filter' => $filter));
```

### statistic.getnumberofchatsperweekday[​](#statisticgetnumberofchatsperweekday "Direct link to statistic.getnumberofchatsperweekday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 256  
**Purpose:** Triggered when getting the number of chats per weekday statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatsperweekday',array('params_execution' => $paramsExecution, 'filter' => $filter));
```

### statistic.getnumberofchatsperweek[​](#statisticgetnumberofchatsperweek "Direct link to statistic.getnumberofchatsperweek")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 366  
**Purpose:** Triggered when getting the number of chats per week statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatsperweek',array('params_execution' => $paramsExecution, 'filter' => $filter));
```

### statistic.getnumberofchatswaittimeperweekday[​](#statisticgetnumberofchatswaittimeperweekday "Direct link to statistic.getnumberofchatswaittimeperweekday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 512  
**Purpose:** Triggered when getting the number of chats wait time per weekday statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatswaittimeperweekday', array('filter' => $filter));
```

### statistic.getnumberofchatswaittimeperweek[​](#statisticgetnumberofchatswaittimeperweek "Direct link to statistic.getnumberofchatswaittimeperweek")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 539  
**Purpose:** Triggered when getting the number of chats wait time per week statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatswaittimeperweek', array('filter' => $filter));
```

### statistic.getlast24hstatistic[​](#statisticgetlast24hstatistic "Direct link to statistic.getlast24hstatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 599  
**Purpose:** Triggered when getting last 24 hours statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getlast24hstatistic',array('filter' => $filter));
```

### statistic.getnumberofchatsperday[​](#statisticgetnumberofchatsperday "Direct link to statistic.getnumberofchatsperday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 639  
**Purpose:** Triggered when getting the number of chats per day statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatsperday', array('params_execution' => $paramsExecution, 'filter' => $filter));
```

### statistic.getnumberofchatswaittime[​](#statisticgetnumberofchatswaittime "Direct link to statistic.getnumberofchatswaittime")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 763  
**Purpose:** Triggered when getting the number of chats wait time statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatswaittime',array('filter' => $filter));
```

### statistic.getnumberofchatswaittimeperday[​](#statisticgetnumberofchatswaittimeperday "Direct link to statistic.getnumberofchatswaittimeperday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 786  
**Purpose:** Triggered when getting the number of chats wait time per day statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatswaittimeperday', array('filter' => $filter));
```

### statistic.getnumberofchatspermonthunanswered[​](#statisticgetnumberofchatspermonthunanswered "Direct link to statistic.getnumberofchatspermonthunanswered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 834  
**Purpose:** Triggered when getting the number of unanswered chats per month statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatspermonthunanswered', array('filter' => $filter));
```

### statistic.getworkloadstatistic[​](#statisticgetworkloadstatistic "Direct link to statistic.getworkloadstatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 876  
**Purpose:** Triggered when getting the workload statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getworkloadstatistic',array('filter' => $filter, 'days' => $days));
```

### statistic.getaveragechatduration[​](#statisticgetaveragechatduration "Direct link to statistic.getaveragechatduration")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 915  
**Purpose:** Triggered when getting the average chat duration statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getaveragechatduration',array('days' => $days, 'filter' => $filter));
```

### statistic.getaveragefrt[​](#statisticgetaveragefrt "Direct link to statistic.getaveragefrt")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 936  
**Purpose:** Triggered when getting the average first response time statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getaveragefrt',array('days' => $days, 'filter' => $filter));
```

### statistic.getaveragert[​](#statisticgetaveragert "Direct link to statistic.getaveragert")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 968  
**Purpose:** Triggered when getting the average resolution time statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getaveragert',array('days' => $days, 'filter' => $filter));
```

### statistic.getmaxaveragert[​](#statisticgetmaxaveragert "Direct link to statistic.getmaxaveragert")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1001  
**Purpose:** Triggered when getting the maximum average resolution time statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getmaxaveragert',array('days' => $days, 'filter' => $filter));
```

### statistic.getcannedstatistic[​](#statisticgetcannedstatistic "Direct link to statistic.getcannedstatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1033  
**Purpose:** Triggered when getting canned message statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getcannedstatistic',array('days' => $days, 'filter' => $filter));
```

### statistic.getsubjectsstatistic[​](#statisticgetsubjectsstatistic "Direct link to statistic.getsubjectsstatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1122  
**Purpose:** Triggered when getting subjects statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getsubjectsstatistic',array('days' => $days, 'filter' => & $filter));
```

### statistic.gettopchatsbycountry[​](#statisticgettopchatsbycountry "Direct link to statistic.gettopchatsbycountry")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1164  
**Purpose:** Triggered when getting top chats by country statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.gettopchatsbycountry',array('days' => $days, 'filter' => $filter));
```

### statistic.averageofchatsdialogsbyuser[​](#statisticaverageofchatsdialogsbyuser "Direct link to statistic.averageofchatsdialogsbyuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1247  
**Purpose:** Triggered when getting average of chats dialogs by user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.averageofchatsdialogsbyuser',array('days' => $days, 'filter' => $filter, 'limit' => $limit));
```

### statistic.numberofchatsdialogsbydepartment[​](#statisticnumberofchatsdialogsbydepartment "Direct link to statistic.numberofchatsdialogsbydepartment")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1288  
**Purpose:** Triggered when getting number of chats dialogs by department statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.numberofchatsdialogsbydepartment',array('days' => $days, 'filter' => $filter));
```

### statistic.numberofchatsdialogsbyuser[​](#statisticnumberofchatsdialogsbyuser "Direct link to statistic.numberofchatsdialogsbyuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1341  
**Purpose:** Triggered when getting number of chats dialogs by user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.numberofchatsdialogsbyuser',array('group_field' => $groupField, 'days' => $days, 'filter' => $filter));
```

### statistic.numberofchatsdialogsbyuserparticipant[​](#statisticnumberofchatsdialogsbyuserparticipant "Direct link to statistic.numberofchatsdialogsbyuserparticipant")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1399  
**Purpose:** Triggered when getting number of chats dialogs by user participant statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.numberofchatsdialogsbyuserparticipant',array('group_field' => $groupField, 'days' => $days, 'filter' => $filter));
```

### statistic.avgwaittimeuser[​](#statisticavgwaittimeuser "Direct link to statistic.avgwaittimeuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1483  
**Purpose:** Triggered when getting average wait time user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.avgwaittimeuser',array('days' => $days, 'filter' => $filter));
```

### statistic.numberofmessagesbyuser[​](#statisticnumberofmessagesbyuser "Direct link to statistic.numberofmessagesbyuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1523  
**Purpose:** Triggered when getting number of messages by user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.numberofmessagesbyuser',array('days' => $days, 'filter' => $filter));
```

### statistic.getratingbyuser[​](#statisticgetratingbyuser "Direct link to statistic.getratingbyuser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1736  
**Purpose:** Triggered when getting rating by user statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getratingbyuser',array('days' => $days, 'filter' => $filter));
```

### statistic.getagentstatistic\_export\_columns[​](#statisticgetagentstatistic_export_columns "Direct link to statistic.getagentstatistic_export_columns")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1838  
**Purpose:** Triggered when getting agent statistic export columns.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getagentstatistic_export_columns',array('xls' => & $objPHPExcel));
```

### statistic.getagentstatistic\_export\_columns\_value[​](#statisticgetagentstatistic_export_columns_value "Direct link to statistic.getagentstatistic_export_columns_value")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 1933  
**Purpose:** Triggered when getting agent statistic export columns value.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getagentstatistic_export_columns_value',array(
```

### statistic.getagentstatisticaveragefield[​](#statisticgetagentstatisticaveragefield "Direct link to statistic.getagentstatisticaveragefield")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2020  
**Purpose:** Triggered when getting agent statistic average field.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getagentstatisticaveragefield',array('attr' => & $attrToAverage, 'attr_front' => & $attrFrontAverage));
```

### statistic.getagentstatistic[​](#statisticgetagentstatistic "Direct link to statistic.getagentstatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2192  
**Purpose:** Triggered when getting agent statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getagentstatistic',$filterExtension);
```

### statistic.getperformancestatistic[​](#statisticgetperformancestatistic "Direct link to statistic.getperformancestatistic")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2631  
**Purpose:** Triggered when getting performance statistic.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getperformancestatistic',array('ranges' => $dateRange, 'days' => $days, 'filter' => $filter, 'filter_params' => $filterParams));
```

### statistic.nickgroupingdateweekday[​](#statisticnickgroupingdateweekday "Direct link to statistic.nickgroupingdateweekday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2755  
**Purpose:** Triggered when nick grouping date weekday.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdateweekday',array('params_execution' => $filterParams, 'filter' => $filter));
```

### statistic.validgroupfields[​](#statisticvalidgroupfields "Direct link to statistic.validgroupfields")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2804  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdateweek[​](#statisticnickgroupingdateweek "Direct link to statistic.nickgroupingdateweek")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2829  
**Purpose:** Triggered when nick grouping date week.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdateweek',array('params_execution' => $filterParams, 'filter' => $filter));
```

### statistic.validgroupfields (2)[​](#statisticvalidgroupfields-2 "Direct link to statistic.validgroupfields (2)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2899  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdatenickweekday[​](#statisticnickgroupingdatenickweekday "Direct link to statistic.nickgroupingdatenickweekday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2943  
**Purpose:** Triggered when nick grouping date nick weekday.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdatenickweekday',array('params_execution' => $filterParams, 'filter' => $filter));
```

### statistic.validgroupfields (3)[​](#statisticvalidgroupfields-3 "Direct link to statistic.validgroupfields (3)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 2992  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdatenickweek[​](#statisticnickgroupingdatenickweek "Direct link to statistic.nickgroupingdatenickweek")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3069  
**Purpose:** Triggered when nick grouping date nick week.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdatenickweek',array('params_execution' => $filterParams, 'filter' => $filter));
```

### statistic.validgroupfields (4)[​](#statisticvalidgroupfields-4 "Direct link to statistic.validgroupfields (4)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3139  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdateday[​](#statisticnickgroupingdateday "Direct link to statistic.nickgroupingdateday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3233  
**Purpose:** Triggered when nick grouping date day.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdateday', array('filter' => $filter, 'params_execution' => $filterParams));
```

### statistic.validgroupfields (5)[​](#statisticvalidgroupfields-5 "Direct link to statistic.validgroupfields (5)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3299  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdatenickday[​](#statisticnickgroupingdatenickday "Direct link to statistic.nickgroupingdatenickday")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3321  
**Purpose:** Triggered when nick grouping date nick day.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdatenickday', array('filter' => $filter, 'params_execution' => $filterParams));
```

### statistic.validgroupfields (6)[​](#statisticvalidgroupfields-6 "Direct link to statistic.validgroupfields (6)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3387  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdate[​](#statisticnickgroupingdate "Direct link to statistic.nickgroupingdate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3459  
**Purpose:** Triggered when nick grouping date.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdate', array('filter' => $filter, 'params_execution' => $filterParams));
```

### statistic.validgroupfields (7)[​](#statisticvalidgroupfields-7 "Direct link to statistic.validgroupfields (7)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3514  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.nickgroupingdatenick[​](#statisticnickgroupingdatenick "Direct link to statistic.nickgroupingdatenick")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3828  
**Purpose:** Triggered when nick grouping date nick.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.nickgroupingdatenick', array('filter' => $filter, 'params_execution' => $filterParams));
```

### statistic.validgroupfields (8)[​](#statisticvalidgroupfields-8 "Direct link to statistic.validgroupfields (8)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 3893  
**Purpose:** Triggered to validate group fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.validgroupfields', array('type' => 'sql', 'fields' => & $validGroupFields));
```

### statistic.getnumberofchatsperchannel[​](#statisticgetnumberofchatsperchannel "Direct link to statistic.getnumberofchatsperchannel")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 4266  
**Purpose:** Triggered when getting number of chats per channel.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.getnumberofchatsperchannel',array('params_execution' => $params, 'filter' => $filter));
```

### statistic.export\_csv[​](#statisticexport_csv "Direct link to statistic.export_csv")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatstatistic.php>  
**Line:** 4758  
**Purpose:** Triggered when statistic is exported as CSV.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('statistic.export_csv',array('fp' => $fp, 'type' => $type, 'data' => $statistic));
```

### chat.validate\_canned\_msg\_user\_departments[​](#chatvalidate_canned_msg_user_departments "Direct link to chat.validate_canned_msg_user_departments")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatadminvalidatorhelper.php>  
**Line:** 434  
**Purpose:** Triggered to validate canned message user departments.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_canned_msg_user_departments',array('canned_msg' => & $cannedMessage, 'errors' => & $Errors));
```

### widgetrestapi.analytics\_events[​](#widgetrestapianalytics_events-1 "Direct link to widgetrestapi.analytics_events")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatadminvalidatorhelper.php>  
**Line:** 1678  
**Purpose:** Triggered for widget rest API analytics events.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('widgetrestapi.analytics_events', array('events' => & $optionsEvents));
```

### subject.default\_filter\_mail[​](#subjectdefault_filter_mail "Direct link to subject.default_filter_mail")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 215  
**Purpose:** Triggered for subject default filter mail.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('subject.default_filter_mail', array('filter' => & $filterString, 'subject_id' => & $subjectIds));
```

## Chat Module[​](#chat-module-1 "Direct link to Chat Module")

### subject.default\_filter[​](#subjectdefault_filter "Direct link to subject.default_filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 293  
**Purpose:** Triggered when applying default filters to subjects.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('subject.default_filter', array('filter' => & $filterString, 'subject_id' => & $subjectIds));
```

### chat.close[​](#chatclose "Direct link to chat.close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 1725  
**Purpose:** Triggered when a chat is closed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.close',array('chat' => & $chat, 'user_data' => $operator));
```

### chat.update\_active\_chats[​](#chatupdate_active_chats "Direct link to chat.update_active_chats")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 2199  
**Purpose:** Triggered when updating active chats.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.update_active_chats',array('user_id' => $user_id));
```

### chat.update\_active\_chats[​](#chatupdate_active_chats-1 "Direct link to chat.update_active_chats")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 2222  
**Purpose:** Triggered when updating active chats.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.update_active_chats',array('user_id' => $user_id));
```

### chat.extract\_department[​](#chatextract_department "Direct link to chat.extract_department")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchat.php>  
**Line:** 2561  
**Purpose:** Triggered when extracting a department.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.extract_department', array('departments' => $departments));
```

### chat.messages\_added\_passive[​](#chatmessages_added_passive-1 "Direct link to chat.messages_added_passive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookresque.php>  
**Line:** 118  
**Purpose:** Triggered when messages are added passively.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.messages_added_passive', array(
```

### chat.list\_export\_columns[​](#chatlist_export_columns "Direct link to chat.list_export_columns")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatexport.php>  
**Line:** 424  
**Purpose:** Triggered when listing export columns.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_export_columns',array('items' => & $chatArray));
```

### chat.list\_export\_item\_data[​](#chatlist_export_item_data "Direct link to chat.list_export_item_data")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatexport.php>  
**Line:** 641  
**Purpose:** Triggered when listing export item data.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.list_export_item_data',array('item' => & $itemData, 'chat' => $item));
```

### chat.validate\_department[​](#chatvalidate_department-1 "Direct link to chat.validate_department")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 493  
**Purpose:** Triggered when validating a department.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_department', array('input_form' => $inputForm));
```

### chat.validate\_department[​](#chatvalidate_department-2 "Direct link to chat.validate_department")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 543  
**Purpose:** Triggered when validating a department.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_department', array('input_form' => $inputForm));
```

### chat.validate\_start\_chat[​](#chatvalidate_start_chat "Direct link to chat.validate_start_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 951  
**Purpose:** Triggered when validating a start chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_start_chat',array('errors' => & $Errors, 'input_form' => & $inputForm, 'start_data_fields' => & $start_data_fields, 'chat' => & $chat,'additional_params' => & $additionalParams));
```

### onlineuser.update\_js\_vars[​](#onlineuserupdate_js_vars "Direct link to onlineuser.update_js_vars")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 1090  
**Purpose:** Triggered when updating online user JS variables.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.update_js_vars', array('username_changed' => ($usernamePrevious != $usernamePresent), 'data_changed' => $hashChanged, 'ou' => & $visitor));
```

### chat.modified[​](#chatmodified-3 "Direct link to chat.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 1333  
**Purpose:** Triggered when a chat is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.modified', array('chat' => & $chat, 'params' => array()));
```

### chat.modified[​](#chatmodified-4 "Direct link to chat.modified")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 1432  
**Purpose:** Triggered when a chat is modified.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.modified', array('chat' => & $chat, 'params' => array()));
```

### file.uploadfile.file\_path[​](#fileuploadfilefile_path-3 "Direct link to file.uploadfile.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2062  
**Purpose:** Triggered when defining the file path for an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_path', array('path' => & $path, 'storage_id' => $params['chat']->id));
```

### file.uploadfile.file\_store[​](#fileuploadfilefile_store-3 "Direct link to file.uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2092  
**Purpose:** Triggered when storing an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_store', array('chat_file' => $upload_handler->uploadedFile));
```

### chat.genericbot\_set\_bot[​](#chatgenericbot_set_bot "Direct link to chat.genericbot_set_bot")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2113  
**Purpose:** Triggered when setting a generic bot for a chat.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_set_bot', array(
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-6 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2472  
**Purpose:** Triggered before an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered',array('chat' => & $chat, 'errors' => & $beforeAutoResponderErrors));
```

### chat.before\_auto\_responder\_message[​](#chatbefore_auto_responder_message-4 "Direct link to chat.before_auto_responder_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2484  
**Purpose:** Triggered before an auto-responder message is sent.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_message',array('chat' => & $chat, 'responder' => & $responder));
```

### chat.auto\_responder\_triggered[​](#chatauto_responder_triggered-7 "Direct link to chat.auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2502  
**Purpose:** Triggered when an auto-responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_responder_triggered', array('chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-6 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatvalidator.php>  
**Line:** 2520  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started',array('chat' => & $chat));
```

### chat.message\_updated[​](#chatmessage_updated-1 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 180  
**Purpose:** Triggered when a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msgReplyToAllItem, 'chat' => & $chat));
```

### chat.message\_updated[​](#chatmessage_updated-2 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 193  
**Purpose:** Triggered when a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msgReplyTo, 'chat' => & $chat, 'reason' => 'delivery_status_change'));
```

### chat.msg\_removed[​](#chatmsg_removed-1 "Direct link to chat.msg_removed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 200  
**Purpose:** Triggered when a message is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.msg_removed', array('msg' => $msgReplyTo, 'chat' => $chat));
```

### chat.message\_updated[​](#chatmessage_updated-3 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 212  
**Purpose:** Triggered when a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msgReplyTo, 'chat' => & $chat, 'reason' => 'content_edited'));
```

### chat.message\_updated[​](#chatmessage_updated-4 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 242  
**Purpose:** Triggered when a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msgReplyTo, 'chat' => & $chat,'reason' => 'emoji_add'));
```

### chat.message\_updated[​](#chatmessage_updated-5 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 277  
**Purpose:** Triggered when a message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $msgReplyTo, 'chat' => & $chat, 'reason' => 'emoji_remove'));
```

### chat.webhook\_incoming\_chat\_continue[​](#chatwebhook_incoming_chat_continue "Direct link to chat.webhook_incoming_chat_continue")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1133  
**Purpose:** Triggered when continuing an incoming chat via webhook.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.webhook_incoming_chat_continue', array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-5 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1470  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-6 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1545  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### chat.unread\_chat[​](#chatunread_chat-8 "Direct link to chat.unread_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1561  
**Purpose:** Triggered when a chat is marked as unread.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat', array(
```

### chat.messages\_added\_passive[​](#chatmessages_added_passive-2 "Direct link to chat.messages_added_passive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1571  
**Purpose:** Triggered when messages are added passively.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.messages_added_passive', array(
```

### chat.nodjshelper\_notify\_delay[​](#chatnodjshelper_notify_delay "Direct link to chat.nodjshelper_notify_delay")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1578  
**Purpose:** Triggered when a notification delay occurs with NodeJS helper.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.nodjshelper_notify_delay', array(
```

### chat.restart\_chat[​](#chatrestart_chat "Direct link to chat.restart_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1586  
**Purpose:** Triggered when a chat is restarted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.restart_chat',array(
```

### chat.webhook\_incoming\_chat\_before\_save[​](#chatwebhook_incoming_chat_before_save "Direct link to chat.webhook_incoming_chat_before_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1685  
**Purpose:** Triggered before saving an incoming chat via webhook.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.webhook_incoming_chat_before_save', array(
```

### chat.webhook\_incoming\_chat\_started[​](#chatwebhook_incoming_chat_started "Direct link to chat.webhook_incoming_chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1693  
**Purpose:** Triggered when an incoming chat is started via webhook.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.webhook_incoming_chat_started', array(
```

### chat.webhook\_incoming\_chat\_before\_update\_new[​](#chatwebhook_incoming_chat_before_update_new "Direct link to chat.webhook_incoming_chat_before_update_new")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 1903  
**Purpose:** Triggered before updating a new incoming chat via webhook.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.webhook_incoming_chat_before_update_new', array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-7 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2025  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-8 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2122  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### chat.chat\_started[​](#chatchat_started-7 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2131  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started', array(
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-9 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2242  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array(
```

### file.uploadfile.file\_path[​](#fileuploadfilefile_path-4 "Direct link to file.uploadfile.file_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2311  
**Purpose:** Triggered when defining the file path for an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_path', array('path' => & $path, 'storage_id' => $chat->id));
```

### file.uploadfile.file\_store[​](#fileuploadfilefile_store-4 "Direct link to file.uploadfile.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2350  
**Purpose:** Triggered when storing an uploaded file.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.uploadfile.file_store', array('chat_file' => $fileUpload));
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-10 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2611  
**Purpose:** Triggered when a message is added by an administrator via web interface.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array('wh_worker' => $worker, 'msg' => & $msg, 'chat' => & $chat));
```

### chat.chat\_started[​](#chatchat_started-8 "Direct link to chat.chat_started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatwebhookincomming.php>  
**Line:** 2617  
**Purpose:** Triggered when a chat is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_started', array(
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 30  
**Purpose:** Triggered before an auto-responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true,'msg' => & $msg, 'chat' => & $chat));
```

### chat.data\_changed\_assigned\_department[​](#chatdata_changed_assigned_department "Direct link to chat.data_changed_assigned_department")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 102  
**Purpose:** Triggered when the assigned department data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_assigned_department',array('chat' => & $chat, 'from_dep' => $chat->department, 'to_dep' => $departmentTransfer));
```

### chat.unread\_chat\_workflow[​](#chatunread_chat_workflow "Direct link to chat.unread_chat_workflow")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 142  
**Purpose:** Triggered during unread chat workflow.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.unread_chat_workflow',array('chat' => & $chat));
```

### xml.before\_send\_xmp\_message[​](#xmlbefore_send_xmp_message "Direct link to xml.before_send_xmp_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 163  
**Purpose:** Triggered before sending an XMP message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xml.before_send_xmp_message', array('chat' => & $chat, 'errors' => & $errors));
```

### chat.chat\_unread\_message[​](#chatchat_unread_message "Direct link to chat.chat_unread_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 170  
**Purpose:** Triggered when a chat has an unread message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_unread_message',array('chat' => & $chat));
```

### xml.before\_send\_xmp\_message[​](#xmlbefore_send_xmp_message-1 "Direct link to xml.before_send_xmp_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 192  
**Purpose:** Triggered before sending an XMP message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xml.before_send_xmp_message', array('chat' => & $chat, 'errors' => & $errors));
```

### chat.chat\_accepted[​](#chatchat_accepted "Direct link to chat.chat_accepted")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 199  
**Purpose:** Triggered when a chat is accepted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.chat_accepted',array('chat' => & $chat));
```

### xml.before\_send\_xmp\_message[​](#xmlbefore_send_xmp_message-2 "Direct link to xml.before_send_xmp_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 214  
**Purpose:** Triggered before sending an XMP message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xml.before_send_xmp_message', array('chat' => & $chat, 'errors' => & $errors));
```

### chat.new\_chat[​](#chatnew_chat "Direct link to chat.new_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 221  
**Purpose:** Triggered when a new chat is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.new_chat',array('chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 284  
**Purpose:** Triggered during chat auto close process.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

## Chat Module[​](#chat-module-2 "Direct link to Chat Module")

### chat.auto\_close[​](#chatauto_close-1 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 332  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close-2 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 378  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close-3 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 429  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close-4 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 482  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close-5 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 539  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.auto\_close[​](#chatauto_close-6 "Direct link to chat.auto_close")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 641  
**Purpose:** Triggered when chat is closed automatically.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.auto_close',array('msg' => & $msg,'chat' => & $chat));
```

### chat.delete[​](#chatdelete-6 "Direct link to chat.delete")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 672  
**Purpose:** Triggered before chat is deleted.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.delete', array(
```

### chat.workflow.autoassign\_permit[​](#chatworkflowautoassign_permit "Direct link to chat.workflow.autoassign_permit")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 832  
**Purpose:** Triggered to check permissions for auto assign.

```
$statusWorkflowPermit = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.autoassign_permit', array(
```

### chat.workflow.autoassign[​](#chatworkflowautoassign "Direct link to chat.workflow.autoassign")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 867  
**Purpose:** Triggered during auto assign process.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.autoassign', array(
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-4 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1030  
**Purpose:** Triggered before user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $chat->user_id));
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-5 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1039  
**Purpose:** Triggered before user message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved', array('msg' => & $msg, 'chat' => & $chat, 'user_id' => $user_id));
```

### chat.data\_changed\_auto\_assign[​](#chatdata_changed_auto_assign "Direct link to chat.data_changed_auto_assign")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1070  
**Purpose:** Triggered when chat data is changed during auto assign.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_auto_assign',array('chat' => & $chat));
```

### chat.workflow.presend\_canned\_msg[​](#chatworkflowpresend_canned_msg "Direct link to chat.workflow.presend_canned_msg")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1092  
**Purpose:** Triggered before canned message is send.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.presend_canned_msg', array(
```

### chat.workflow.canned\_message\_replace[​](#chatworkflowcanned_message_replace "Direct link to chat.workflow.canned_message_replace")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1138  
**Purpose:** Triggered during canned message replace.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.canned_message_replace',array('items' => & $items, 'user' => $chat->user, 'chat' => $chat, 'replace_array' => & $replaceArray));
```

### chat.workflow.canned\_message\_before\_save[​](#chatworkflowcanned_message_before_save "Direct link to chat.workflow.canned_message_before_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1213  
**Purpose:** Triggered before canned message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.canned_message_before_save',array('msg' => & $msg, 'chat' => & $chat));
```

### chat.workflow.get\_chat\_history[​](#chatworkflowget_chat_history "Direct link to chat.workflow.get_chat_history")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1264  
**Purpose:** Triggered when chat history is fetched.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.get_chat_history', array(
```

### chat.workflow.has\_previous\_messages[​](#chatworkflowhas_previous_messages "Direct link to chat.workflow.has_previous_messages")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchat/lhchatworkflow.php>  
**Line:** 1301  
**Purpose:** Triggered to check if chat has previous messages.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.has_previous_messages', $params);
```

## Group Chat Module[​](#group-chat-module-1 "Direct link to Group Chat Module")

### group\_chat.new\_group\_chat\_member[​](#group_chatnew_group_chat_member-2 "Direct link to group_chat.new_group_chat_member")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgroupchat.php>  
**Line:** 48  
**Purpose:** Triggered when new member is added to group chat.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('group_chat.new_group_chat_member', array('member' => & $newMember));
```

## User Module[​](#user-module-1 "Direct link to User Module")

### user.after\_generate\_access\_array[​](#userafter_generate_access_array "Direct link to user.after_generate_access_array")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuser.php>  
**Line:** 485  
**Purpose:** Triggered after user access array is generated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.after_generate_access_array',array('accessArray' => & $accessArray));
```

### user.edit.photo\_path[​](#usereditphoto_path "Direct link to user.edit.photo_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 107  
**Purpose:** Triggered to get user photo path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_path', array('dir' => & $dir, 'storage_id' => $userDepAlias->id));
```

### user.edit.photo\_store[​](#usereditphoto_store "Direct link to user.edit.photo_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 109  
**Purpose:** Triggered to store user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_store', array('file_post_variable' => 'alias_photo', 'dir' => & $dir, 'storage_id' => $userDepAlias->id));
```

### user.edit.photo\_resize\_150[​](#usereditphoto_resize_150 "Direct link to user.edit.photo_resize_150")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 130  
**Purpose:** Triggered to resize user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_resize_150', array('mime_type' => $file["data"]['mime_type'], 'user' => $userDepAlias));
```

### user.edit.photo\_path[​](#usereditphoto_path-1 "Direct link to user.edit.photo_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 641  
**Purpose:** Triggered to get user photo path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_path',array('dir' => & $dir,'storage_id' => $userData->id));
```

### user.edit.photo\_store[​](#usereditphoto_store-1 "Direct link to user.edit.photo_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 643  
**Purpose:** Triggered to store user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_store', array('file_post_variable' => 'UserPhoto', 'dir' => & $dir, 'storage_id' => $userData->id));
```

### user.edit.photo\_resize\_150[​](#usereditphoto_resize_150-1 "Direct link to user.edit.photo_resize_150")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 665  
**Purpose:** Triggered to resize user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_resize_150', array('mime_type' => $file["data"]['mime_type'],'user' => $userData));
```

### user.new\_user[​](#usernew_user "Direct link to user.new_user")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 706  
**Purpose:** Triggered after new user is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.new_user', array('userData' => & $userData, 'errors' => & $Errors));
```

### user.edit\_user[​](#useredit_user "Direct link to user.edit_user")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 721  
**Purpose:** Triggered after user is edited.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit_user',array('userData' => & $userData, 'errors' => & $Errors));
```

### user.account.update[​](#useraccountupdate "Direct link to user.account.update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhuser/lhuservalidator.php>  
**Line:** 1174  
**Purpose:** Triggered after user account is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.account.update', array('userData' => & $userData, 'errors' => & $Errors));
```

## Generic Bot Module[​](#generic-bot-module "Direct link to Generic Bot Module")

### chat.rest\_api\_before\_request[​](#chatrest_api_before_request "Direct link to chat.rest_api_before_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworker.php>  
**Line:** 94  
**Purpose:** Triggered before REST API request.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.rest_api_before_request', array(
```

### chat.rest\_api\_after\_request[​](#chatrest_api_after_request "Direct link to chat.rest_api_after_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworker.php>  
**Line:** 127  
**Purpose:** Triggered after REST API request.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.rest_api_after_request', array(
```

### chat.genericbot\_chat\_predefined[​](#chatgenericbot_chat_predefined "Direct link to chat.genericbot_chat_predefined")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionpredefined.php>  
**Line:** 9  
**Purpose:** Triggered to handle predefined message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_predefined', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactiontext.php>  
**Line:** 66  
**Purpose:** Triggered to handle generic bot.

```
$validationResult = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_chat\_command\_transfer[​](#chatgenericbot_chat_command_transfer-1 "Direct link to chat.genericbot_chat_command_transfer")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 50  
**Purpose:** Triggered to transfer chat by command.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_transfer', array(
```

### chat.genericbot\_chat\_command\_transfer[​](#chatgenericbot_chat_command_transfer-2 "Direct link to chat.genericbot_chat_command_transfer")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 106  
**Purpose:** Triggered to transfer chat by command.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_transfer', array(
```

### chat.genericbot\_chat\_command\_transfer[​](#chatgenericbot_chat_command_transfer-3 "Direct link to chat.genericbot_chat_command_transfer")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 151  
**Purpose:** Triggered to transfer chat by command.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_transfer', array(
```

### chat.genericbot\_chat\_command\_transfer[​](#chatgenericbot_chat_command_transfer-4 "Direct link to chat.genericbot_chat_command_transfer")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 221  
**Purpose:** Triggered to transfer chat by command.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_transfer', array(
```

### chat.message\_updated[​](#chatmessage_updated-6 "Direct link to chat.message_updated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 581  
**Purpose:** Triggered after message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.message_updated', array('msg' => & $params['msg'], 'chat' => & $chat));
```

### chat.data\_changed[​](#chatdata_changed-6 "Direct link to chat.data_changed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 758  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed', array('chat' => & $chat));
```

### chat.subject\_remove[​](#chatsubject_remove "Direct link to chat.subject_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 912  
**Purpose:** Triggered to remove subject.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.subject_remove',array( 'init' => 'bot', 'subject_id' => (int)$payloadProcessed, 'chat' => & $chat));
```

### chat.subject\_add[​](#chatsubject_add-1 "Direct link to chat.subject_add")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 926  
**Purpose:** Triggered to add subject.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.subject_add',array('init' => 'bot', 'chat' => & $chat, 'subject_id' => $subject->id));
```

### chat.genericbot\_chat\_command\_dispatch\_event[​](#chatgenericbot_chat_command_dispatch_event "Direct link to chat.genericbot_chat_command_dispatch_event")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncommand.php>  
**Line:** 944  
**Purpose:** Triggered to dispatch generic bot command event.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_command_dispatch_event', array(
```

### chat.rest\_api\_before\_request[​](#chatrest_api_before_request-1 "Direct link to chat.rest_api_before_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 94  
**Purpose:** Triggered before REST API request.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.rest_api_before_request', array(
```

### chat.rest\_api\_after\_request[​](#chatrest_api_after_request-1 "Direct link to chat.rest_api_after_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 186  
**Purpose:** Triggered after REST API request.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.rest_api_after_request', array(
```

### chat.before\_parse\_send[​](#chatbefore_parse_send "Direct link to chat.before_parse_send")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 422  
**Purpose:** Triggered before parse send.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_parse_send', array('msg' => & $msg_text));
```

### chat.before\_parse\_send\_clean[​](#chatbefore_parse_send_clean "Direct link to chat.before_parse_send_clean")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 520  
**Purpose:** Triggered before parse send clean.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_parse_send_clean', array('msg' => & $msg_text_cleaned));
```

### chat.stream\_flow[​](#chatstream_flow "Direct link to chat.stream_flow")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 1406  
**Purpose:** Triggered during stream flow.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.stream_flow', array(
```

### chat.stream\_flow[​](#chatstream_flow-1 "Direct link to chat.stream_flow")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 1423  
**Purpose:** Triggered during stream flow.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.stream_flow', array(
```

### chat.rest\_api\_make\_request[​](#chatrest_api_make_request "Direct link to chat.rest_api_make_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 1486  
**Purpose:** Triggered to make REST API request.

```
$commandResponse = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.rest_api_make_request', array(
```

### chat.genericbot\_rest\_api\_method.[method\_name][​](#chatgenericbot_rest_api_methodmethod_name "Direct link to chatgenericbot_rest_api_methodmethod_name")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionrestapi.php>  
**Line:** 1847  
**Purpose:** Triggered to execute specific REST API method.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_rest_api_method.' . trim($outputCombination['method_name']),
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-1 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionactions.php>  
**Line:** 114  
**Purpose:** Triggered to handle generic bot.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_survey\_trigger[​](#chatgenericbot_survey_trigger "Direct link to chat.genericbot_survey_trigger")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionsurvey.php>  
**Line:** 46  
**Purpose:** Triggered to trigger survey.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_survey_trigger', array(
```

### chat.genericbot\_chat\_predefined[​](#chatgenericbot_chat_predefined-1 "Direct link to chat.genericbot_chat_predefined")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionsurvey.php>  
**Line:** 59  
**Purpose:** Triggered to handle predefined message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_chat_predefined', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-2 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionprogress.php>  
**Line:** 15  
**Purpose:** Triggered to handle generic bot.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_event\_handler[​](#chatgenericbot_event_handler "Direct link to chat.genericbot_event_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionconditions.php>  
**Line:** 107  
**Purpose:** Triggered to handle generic bot event.

```
$result = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_event_handler', array_merge($params, array('render' => $attr, 'chat' => $chat)));
```

### chat.genericbot\_actionbody[​](#chatgenericbot_actionbody "Direct link to chat.genericbot_actionbody")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactiontbody.php>  
**Line:** 11  
**Purpose:** Triggered to handle generic bot action body.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_actionbody', array(
```

### chat.genericbot\_event\_type[​](#chatgenericbot_event_type "Direct link to chat.genericbot_event_type")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionevent_type.php>  
**Line:** 21  
**Purpose:** Triggered to handle generic bot event type.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_event_type', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-3 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncollectable.php>  
**Line:** 43  
**Purpose:** Triggered to handle generic bot.

```
$validationResult = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-4 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncollectable.php>  
**Line:** 72  
**Purpose:** Triggered to handle generic bot.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-5 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncollectable.php>  
**Line:** 91  
**Purpose:** Triggered to handle generic bot.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-6 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactioncollectable.php>  
**Line:** 108  
**Purpose:** Triggered to handle generic bot.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.bot.alert\_icon[​](#chatbotalert_icon "Direct link to chat.bot.alert_icon")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/actionTypes/lhgenericbotactionalert_icon.php>  
**Line:** 91  
**Purpose:** Triggered to handle bot alert icon.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.bot.alert_icon',array('chat' => & $chat));
```

### bot.validate[​](#botvalidate "Direct link to bot.validate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 139  
**Purpose:** Triggered to validate bot.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('bot.validate',array('bot' => & $bot, 'configuration_array' => & $configurationArray, 'additional_params' => $additionalParams));
```

### theme.temppath[​](#themetemppath-12 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 176  
**Purpose:** Triggered to get theme temp path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### user.edit.photo\_path[​](#usereditphoto_path-2 "Direct link to user.edit.photo_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 191  
**Purpose:** Triggered to get user photo path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_path',array('dir' => & $dir, 'storage_id' => $userData->id));
```

### user.edit.photo\_resize\_150[​](#usereditphoto_resize_150-2 "Direct link to user.edit.photo_resize_150")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 206  
**Purpose:** Triggered to resize user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_resize_150', array('mime_type' => $extensionMimetype[$mimetype], 'user' => $userData));
```

### user.edit.photo\_path[​](#usereditphoto_path-3 "Direct link to user.edit.photo_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 235  
**Purpose:** Triggered to get user photo path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_path',array('dir' => & $dir, 'storage_id' => $userData->id));
```

### user.edit.photo\_store[​](#usereditphoto_store-2 "Direct link to user.edit.photo_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 237  
**Purpose:** Triggered to store user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_store', array('file_post_variable' => 'UserPhoto', 'dir' => & $dir, 'storage_id' => $userData->id));
```

### user.edit.photo\_resize\_150[​](#usereditphoto_resize_150-3 "Direct link to user.edit.photo_resize_150")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbot.php>  
**Line:** 259  
**Purpose:** Triggered to resize user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_resize_150', array('mime_type' => $file["data"]['mime_type'],'user' => $userData));
```

### chat.genericbot\_get\_message[​](#chatgenericbot_get_message "Direct link to chat.genericbot_get_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 215  
**Purpose:** Triggered to get generic bot message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_message', array(
```

### chat.genericbot\_get\_nick[​](#chatgenericbot_get_nick "Direct link to chat.genericbot_get_nick")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 270  
**Purpose:** Triggered to get generic bot nick.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_nick', array(
```

### chat.genericbot\_get\_default\_message[​](#chatgenericbot_get_default_message "Direct link to chat.genericbot_get_default_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 310  
**Purpose:** Triggered to get generic bot default message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_default_message', array(
```

### chat.genericbot\_send\_always[​](#chatgenericbot_send_always "Direct link to chat.genericbot_send_always")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 333  
**Purpose:** Triggered to send generic bot message always.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_send_always', array(
```

### chat.genericbot\_event\_handler[​](#chatgenericbot_event_handler-1 "Direct link to chat.genericbot_event_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 595  
**Purpose:** Triggered to handle generic bot event.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_event_handler', array(
```

### chat.genericbot\_event\_handler[​](#chatgenericbot_event_handler-2 "Direct link to chat.genericbot_event_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 678  
**Purpose:** Triggered to handle generic bot event.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_event_handler', array(
```

### chat.genericbot\_get\_in\_progress[​](#chatgenericbot_get_in_progress "Direct link to chat.genericbot_get_in_progress")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1018  
**Purpose:** Triggered to get generic bot in progress message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_in_progress', array(
```

### chat.genericbot\_get\_message[​](#chatgenericbot_get_message-1 "Direct link to chat.genericbot_get_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1102  
**Purpose:** Triggered to get generic bot message.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_message', array(
```

## Generic Bot Module[​](#generic-bot-module-1 "Direct link to Generic Bot Module")

### chat.genericbot\_handler[​](#chatgenericbot_handler-7 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1154  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-8 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1236  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-9 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1285  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-10 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1328  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-11 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1389  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-12 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1446  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_handler[​](#chatgenericbot_handler-13 "Direct link to chat.genericbot_handler")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 1495  
**Purpose:** Triggered when generic bot has to handle response.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_handler', array(
```

### chat.genericbot\_get\_trigger\_click[​](#chatgenericbot_get_trigger_click "Direct link to chat.genericbot_get_trigger_click")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2012  
**Purpose:** Triggered to get trigger click.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_trigger_click', array(
```

### chat.genericbot\_get\_trigger\_click\_processed[​](#chatgenericbot_get_trigger_click_processed "Direct link to chat.genericbot_get_trigger_click_processed")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2128  
**Purpose:** Triggered after trigger click was processed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_trigger_click_processed', array(
```

### chat.genericbot\_get\_click[​](#chatgenericbot_get_click "Direct link to chat.genericbot_get_click")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2190  
**Purpose:** Triggered to get click.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_click', array(
```

### chat.genericbot\_get\_click\_async[​](#chatgenericbot_get_click_async "Direct link to chat.genericbot_get_click_async")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2298  
**Purpose:** Triggered to get click async.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.genericbot_get_click_async', array(
```

### chat.replace\_before\_message\_bot[​](#chatreplace_before_message_bot "Direct link to chat.replace_before_message_bot")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2417  
**Purpose:** Triggered before message is replaced by bot.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.replace_before_message_bot', array('msg' => & $message, 'chat' => & $params['chat']));
```

### chat.replace\_message\_bot[​](#chatreplace_message_bot "Direct link to chat.replace_message_bot")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2620  
**Purpose:** Triggered when message is replaced by bot.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.replace_message_bot', array('msg' => & $message, 'chat' => & $params['chat']));
```

### chat.condition\_replace[​](#chatcondition_replace "Direct link to chat.condition_replace")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2706  
**Purpose:** Triggered when condition is replaced.

```
$commandResponse = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.condition_replace', array(
```

### chat.before\_msg\_user\_saved[​](#chatbefore_msg_user_saved-6 "Direct link to chat.before_msg_user_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhgenericbot/lhgenericbotworkflow.php>  
**Line:** 2765  
**Purpose:** Triggered before message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_user_saved',array('msg' => & $msg, 'chat' => & $chat));
```

## Core Module[​](#core-module "Direct link to Core Module")

### chat.addmsguser[​](#chataddmsguser-3 "Direct link to chat.addmsguser")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhcore/lhfileupload.php>  
**Line:** 126  
**Purpose:** Triggered when user adds a message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.addmsguser',array('file' => $fileUpload, 'msg' => & $msg, 'chat' => & $chat));
```

### chat.core.default\_url[​](#chatcoredefault_url "Direct link to chat.core.default_url")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhcore/lhmodule.php>  
**Line:** 665  
**Purpose:** Triggered to determine default URL.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.core.default_url', array('url' => & $url));
```

## Chatbox Module[​](#chatbox-module-1 "Direct link to Chatbox Module")

### chatbox.created[​](#chatboxcreated "Direct link to chatbox.created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchatbox/lhchatbox.php>  
**Line:** 41  
**Purpose:** Triggered when chatbox is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.created', array('chatbox' => & $chatbox));
```

### chatbox.created[​](#chatboxcreated-1 "Direct link to chatbox.created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhchatbox/lhchatbox.php>  
**Line:** 84  
**Purpose:** Triggered when chatbox is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chatbox.created', array('chatbox' => & $chatbox));
```

## Theme Module[​](#theme-module-1 "Direct link to Theme Module")

### admintheme.filedir[​](#adminthemefiledir "Direct link to admintheme.filedir")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtheme/lhthemevalidator.php>  
**Line:** 95  
**Purpose:** Triggered to determine file directory.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('admintheme.filedir',array('dir' => & $dir, 'storage_id' => $clickform->id));
```

### file.file\_new\_admin.file\_store[​](#filefile_new_adminfile_store-4 "Direct link to file.file_new_admin.file_store")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtheme/lhthemevalidator.php>  
**Line:** 109  
**Purpose:** Triggered when a file is stored.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.file_new_admin.file_store', array(
```

## Survey Module[​](#survey-module-1 "Direct link to Survey Module")

### survey.validate[​](#surveyvalidate "Direct link to survey.validate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhsurvey/lhsurveyvalidator.php>  
**Line:** 96  
**Purpose:** Triggered to validate survey.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('survey.validate', array('survey' => & $survey, 'survey_item' => & $surveyItem, 'errors' => & $Errors));
```

## XMP Module[​](#xmp-module-1 "Direct link to XMP Module")

### xml.send\_xmp\_message[​](#xmlsend_xmp_message "Direct link to xml.send_xmp_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhxmp/lhxmp.php>  
**Line:** 178  
**Purpose:** Triggered to send XMP message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('xml.send_xmp_message',array('params' => & $data));
```

## Co-browse Module[​](#co-browse-module-1 "Direct link to Co-browse Module")

### cobrowse.started[​](#cobrowsestarted "Direct link to cobrowse.started")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhcobrowse/lhcobrowse.php>  
**Line:** 110  
**Purpose:** Triggered when co-browse is started.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('cobrowse.started', array('co_browse' => & $coBrowseSession));
```

## BBCode Module[​](#bbcode-module "Direct link to BBCode Module")

### chat.before\_make\_clickable[​](#chatbefore_make_clickable "Direct link to chat.before_make_clickable")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhbbcode/lhbbcode.php>  
**Line:** 1217  
**Purpose:** Triggered before making message clickable.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_make_clickable',array('msg' => & $ret, 'makeLinksClickable' => & $makeLinksClickable));
```

### chat.after\_make\_clickable[​](#chatafter_make_clickable "Direct link to chat.after_make_clickable")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhbbcode/lhbbcode.php>  
**Line:** 1349  
**Purpose:** Triggered after making message clickable.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.after_make_clickable',array('msg' => & $ret));
```

### chat.make\_plain\_message[​](#chatmake_plain_message "Direct link to chat.make_plain_message")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhbbcode/lhbbcode_cleanup.php>  
**Line:** 1061  
**Purpose:** Triggered to make plain message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.make_plain_message', array(
```

## Translate Module[​](#translate-module "Direct link to Translate Module")

### translate.after\_google\_translate[​](#translateafter_google_translate "Direct link to translate.after_google_translate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhgoogletranslate.php>  
**Line:** 106  
**Purpose:** Triggered after google translate.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.after_google_translate', array('word' => & $word, 'errors' => & $errors));
```

### translate.after\_google\_translate[​](#translateafter_google_translate-1 "Direct link to translate.after_google_translate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhgoogletranslate.php>  
**Line:** 115  
**Purpose:** Triggered after google translate.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.after_google_translate', array('word' => & $word, 'errors' => & $errors));
```

### translate.after\_bing\_translate[​](#translateafter_bing_translate "Direct link to translate.after_bing_translate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhbingtranslate.php>  
**Line:** 108  
**Purpose:** Triggered after bing translate.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.after_bing_translate', array('word' => & $word, 'errors' => & $errors));
```

### translation.get\_config[​](#translationget_config "Direct link to translation.get_config")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 106  
**Purpose:** Triggered to get translation configuration.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_config', array());
```

### translation.get\_bing\_token[​](#translationget_bing_token "Direct link to translation.get_bing_token")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 118  
**Purpose:** Triggered to get bing token.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_bing_token', array(
```

### translate.messagetranslated[​](#translatemessagetranslated "Direct link to translate.messagetranslated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 230  
**Purpose:** Triggered after message is translated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.messagetranslated', array(
```

### translate.messagetranslated[​](#translatemessagetranslated-1 "Direct link to translate.messagetranslated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 298  
**Purpose:** Triggered after message is translated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.messagetranslated', array(
```

### translate.messagetranslated[​](#translatemessagetranslated-2 "Direct link to translate.messagetranslated")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 358  
**Purpose:** Triggered after message is translated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translate.messagetranslated', array(
```

### translation.get\_config[​](#translationget_config-1 "Direct link to translation.get_config")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 425  
**Purpose:** Triggered to get translation configuration.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_config', array());
```

### translation.get\_config[​](#translationget_config-2 "Direct link to translation.get_config")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 799  
**Purpose:** Triggered to get translation configuration.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_config', array());
```

### translation.get\_bing\_token[​](#translationget_bing_token-1 "Direct link to translation.get_bing_token")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 810  
**Purpose:** Triggered to get bing token.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_bing_token', array(
```

### translation.get\_config[​](#translationget_config-3 "Direct link to translation.get_config")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 850  
**Purpose:** Triggered to get translation configuration.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_config', array());
```

### translation.get\_bing\_token[​](#translationget_bing_token-2 "Direct link to translation.get_bing_token")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhtranslate/lhtranslate.php>  
**Line:** 871  
**Purpose:** Triggered to get bing token.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('translation.get_bing_token', array(
```

## Abstract Module[​](#abstract-module-3 "Direct link to Abstract Module")

### lhabstract.erlhabstractmodelwidgettheme.fields[​](#lhabstracterlhabstractmodelwidgetthemefields "Direct link to lhabstract.erlhabstractmodelwidgettheme.fields")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhabstract/fields/erlhabstractmodelwidgettheme.php>  
**Line:** 2090  
**Purpose:** Triggered to get widget theme fields.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('lhabstract.erlhabstractmodelwidgettheme.fields',array('fields' => & $fields));
```

## Rest API Module[​](#rest-api-module-1 "Direct link to Rest API Module")

### theme.temppath[​](#themetemppath-13 "Direct link to theme.temppath")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapiuservalidator.php>  
**Line:** 377  
**Purpose:** Triggered to get theme temporary path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.temppath',array('dir' => & $dir));
```

### user.edit.photo\_path[​](#usereditphoto_path-4 "Direct link to user.edit.photo_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapiuservalidator.php>  
**Line:** 392  
**Purpose:** Triggered to get user photo path.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_path',array('dir' => & $dir, 'storage_id' => $userData->id));
```

### user.edit.photo\_resize\_150[​](#usereditphoto_resize_150-4 "Direct link to user.edit.photo_resize_150")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapiuservalidator.php>  
**Line:** 407  
**Purpose:** Triggered to resize user photo.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.edit.photo_resize_150', array('mime_type' => $extensionMimetype[$mimetype], 'user' => $userData));
```

### rest\_api.validate\_bearer\_request[​](#rest_apivalidate_bearer_request "Direct link to rest_api.validate_bearer_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapivalidator.php>  
**Line:** 113  
**Purpose:** Triggered to validate bearer request.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('rest_api.validate_bearer_request', array(
```

### rest\_api.validate\_request[​](#rest_apivalidate_request "Direct link to rest_api.validate_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapivalidator.php>  
**Line:** 140  
**Purpose:** Triggered to validate request.

```
$handler = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('rest_api.validate_request', array(
```

### restapi.chats\_filter[​](#restapichats_filter "Direct link to restapi.chats_filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapivalidator.php>  
**Line:** 628  
**Purpose:** Triggered to filter chats.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('restapi.chats_filter', array('filter' => & $filter));
```

### chat.restapi\_chats[​](#chatrestapi_chats "Direct link to chat.restapi_chats")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/core/lhrestapi/lhrestapivalidator.php>  
**Line:** 665  
**Purpose:** Triggered to list chats.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.restapi_chats',array('list' => & $chats));
```

## Brand Module[​](#brand-module "Direct link to Brand Module")

### chat.brand\_dynamic\_array[​](#chatbrand_dynamic_array "Direct link to chat.brand_dynamic_array")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/vendor_lhc/LiveHelperChat/Models/Brand/BrandMember.php>  
**Line:** 43  
**Purpose:** Triggered to fill brand dynamic array.

```
\erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.brand_dynamic_array', array('brand_member' => $this, 'dynamic_array' => & $chat_dynamic_array));
```

## Mail Archive Module[​](#mail-archive-module-1 "Direct link to Mail Archive Module")

### mail.archived[​](#mailarchived "Direct link to mail.archived")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/vendor_lhc/LiveHelperChat/Models/mailConv/Archive/Range.php>  
**Line:** 175  
**Purpose:** Triggered after mail is archived.

```
\erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.archived',array('mail' => & $item, 'archive' => $this));
```

### mail.set\_archive\_tables[​](#mailset_archive_tables "Direct link to mail.set_archive_tables")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/vendor_lhc/LiveHelperChat/Models/mailConv/Archive/Range.php>  
**Line:** 206  
**Purpose:** Triggered to set archive tables.

```
\erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.set_archive_tables', array('archive' => & $this));
```

### mail.create\_archive[​](#mailcreate_archive "Direct link to mail.create_archive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/vendor_lhc/LiveHelperChat/Models/mailConv/Archive/Range.php>  
**Line:** 370  
**Purpose:** Triggered to create archive.

```
\erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.create_archive', array('archive' => & $this));
```

## Reaction Helper[​](#reaction-helper "Direct link to Reaction Helper")

### chat.reaction\_operator[​](#chatreaction_operator "Direct link to chat.reaction_operator")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/vendor_lhc/LiveHelperChat/Helpers/Reaction.php>  
**Line:** 115  
**Purpose:** Triggered on reaction by operator.

```
\erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.reaction_operator', array(
```

## Mail conversation message model[​](#mail-conversation-message-model "Direct link to Mail conversation message model")

### mail.message.after\_save[​](#mailmessageafter_save "Direct link to mail.message.after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvmessage.php>  
**Line:** 99  
**Purpose:** Triggered after mail message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.message.after_save',array(
```

### mail.message.after\_update[​](#mailmessageafter_update "Direct link to mail.message.after_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvmessage.php>  
**Line:** 106  
**Purpose:** Triggered after mail message is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.message.after_update',array(
```

### mail.message.after\_remove[​](#mailmessageafter_remove "Direct link to mail.message.after_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvmessage.php>  
**Line:** 112  
**Purpose:** Triggered after mail message is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.message.after_remove',array(
```

## Mail conversation model[​](#mail-conversation-model "Direct link to Mail conversation model")

### mail.conversation.after\_save[​](#mailconversationafter_save "Direct link to mail.conversation.after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvconversation.php>  
**Line:** 97  
**Purpose:** Triggered after mail conversation is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation.after_save',array(
```

### mail.conversation.after\_update[​](#mailconversationafter_update "Direct link to mail.conversation.after_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvconversation.php>  
**Line:** 104  
**Purpose:** Triggered after mail conversation is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation.after_update',array(
```

### mail.conversation.after\_remove[​](#mailconversationafter_remove "Direct link to mail.conversation.after_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhmailconv/erlhcoreclassmodelmailconvconversation.php>  
**Line:** 111  
**Purpose:** Triggered after mail conversation is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('mail.conversation.after_remove',array(
```

## Canned message tag link[​](#canned-message-tag-link "Direct link to Canned message tag link")

### chat.workflow.canned\_message\_replace[​](#chatworkflowcanned_message_replace-1 "Direct link to chat.workflow.canned_message_replace")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelcannedmsgtaglink.php>  
**Line:** 180  
**Purpose:** Triggered to replace canned message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.canned_message_replace', array(
```

## Chat archive range[​](#chat-archive-range "Direct link to Chat archive range")

### chat.archived[​](#chatarchived "Direct link to chat.archived")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatarchiverange.php>  
**Line:** 185  
**Purpose:** Triggered after chat is archived.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.archived',array('chat' => & $item, 'archive' => $this));
```

### chat.set\_archive\_tables[​](#chatset_archive_tables "Direct link to chat.set_archive_tables")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatarchiverange.php>  
**Line:** 218  
**Purpose:** Triggered to set archive tables.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.set_archive_tables', array('archive' => & $this));
```

### chat.create\_archive[​](#chatcreate_archive "Direct link to chat.create_archive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatarchiverange.php>  
**Line:** 427  
**Purpose:** Triggered to create archive.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.create_archive', array('archive' => & $this));
```

## Chat incoming webhook[​](#chat-incoming-webhook "Direct link to Chat incoming webhook")

### chat.incoming\_dynamic\_array[​](#chatincoming_dynamic_array "Direct link to chat.incoming_dynamic_array")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatincomingwebhook.php>  
**Line:** 71  
**Purpose:** Triggered to fill incoming chat dynamic array.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.incoming_dynamic_array', array('incoming_chat' => $incomingData, 'dynamic_array' => & $chat_dynamic_array));
```

## Chat blocked user[​](#chat-blocked-user "Direct link to Chat blocked user")

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-23 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatblockeduser.php>  
**Line:** 219  
**Purpose:** Triggered before message is saved by admin.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('msg' => & $msg, 'chat' => & $params['chat'], 'user_id' => $params['user']->id));
```

## Chat online user[​](#chat-online-user "Direct link to Chat online user")

### chat.online\_user.after\_save[​](#chatonline_userafter_save "Direct link to chat.online_user.after_save")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 87  
**Purpose:** Triggered after online user is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.online_user.after_save',array(
```

## Chat Module[​](#chat-module-3 "Direct link to Chat Module")

### chat.online\_user.after\_update[​](#chatonline_userafter_update "Direct link to chat.online_user.after_update")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 94  
**Purpose:** Triggered after an online user is updated.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.online_user.after_update',array(
```

### chat.online\_user.after\_remove[​](#chatonline_userafter_remove "Direct link to chat.online_user.after_remove")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 100  
**Purpose:** Triggered after an online user is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.online_user.after_remove',array(
```

### onlineuser.before\_proactive\_triggered[​](#onlineuserbefore_proactive_triggered "Direct link to onlineuser.before_proactive_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1114  
**Purpose:** Triggered before a proactive chat invitation is triggered for an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.before_proactive_triggered', array('ou' => & $item, 'errors' => & $errors));
```

### onlineuser.before\_store\_chat[​](#onlineuserbefore_store_chat "Direct link to onlineuser.before_store_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1128  
**Purpose:** Triggered before a chat is stored for an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.before_store_chat',
```

### onlineuser.created[​](#onlineusercreated "Direct link to onlineuser.created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1137  
**Purpose:** Triggered after an online user is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.created', array('tpl' => (isset($paramsHandle['tpl']) ? $paramsHandle['tpl'] : false), 'ou' => & $item));
```

### onlineuser.pageview\_logged[​](#onlineuserpageview_logged "Direct link to onlineuser.pageview_logged")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1139  
**Purpose:** Triggered after a page view is logged for an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.pageview_logged', array('url_changed' => ($locationPrevious !== $item->current_page), 'tpl' => (isset($paramsHandle['tpl']) ? $paramsHandle['tpl'] : false), 'ou' => & $item));
```

### chat.data\_changed\_chat[​](#chatdata_changed_chat-6 "Direct link to chat.data_changed_chat")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1143  
**Purpose:** Triggered when chat data is changed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.data_changed_chat', array('chat_id' => $item->chat_id));
```

### onlineuser.handle\_request[​](#onlineuserhandle_request "Direct link to onlineuser.handle_request")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuser.php>  
**Line:** 1147  
**Purpose:** Triggered when handling a request from an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.handle_request', array('new_visitor' => $newVisitor, 'returning_visitor' => $returningVisitor, 'online_user' => $item, 'params' => $paramsHandle));
```

### onlinefootprint.created[​](#onlinefootprintcreated "Direct link to onlinefootprint.created")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuserfootprint.php>  
**Line:** 102  
**Purpose:** Triggered after an online user footprint is created.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlinefootprint.created', array('item' => & $item));
```

### online.assign\_chat\_to\_pageviews[​](#onlineassign_chat_to_pageviews "Direct link to online.assign_chat_to_pageviews")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatonlineuserfootprint.php>  
**Line:** 108  
**Purpose:** Triggered when assigning a chat to page views.

```
$statusWorkflow = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('online.assign_chat_to_pageviews',array('online_user' => & $onlineUser));
```

### file.remove\_file[​](#fileremove_file "Direct link to file.remove_file")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatfile.php>  
**Line:** 49  
**Purpose:** Triggered when a chat file is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.remove_file', array('chat_file' => & $this));
```

### chat.workflow.canned\_message\_filter[​](#chatworkflowcanned_message_filter "Direct link to chat.workflow.canned_message_filter")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelcannedmsg.php>  
**Line:** 290  
**Purpose:** Triggered when filtering canned messages in a chat workflow.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.canned_message_filter', array(
```

### chat.workflow.canned\_message\_replace[​](#chatworkflowcanned_message_replace-2 "Direct link to chat.workflow.canned_message_replace")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelcannedmsg.php>  
**Line:** 393  
**Purpose:** Triggered when replacing canned messages in a chat workflow.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.workflow.canned_message_replace', array(
```

### chat.dynamic\_array[​](#chatdynamic_array "Direct link to chat.dynamic_array")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchat.php>  
**Line:** 564  
**Purpose:** Triggered to populate chat dynamic array.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.dynamic_array', array('chat' => $this, 'dynamic_array' => & $chat_dynamic_array));
```

### chat.incoming\_dynamic\_array[​](#chatincoming_dynamic_array-1 "Direct link to chat.incoming_dynamic_array")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhchat/erlhcoreclassmodelchatincoming.php>  
**Line:** 61  
**Purpose:** Triggered to populate incoming chat dynamic array.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.incoming_dynamic_array', array('incoming_chat' => $this, 'dynamic_array' => & $chat_dynamic_array));
```

### user.remove\_photo[​](#userremove_photo "Direct link to user.remove_photo")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhuser/erlhcoreclassmodeluser.php>  
**Line:** 197  
**Purpose:** Triggered before user photo is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.remove_photo', array('user' => & $this));
```

### user.remove\_photo[​](#userremove_photo-1 "Direct link to user.remove_photo")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhgenericbot/erlhcoreclassmodelgenericbotbot.php>  
**Line:** 129  
**Purpose:** Triggered before generic bot photo is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.remove_photo', array('user' => & $this));
```

### user.remove\_photo[​](#userremove_photo-2 "Direct link to user.remove_photo")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhgenericbot/erlhcoreclassmodelgenericbottrgroup.php>  
**Line:** 88  
**Purpose:** Triggered before generic bot trigger group photo is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.remove_photo', array('user' => & $this));
```

### feature.can\_use\_proactive[​](#featurecan_use_proactive "Direct link to feature.can_use_proactive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 129  
**Purpose:** Triggered to check if proactive chat invitation can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_proactive', array('object_meta_data' => & $metaData));
```

### onlineuser.proactive\_triggered[​](#onlineuserproactive_triggered "Direct link to onlineuser.proactive_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 422  
**Purpose:** Triggered when a proactive chat invitation is triggered for an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.proactive_triggered', array('message' => & $message, 'variation' => & $messageContent, 'ou' => & $item));
```

### onlineuser.proactive\_triggered[​](#onlineuserproactive_triggered-1 "Direct link to onlineuser.proactive_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 921  
**Purpose:** Triggered when a proactive chat invitation campaign is triggered for an online user.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('onlineuser.proactive_triggered', array('campaign' => & $campaign, 'variation' => & $messageContent, 'message' => & $message, 'ou' => & $item));
```

### theme.download\_image.\*[​](#themedownload_image "Direct link to themedownload_image")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 1028  
**Purpose:** Triggered when a theme image is downloaded.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.download_image.'.$attr, array('theme' => $this, 'attr' => $attr));
```

### theme.edit.\*\_path[​](#themeedit_path "Direct link to themeedit_path")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 1043  
**Purpose:** Triggered when a theme edit path is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.'.$attr.'_path',array('dir' => & $dir, 'storage_id' => $this->id));
```

### theme.edit.store\_\*[​](#themeeditstore_ "Direct link to themeeditstore_")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 1061  
**Purpose:** Triggered when a theme edit store is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.store_'.$attr,array(
```

### theme.edit.remove\_\*[​](#themeeditremove_ "Direct link to themeeditremove_")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatinvitation.php>  
**Line:** 1084  
**Purpose:** Triggered when a theme edit remove is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.remove_'.$attr,array(
```

### feature.can\_use\_proactive[​](#featurecan_use_proactive-1 "Direct link to feature.can_use_proactive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatevent.php>  
**Line:** 56  
**Purpose:** Triggered to check if proactive chat event can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_proactive', array(
```

### feature.can\_use\_proactive[​](#featurecan_use_proactive-2 "Direct link to feature.can_use_proactive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatvariables.php>  
**Line:** 45  
**Purpose:** Triggered to check if proactive chat variables can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_proactive', array('object_meta_data' => & $metaData));
```

### lhabstract.erlhabstractmodelwidgettheme.getstate[​](#lhabstracterlhabstractmodelwidgetthemegetstate "Direct link to lhabstract.erlhabstractmodelwidgettheme.getstate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 110  
**Purpose:** Triggered to get widget theme state.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('lhabstract.erlhabstractmodelwidgettheme.getstate',array('state' => & $stateArray, 'object' => & $this));
```

### theme.download\_image.\*[​](#themedownload_image-1 "Direct link to themedownload_image-1")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 127  
**Purpose:** Triggered when a theme image is downloaded.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.download_image.'.$attr, array('theme' => $this, 'attr' => $attr));
```

### theme.edit.\*\_path[​](#themeedit_path-1 "Direct link to themeedit_path-1")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 142  
**Purpose:** Triggered when a theme edit path is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.'.$attr.'_path',array('dir' => & $dir, 'storage_id' => $this->id));
```

### theme.edit.store\_\*[​](#themeeditstore_-1 "Direct link to themeeditstore_-1")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 162  
**Purpose:** Triggered when a theme edit store is accessed.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.store_'.$attr,array(
```

### theme.edit.remove\_\*[​](#themeeditremove_-1 "Direct link to themeeditremove_-1")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 185  
**Purpose:** Triggered when a theme edit remove is accessed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('theme.edit.remove_'.$attr,array(
```

### feature.can\_use\_themes[​](#featurecan_use_themes "Direct link to feature.can_use_themes")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelwidgettheme.php>  
**Line:** 210  
**Purpose:** Triggered to check if themes can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_themes', array('object_meta_data' => & $metaData));
```

### file.remove\_file (AdminTheme)[​](#fileremove_file-admintheme "Direct link to file.remove_file (AdminTheme)")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeladmintheme.php>  
**Line:** 81  
**Purpose:** Triggered before admin theme file is removed.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('file.remove_file', array('chat_file' => & $std, 'files_path_storage' => 'images_path' ));
```

### feature.can\_use\_autoresponder[​](#featurecan_use_autoresponder "Direct link to feature.can_use_autoresponder")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponder.php>  
**Line:** 140  
**Purpose:** Triggered to check if auto responder can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_autoresponder', array('object_meta_data' => & $metaData));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-1 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponder.php>  
**Line:** 471  
**Purpose:** Triggered before auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true, 'msg' => & $newMessage, 'chat' => & $chat));
```

### chat.validate\_canned\_msg\_user\_departments[​](#chatvalidate_canned_msg_user_departments-1 "Direct link to chat.validate_canned_msg_user_departments")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponder.php>  
**Line:** 754  
**Purpose:** Triggered to validate canned message user departments.

```
$response = erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_canned_msg_user_departments',array('canned_msg' => & $cannedMessage, 'errors' => & $Errors));
```

### feature.can\_use\_forms[​](#featurecan_use_forms "Direct link to feature.can_use_forms")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelform.php>  
**Line:** 84  
**Purpose:** Triggered to check if forms can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_forms', array('object_meta_data' => & $metaData));
```

### feature.can\_use\_subject[​](#featurecan_use_subject "Direct link to feature.can_use_subject")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelsubject.php>  
**Line:** 51  
**Purpose:** Triggered to check if subject can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_subject', array('object_meta_data' => & $metaData));
```

### feature.can\_use\_proactive[​](#featurecan_use_proactive-3 "Direct link to feature.can_use_proactive")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodeleproactivechatcampaign.php>  
**Line:** 54  
**Purpose:** Triggered to check if proactive chat campaign can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_proactive', array(
```

### feature.can\_use\_product[​](#featurecan_use_product "Direct link to feature.can_use_product")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelproduct.php>  
**Line:** 49  
**Purpose:** Triggered to check if product can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_product', array('object_meta_data' => & $metaData));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-2 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 60  
**Purpose:** Triggered before auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('ignore_times' => true, 'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_msg\_admin\_saved[​](#chatbefore_msg_admin_saved-24 "Direct link to chat.before_msg_admin_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 93  
**Purpose:** Triggered before admin message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_msg_admin_saved', array('no_auto_events' => true, 'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.web\_add\_msg\_admin[​](#chatweb_add_msg_admin-11 "Direct link to chat.web_add_msg_admin")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 95  
**Purpose:** Triggered when a web admin adds a message.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.web_add_msg_admin', array('no_auto_events' => true, 'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_auto\_responder\_triggered[​](#chatbefore_auto_responder_triggered-7 "Direct link to chat.before_auto_responder_triggered")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 111  
**Purpose:** Triggered before auto responder is triggered.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_triggered', array(
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-3 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 165  
**Purpose:** Triggered before auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true, 'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-4 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 227  
**Purpose:** Triggered before auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true,'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-5 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 259  
**Purpose:** Triggered before auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true,'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.redirected\_to\_survey\_by\_autoresponder[​](#chatredirected_to_survey_by_autoresponder "Direct link to chat.redirected_to_survey_by_autoresponder")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 273  
**Purpose:** Triggered when chat is redirected to survey by auto responder.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.redirected_to_survey_by_autoresponder',array('chat' => & $this->chat));
```

## Chat Module[​](#chat-module-4 "Direct link to Chat Module")

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-6 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 304  
**Purpose:** Triggered before an auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true,'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-7 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 352  
**Purpose:** Triggered before an auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true,'msg' => & $msg, 'chat' => & $this->chat));
```

### chat.before\_auto\_responder\_msg\_saved[​](#chatbefore_auto_responder_msg_saved-8 "Direct link to chat.before_auto_responder_msg_saved")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelautoresponderchat.php>  
**Line:** 403  
**Purpose:** Triggered before an auto responder message is saved.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.before_auto_responder_msg_saved', array('no_auto_events' => true, 'ignore_times' => true, 'msg' => & $msg, 'chat' => & $this->chat));
```

## Feature Module[​](#feature-module "Direct link to Feature Module")

### feature.can\_use\_survey[​](#featurecan_use_survey "Direct link to feature.can_use_survey")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelsurvey.php>  
**Line:** 169  
**Purpose:** Triggered to check if a survey can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_survey', array('object_meta_data' => & $metaData));
```

## Abstract Module[​](#abstract-module-4 "Direct link to Abstract Module")

### abstract.survey\_edit\_validate[​](#abstractsurvey_edit_validate "Direct link to abstract.survey_edit_validate")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelsurvey.php>  
**Line:** 229  
**Purpose:** Triggered to validate survey edit.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('abstract.survey_edit_validate', $params);
```

### feature.can\_use\_product[​](#featurecan_use_product-1 "Direct link to feature.can_use_product")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelrestapikeyremote.php>  
**Line:** 45  
**Purpose:** Triggered to check if a product can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_product', array('object_meta_data' => & $metaData));
```

### feature.can\_use\_product[​](#featurecan_use_product-2 "Direct link to feature.can_use_product")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelrestapikey.php>  
**Line:** 45  
**Purpose:** Triggered to check if a product can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_product', array('object_meta_data' => & $metaData));
```

## Form Module[​](#form-module-2 "Direct link to Form Module")

### form.remove\_file[​](#formremove_file "Direct link to form.remove_file")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelformcollected.php>  
**Line:** 100  
**Purpose:** Triggered when a file is removed from a form.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('form.remove_file', array('filepath' => $content['filepath'], 'filename' => $content['filename']));
```

## Browse offer Module[​](#browse-offer-module-1 "Direct link to Browse offer Module")

### feature.can\_use\_browse\_offers[​](#featurecan_use_browse_offers "Direct link to feature.can_use_browse_offers")

**File:** <https://github.com/LiveHelperChat/livehelperchat/tree/cf4ff02ac116cc7b99f8192bb6d7a378c3a31aec/lhc_web/lib/models/lhabstract/erlhabstractmodelbrowseofferinvitation.php>  
**Line:** 206  
**Purpose:** Triggered to check if browse offers can be used.

```
erLhcoreClassChatEventDispatcher::getInstance()->dispatch('feature.can_use_browse_offers', array('object_meta_data' => & $metaData));
```
