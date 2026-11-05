# Clona a exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.clone.php

---

# Exception::\_\_clone

(PHP 5, PHP 7, PHP 8)

Exception::\_\_clone — Clona a exceção

### Descrição

private function **Exception::\_\_clone**(): [void](language.types.void.md)

[Exception](class.exception.md)s não podem ser clonadas,
e isso resultará no lançamento de um [Error](class.error.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Exceções *não* são clonáveis.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | **Exception::\_\_clone()** não é mais final. |

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
