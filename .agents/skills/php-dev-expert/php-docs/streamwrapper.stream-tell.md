# Obtém a posição atual de um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-tell.php

---

# streamWrapper::stream\_tell

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_tell — Obtém a posição atual de um fluxo

### Descrição

public function **streamWrapper::stream\_tell**(): [int](language.types.integer.md)

Este método é chamado em resposta a [fseek()](function.fseek.md) para
determinar a posição atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Deve retornar a posição atual do fluxo.

### Veja também

- **streamWrapper::stream\_tell()**

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
