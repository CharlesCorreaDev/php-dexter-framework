# Atualiza o mapa com um novo par chave-valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.offsetset.php

---

# WeakMap::offsetSet

(PHP 8)

WeakMap::offsetSet — Atualiza o mapa com um novo par chave-valor

### Descrição

public function **WeakMap::offsetSet**([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Atualiza o mapa com um novo par chave-valor. Se a chave já existia
no mapa, o valor antigo é substituído pelo novo.

### Parâmetros

`object`
:   O objeto que serve como chave no par de chave-valor.

`value`
:   O dado arbitrário que serve como valor no par chave-valor..

### Valor Retornado

Nenhum valor é retornado.

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
