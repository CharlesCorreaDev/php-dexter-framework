# HTMLPurifier: Main Page

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/

---

|  |
| --- |
| HTMLPurifier 4.4.0 |

- [Main Page](doxygen__index.md)
- [Related Pages](doxygen__pages.md)
- [Classes](doxygen__annotated.md)
- [Files](doxygen__files.md)

HTMLPurifier Documentation

HTML Purifier is an HTML filter that will take an arbitrary snippet of HTML and rigorously test, validate and filter it into a version that is safe for output onto webpages. It achieves this by:

1. Lexing (parsing into tokens) the document,
2. Executing various strategies on the tokens:
   1. Removing all elements not in the whitelist,
   2. Making the tokens well-formed,
   3. Fixing the nesting of the nodes, and
   4. Validating attributes of the nodes; and
3. Generating HTML from the purified tokens.

However, most users will only need to interface with the [HTMLPurifier](doxygen__classHTMLPurifier.md "Facade that coordinates HTML Purifier's subsystems in order to purify HTML.") and [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.").

- Generated on Wed Jan 18 2012 22:58:16 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
