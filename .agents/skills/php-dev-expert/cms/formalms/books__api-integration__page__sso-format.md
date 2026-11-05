# SSO Format | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/api-integration/page/sso-format

---

# SSO Format

Forma.lms accepts SSO from a third-party site for the already registered users

## Settings

The SSO functionality has to be enabled in the general settings.  
You have to define a secret key that will have to be shared between forma.lms and the third-party portal or website implementing SSO.  
We suggest you to use a long and complex secret key (at least 32 characters, including capitalized and not capitalized letter, numbers, symbols). You can generate a complex key with one of the many automatic token generators available on the web.

You can define the validity of the generated token. Default is 60 seconds. The link generated with the token is valid for the time set starting from when it has been generated.

### SSO Link

The link for SSO is as follows:

**forma.lms version 1.xx**

*http://.../appLms/index.php?login\_user=<username>&time=<str\_tempo>&token=<str\_token>*

**forma.lms version 2.xx**

*http://.../index.php?r=adm/homepage/sso&login\_user=<username>&time=<str\_tempo>&token=<str\_token>*

### Link parameters

This is the meaning of the parameters you can find in the link

9

1

2

3

4

5

6

7

<username> = this is the user name as registered in the LMS.

<str\_tempo> = token generation date and time, in the timestamp format NNNNNNNNNN

(number of seconds since 1970)

<str\_token> = encrypted string, with the following algorithm:

md5( <username> + ‘,’ + <str\_tempo> + ‘,’ + <shared key> )

The generated token’s validity can be set under the LMS’s settings. By default, it’s 60 seconds.

## Examples

### Example 1

Shared key: parolachiavecondivisasso

Username (login): gverdi

Date and time of generation: 2017-11-20 09:13:42

URL parameters:

- Generated Token: d16ea692e74fdd9cbbbd2fb1001c33e1
- time: 1511165622
- login\_user: gverdi

**URL to be used**

forma 1.x:

*http://your.domain.com/appLms/index.php?login\_user=gverdi&time=1511165622&token=d16ea692e74fdd9cbbbd2fb1001c33e1*

forma 2.x  
  
*http://your.domain.com/testing/index.php?r=adm/homepage/sso&login\_user=gverdi&time=1511165622&token= d16ea692e74fdd9cbbbd2fb1001c33e1*

### Example 2

Shared key: ssosharedkeysample

Username (login): johndoe

Date and time of generation: 2017-11-20 09:21:31

URL parameters:

- Generated Token: 48e430a787ba544894a092ea2480a244
- time: 1511166091
- login\_user: johndoe

URL to be used

forma 1.x:

*http://your.domain.com/appLms/index.php?login\_user=johndoe&time=1511166091&token=48e430a787ba544894a092ea2480a244*

forma 2.x:

*http://your.domain.com/index.php?r=adm/homepage/sso&login\_user=johndoe&time=1511166091&token=48e430a787ba544894a092ea2480a244*

Entrar em modo de seleção de seção
