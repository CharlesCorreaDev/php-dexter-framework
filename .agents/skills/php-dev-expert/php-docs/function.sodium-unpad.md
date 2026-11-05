# Remove dados de preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-unpad.php

---

# sodium\_unpad

(PHP 7 >= 7.2.0, PHP 8)

sodium\_unpad — Remove dados de preenchimento

### Descrição

function **sodium\_unpad**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$block_size`): [string](language.types.string.md)

Remove o preenchimento de uma string preenchida. Tempo seguro.

### Parâmetros

`string`
:   String preenchida.

`block_size`
:   O tamanho do bloco para preenchimento.

### Valor Retornado

String não preenchida.

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
