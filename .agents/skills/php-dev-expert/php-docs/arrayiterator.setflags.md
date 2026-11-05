# Define as flags que irão alterar o comportamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.setflags.php

---

# ArrayIterator::setFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayIterator::setFlags — Define as flags que irão alterar o comportamento

### Descrição

public function **ArrayIterator::setFlags**([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

Define as flags que alteram o comportamento do ArrayIterator

### Parâmetros

`flags`
:   O novo comportamento do ArrayIterator.
    Podem ser utilizadas máscara de bits ou constantes. O uso de constantes
    é fortemente encorajado para garantir compatibilidade com versões
    futuras.

    As flags disponíveis estão listadas abaixo. O atual
    significado das flags estão descritas nas
    [constantes predefinidas](class.arrayiterator.md#arrayiterator.constants).

    **Flags do comportamento do ArrayIterator**

    | value | constant |
    | --- | --- |
    | 1 | [ArrayIterator::STD\_PROP\_LIST](class.arrayiterator.md#arrayiterator.constants.std-prop-list) |
    | 2 | [ArrayIterator::ARRAY\_AS\_PROPS](class.arrayiterator.md#arrayiterator.constants.array-as-props) |

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [ArrayIterator::getFlags()](arrayiterator.getflags.md) - Retorna as flags de comportamento

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
