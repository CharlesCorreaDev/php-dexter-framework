# Conversão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere.cast_by_ref.php

---

# Componere\cast\_by\_ref

(Componere 2 >= 2.1.2)

Componere\cast\_by\_ref — Conversão

### Descrição

function **Componere\cast\_by\_ref**([string](language.types.string.md) `$type`, [object](language.types.object.md) `$object`): [object](language.types.object.md)

### Parâmetros

**type**
:   Um tipo definido pelo usuário

`object`
:   Um objeto com um tipo definido pelo usuário, compatível com **Type**

### Valor Retornado

Um [object](language.types.object.md) do tipo **Type**, convertido de `object`, onde os membros são referências aos membros de `object`

### Erros/Exceções

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se o tipo de `object` for uma classe interna ou derivado de uma classe interna.

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se **Type** for uma interface

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se **Type** for um trait

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se **Type** for um abstract

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se **Type** não for compatível com o tipo de `object`

### Veja também

- [Componere\cast](componere.cast.md)

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
