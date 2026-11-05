# Define o cabeçalho da resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.setheader.php

---

# Yaf\_Response\_Abstract::setHeader

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::setHeader — Define o cabeçalho da resposta

### Descrição

public function **Yaf\_Response\_Abstract::setHeader**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`, [bool](language.types.boolean.md) `$replace` = ?): [bool](language.types.boolean.md)

Este método é usado para enviar um cabeçalho HTTP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [Yaf\_Response\_Abstract::getHeader()](yaf-response-abstract.getheader.md) - getHeader
- **Yaf\_Response\_Abstract::cleanHeaders()**

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
