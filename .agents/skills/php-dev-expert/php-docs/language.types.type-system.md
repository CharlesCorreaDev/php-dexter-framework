# Sistema de tipagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.type-system.php

---

## Sistema de tipagem

O PHP usa um sistema de tipagem nominal com uma forte relação de subtipagem comportamental.
A relação de subtipagem é verificada em tempo de compilação, enquanto a verificação de
tipos é verificada dinamicamente em tempo de execução.

O sistema de tipos do PHP suporta vários tipos atômicos que podem ser compostos
juntos para criar tipos mais complexos. Alguns desses tipos podem ser escritos como
[declarações de tipo](language.types.declarations.md)

### Tipos atômicos

Tipos atômicos são tipos internos que são fortemente integrados com a
linguagem e não podem ser reproduzidos com tipos definidos pelo usuário.

A lista de tipos básicos é:

- Tipos integrados

  - Tipos escalares:

    - tipo [bool](language.types.boolean.md)
    - tipo [int](language.types.integer.md)
    - tipo [float](language.types.float.md)
    - tipo [string](language.types.string.md)
  - tipo [array](language.types.array.md)
  - tipo [object](language.types.object.md)
  - tipo [resource](language.types.resource.md)
  - tipo [never](language.types.never.md)
  - tipo [void](language.types.void.md)
  - [Tipos de classes relativas:](language.types.relative-class-types.md)
    self, parent, e static
  - [Tipos únicos](language.types.singleton.md)

    - [false](language.types.singleton.md)
    - [true](language.types.singleton.md)
  - Tipos de unidade:

    - [null](language.types.null.md)
- Tipos definidos pelo usuário (geralmente chamados de tipos de classe)

  - [Interfaces](language.oop5.interfaces.md)
  - [Classes](language.oop5.basic.md#language.oop5.basic.class)
  - [Enumerações](language.types.enumerations.md)
- tipo [callable](language.types.callable.md)

#### Tipos escalares

Um valor é considerado escalar se for do tipo [int](language.types.integer.md),
[float](language.types.float.md), [string](language.types.string.md) ou [bool](language.types.boolean.md).

#### Tipos definidos pelo usuário

É possível definir tipos personalizados com
[interfaces](language.oop5.interfaces.md),
[classes](language.oop5.basic.md#language.oop5.basic.class) e
[enumerações](language.types.enumerations.md).
Essas são consideradas tipos definidos pelo usuário, ou tipos-classe.
Por exemplo, uma classe chamada `Elephant` pode ser definida,
em seguida objetos do tipo `Elephant` podem ser instanciados,
e uma função pode requerer um parâmetro do tipo `Elephant`.

### Tipos compostos

É possível combinar vários tipos atômicos em tipos compostos.
O PHP permite que os tipos sejam combinados das seguintes maneiras:

- Interseção de tipos de classes (interfaces e nomes de classes).
- União de tipos.

#### Tipos de interseção

Um tipo de interseção aceita valores que satisfazem várias
declarações de tipo de classe, em vez de uma única.
Os tipos individuais que formam o tipo de interseção são unidos pelo símbolo
`&`. Portanto, um tipo de interseção composto pelos tipos
`T`, `U`, e
`V` será escrito como `T&U&V`.

#### Tipos de união

Um tipo de união aceita valores de vários tipos diferentes,
em vez de um único.
Tipos individuais que formam o tipo de união são unidos pelo
`|` símbolo. Portanto, um tipo de união composto
pelos tipos `T`, `U`, e
`V` será escrito como `T|U|V`.
Se um dos tipos for um tipo de interseção, ele precisa ser colocado entre
parênteses para que seja escrito em DNF:
`T|(X&Y)`.

### Alias de tipo

O PHP suporta dois aliases de tipo: [mixed](language.types.mixed.md) e
[iterable](language.types.iterable.md) que corresponde ao
[tipo de união](language.types.type-system.md#language.types.type-system.composite.union)
de `object|resource|array|string|float|int|bool|null`
e `Traversable|array`, respectivamente.

> **Nota**:
>
> O PHP não suporta aliases de tipo definidos pelo usuário.

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
