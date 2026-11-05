# Classes Predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.classes.php

---

## Classes Predefinidas

Esta seção lista classes predefinidas padrão. Extensões diversas
definem outras classes que são descritas em suas referências.

### Classes Definidas Padrão

Estas classes são definidas dentro do conjunto padrão de funções incluídas
na compilação do PHP.

[Directory](class.directory.md)
:   Criada pela função [dir()](function.dir.md).

[stdClass](class.stdclass.md)
:   Uma classe vazia criada como o resultado de
    [coerção para
    objeto](language.types.object.md#language.types.object.casting) ou funções padrão da linguagem.

[\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md)
:   Possivelmente criada pela função [unserialize()](function.unserialize.md).

[Exception](class.exception.md)

[ErrorException](class.errorexception.md)

[php\_user\_filter](class.php-user-filter.md)

[Closure](class.closure.md)
:   A classe predefinida final [Closure](class.closure.md)
    é utilizada para representar [funções anônimas](functions.anonymous.md).

[Generator](class.generator.md)
:   A classe predefinida final [Generator](class.generator.md)
    é utilizada para representar [geradores](language.generators.md).

[ArithmeticError](class.arithmeticerror.md)

[AssertionError](class.assertionerror.md)

[DivisionByZeroError](class.divisionbyzeroerror.md)

[Error](class.error.md)

[Throwable](class.throwable.md)

[ParseError](class.parseerror.md)

[TypeError](class.typeerror.md)

### Classes especiais

Os seguintes identificadores não podem ser usados como nome de classe pois eles têm um
propósito especial.

**self**
:   [Classe
    atual](language.oop5.paamayim-nekudotayim.md).

**static**
:   [Classe atual em
    tempo de execução](language.oop5.late-static-bindings.md).

**parent**
:   [Classe
    pai](language.oop5.paamayim-nekudotayim.md).

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
