# Windows Support

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.windows-support.php

---

## Windows Support

### Core

The official Windows builds now use Visual Studio 2026 (VS18).

### LibXML

The libxml2 library used by the official Windows builds has been upgraded
to version 2.15.3.
As a result, [DOMDocument::$documentURI](class.domdocument.md#domdocument.props.documenturi) for documents
loaded from a local file now contains a native filesystem path instead of
a file URI.

### OpenSSL

The OpenSSL library used by the official Windows builds has been upgraded
to OpenSSL 4.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
