# Define a versão OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setversion.php

---

# OAuth::setVersion

(PECL OAuth >= 0.99.1)

OAuth::setVersion — Define a versão OAuth

### Descrição

public function **OAuth::setVersion**([string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

Define a versão OAuth para requisições subsequentes.

### Parâmetros

`version`
:   Versão OAuth, o valor padrão é sempre "1.0".

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
