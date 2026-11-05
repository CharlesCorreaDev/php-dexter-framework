# The OCICollection class

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ocicollection.php

---

# The OCICollection class

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

## Introdução

Funcionalidade OCI8 Collection.

> **Nota**:
>
> A classe **OCI-Collection** foi renomeada para **OCICollection** no PHP 8 e OCI8 3.0.0 para adequação aos padrões de nomes do PHP.

## Resumo da classe

class ****OCICollection****
{

/\* Métodos \*/

public function [append](ocicollection.append.md)([string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [assign](ocicollection.assign.md)([OCICollection](class.ocicollection.md) `$from`): [bool](language.types.boolean.md)

public function [assignElem](ocicollection.assignelem.md)([int](language.types.integer.md) `$index`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [free](ocicollection.free.md)(): [bool](language.types.boolean.md)

public function [getElem](ocicollection.getelem.md)([int](language.types.integer.md) `$index`): [string](language.types.string.md)|[float](language.types.float.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [max](ocicollection.max.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [size](ocicollection.size.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [trim](ocicollection.trim.md)([int](language.types.integer.md) `$num`): [bool](language.types.boolean.md)

}

## Índice

- [OCICollection::append](ocicollection.append.md) — Adiciona elemento à coleção
- [OCICollection::assign](ocicollection.assign.md) — Atribui um valor de outra coleção existente a esta coleção
- [OCICollection::assignElem](ocicollection.assignelem.md) — Atribui um valor ao elemento da coleção
- [OCICollection::free](ocicollection.free.md) — Libera os recursos associados ao objeto de coleção
- [OCICollection::getElem](ocicollection.getelem.md) — Retorna o valor do elemento
- [OCICollection::max](ocicollection.max.md) — Retorna o número máximo de elementos na coleção
- [OCICollection::size](ocicollection.size.md) — Retorna o tamanho da coleção
- [OCICollection::trim](ocicollection.trim.md) — Corta elementos do final da coleção

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
