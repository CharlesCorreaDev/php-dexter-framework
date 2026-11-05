# Trabalhando com namespaces XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xmlwriter-namespace.php

---

## Trabalhando com namespaces XML

Este exemplo mostra como criar elementos XML com namespace.

**Exemplo #1 Trabalhando com namespaces XML**

```
<?php

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');
// Um primeiro elemento
xmlwriter_start_element_ns($xw,'prefix', 'books', 'uri');
xmlwriter_start_attribute($xw, 'isbn');

xmlwriter_start_attribute_ns($xw, 'prefix', 'isbn', 'uri');
xmlwriter_end_attribute($xw);

xmlwriter_end_attribute($xw);

xmlwriter_text($xw, 'book1');
xmlwriter_end_element($xw);

xmlwriter_end_document($xw);

echo xmlwriter_output_memory($xw);
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<prefix:books isbn="" prefix:isbn="" xmlns:prefix="uri">book1</prefix:books>
```

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
