# Obtém o gênero de um nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender-gender.get.php

---

# Gender\Gender::get

(PECL gender >= 0.6.0)

Gender\Gender::get — Obtém o gênero de um nome

### Descrição

public function **Gender\Gender::get**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$country` = ?): [int](language.types.integer.md)

Obtém o gênero do nome em um país específico.

### Parâmetros

`name`
:   Nome a verificar.

`country`
:   ID do país identificado pela constante de classe Gender.

### Valor Retornado

Retorna o gênero do nome.

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
