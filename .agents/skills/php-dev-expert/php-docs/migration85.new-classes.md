# Novas Classes e Interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.new-classes.php

---

## Novas Classes e Interfaces

### Núcleo

- [NoDiscard](class.nodiscard.md)
- [DelayedTargetValidation](class.delayedtargetvalidation.md)

### Curl

- [CurlSharePersistentHandle](class.curlsharepersistenthandle.md)

### Filter

- [Filter\FilterException](class.filter-filterexception.md)
- [Filter\FilterFailedException](class.filter-filterfailedexception.md)

### Intl

- [IntlListFormatter](class.intllistformatter.md)

### URI

- [Uri\UriException](class.uri-uriexception.md)
- [Uri\InvalidUriException](class.uri-invaliduriexception.md)
- [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md)
- [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md)
- [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md)
- [Uri\WhatWg\UrlValidationErrorType](enum.uri-whatwg-urlvalidationerrortype.md)
- [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md)
- [Uri\WhatWg\Url](class.uri-whatwg-url.md)

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
