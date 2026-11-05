# Obtém nomes semelhantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender-gender.similarnames.php

---

# Gender\Gender::similarNames

(PECL gender >= 0.9.0)

Gender\Gender::similarNames — Obtém nomes semelhantes

### Descrição

public function **Gender\Gender::similarNames**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$country` = ?): [array](language.types.array.md)

Obtém nomes semelhantes para o nome e país fornecidos.

### Parâmetros

`name`
:   Nome a verificar.

`country`
:   ID do país identificado pela constante de classe Gender. Se omitido, ANY\_COUNTRY é usado.

### Valor Retornado

Retorna um array com os nomes semelhantes encontrados.

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
