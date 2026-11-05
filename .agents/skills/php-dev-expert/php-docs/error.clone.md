# Clona o erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.clone.php

---

# Error::\_\_clone

(PHP 7, PHP 8)

Error::\_\_clone — Clona o erro

### Descrição

private function **Error::\_\_clone**(): [void](language.types.void.md)

Error não pode ser clonada, então o método resulta em um erro fatal.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Erros *não* podem ser clonados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | **Error::\_\_clone()** não é mais final. |

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
