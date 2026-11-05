# Retorna se o elemento atual é ou não um diretório que não seja '.' nem '..'

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivedirectoryiterator.haschildren.php

---

# RecursiveDirectoryIterator::hasChildren

(PHP 5, PHP 7, PHP 8)

RecursiveDirectoryIterator::hasChildren — Retorna se o elemento atual é ou não um diretório que não seja '.' nem '..'

### Descrição

public function **RecursiveDirectoryIterator::hasChildren**([bool](language.types.boolean.md) `$allowLinks` = **`false`**): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`allowLinks`

### Valor Retornado

Retorna se o atual elemento é um diretório, mas não '.' ou '..'

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
