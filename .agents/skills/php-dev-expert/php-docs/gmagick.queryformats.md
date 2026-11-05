# Retorna formatos suportados pelo Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.queryformats.php

---

# Gmagick::queryformats

(PECL gmagick >= Unknown)

Gmagick::queryformats — Retorna formatos suportados pelo Gmagick

### Descrição

public function **Gmagick::queryformats**([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

Retorna formatos suportados pelo [Gmagick](class.gmagick.md).

### Parâmetros

`pattern`
:   Especifica uma [string](language.types.string.md) contendo um padrão.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
