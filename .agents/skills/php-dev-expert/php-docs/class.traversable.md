# A interface Traversable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.traversable.php

---

# A interface [Traversable](class.traversable.md)

(PHP 5, PHP 7, PHP 8)

## Introdução

Interface para detectar se uma classe é percorrível utilizando o [`foreach`](control-structures.foreach.md).

Interface básica abstrata que não pode ser implementada sozinha. Ao invés, deve
ser implementada as interfaces [IteratorAggregate](class.iteratoraggregate.md) ou
[Iterator](class.iterator.md).

## Resumo da Interface

interface ****Traversable**** {

}

Esta interface não possui métodos, seu único propósito é servir como interface
base para todas as classes percorríveis.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A interface **Traversable** agora pode ser implementada em classes abstratas. Classes estendidas precisam implementar [Iterator](class.iterator.md) ou [IteratorAggregate](class.iteratoraggregate.md). |

## Notas

> **Nota**:
>
> Classes internas (built-in) que implementam essa interface podem ser utilizadas em
> um construtor de linguagem [`foreach`](control-structures.foreach.md) e não precisam implementar as interfaces
> [IteratorAggregate](class.iteratoraggregate.md) ou
> [Iterator](class.iterator.md).

> **Nota**:
>
> Anteriormente ao PHP 8.0.0, esta interface interna do mecanismo não podia ser implementada diretamente
> em scripts PHP — nem mesmo por classes abstratas. [IteratorAggregate](class.iteratoraggregate.md)
> ou [Iterator](class.iterator.md) precisavam ser utilizadas em seu lugar.

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
