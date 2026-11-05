# Este método verifica se uma chave faz parte do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.exists.php

---

# QuickHashIntStringHash::exists

(PECL quickhash >= Unknown)

QuickHashIntStringHash::exists — Este método verifica se uma chave faz parte do hash

### Descrição

public function **QuickHashIntStringHash::exists**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

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
