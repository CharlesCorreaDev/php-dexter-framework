# Modify Templates | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/templates

---

Version: 6

On this page

Customizing Blesta through template modifications.

## Template Changes[â](#template-changes "Direct link to Template Changes")

Often people modify the client area templates to make them match their website. While we can't provide a less on HTML and CSS, we can point you in the right direction.

- **/app/views/client/bootstrap/structure.pdt** contains the header and the footer of the client area and front facing pages
- If you will be changing CSS styles, we recommend you create a new stylesheet, called something like overrides.css and add it to structure.pdtÂ after all of the other styles. Any styles you add will override the defaults. Using your own CSS file will mean easier upgrades in the future as you will only have to update the template to load your stylesheet, not replace it altogether.

## Creating Your Own Templates[â](#creating-your-own-templates "Direct link to Creating Your Own Templates")

Most people start by cloning the default template files at **/app/views/client/bootstrap/**.

1. Copy the **/app/views/client/bootstrap/** directory and give it your own name like "mytheme".
2. Edit the `config.json` file in the template directory, changing the name and authors, and any of the other information but keep the structure. (See below for an example)
3. Upload it to **/app/views/client/** so that your theme exists at **/app/views/client/mytheme/**
4. To use the theme, go to [Settings] > [Company] > [Look and Feel] > Template, and select your template from the "Client Template" dropdown.
5. Edit the templates as desired.

config.json

```
{  
	"version": "1.0.0",  
	"name": "MyTheme",  
	"description": "Built on Bootstrap 3.1.",  
	"authors": [  
		{  
			"name": "Phillips Data, Inc.",  
			"url": "https://www.blesta.com"  
		}  
	],  
	"require": {  
		"blesta": ">=3.2.0"  
	}  
}
```

## Detecting Company[â](#detecting-company "Direct link to Detecting Company")

In your templates you can evaluate $system\_company->id to display different information based on the company ID. The first company ID of every fresh Blesta installation is "1". If using multi-company, the 2nd company would be "2", and so on. Check the ID in the link for the company under Settings > System > Companies to determine the company ID.

A common use is using embed code like Crisp chat, or Facebook Pixel that will appear on all client area pages for a specific company only. The example below can be used in **/app/views/client/bootstrap/structure.pdt** for displaying content or embed code for a company with the ID "2" only.:

```
<?php if($system_company->id == "2") { ?>  
       Your EMBED code here  
<?php } ?>
```
