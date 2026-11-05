# Descarta todos os cabeçalhos definidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-response-abstract.clearheaders.php

---

# Yaf\_Response\_Abstract::clearHeaders

(Yaf >=1.0.0)

Yaf\_Response\_Abstract::clearHeaders — Descarta todos os cabeçalhos definidos

### Descrição

public function **Yaf\_Response\_Abstract::clearHeaders**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [Yaf\_Response\_Abstract::getHeader()](yaf-response-abstract.getheader.md) - getHeader
- [Yaf\_Response\_Abstract::setHeader()](yaf-response-abstract.setheader.md) - Define o cabeçalho da resposta

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
