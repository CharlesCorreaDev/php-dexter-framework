# Este método verifica se uma chave faz parte do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.exists.php

---

# QuickHashStringIntHash::exists

(No version information available, might only be in Git)

QuickHashStringIntHash::exists — Este método verifica se uma chave faz parte do hash

### Descrição

public function **QuickHashStringIntHash::exists**([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

Este método verifica se uma entrada com a chave fornecida existe no
hash.

### Parâmetros

`key`
:   A chave da entrada para verificar se ela existe no hash.

### Valor Retornado

Retorna **`true`** quando a entrada foi encontrada, ou **`false`** quando a entrada não foi
encontrada.

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
