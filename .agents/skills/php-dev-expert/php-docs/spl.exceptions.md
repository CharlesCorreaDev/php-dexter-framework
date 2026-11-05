# Exceções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spl.exceptions.php

---

# Exceções

## Índice

- [BadFunctionCallException](class.badfunctioncallexception.md)
- [BadMethodCallException](class.badmethodcallexception.md)
- [DomainException](class.domainexception.md)
- [InvalidArgumentException](class.invalidargumentexception.md)
- [LengthException](class.lengthexception.md)
- [LogicException](class.logicexception.md)
- [OutOfBoundsException](class.outofboundsexception.md)
- [OutOfRangeException](class.outofrangeexception.md)
- [OverflowException](class.overflowexception.md)
- [RangeException](class.rangeexception.md)
- [RuntimeException](class.runtimeexception.md)
- [UnderflowException](class.underflowexception.md)
- [UnexpectedValueException](class.unexpectedvalueexception.md)

SPL fornece um conjunto de exceções padrão.

## Árvore de Classes de Exceções SPL

- [LogicException](class.logicexception.md) (estende [Exception](class.exception.md))

  - [BadFunctionCallException](class.badfunctioncallexception.md)

    - [BadMethodCallException](class.badmethodcallexception.md)
  - [DomainException](class.domainexception.md)
  - [InvalidArgumentException](class.invalidargumentexception.md)
  - [LengthException](class.lengthexception.md)
  - [OutOfRangeException](class.outofrangeexception.md)
- [RuntimeException](class.runtimeexception.md) (estende [Exception](class.exception.md))

  - [OutOfBoundsException](class.outofboundsexception.md)
  - [OverflowException](class.overflowexception.md)
  - [RangeException](class.rangeexception.md)
  - [UnderflowException](class.underflowexception.md)
  - [UnexpectedValueException](class.unexpectedvalueexception.md)

## Veja também

- [Exceções predefinidas](reserved.exceptions.md)

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
