# Verifica se um certo objeto está no mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.offsetexists.php

---

# WeakMap::offsetExists

(PHP 8)

WeakMap::offsetExists — Verifica se um certo objeto está no mapa

### Descrição

public function **WeakMap::offsetExists**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se o objeto informado está referenciado no mapa.

### Parâmetros

`object`
:   Objeto a ser verificado.

### Valor Retornado

Retorna **`true`** se o objeto estiver contido no mapa, **`false`** caso contrário.

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
