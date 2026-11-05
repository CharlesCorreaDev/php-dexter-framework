# Define as opções de comportamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.setflags.php

---

# ArrayObject::setFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayObject::setFlags — Define as opções de comportamento

### Descrição

public function **ArrayObject::setFlags**([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

Define as opções que alteram o comportamento do ArrayObject.

### Parâmetros

`flags`
:   O novo comportamento do ArrayObject.
    Podem ser máscara de bits ou constantes nomeadas. É fortemente
    recomendado o uso de constantes nomeadas para garantir compatibilidade com futuras
    versões.

    As opções de comportamento disponíveis estão listadas abaixo. Os significados
    reais dessas opções são descritos nas
    [constantes predefinidas](class.arrayobject.md#arrayobject.constants).

    **Opções de comportamento do ArrayObject**

    | Valor | Constante |
    | --- | --- |
    | 1 | [ArrayObject::STD\_PROP\_LIST](class.arrayobject.md#arrayobject.constants.std-prop-list) |
    | 2 | [ArrayObject::ARRAY\_AS\_PROPS](class.arrayobject.md#arrayobject.constants.array-as-props) |

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::setFlags()****

```
<?php
// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);

// Tenta usar chave de array como propriedade
var_dump($fruitsArrayObject->lemons);
// Define a opção para que as chaves de array possam ser usadas como propriedades do ArrayObject
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
// Tenta novamente
var_dump($fruitsArrayObject->lemons);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: Undefined property: ArrayObject::$lemons in ...
NULL
int(1)
```

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
