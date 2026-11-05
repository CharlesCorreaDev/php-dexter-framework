# Verifica se um nome é apelido de outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender-gender.isnick.php

---

# Gender\Gender::isNick

(PECL gender >= 0.9.0)

Gender\Gender::isNick — Verifica se um nome é apelido de outro

### Descrição

public function **Gender\Gender::isNick**([string](language.types.string.md) `$name0`, [string](language.types.string.md) `$name1`, [int](language.types.integer.md) `$country` = ?): [array](language.types.array.md)

Verifica se name0 é apelido de name1.

### Parâmetros

`name0`
:   Nome a verificar.

`name1`
:   Nome a verificar.

`country`
:   ID do país identificado pela constante de classe Gender. Se omitido, ANY\_COUNTRY é usado.

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
