# Determina se um objeto é igual à instância atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-hashable.equals.php

---

# Ds\Hashable::equals

(PECL ds >= 1.0.0)

Ds\Hashable::equals — Determina se um objeto é igual à instância atual

### Descrição

abstract public function **Ds\Hashable::equals**([object](language.types.object.md) `$obj`): [bool](language.types.boolean.md)

Determina se outro objeto é igual à instância atual.

Este método permite que objetos sejam usados como chaves em estruturas como
[Ds\Map](class.ds-map.md) e [Ds\Set](class.ds-set.md), ou qualquer
outra estrutura de pesquisa que respeite esta interface.

> **Nota**:
>
> É garantido que `obj` é uma instância da mesma classe.

**Cuidado**

É importante que objetos que são iguais também tenham o mesmo valor de hash.
Veja [Ds\Hashable::hash()](ds-hashable.hash.md).

### Parâmetros

`obj`
:   O objeto para comparar com a instância atual, que é sempre uma instância
    da mesma classe.

### Valor Retornado

**`true`** se forem iguais, **`false`** caso contrário.

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
