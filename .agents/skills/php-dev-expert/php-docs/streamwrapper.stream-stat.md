# Obtém informação sobre um recurso de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-stat.php

---

# streamWrapper::stream\_stat

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_stat — Obtém informação sobre um recurso de arquivo

### Descrição

public function **streamWrapper::stream\_stat**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Este método é chamado em resposta a [fstat()](function.fstat.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Consulte [stat()](function.stat.md).

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

### Veja também

- [stat()](function.stat.md) - Obtém informações sobre um arquivo
- [streamwrapper::url\_stat()](streamwrapper.url-stat.md) - Obtém informação sobre um arquivo

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
