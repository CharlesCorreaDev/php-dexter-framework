# Insere um ponto de interrupção na entrada de uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-break-function.php

---

# phpdbg\_break\_function

(PHP 5 >= 5.6.3, PHP 7, PHP 8)

phpdbg\_break\_function — Insere um ponto de interrupção na entrada de uma função

### Descrição

function **phpdbg\_break\_function**([string](language.types.string.md) `$function`): [void](language.types.void.md)

Insere um ponto de interrupção na entrada da `function` fornecida.

### Parâmetros

`function`
:   O nome da função.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_break\_file()](function.phpdbg-break-file.md) - Insere um ponto de interrupção em uma linha de um arquivo
- [phpdbg\_break\_method()](function.phpdbg-break-method.md) - Insere um ponto de interrupção na entrada de um método
- [phpdbg\_break\_next()](function.phpdbg-break-next.md) - Insere um ponto de interrupção no próximo opcode
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
