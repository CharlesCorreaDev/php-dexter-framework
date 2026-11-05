# Novas Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.new-functions.php

---

## Novas Funções

### Núcleo

- [get\_error\_handler()](function.get-error-handler.md)
- [get\_exception\_handler()](function.get-exception-handler.md)
- [Closure::getCurrent()](closure.getcurrent.md)

### Curl

- [curl\_multi\_get\_handles()](function.curl-multi-get-handles.md)
- [curl\_share\_init\_persistent()](function.curl-share-init-persistent.md)

### DOM

- **Dom\Element::getElementsByClassName()**
- **Dom\Element::insertAdjacentHTML()**

### Enchant

- [enchant\_dict\_remove\_from\_session()](function.enchant-dict-remove-from-session.md)
- [enchant\_dict\_remove()](function.enchant-dict-remove.md)

### Intl

- [Locale::isRightToLeft()](locale.isrighttoleft.md)
- [locale\_is\_right\_to\_left()](locale.isrighttoleft.md)
- [grapheme\_levenshtein()](function.grapheme-levenshtein.md)

### Opcache

- [opcache\_is\_script\_cached\_in\_file\_cache()](function.opcache-is-script-cached-in-file-cache.md)

### PDO\_SQLITE

- [Pdo\Sqlite::setAuthorizer()](pdo-sqlite.setauthorizer.md)

### PGSQL

- [pg\_close\_stmt()](function.pg-close-stmt.md)
- **pg\_service()**

### Reflection

- [ReflectionConstant::getFileName()](reflectionconstant.getfilename.md)
- [ReflectionConstant::getExtension()](reflectionconstant.getextension.md)
- [ReflectionConstant::getExtensionName()](reflectionconstant.getextensionname.md)
- [ReflectionConstant::getAttributes()](reflectionconstant.getattributes.md)
- [ReflectionProperty::getMangledName()](reflectionproperty.getmangledname.md)

### Sqlite

- [Sqlite3Stmt::busy()](sqlite3stmt.busy.md)

### Standard

- [array\_first()](function.array-first.md)
- [array\_last()](function.array-last.md)

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
