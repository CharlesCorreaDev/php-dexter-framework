# Retorna as fontes configuradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.queryfonts.php

---

# Gmagick::queryfonts

(PECL gmagick >= Unknown)

Gmagick::queryfonts — Retorna as fontes configuradas

### Descrição

public function **Gmagick::queryfonts**([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

Retorna fontes suportadas pelo Gmagick.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
