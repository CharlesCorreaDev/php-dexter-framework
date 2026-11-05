# Obtém a string da etiqueta de registro pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnishlog.gettagname.php

---

# VarnishLog::getTagName

(PECL varnish >= 0.6)

VarnishLog::getTagName — Obtém a string da etiqueta de registro pelo seu índice

### Descrição

public static function **VarnishLog::getTagName**([int](language.types.integer.md) `$index`): [string](language.types.string.md)

### Parâmetros

`index`
:   Índice da etiqueta do registro.

### Valor Retornado

Retorna o nome da etiqueta do registro como uma [string](language.types.string.md).

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
