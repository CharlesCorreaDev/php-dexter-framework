# Obtém o nome Unicode de uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getpropertyname.php

---

# IntlChar::getPropertyName

(PHP 7, PHP 8)

IntlChar::getPropertyName — Obtém o nome Unicode de uma propriedade

### Descrição

public static function **IntlChar::getPropertyName**([int](language.types.integer.md) `$property`, [int](language.types.integer.md) `$type` = **`IntlChar::LONG_PROPERTY_NAME`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome Unicode de uma propriedade fornecida, como especificado no arquivo de banco de dados PropertyAliases.txt.

Além disso, esta função mapeia a propriedade **`IntlChar::PROPERTY_GENERAL_CATEGORY_MASK`** para os nomes
sintéticos "gcm" / "General\_Category\_Mask". Estes nomes não estão no arquivo PropertyAliases.txt.

Esta função é complementar à [IntlChar::getPropertyEnum()](intlchar.getpropertyenum.md).

### Parâmetros

`property`
:   A propriedade Unicode a ser pesquisada (consulte as constantes `IntlChar::PROPERTY_*`).

    **`IntlChar::PROPERTY_INVALID_CODE`** não deve ser usada.
    Além disso, se `property` estiver fora do intervalo, **`false`** é retornado.

`type`
:   Selector para o nome que deve ser obtido. Se for do intervalo, **`false`** é retornado.

    Todas as propriedades têm um nome longo. A maioria tem um nome curto, mas algumas não têm. Unicode permite nomes adicionais;
    caso presentes, estes serão retornados adicionando-se 1, 2, etc. a **`IntlChar::LONG_PROPERTY_NAME`**.

### Valor Retornado

Retorna o nome, ou **`false`** se `property` ou `type`
estiverem fora de seus intervalos.

Se um `type` retornar **`false`**, todos os valores maiores de
`type` retornarão **`false`**, com uma exceção: se **`false`** for retornado para
**`IntlChar::SHORT_PROPERTY_NAME`**, então **`IntlChar::LONG_PROPERTY_NAME`**
(e maiores) podem ainda retornar valores não-**`false`**.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getPropertyName(IntlChar::PROPERTY_BIDI_CLASS));
var_dump(IntlChar::getPropertyName(IntlChar::PROPERTY_BIDI_CLASS, IntlChar::SHORT_PROPERTY_NAME));
var_dump(IntlChar::getPropertyName(IntlChar::PROPERTY_BIDI_CLASS, IntlChar::LONG_PROPERTY_NAME));
var_dump(IntlChar::getPropertyName(IntlChar::PROPERTY_BIDI_CLASS, IntlChar::LONG_PROPERTY_NAME + 1));
?>
```

O exemplo acima produzirá:

```
string(10) "Bidi_Class"
string(2) "bc"
string(10) "Bidi_Class"
bool(false)
```

### Veja também

- [IntlChar::getPropertyEnum()](intlchar.getpropertyenum.md) - Obtém o valor da constante da propriedade para uma propriedade informada

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
