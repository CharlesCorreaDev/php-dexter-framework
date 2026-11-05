# Insere um ponto de interrupção no próximo opcode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-break-next.php

---

# phpdbg\_break\_next

(PHP 5 >= 5.6.3, PHP 7, PHP 8)

phpdbg\_break\_next — Insere um ponto de interrupção no próximo opcode

### Descrição

function **phpdbg\_break\_next**(): [void](language.types.void.md)

Insere um ponto de interrupção no próximo opcode.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_break\_file()](function.phpdbg-break-file.md) - Insere um ponto de interrupção em uma linha de um arquivo
- [phpdbg\_break\_function()](function.phpdbg-break-function.md) - Insere um ponto de interrupção na entrada de uma função
- [phpdbg\_break\_method()](function.phpdbg-break-method.md) - Insere um ponto de interrupção na entrada de um método
- [phpdbg\_clear()](function.phpdbg-clear.md) - Limpa todos os pontos de interrupção

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
