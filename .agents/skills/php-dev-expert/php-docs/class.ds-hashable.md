# A interface Hashable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-hashable.php

---

# A interface Hashable

(PECL ds >= 1.0.0)

## Introdução

Hashable é uma interface que permite que objetos sejam usados como chaves.
É uma alternativa ao [spl\_object\_hash()](function.spl-object-hash.md),
que determina o hash de um objeto com base no seu identificador:
isso significa que dois objetos considerados iguais por uma definição implícita
não serão tratados como iguais porque não são a mesma instância.

[hash()](function.hash.md) é usada para retornar um valor escalar a ser usado como
o valor hash do objeto, o que determina onde ele vai na tabela de hash.
Embora esse valor não precise ser único, objetos que são iguais devem
ter o mesmo valor hash.

**equals()** é usada para determinar se dois objetos são iguais.
É garantido que o objeto de comparação será uma instância da mesma classe
que o objeto sujeito.

## Resumo da Interface

interface ****Ds\Hashable**** {

/\* Métodos \*/

abstract public function [equals](ds-hashable.equals.md)([object](language.types.object.md) `$obj`): [bool](language.types.boolean.md)

abstract public function [hash](ds-hashable.hash.md)(): [mixed](language.types.mixed.md)

}

## Índice

- [Ds\Hashable::equals](ds-hashable.equals.md) — Determina se um objeto é igual à instância atual
- [Ds\Hashable::hash](ds-hashable.hash.md) — Retorna um valor escalar a ser usado como valor de hash

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
