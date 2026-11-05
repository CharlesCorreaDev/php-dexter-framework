# Manage Email Template content from database | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/734/manage-email-template-content-from-database

---

## [Manage Email Template content from database](wiki__734__manage-email-template-content-from-database.md)

0    1

1

Viewed: 29 285 times

Version: all

Category: [Tutorials](wiki__index.md)

- [email](wiki__index.md)
- [Email Template](wiki__index.md)

Written by: [![Ankit Modi](/user/avatar/110499?v=1) Ankit Modi](https://www.yiiframework.com/user/110499)

Updated by: [![Ankit Modi](/user/avatar/110499?v=1) Ankit Modi](https://www.yiiframework.com/user/110499)

Created: Jul 18, 2014

Updated: 12 years ago

Hi Friends,

In this tutorial, how to manage email Template content on Yii Back-end?

1. Manage the content from Back-end
2. view the content front-side

**1)** create the table like

```
CREATE TABLE `emil_template` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(55) NOT NULL,
	`variables` VARCHAR(255) NOT NULL,
	`subject` VARCHAR(255) NOT NULL,
	`description` TEXT NOT NULL,
	`status` ENUM('1','0') NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
	PRIMARY KEY (`id`),
	INDEX `id` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
AUTO_INCREMENT=1;
```

**2)** Make prdefind entry in database,so Admin will edit the partucular content for specific template
![Image](https://user-content.yiiframework.com/img/uJj1BPM30sSQy3hgMqU4oQ/http/puu.sh/agja7/b9ad701502.png "Email template managed")

**3)** create the common template in the common layout of the view

```
<table class="templete_m" style="width: 567px; font-family: Arial,Helvetica;line-height: normal;" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        <tr class="t_top">
                            <td  align="left"><img src="<?php echo Yii::app()->getBaseUrl(true) . "/images/logo-admin.png" ?>" alt="" /></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table style="width: 567px; background:#f5f5f5" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="padding: 20px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 12px;" colspan="2">
                                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left"><strong>Dear <?php echo $firstname; ?></strong>,</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;"><!-- <p>Here is your invoice for ##current_invoice_date##. You can pay your invoice by logging in to your LocalSnag Account Click <a href="login">here</a> to log in.</p> -->
                                                <?php echo $content; ?>
                                            </td>
                                        </tr>
								    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 0px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 16px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="color: #691712;"><strong>Thanks</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #691712;"><strong><?php echo SystemConfig::getValue('site_name') . ' Team'; ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #59acff;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr><br />
    <tr class="t_footr">
        <td align="center">
            <table style="width: 567px;">
                <tbody>
                    <tr>
                        <td  align="center">Need Help? Have Feedback? Feel free to <a href="contact" style="color: #59acff;"><strong><?php echo 'Contact ' . SystemConfig::getValue('site_name'); ?></strong></a></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</tbody>
</table>
```

4) Below code in write controller when your tempalete is called

```
public function actionRegister()
	{

		//$this->layout = 'inner';
		$model = new VkUsers('register');

		if(isset($_POST['VkUsers']) && !empty($_POST['VkUsers'])){
			//p($_POST);
			$pwd = $_POST['VkUsers']['password'];
			$_POST['VkUsers']['password'] = md5($_POST['VkUsers']['password']);
			
			$model->setAttributes($_POST['VkUsers']);
			$model->dob = $_POST['VkUsers']['year'] .'-'.$_POST['VkUsers']['month'].'-'.$_POST['VkUsers']['day'];
			$model->facebook_verified='0';

			if ($model->validate()) {
				if ($model->save(false)) {
					$findTemplateModel = UtilityHtml::FindEMailTempalte('User Registration Notification');//get a template name using email_template table
					$description = $findTemplateModel->description;//get the template content with varibles
					$subject = $findTemplateModel->subject;
					$variables=array(
											'{fname}'=>$_POST['VkUsers']['fname'],
											'{lname}'=>$_POST['VkUsers']['lname'],
											'{email}'=>$_POST['VkUsers']['email'],
											'{dob}'=>$model->dob,
											'{password}'=>$pwd,
					);
					
					$final_array = $this->EmailSendArray($description, $variables);//replace varibles 
					
					$send_mail_data = array(
									 	'firstname' => ucwords($_POST['VkUsers']['fname']),
										'content'=>$final_array,
					);
$message = $this->renderPartial('/index/_template',$send_mail_data,true);//call a template view
$result = $this->actionMailSend($_POST['VkUsers']['email'],$addbcc="", $_POST['VkUsers']['fname'], $subject, $message);//send mail

					if($result == 1){
   Yii::app()->user->setFlash('success',"Thanks for Register,Your Request send a successful.");
						$this->redirect('register');
					}
					
				}
			}

		}

		$this->render('user_register',array('model'=>$model));
	}
	
	public function EmailSendArray($message,$variables){
		$searchArray=array_keys($variables);
		$replaceArray=array_values($variables);
		return str_replace($searchArray,$replaceArray,$message);
	}

      

    Public static function FindEMailTempalte($name){
       return $findTemplateModel = EmailTemplate::model()->find("name='".$name."' AND status='1'");
    }
```
