# Conecta-se a um dicionário de nomes externo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender-gender.connect.php

---

# Gender\Gender::connect

(PECL gender >= 0.6.0)

Gender\Gender::connect — Conecta-se a um dicionário de nomes externo

### Descrição

public function **Gender\Gender::connect**([string](language.types.string.md) `$dsn`): [bool](language.types.boolean.md)

Conecta-se a um dicionário de nomes externo. Atualmente, apenas fluxos são
suportados.

### Parâmetros

`dsn`
:   DSN a ser aberto

### Valor Retornado

Booleano como sucesso ou falha.

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
