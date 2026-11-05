# Retorna um array representando as métricas da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.queryfontmetrics.php

---

# Gmagick::queryfontmetrics

(PECL gmagick >= Unknown)

Gmagick::queryfontmetrics — Retorna um array representando as métricas da fonte

### Descrição

public function **Gmagick::queryfontmetrics**([GmagickDraw](class.gmagickdraw.md) `$draw`, [string](language.types.string.md) `$text`): [array](language.types.array.md)

MagickQueryFontMetrics() retorna um array representando as métricas da fonte.

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
