# Registra uma função de completamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-completion-function.php

---

# readline\_completion\_function

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_completion\_function — Registra uma função de completamento

### Descrição

function **readline\_completion\_function**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Esta função registra uma função de completamento. Este é o mesmo tipo de
funcionamento ao pressionar a tecla de tabulação enquanto estiver usando o Bash.

### Parâmetros

`callback`
:   Deve-se usar o nome de uma função existente que aceite uma
    linha de comando parcial e retorne um array de combinações possíveis.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
