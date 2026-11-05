# Converte maiúscula/minúscula em um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.foldcase.php

---

# IntlChar::foldCase

(PHP 7, PHP 8)

IntlChar::foldCase — Converte maiúscula/minúscula em um ponto de código

### Descrição

public static function **IntlChar::foldCase**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$options` = **`IntlChar::FOLD_CASE_DEFAULT`**): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

O caractere fornecido é mapeados para a sua maiúscula ou minúscula equivalente; se o caractere não tiver este mapeamento,
o prórpio caractere é retornado.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

`options`
:   Pode ser **`IntlChar::FOLD_CASE_DEFAULT`** (padrão)
    ou **`IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I`**.

### Valor Retornado

Retorna a *Conversão Simples* (cujo mapeamento não altera o tamanho da string) do ponto de código, se houver; caso contrário retorna o próprio ponto de código em caso de sucesso,
ou **`null`** em caso de falha.

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
