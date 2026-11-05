# Obtém o valor da propriedade para um nome de valor fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getpropertyvalueenum.php

---

# IntlChar::getPropertyValueEnum

(PHP 7, PHP 8)

IntlChar::getPropertyValueEnum — Obtém o valor da propriedade para um nome de valor fornecido

### Descrição

public static function **IntlChar::getPropertyValueEnum**([int](language.types.integer.md) `$property`, [string](language.types.string.md) `$name`): [int](language.types.integer.md)

Retorna o valor inteiro da propriedade para um nome de valor fornecido, como especificado no arquivo de dados Unicode PropertyValueAliases.txt.
Nomes curtos, longos e outras variantes são reconhecidos.

> **Nota**:
>
> Alguns dos nomes em PropertyValueAliases.txt somente serão reconhecidos com
> **`IntlChar::PROPERTY_GENERAL_CATEGORY_MASK`** e não com
> **`IntlChar::PROPERTY_GENERAL_CATEGORY`**.
> Estes incluem:
>
> - "C" / "Other"
> - "L" / "Letter"
> - "LC" / "Cased\_Letter"
> - "M" / "Mark"
> - "N" / "Number"
> - "P" / "Punctuation"
> - "S" / "Symbol"
> - "Z" / "Separator"

### Parâmetros

`property`
:   A propriedade Unicode a ser pesquisada (consulte as constantes `IntlChar::PROPERTY_*`).

    Se estiver fora do intervalo, ou se este método não funcionar com o valor fornecido,
    **`IntlChar::PROPERTY_INVALID_CODE`** é retornado.

`name`
:   O valor a ser correspondido. O nome é comparado usando "loose matching" (correspondência solta) como descrito em PropertyValueAliases.txt.

### Valor Retornado

Retorna o valor inteiro correspondente ou **`IntlChar::PROPERTY_INVALID_CODE`** se o nome fornecido
não corresponder a nenhum valor da propriedade informada ou se a propriedade for inválida.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getPropertyValueEnum(IntlChar::PROPERTY_BLOCK, 'greek') === IntlChar::BLOCK_CODE_GREEK);
var_dump(IntlChar::getPropertyValueEnum(IntlChar::PROPERTY_BIDI_CLASS, 'RIGHT_TO_LEFT') === IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT);
var_dump(IntlChar::getPropertyValueEnum(IntlChar::PROPERTY_BIDI_CLASS, 'uma string inventada') === IntlChar::PROPERTY_INVALID_CODE);
var_dump(IntlChar::getPropertyValueEnum(123456789, 'RIGHT_TO_LEFT') === IntlChar::PROPERTY_INVALID_CODE);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
bool(true)
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
