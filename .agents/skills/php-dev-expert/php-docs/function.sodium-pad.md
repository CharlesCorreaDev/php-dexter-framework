# Adiciona dados de preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-pad.php

---

# sodium\_pad

(PHP 7 >= 7.2.0, PHP 8)

sodium\_pad — Adiciona dados de preenchimento

### Descrição

function **sodium\_pad**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$block_size`): [string](language.types.string.md)

Preencha uma string à direita até o comprimento desejado. Tempo seguro.

### Parâmetros

`string`
:   String não preenchida.

`block_size`
:   A string será preenchida até que seja um múltiplo par do tamanho do bloco.

### Valor Retornado

String preenchida.

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
