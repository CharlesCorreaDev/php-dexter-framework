# Smarty custom functions · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Smarty-custom-functions

---

Here are some custom smarty functions that are used in the Subrion CMS smarty templates.

- [`{ia_add_media}`](#ia_add_media) - add javascript and css files
- [`{ia_add_js}`](#ia_add_js) - add javascript code snippet
- [`{ia_print_js}`](#ia_print_js) - add javascript file
- [`{ia_print_css}`](#ia_print_css) - add css file
- [`{printImage}`](#printimage) - insert image (obsolete since 4.1, use ia\_image instead)
- [`{ia_image}`](#ia_image) - generates image URL / img tag

## {ia\_add\_media}

To include a set of js and css files into template's code.

```
{ia_add_media files='jquery, bootstrap, css:style, js:intelli/intelli.accordion'}
```

`files` parameter is used to specify one or multiple files to be included. The inputs should be separated with commas if multiple files are included.

Format to use:

```
file_type:file_name
```

**file\_type** - `js` and `css` types are available.  
**file\_name**
For js files: the file names use [root]/js/ path by default and should be input without `.js` extension.
For css files: the file names use [root]/templates/active\_template/css/ path by default and should be input without `.css` extension.

E.g. the code below includes *@subrion\_folder/js/intelli/intelli.new.js* and *@subrion\_folder/templates/@active\_template/css/newstyle.css* :

```
{ia_add_media files="js:intelli/intelli.new, css:newstyle"}
```

If you need to specify a custom path '*IA\_URL*' prefix is used ('*IA\_URL*' will be replaced with *@subrion\_folder*).
E.g. the code below will include *@subrion\_folder/packages/newpackage/js/newfile.js*

```
{ia_add_media files="js:_IA_URL_packages/newpackage/js/newfile"}
```

h2. Reserved inputs

Some files inputs are reserved for including different sets of js and css files:

*Subrion* default library

includes files:
*@subrion\_folder/js/intelli/intelli.js*
*@subrion\_folder/tmp/cache/intelli.config.js*

on the front-end:
*@subrion\_folder/js/utils/sessvars.js*
*@subrion\_folder/js/intelli/intelli.minmax.js*
*@subrion\_folder/js/intelli/intelli.common.js*
*@subrion\_folder/js/frontend/footer.js*

in admin area:
*@subrion\_folder/js/intelli/intelli.admin.js*

```
{ia_add_media files='subrion'}
```

*jQuery* library

includes files:
*@subrion\_folder/js/jquery/jquery.js*
*@subrion\_folder/js/jquery/plugins/jquery.numeric.js*

```
{ia_add_media files='jquery'}
```

*Twitter Bootstrap* library

includes files:
*@subrion\_folder/js/bootstrap/js/bootstrap.min.js*
*@subrion\_folder/js/bootstrap/css/bootstrap-awesome.min.css*
*@subrion\_folder/js/bootstrap/css/font-awesome.css*

```
{ia_add_media files='jquery'}
```

*Autocomplete* library

includes files:
*@subrion\_folder/js/jquery/plugins/autocomplete/jquery.autocomplete.js*
*@subrion\_folder/js/jquery/plugins/autocomplete/jquery.autocomplete.css*

```
{ia_add_media files='autocomplete'}
```

*JsTree* library

includes files:
*@subrion\_folder/js/jquery/plugins/jstree/jquery.jstree.js*
*@subrion\_folder/js/jquery/plugins/jstree/themes/default/style.css*

```
{ia_add_media files='jstree'}
```

*Grid* library

includes files:
*@subrion\_folder/js/intelli/intelli.gmodel.js*
*@subrion\_folder/js/intelli/intelli.grid.js*
*@subrion\_folder/js/ext/plugins/bettercombobox/betterComboBox.js*

includes library:
*Ext3 library*

```
{ia_add_media files='grid'}
```

## {ia\_add\_js}

To include js code into template's code `{ia_add_js}` function is used.

```
{ia_add_js}
	$('.add-js-example').html('ia_add_js smarty function example');
{/ia_add_js}
```

The code is injected between opening and closing tags.  
If you use braces (`{` and `}`) within the js code, you should wrap the code inside the braces with whitespaces, newlines, or tabs:

```
{ia_add_js}
	$('.add-js-example').click(function() {
		$(this)
			.show()
			.html('ia_add_js smarty function exmaple.');
	});
{/ia_add_js}
```

## {ia\_print\_js}

To include js file into template's code `{ia_print_js}` function is used.

```
{ia_print_js files="intelli/intelli.new,_IA_URL_plugins/newplugin/js/newfile"}
```

`files` parameter is used to specify one or multiple js files to be included.

The file names use `subrion_folder/js/` path by default and should be input without '.js' extension.
*E.g.* the code below will include `subrion_folder/js/intelli/intelli.new.js` file:

```
{ia_print_js files="intelli/intelli.new"}
```

The file names should be separated with commas if multiple files are used.

```
{ia_print_js files="intelli/intelli.new,admin/newfile"}
```

If you need to specify a custom path `_IA_URL_` prefix is used (`_IA_URL_` will be replaced with `subrion_folder`).  
*E.g.* the code below will include `subrion_folder/packages/newpackage/js/newfile.js`

```
{ia_print_js files="_IA_URL_packages/newpackage/js/newfile"}
```

If you need to print a custom javascript file that's placed in a current template folder `_IA_TPL_` prefix is used (`_IA_TPL_` will be replaced with `subrion_folder/templates/current_template/js/`).  
*E.g.* the code below will include `subrion_folder/templates/segin/js/apps.js`

```
{ia_print_js files="_IA_TPL_apps"}
```

## {ia\_print\_css}

To include css file into template's code {ia\_print\_css} function is used.

```
{ia_print_css files="style,_IA_URL_plugins/newplugin/templates/common/css/newstyle"}
```

`files` parameter is used to specify one or multiple css files to be included.

The file names use [root]/templates/active\_template/css/ path by default and should be input without `.css` extension.
E.g. the code below will include [root]/templates/active\_template/css/newstyle.css file:

```
{ia_print_css files="newstyle"}
```

If you need to specify a custom path `_IA_URL_` prefix is used (`_IA_URL_` will be replaced with [root]).
E.g. the code below will include [root]/packages/newpackage/templates/common/css/newstyle.css:

```
{ia_print_css files="_IA_URL_packages/newpackage/templates/common/css/newstyle"}
```

## {printImage} - (obsolete since 4.1, use ia\_image instead)

When any image is uploaded to Subrion CMS, the script creates 3 files:

- Source image with name \*\*source\_\*\*filename (original image)
- Processed full image (dimensions are specified in field configuration for each item)
- Processed thumbnail (dimensions are specified in field configuration for each item)

and stores them in the **[root]/uploads/** folder

To print these images use the following syntax:

```
{printImage imgfile=$image_path width='180' height='180' title=$image_title type='full' class='img-circle'}
```

Attributes description:

- `imgfile` - path to image. If a file is located in [root]/uploads/icons/myimage.jpg the `imgfile` should be without [root]/uploads/ as following: uploads/icons/myimage.jpg
- `width` parameter is used to specify a width of the printed image. *Omit this attribute if you want an image to have original size.*
- `height` parameter is used to specify a height of the printed image. *Omit this attribute if you want an image to have original size.*
- `title` parameter is used to specify `title` and `alt` (if not set) attributes of the printed image.
- `alt` parameter is used to specify `alt` attribute despite of `title` setting. May be ignored.
- `type` - sets image source. Can be `full` (prints processed full image) or `source` (prints full non-processed image). Without this attribute, thumbnail image will be printed.
- `class` - add any class.

If you want the function to print just an image's URL set pararmeter `url` to `true`:

```
<a href="{printImage imgfile=$image_path type='full' url=true title=$image_title}">Click to see the image</a>
```

Usually we use a combination of the same function to print a clickable picture's thumbnail. On click a full image is open:

```
<a href="{printImage imgfile=$image_path type='full' url=true title=$image_title}">
	{printImage imgfile=$image_path alt=$image_title}
</a>
```

To make it open a full image on click in a pop-up frame add `rel="ia_lightbox"` attribute to the `a` tag:

```
<a href="{printImage imgfile=$image_path type='full' url=true title=$image_title}" rel="ia_lightbox[{$image_title}]">
	{printImage imgfile=$image_path title=$image_title}
</a>
```

## {ia\_image}

When any image is uploaded to Subrion CMS, the script creates several files (3 by default):

- Source image in **original** folder (original image)
- Processed large image in **large** folder (dimensions are specified in field configuration for each item)
- Processed thumbnail in **thumbnail** folder(dimensions are specified in field configuration for each item)

and stores them in the **[root]/uploads/** folder (might be a user specific folder)

To print these images use the following syntax:

```
{ia_image file=$image width='180' height='180' title=$image_title type='large' class='img-circle'}
```

Attributes description:

- `file` - array or string. If a file is located in [root]/uploads/icons/myimage.jpg the `file` should be without [root]/uploads/ as following: uploads/icons/myimage.jpg
- `width` parameter is used to specify a width of the printed image. *Omit this attribute if you want an image to have original size.*
- `height` parameter is used to specify a height of the printed image. *Omit this attribute if you want an image to have original size.*
- `title` parameter is used to specify `title` and `alt` (if not set) attributes of the printed image.
- `alt` parameter is used to specify `alt` attribute despite of `title` setting. May be ignored.
- `type` - sets image source type. Can be `large` (prints processed full image) or `source` (prints full non-processed image). Without this attribute, thumbnail image will be printed.
- `class` - add any class.

If you want the function to print just an image's URL set parameter `url` to `true`:

```
<a href="{ia_image file=$image type='large' url=true title=$image_title}">Click to see the image</a>
```

Usually we use a combination of the same function to print a clickable picture's thumbnail. On click a full image is open:

```
<a href="{ia_image file=$image type='large' url=true title=$image_title}">
	{ia_image file=$image alt=$image_title}
</a>
```

To make it open a full image on click in a pop-up frame add `rel="ia_lightbox"` attribute to the `a` tag:

```
<a href="{ia_image file=$image type='large' url=true title=$image_title}" rel="ia_lightbox[{$image_title}]">
	{ia_image file=$image title=$image_title}
</a>
```
