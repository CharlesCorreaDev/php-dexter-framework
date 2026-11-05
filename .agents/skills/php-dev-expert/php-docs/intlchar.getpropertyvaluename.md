# Obtém o nome Unicode para um valor de propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getpropertyvaluename.php

---

# IntlChar::getPropertyValueName

(PHP 7, PHP 8)

IntlChar::getPropertyValueName — Obtém o nome Unicode para um valor de propriedade

### Descrição

public static function **IntlChar::getPropertyValueName**([int](language.types.integer.md) `$property`, [int](language.types.integer.md) `$value`, [int](language.types.integer.md) `$type` = **`IntlChar::LONG_PROPERTY_NAME`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome Unicode para um valor de propriedade fornecido, como especificado no arquivo de dados Unicode PropertyValueAliases.txt.

> **Nota**:
>
> Alguns nomes no PropertyValueAliases.txt somente podem ser obtidos usando-se
> **`IntlChar::PROPERTY_GENERAL_CATEGORY_MASK`** e não
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

    Se estiver fora do intervalo ou se este método não funcionar com o valor fornecido, **`false`** é retornado.

`value`
:   Seletor de um valor para a propriedade fornecida. Se estiver fora dos limites, **`false`** é retornado.

    Em geral, nomes válidos variam de `0` até um máximo. Existem exceções:

    - Valores de **`IntlChar::PROPERTY_BLOCK`** começam no valor diferente de zero **`IntlChar::BLOCK_CODE_BASIC_LATIN`**.
    - Valores **`IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS`** não são contíguos e variam de 0 a 240.

`type`
:   Seletor para o nome a ser obtido. Se estiver fora dos limites, **`false`** é retornado.

    Todos os valores têm um nome longo. A maioria tem um nome curto, mas alguns não têm. Unicode permite nomes adicionais;
    se presentes, estes serão retornados adicionando-se 1, 2, etc. a **`IntlChar::LONG_PROPERTY_NAME`**.

### Valor Retornado

Retorna o nome ou **`false`** se `property` ou `type`
estiverem fora de seus intervalos. Retorna **`null`** em caso de falha.

Se um `type` retornar **`false`**, todos os valores maiores de `type`
retornarão **`false`**, com uma exceção: se **`false`** for retornado para **`IntlChar::SHORT_PROPERTY_NAME`**,
então **`IntlChar::LONG_PROPERTY_NAME`** (e acima) podem ainda retornar valor não-**`false`**.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK));
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK, IntlChar::SHORT_PROPERTY_NAME));
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK, IntlChar::LONG_PROPERTY_NAME));
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK, IntlChar::LONG_PROPERTY_NAME + 1));
?>
```

O exemplo acima produzirá:

```
string(16) "Greek_And_Coptic"
string(5) "Greek"
string(16) "Greek_And_Coptic"
bool(false)
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
