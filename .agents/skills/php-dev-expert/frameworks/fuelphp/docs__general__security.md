# Security - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/security.html

---

### Output encoding

By default, Fuel favors output encoding to input filtering. The reason behind this is twofold.
No matter where your data originates, and whether or not it is filtered, output encoding will make it harmless
when it is send to the client. It also means all input is stored in raw and unaltered form, so that no matter
what happens, you will always have access to the original data.

It also means you don't run into trouble when you need data in its unaltered form. One common example is the
data produced by html editors like TinyMCE or ckeditor, used in lots of application for enduser content editing.
In such cases you might want to run [XSS Filtering](#xss) on these input variables to filter out
any nasty surprises that might have crept in, since this is a typical example of data you don't want
to encode on output either.

Since output encoding can only happen on strings, you have to pay attention to objects you want to pass to your views.
Either make sure your object contains a **\_\_toString()** method on which the encoding can take place, add your object class
to the class whitelist in the security configuration (don't forget the namespace!), or pass it to the view with the **$encode**
flag set to false.
You can also use the [auto\_encode](docs__classes__view.md#method_auto_encode) method to temporary disable automatic output encoding
on a per-view basis.

See the section on [view security](docs__general__views.md#security) to see how this is implemented for views.
