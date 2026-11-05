# Customize - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-customize.html

---

# Customize!

HTML Purifier is a Swiss-Army Knife

Filed under End-User

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

HTML Purifier has this quirk where if you try to allow certain elements or
attributes, HTML Purifier will tell you that it's not supported, and that
you should go to the forums to find out how to implement it. Well, this
document is how to implement elements and attributes which HTML Purifier
doesn't support out of the box.

## Is it necessary?

Before we even write any code, it is paramount to consider whether or
not the code we're writing is necessary or not. HTML Purifier, by default,
contains a large set of elements and attributes: large enough so that
*any* element or attribute in XHTML 1.0 or 1.1 (and its HTML variants)
that can be safely used by the general public is implemented.

So what needs to be implemented? (Feel free to skip this section if
you know what you want).

### XHTML 1.0

All of the modules listed below are based off of the
[modularization of
XHTML](http://www.w3.org/TR/2001/REC-xhtml-modularization-20010410/abstract_modules.html#sec_5.2.), which, while technically for XHTML 1.1, is quite a useful
resource.

- Structure
- Frames
- Applets (deprecated)
- Forms
- Image maps
- Objects
- Frames
- Events
- Meta-information
- Style sheets
- Link (not hypertext)
- Base
- Name

If you don't recognize it, you probably don't need it. But the curious
can look all of these modules up in the above-mentioned document. Note
that inline scripting comes packaged with HTML Purifier (more on this
later).

### XHTML 1.1

As of HTMLPurifier 2.1.0, we have implemented the
[Ruby module](http://www.w3.org/TR/2001/REC-ruby-20010531/),
which defines a set of tags
for publishing short annotations for text, used mostly in Japanese
and Chinese school texts, but applicable for positioning any text (not
limited to translations) above or below other corresponding text.

### HTML 5

[HTML 5](http://www.whatwg.org/specs/web-apps/current-work/)
is a fork of HTML 4.01 by WHATWG, who believed that XHTML 2.0 was headed
in the wrong direction. It too is a working draft, and may change
drastically before publication, but it should be noted that the
`canvas` tag has been implemented by many browser vendors.

### Proprietary

There are a number of proprietary tags still in the wild. Many of them
have been documented in <ref-proprietary-tags.txt>,
but there is currently no implementation for any of them.

### Extensions

There are also a number of other XML languages out there that can
be embedded in HTML documents: two of the most popular are MathML and
SVG, and I frequently get requests to implement these. But they are
expansive, comprehensive specifications, and it would take far too long
to implement them *correctly* (most systems I've seen go as far
as whitelisting tags and no further; come on, what about nesting!)

Word of warning: HTML Purifier is currently *not* namespace
aware.

## Giving back

As you may imagine from the details above (don't be abashed if you didn't
read it all: a glance over would have done), there's quite a bit that
HTML Purifier doesn't implement. Recent architectural changes have
allowed HTML Purifier to implement elements and attributes that are not
safe! Don't worry, they won't be activated unless you set %HTML.Trusted
to true, but they certainly help out users who need to put, say, forms
on their page and don't want to go through the trouble of reading this
and implementing it themself.

So any of the above that you implement for your own application could
help out some other poor sap on the other side of the globe. Help us
out, and send back code so that it can be hammered into a module and
released with the core. Any code would be greatly appreciated!

## And now...

Enough philosophical talk, time for some code:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionID', 'enduser-customize.html tutorial');
$config->set('HTML.DefinitionRev', 1);
if ($def = $config->maybeGetRawHTMLDefinition()) {
    // our code will go here
}
```

Assuming that HTML Purifier has already been properly loaded (hint:
include `HTMLPurifier.auto.php`), this code will set up
the environment that you need to start customizing the HTML definition.
What's going on?

- The first three lines are regular configuration code:
  - %HTML.DefinitionID is set to a unique identifier for your
    custom HTML definition. This prevents it from clobbering
    other custom definitions on the same installation.
  - %HTML.DefinitionRev is a revision integer of your HTML
    definition. Because HTML definitions are cached, you'll need
    to increment this whenever you make a change in order to flush
    the cache.
- The fourth line retrieves a raw `HTMLPurifier_HTMLDefinition`
  object that we will be tweaking. Interestingly enough, we have
  placed it in an if block: this is because
  `maybeGetRawHTMLDefinition`, as its name suggests, may
  return a NULL, in which case we should skip doing any
  initialization. This, in fact, will correspond to when our fully
  customized object is already in the cache.

## Turn off caching

To make development easier, we're going to temporarily turn off
definition caching:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionID', 'enduser-customize.html tutorial');
$config->set('HTML.DefinitionRev', 1);
$config->set('Cache.DefinitionImpl', null); // TODO: remove this later!
$def = $config->getHTMLDefinition(true);
```

A few things should be mentioned about the caching mechanism before
we move on. For performance reasons, HTML Purifier caches generated
`HTMLPurifier_Definition` objects in serialized files
stored (by default) in `library/HTMLPurifier/DefinitionCache/Serializer`.
A lot of processing is done in order to create these objects, so it
makes little sense to repeat the same processing over and over again
whenever HTML Purifier is called.

In order to identify a cache entry, HTML Purifier uses three variables:
the library's version number, the value of %HTML.DefinitionRev and
a serial of relevant configuration. Whenever any of these changes,
a new HTML definition is generated. Notice that there is no way
for the definition object to track changes to customizations: here, it
is up to you to supply appropriate information to DefinitionID and
DefinitionRev.

## Add an attribute

For this example, we're going to implement the `target` attribute found
on `a` elements. To implement an attribute, we have to
ask a few questions:

1. What element is it found on?
2. What is its name?
3. Is it required or optional?
4. What are valid values for it?

The first three are easy: the element is `a`, the attribute
is `target`, and it is not a required attribute. (If it
was required, we'd need to append an asterisk to the attribute name,
you'll see an example of this in the addElement() example).

The last question is a little trickier.
Lets allow the special values: \_blank, \_self, \_target and \_top.
The form of this is called an **enumeration**, a list of
valid values, although only one can be used at a time. To translate
this into code form, we write:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionID', 'enduser-customize.html tutorial');
$config->set('HTML.DefinitionRev', 1);
$config->set('Cache.DefinitionImpl', null); // remove this later!
$def = $config->getHTMLDefinition(true);
$def->addAttribute('a', 'target', 'Enum#_blank,_self,_target,_top');
```

The `Enum#_blank,_self,_target,_top` does all the magic.
The string is split into two parts, separated by a hash mark (#):

1. The first part is the name of what we call an `AttrDef`
2. The second part is the parameter of the above-mentioned `AttrDef`

If that sounds vague and generic, it's because it is! HTML Purifier defines
an assortment of different attribute types one can use, and each of these
has their own specialized parameter format. Here are some of the more useful
ones:

| Type | Format | Description |
| --- | --- | --- |
| Enum | *[s:]*value1,value2,... | Attribute with a number of valid values, one of which may be used. When s: is present, the enumeration is case sensitive. |
| Bool | attribute\_name | Boolean attribute, with only one valid value: the name of the attribute. |
| CDATA |  | Attribute of arbitrary text. Can also be referred to as **Text** (the specification makes a semantic distinction between the two). |
| ID |  | Attribute that specifies a unique ID |
| Pixels |  | Attribute that specifies an integer pixel length |
| Length |  | Attribute that specifies a pixel or percentage length |
| NMTOKENS |  | Attribute that specifies a number of name tokens, example: the `class` attribute |
| URI |  | Attribute that specifies a URI, example: the `href` attribute |
| Number |  | Attribute that specifies an positive integer number |

For a complete list, consult
[`library/HTMLPurifier/AttrTypes.php`](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/AttrTypes.php);
more information on attributes that accept parameters can be found on their
respective includes in
[`library/HTMLPurifier/AttrDef`](http://repo.or.cz/w/htmlpurifier.git?a=tree;hb=HEAD;f=library/HTMLPurifier/AttrDef).

Sometimes, the restrictive list in AttrTypes just doesn't cut it. Don't
sweat: you can also use a fully instantiated object as the value. The
equivalent, verbose form of the above example is:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionID', 'enduser-customize.html tutorial');
$config->set('HTML.DefinitionRev', 1);
$config->set('Cache.DefinitionImpl', null); // remove this later!
$def = $config->getHTMLDefinition(true);
$def->addAttribute('a', 'target', new HTMLPurifier_AttrDef_Enum(
  array('_blank','_self','_target','_top')
));
```

Trust me, you'll learn to love the shorthand.

## Add an element

Adding attributes is really small-fry stuff, though, and it was possible
to add them (albeit a bit more wordy) prior to 2.0. The real gem of
the Advanced API is adding elements. There are five questions to
ask when adding a new element:

1. What is the element's name?
2. What content set does this element belong to?
3. What are the allowed children of this element?
4. What attributes does the element allow that are general?
5. What attributes does the element allow that are specific to this element?

It's a mouthful, and you'll be slightly lost if your not familiar with
the HTML specification, so let's explain them step by step.

### Content set

The HTML specification defines two major content sets: Inline
and Block. Each of these
content sets contain a list of elements: Inline contains things like
`span` and `b` while Block contains things like
`div` and `blockquote`.

These content sets amount to a macro mechanism for HTML definition. Most
elements in HTML are organized into one of these two sets, and most
elements in HTML allow elements from one of these sets. If we had
to write each element verbatim into each other element's allowed
children, we would have ridiculously large lists; instead we use
content sets to compactify the declaration.

Practically speaking, there are several useful values you can use here:

| Content set | Description |
| --- | --- |
| Inline | Character level elements, text |
| Block | Block-like elements, like paragraphs and lists |
| *false* | Any element that doesn't fit into the mold, for example `li` or `tr` |

By specifying a valid value here, all other elements that use that
content set will also allow your element, without you having to do
anything. If you specify *false*, you'll have to register
your element manually.

### Allowed children

Allowed children defines the elements that this element can contain.
The allowed values may range from none to a complex regexp depending on
your element.

If you've ever taken a look at the HTML DTD's before, you may have
noticed declarations like this:

```
<!ELEMENT LI - O (%flow;)*             -- list item -->
```

The `(%flow;)*` indicates the allowed children of the
`li` tag: `li` allows any number of flow
elements as its children. (The `- O` allows the closing tag to be
omitted, though in XML this is not allowed.) In HTML Purifier,
we'd write it like `Flow` (here's where the content sets
we were discussing earlier come into play). There are three shorthand
content models you can specify:

| Content model | Description |
| --- | --- |
| Empty | No children allowed, like `br` or `hr` |
| Inline | Any number of inline elements and text, like `span` |
| Flow | Any number of inline elements, block elements and text, like `div` |

This covers 90% of all the cases out there, but what about elements that
break the mold like `ul`? This guy requires at least one
child, and the only valid children for it are `li`. The
content model is: `Required: li`. There are two parts: the
first type determines what `ChildDef` will be used to validate
content models. The most common values are:

| Type | Description |
| --- | --- |
| Required | Children must be one or more of the valid elements |
| Optional | Children can be any number of the valid elements |
| Custom | Children must follow the DTD-style regex |

You can also implement your own `ChildDef`: this was done
for a few special cases in HTML Purifier such as `Chameleon`
(for `ins` and `del`), `StrictBlockquote`
and `Table`.

The second part specifies either valid elements or a regular expression.
Valid elements are separated with horizontal bars (|), i.e.
"`a | b | c`". Use #PCDATA to represent plain text.
Regular expressions are based off of DTD's style:

- Parentheses () are used for grouping
- Commas (,) separate elements that should come one after another
- Horizontal bars (|) indicate one or the other elements should be used
- Plus signs (+) are used for a one or more match
- Asterisks (\*) are used for a zero or more match
- Question marks (?) are used for a zero or one match

For example, "`a, b?, (c | d), e+, f*`" means "In this order,
one `a` element, at most one `b` element,
one `c` or `d` element (but not both), one or more
`e` elements, and any number of `f` elements."
Regex veterans should be able to jump right in, and those not so savvy
can always copy-paste W3C's content model definitions into HTML Purifier
and hope for the best.

A word of warning: while the regex format is extremely flexible on
the developer's side, it is
quite unforgiving on the user's side. If the user input does not *exactly*
match the specification, the entire contents of the element will
be nuked. This is why there is are specific content model types like
Optional and Required: while they could be implemented as `Custom:
(valid | elements)*`, the custom classes contain special recovery
measures that make sure as much of the user's original content gets
through. HTML Purifier's core, as a rule, does not use Custom.

One final note: you can also use Content Sets inside your valid elements
lists or regular expressions. In fact, the three shorthand content models
mentioned above are just that: abbreviations:

| Content model | Implementation |
| --- | --- |
| Inline | Optional: Inline | #PCDATA |
| Flow | Optional: Flow | #PCDATA |

When the definition is compiled, Inline will be replaced with a
horizontal-bar separated list of inline elements. Also, notice that
it does not contain text: you have to specify that yourself.

### Common attributes

Congratulations: you have just gotten over the proverbial hump (Allowed
children). Common attributes is much simpler, and boils down to
one question: does your element have the `id`, `style`,
`class`, `title` and `lang` attributes?
If so, you'll want to specify the `Common` attribute collection,
which contains these five attributes that are found on almost every
HTML element in the specification.

There are a few more collections, but they're really edge cases:

| Collection | Attributes |
| --- | --- |
| I18N | `lang`, possibly `xml:lang` |
| Core | `style`, `class`, `id` and `title` |

Common is a combination of the above-mentioned collections.

Readers familiar with the modularization may have noticed that the Core
attribute collection differs from that specified by the [abstract
modules of the XHTML Modularization 1.1](http://www.w3.org/TR/xhtml-modularization/abstract_modules.html#s_commonatts). We believe this section
to be in error, as `br` permits the use of the `style`
attribute even though it uses the `Core` collection, and
the DTD and XML Schemas supplied by W3C support our interpretation.

### Attributes

If you didn't read the [earlier section on
adding attributes](#addAttribute), read it now. The last parameter is simply
an array of attribute names to attribute implementations, in the exact
same format as `addAttribute()`.

### Putting it all together

We're going to implement `form`. Before we embark, lets
grab a reference implementation from over at the
[transitional DTD](http://www.w3.org/TR/html4/sgml/loosedtd.html):

```
<!ELEMENT FORM - - (%flow;)* -(FORM)   -- interactive form -->
<!ATTLIST FORM
  %attrs;                              -- %coreattrs, %i18n, %events --
  action      %URI;          #REQUIRED -- server-side form handler --
  method      (GET|POST)     GET       -- HTTP method used to submit the form--
  enctype     %ContentType;  "application/x-www-form-urlencoded"
  accept      %ContentTypes; #IMPLIED  -- list of MIME types for file upload --
  name        CDATA          #IMPLIED  -- name of form for scripting --
  onsubmit    %Script;       #IMPLIED  -- the form was submitted --
  onreset     %Script;       #IMPLIED  -- the form was reset --
  target      %FrameTarget;  #IMPLIED  -- render in this frame --
  accept-charset %Charsets;  #IMPLIED  -- list of supported charsets --
  >
```

Juicy! With just this, we can answer four of our five questions:

1. What is the element's name? **form**
2. What content set does this element belong to? **Block**
   (this needs a little sleuthing, I find the easiest way is to search
   the DTD for `FORM` and determine which set it is in.)
3. What are the allowed children of this element? **One
   or more flow elements, but no nested `form`s**
4. What attributes does the element allow that are general? **Common**
5. What attributes does the element allow that are specific to this element? **A whole bunch, see ATTLIST;
   we're going to do the vital ones: `action`, `method` and `name`**

Time for some code:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionID', 'enduser-customize.html tutorial');
$config->set('HTML.DefinitionRev', 1);
$config->set('Cache.DefinitionImpl', null); // remove this later!
$def = $config->getHTMLDefinition(true);
$def->addAttribute('a', 'target', new HTMLPurifier_AttrDef_Enum(
  array('_blank','_self','_target','_top')
));
$form = $def->addElement(
  'form',   // name
  'Block',  // content set
  'Flow', // allowed children
  'Common', // attribute collection
  array( // attributes
    'action*' => 'URI',
    'method' => 'Enum#get|post',
    'name' => 'ID'
  )
);
$form->excludes = array('form' => true);
```

Each of the parameters corresponds to one of the questions we asked.
Notice that we added an asterisk to the end of the `action`
attribute to indicate that it is required. If someone specifies a
`form` without that attribute, the tag will be axed.
Also, the extra line at the end is a special extra declaration that
prevents forms from being nested within each other.

And that's all there is to it! Implementing the rest of the form
module is left as an exercise to the user; to see more examples
check the [`library/HTMLPurifier/HTMLModule/`](http://repo.or.cz/w/htmlpurifier.git?a=tree;hb=HEAD;f=library/HTMLPurifier/HTMLModule) directory
in your local HTML Purifier installation.

## And beyond...

Perceptive users may have realized that, to a certain extent, we
have simply re-implemented the facilities of XML Schema or the
Document Type Definition. What you are seeing here, however, is
not just an XML Schema or Document Type Definition: it is a fully
expressive method of specifying the definition of HTML that is
a portable superset of the capabilities of the two above-mentioned schema
languages. What makes HTMLDefinition so powerful is the fact that
if we don't have an implementation for a content model or an attribute
definition, you can supply it yourself by writing a PHP class.

There are many facets of HTMLDefinition beyond the Advanced API I have
walked you through today. To find out more about these, you can
check out these source files:

- [`library/HTMLPurifier/HTMLModule.php`](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/HTMLModule.php)
- [`library/HTMLPurifier/ElementDef.php`](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/ElementDef.php)

## Notes for HTML Purifier 4.2.0 and earlier Previously, this tutorial gave some incorrect template code for editing raw definitions, and that template code will now produce the error "Due to a documentation error in previous version of HTML Purifier..." Here is how to mechanically transform old-style code into new-style code. First, identify all code that edits the raw definition object, and put it together. Ensure none of this code must be run on every request; if some sub-part needs to always be run, move it outside this block. Here is an example below, with the raw definition object code bolded. ``` $config = HTMLPurifier_Config::createDefault(); $config->set('HTML.DefinitionID', 'enduser-customize.html tutorial'); $config->set('HTML.DefinitionRev', 1); $def = $config->getHTMLDefinition(true); $def->addAttribute('a', 'target', 'Enum#_blank,_self,_target,_top'); $purifier = new HTMLPurifier($config); ``` Next, replace the raw definition retrieval with a maybeGetRawHTMLDefinition method call inside an if conditional, and place the editing code inside that if block. ``` $config = HTMLPurifier_Config::createDefault(); $config->set('HTML.DefinitionID', 'enduser-customize.html tutorial'); $config->set('HTML.DefinitionRev', 1); if ($def = $config->maybeGetRawHTMLDefinition()) { $def->addAttribute('a', 'target', 'Enum#_blank,_self,_target,_top'); } $purifier = new HTMLPurifier($config); ``` And you're done! Alternatively, if you're OK with not ever caching your code, the following will still work and not emit warnings. ``` $config = HTMLPurifier_Config::createDefault(); $def = $config->getHTMLDefinition(true); $def->addAttribute('a', 'target', 'Enum#_blank,_self,_target,_top'); $purifier = new HTMLPurifier($config); ``` A slightly less efficient version of this was what was going on with old versions of HTML Purifier. *Technical notes:* ajh pointed out on [in a forum topic](http://htmlpurifier.org/phorum/read.php?5,5164,5169#msg-5169) that HTML Purifier appeared to be repeatedly writing to the cache even when a cache entry already existed. Investigation lead to the discovery of the following infelicity: caching of customized definitions didn't actually work! The problem was that even though a cache file would be written out at the end of the process, there was no way for HTML Purifier to say, "Actually, I've already got a copy of your work, no need to reconfigure your customizations". This required the API to change: placing all of the customizations to the raw definition object in a conditional which could be skipped.
