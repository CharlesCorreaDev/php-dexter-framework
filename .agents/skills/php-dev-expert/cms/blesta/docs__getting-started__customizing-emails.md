# Customizing Emails | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/customizing-emails

---

Version: 6

On this page

Blesta 3.0 uses the [H2o Template system](https://github.com/speedmax/h2o-php) for parsing Email Templates. The following is an overview of its basic usage. We've overridden the default {{ var\_name }} with { var\_name } for simplicity, but that's the only way in which the following documentation differ from any [official H2o documentation](https://github.com/speedmax/h2o-php/blob/master/README.md).

### Conditional Statements[â](#conditional-statements "Direct link to Conditional Statements")

```
{% if id > 3 %}  
  
This will print out if $id is > 3  
  
{% endif %}
```

For equal use ==

### Loops[â](#loops "Direct link to Loops")

```
{% for user in users %}  
  
Name: {user.first_name} {user.last_name}  
  
{% endfor %}
```

Assuming:

```
$users = array(  
    array(  
         'first_name'=>"First name",  
         'last_name'=>"Last name"  
    ),  
    array(  
         'first_name'=>"First name 2",  
         'last_name'=>"Last name 2"  
    )  
);
```

Loops can also take advantage of limits:

```
{% for user in users limit:1 %}
```

The above would only cycle through the loop one time.

### Filters[â](#filters "Direct link to Filters")

Filters are applied to individual variables and are preceded by a pipe symbol (|). Parameters are passed to filters using a comma (,) separated list.

```
{past_due | set_default "Not past due"} // Produces "Not past due" if past_due is false
```

Multiple filters can be applied in succession:

```
{past_due | set_default "not past due" | capitalize} // Produces NOT PAST DUE if past_due is false
```

#### Supported Filters[â](#supported-filters "Direct link to Supported Filters")

| Filter | Description | Example Usage |
| --- | --- | --- |
| currency\_format | Formats the value into a currency string. **Parameters**  - currency code | `{"1.2345" | currency_format "USD"}` For Invoice Delivery Email templates, you can use this example which includes the currency code and invoice total tags. `{invoice.total | currency_format invoice.currency}` |
| md5 | Hashes the value using MD5. | `{"some string" | md5}` |
| sha1 | Hahses the value using SHA1. | `{"some string" | sha1}` |
| numberformat | Formats the value into a number.Parameters  - number of decimal places - decimal point character - thousands separator character | `{"12345.6789" | numberformat 2, ".", ","}` |
| wordwrap | Â Wraps a string into multiple lines.Parameters  - number of characters per line - break string | `Â {"some string" | wordwrap 5, "\n<br />"}` |
| trim | Removes white space around a string. | `{" some string " | trim}` |
| upper | Converts a string to uppercase. | `{"some string" | upper}` |
| lower | Converts a string to lowercase. | `{"SOME STRING" | lower}` |
| first | Returns the first element of an array. | `{array_of_items | first}` |
| last | Returns the last element of an array. | `{array_of_items | last}` |
| join | Combines an array of elements into a delimited string. **Parameters**   - delimiter (default is ', ') | `{array_of_items | join ', '}` |
| length | Returns the length of an array. | `{array_of_items | length}` |
| urlencode | URL encodes an string or array of parameters. | `{array_of_items | urlencode}` |
| hyphenize | Replaces white space with hyphens. | `{"some string" | hyphenize}` |
| urlize | Converts a URL into an HTML link. | `{"http://domain.com/" | urlize}` |
| set\_default | Sets a default value when no other value exists. **Parameters**  - default value | `{not_set | set_default "default value"}` |
| humanize |  |  |
| capitalize |  |  |
| capfirst |  |  |
| tighten\_space |  |  |
| escape |  |  |
| escapejson |  |  |
| force\_escape |  |  |
| truncate |  |  |
| limitwords |  |  |
| filesize |  |  |
| image\_tag |  |  |
| css\_tag |  |  |
| script\_tag |  |  |
| links\_to |  |  |
| links\_with |  |  |
| strip\_tags |  |  |
| linebreaks |  |  |
| nl2br |  |  |
| nl2pbr |  |  |
| htmlAttribute |  |  |
| extract |  |  |
| date |  | `{"some date string" | date "Y M d"}`Â eg. `{invoice.date_due | date "Y M d"}` |
| relative\_time |  |  |
| relative\_date |  |  |
| relative\_datetime |  |  |
| safe | Prevents the default HTML filtering from being applied. Considers the string safe. | `{"some string" | safe}` |

### Debugging[â](#debugging "Direct link to Debugging")

Adding the following tag to any email template will enable debugging, and display data key value pairs:

```
{% debug %}
```

### HTML Emails[â](#html-emails "Direct link to HTML Emails")

As of Blesta 5.11, support for HTML email templates was added. Below is a copy of that email template along with it's pre-CSS-inlined version. It's recommended that you modify the following and then run your HTML/CSS through an inliner tool like <https://templates.mailchimp.com/resources/inline-css/> and use the inlined version for your template.

```
<!doctype html>  
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">  
  
<head>  
    <title>  
  
    </title>  
    <!--[if !mso]><!-- -->  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <!--<![endif]-->  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style type="text/css">  
        #outlook a {  
            padding: 0;  
        }  
  
        .ReadMsgBody {  
            width: 100%;  
        }  
  
        .ExternalClass {  
            width: 100%;  
        }  
  
        .ExternalClass * {  
            line-height: 100%;  
        }  
  
        body {  
            margin: 0;  
            padding: 0;  
            -webkit-text-size-adjust: 100%;  
            -ms-text-size-adjust: 100%;  
        }  
  
        table,  
        td {  
            border-collapse: collapse;  
            mso-table-lspace: 0pt;  
            mso-table-rspace: 0pt;  
        }  
  
        img {  
            border: 0;  
            height: auto;  
            line-height: 100%;  
            outline: none;  
            text-decoration: none;  
            -ms-interpolation-mode: bicubic;  
        }  
  
        p {  
            display: block;  
            margin: 13px 0;  
        }  
    </style>  
    <!--[if !mso]><!-->  
    <style type="text/css">  
        @media only screen and (max-width:480px) {  
            @-ms-viewport {  
                width: 320px;  
            }  
            @viewport {  
                width: 320px;  
            }  
        }  
    </style>  
    <!--<![endif]-->  
    <!--[if mso]>  
        <xml>  
        <o:OfficeDocumentSettings>  
          <o:AllowPNG/>  
          <o:PixelsPerInch>96</o:PixelsPerInch>  
        </o:OfficeDocumentSettings>  
        </xml>  
        <![endif]-->  
    <!--[if lte mso 11]>  
        <style type="text/css">  
          .outlook-group-fix { width:100% !important; }  
        </style>  
        <![endif]-->  
  
    <style type="text/css">  
        @media only screen and (min-width:480px) {  
            .mj-column-per-100 {  
                width: 100% !important;  
            }  
        }  
    </style>  
    <style type="text/css">  
    </style>  
</head>  
  
<body style="background-color:#f9f9f9;">  
    <div style="background-color:#f9f9f9;">  
        <!--[if mso | IE]>  
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;">  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f9f9f9;background-color:#f9f9f9;width:100%;">  
                <tbody>  
                    <tr>  
                        <td style="border-bottom:#333957 solid 5px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
        
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="background:#fff;background-color:#fff;Margin:0px auto;max-width:600px;">  
  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%;">  
                <tbody>  
                    <tr>  
                        <td style="border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
            <td  
               style="vertical-align:bottom;width:600px;"  
            >  
          <![endif]-->  
  
                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">  
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">  
                                    <tr>  
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">  
  
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:left;color:#555;">  
                                                {{email_body}}  
                                            </div>  
                                        </td>  
                                    </tr>  
                                    <tr>  
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">  
  
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#525252;">  
                                                {{signature}}  
                                            </div>  
                                        </td>  
                                    </tr>  
                                </table>  
                            </div>  
  
                            <!--[if mso | IE]>  
            </td>  
            
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
        
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="Margin:0px auto;max-width:600px;">  
  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">  
                <tbody>  
                    <tr>  
                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
            <td  
               style="vertical-align:bottom;width:600px;"  
            >  
          <![endif]-->  
  
                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">  
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">  
                                    <tbody>  
                                        <tr>  
                                            <td style="vertical-align:bottom;padding:0;">  
                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">  
                                                    <tr>  
                                                        <td align="center" style="font-size:0px;padding:0;word-break:break-word;">  
  
                                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:12px;font-weight:300;line-height:1;text-align:center;color:#575757;">  
                                                                Sent by Blesta.  
                                                            </div>  
  
                                                        </td>  
                                                    </tr>  
                                                </table>  
                                            </td>  
                                        </tr>  
                                    </tbody>  
                                </table>  
                            </div>  
  
                            <!--[if mso | IE]>  
            </td>  
            
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
      <![endif]-->  
    </div>  
</body>  
</html>
```

After running it through an inliner utility:

```
<!doctype html>  
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">  
  
<head>  
    <title>  
  
    </title>  
    <!--[if !mso]><!-- -->  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <!--<![endif]-->  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
      
    <!--[if !mso]><!-->  
      
    <!--<![endif]-->  
    <!--[if mso]>  
        <xml>  
        <o:OfficeDocumentSettings>  
          <o:AllowPNG/>  
          <o:PixelsPerInch>96</o:PixelsPerInch>  
        </o:OfficeDocumentSettings>  
        </xml>  
        <![endif]-->  
    <!--[if lte mso 11]>  
        <style type="text/css">  
          .outlook-group-fix { width:100% !important; }  
        </style>  
        <![endif]-->  
  
      
      
</head>  
  
<body style="background-color: #f9f9f9;margin: 0;padding: 0;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">  
    <div style="background-color:#f9f9f9;">  
        <!--[if mso | IE]>  
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;">  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background: #f9f9f9;background-color: #f9f9f9;width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                <tbody>  
                    <tr>  
                        <td style="border-bottom: #333957 solid 5px;direction: ltr;font-size: 0px;padding: 20px 0;text-align: center;vertical-align: top;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
        
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="background:#fff;background-color:#fff;Margin:0px auto;max-width:600px;">  
  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background: #fff;background-color: #fff;width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                <tbody>  
                    <tr>  
                        <td style="border: #dddddd solid 1px;border-top: 0px;direction: ltr;font-size: 0px;padding: 20px 0;text-align: center;vertical-align: top;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
            <td  
               style="vertical-align:bottom;width:600px;"  
            >  
          <![endif]-->  
  
                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">  
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align: bottom;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;" width="100%">  
                                    <tr>  
                                        <td align="left" style="font-size: 0px;padding: 10px 25px;word-break: break-word;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
  
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:left;color:#555;">  
                                                {{email_body}}  
                                            </div>  
                                        </td>  
                                    </tr>  
                                    <tr>  
                                        <td align="left" style="font-size: 0px;padding: 10px 25px;word-break: break-word;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
  
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#525252;">  
                                                {{signature}}  
                                            </div>  
                                        </td>  
                                    </tr>  
                                </table>  
                            </div>  
  
                            <!--[if mso | IE]>  
            </td>  
            
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
        
      <table  
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"  
      >  
        <tr>  
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">  
      <![endif]-->  
  
        <div style="Margin:0px auto;max-width:600px;">  
  
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                <tbody>  
                    <tr>  
                        <td style="direction: ltr;font-size: 0px;padding: 20px 0;text-align: center;vertical-align: top;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                            <!--[if mso | IE]>  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">  
                  
        <tr>  
        
            <td  
               style="vertical-align:bottom;width:600px;"  
            >  
          <![endif]-->  
  
                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">  
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                                    <tbody>  
                                        <tr>  
                                            <td style="vertical-align: bottom;padding: 0;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
                                                    <tr>  
                                                        <td align="center" style="font-size: 0px;padding: 0;word-break: break-word;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">  
  
                                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:12px;font-weight:300;line-height:1;text-align:center;color:#575757;">  
                                                                Sent by Blesta.  
                                                            </div>  
  
                                                        </td>  
                                                    </tr>  
                                                </table>  
                                            </td>  
                                        </tr>  
                                    </tbody>  
                                </table>  
                            </div>  
  
                            <!--[if mso | IE]>  
            </td>  
            
        </tr>  
        
                  </table>  
                <![endif]-->  
                        </td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
  
        <!--[if mso | IE]>  
          </td>  
        </tr>  
      </table>  
      <![endif]-->  
    </div>  
</body>  
</html>
```

This template is based on <https://github.com/ckissi/responsive-html-email-templates>
