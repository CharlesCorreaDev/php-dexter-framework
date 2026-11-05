# Insere um ponto de interrupção em uma linha de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-break-file.php

---

# phpdbg\_break\_file

(PHP 5 >= 5.6.3, PHP 7, PHP 8)

phpdbg\_break\_file — Insere um ponto de interrupção em uma linha de um arquivo

### Descrição

function **phpdbg\_break\_file**([string](language.types.string.md) `$file`, [int](language.types.integer.md) `$line`): [void](language.types.void.md)

Insere um ponto de interrupção na `line` fornecida no
`file` fornecido.

### Parâmetros

`file`
:   O nome do arquivo.

`line`
:   O número da linha.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_break\_function()](function.phpdbg-break-function.md) - Insere um ponto de interrupção na entrada de uma função
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
