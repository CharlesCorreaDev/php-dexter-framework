# Vendor additions - htmLawed - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/vendor/htmlawed.html

---

## htmLawed

### Introduction

htmLawed is a highly customizable single-file PHP script to make text secure, and standard- and admin policy-compliant
for use in the body of HTML 4, XHTML 1 or 1.1, or generic XML documents. It is thus a configurable input (X)HTML filter,
processor, purifier, sanitizer, beautifier, etc., and an alternative to the HTMLTidy application.

The lawing in of input text is needed to ensure that HTML code in the text is standard-compliant, does not introduce security
vulnerabilities, and does not break the aesthetics, design or layout of web-pages. htmLawed tries to do this by, for example,
making HTML well-formed with balanced and properly nested tags, neutralizing code that may be used for cross-site scripting
(XSS) attacks, and allowing only specified HTML elements/tags and attributes.

### Documentation

You can find the htmLawed documentation [here](http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/htmLawed_README.htm).

### FuelPHP Usage

The htmLawed vendor package is used by FuelPHP in the security class, to clean user input.

### Application Usage

You can access htmLawed through the [Security::xss\_clean()](docs__classes__security.md#/method_xss_clean) method.
