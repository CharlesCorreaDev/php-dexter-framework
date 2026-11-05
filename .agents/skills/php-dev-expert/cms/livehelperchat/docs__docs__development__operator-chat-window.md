# How to add custom information to chat window | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/development/operator-chat-window

---

On this page

## Useful Links[​](#useful-links "Direct link to Useful Links")

- Sample extensions: <https://github.com/LiveHelperChat/livehelperchat-extensions/tree/master>
- If you are interested only in templates, you can copy templates from `defaulttheme` to `design/customtheme` and modify them there, no need to create an extension.
- Make sure you read [Quick development guide](docs__docs__development__quick-guide.md) and disabled cache first.

This tutorial explains how to add custom information to the operator/agent chat window.

## Key Template Locations[​](#key-template-locations "Direct link to Key Template Locations")

- **Main operator chat window template**: `design/defaulttheme/tpl/lhchat/adminchat.tpl.php`
  - Templates with naming pattern `*_multiinclude.tpl.php` can be overridden to add custom content from your extensions
- **Right column main template**: `design/defaulttheme/tpl/lhchat/chat_tabs/chat_tabs_container.tpl.php`
  - Explore the template hierarchy to find which templates you can customize

## Adding Custom Content[​](#adding-custom-content "Direct link to Adding Custom Content")

Adding custom content typically involves creating custom tabs in the chat window by overriding these templates:

- `design/defaulttheme/tpl/lhchat/chat_tabs/extension_chat_tab_multiinclude.tpl.php`
- `design/defaulttheme/tpl/lhchat/chat_tabs/extension_chat_tab_content_multiinclude.tpl.php`
- `design/defaulttheme/tpl/lhchat/chat_tabs/tabs_order.tpl.php`

### Adding Content to the User Information Tab[​](#adding-content-to-the-user-information-tab "Direct link to Adding Content to the User Information Tab")

To add custom content to the default user information tab, examine these templates and choose the appropriate one for your extension:

- `design/defaulttheme/tpl/lhchat/chat_tabs/information_tab_user_info.tpl.php`

### Adding Content Above the Department Field[​](#adding-content-above-the-department-field "Direct link to Adding Content Above the Department Field")

To display custom information above the department field, use:

- `design/defaulttheme/tpl/lhchat/chat_tabs/above_department_extension_multiinclude.tpl.php`

## How to Add Custom Information Block in the Right Column[​](#how-to-add-custom-information-block-in-the-right-column "Direct link to How to Add Custom Information Block in the Right Column")

The purpose is to show a completely new section in the right column at your desired position. The same flow is demonstrated here: <https://github.com/LiveHelperChat/fbmessenger/tree/master/design/fbmessengertheme/tpl/lhchat/chat_tabs/information_rows>

### Steps to Add Custom Information Block[​](#steps-to-add-custom-information-block "Direct link to Steps to Add Custom Information Block")

1. **Create override of information order template**

   Create an override of `design/defaulttheme/tpl/lhchat/chat_tabs/information_rows/information_order_extension_multiinclude.tpl.php` and modify the `$orderInformation` array by looking at the `design/defaulttheme/tpl/lhchat/chat_tabs/information_rows/information_order.tpl.php` template content.

   For example, this way your block will be the first one:

   ```
   <?php  
   $orderInformation = array_merge_recursive(array('crm_information' => array(  
       'item' => 'crm_information',  
       'enabled' => true  
   )),  
   $orderInformation  
   );  
   ?>
   ```
2. **Create the information row template**

   Then in your extension, create `design/defaulttheme/tpl/lhchat/chat_tabs/information_rows/extension_information_row_multiinclude.tpl.php`:

   ```
   <?php if ($buttonData['item'] == 'crm_information') : ?>  
   <tr>  
       <td colspan="2">  
           Your custom information. <?php print_r($chat);?>  
       </td>  
   </tr>  
   <?php endif; ?>
   ```
