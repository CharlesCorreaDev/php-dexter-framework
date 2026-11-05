# Limpa todos os pontos de interrupção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-clear.php

---

# phpdbg\_clear

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

phpdbg\_clear — Limpa todos os pontos de interrupção

### Descrição

function **phpdbg\_clear**(): [void](language.types.void.md)

Limpa todos os pontos de interrupção que foram definidos,
por meio de uma das funções **phpdbg\_break\_\*()** ou interativamente no console.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_break\_file()](function.phpdbg-break-file.md) - Insere um ponto de interrupção em uma linha de um arquivo
- [phpdbg\_break\_function()](function.phpdbg-break-function.md) - Insere um ponto de interrupção na entrada de uma função
- [phpdbg\_break\_method()](function.phpdbg-break-method.md) - Insere um ponto de interrupção na entrada de um método
- [phpdbg\_break\_next()](function.phpdbg-break-next.md) - Insere um ponto de interrupção no próximo opcode

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
