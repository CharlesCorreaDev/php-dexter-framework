# Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.parselocale.php

---

# Locale::parseLocale

# locale\_parse

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::parseLocale -- locale\_parse — Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::parseLocale**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

Estilo procedural

function **locale\_parse**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade.

### Parâmetros

`locale`
:   A localidade da qual será extraído o array de sub-etiquetas. Nota: as sub-etiquetas
    'variant' e 'private' podem ter no máximo 15 valores enquanto que 'extlang' pode ter
    no máximo 3 valores.

### Valor Retornado

Retorna um array contendo uma lista de pares de chave-valor, onde as chaves
identificam as sub-etiquetas do ID de localidade em particular, e os valores são
os associados às sub-etiquetas. O array será ordenado como nas sub-etiquetas
do ID de localidade, por exemplo, se as variantes são '-varX-varY-varZ', o array
retornado terá variant0=>varX, variant1=>varY,
variant2=>varZ.

Retorna **`null`** quando o comprimento de `locale` exceder
**`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_parse()****

```
<?php
$arr = locale_parse('sl-Latn-IT-nedis');
if ($arr) {
    foreach ($arr as $key => $value) {
        echo "$key : $value , ";
    }
}
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$arr = Locale::parseLocale('sl-Latn-IT-nedis');
if ($arr) {
    foreach ($arr as $key => $value) {
        echo "$key : $value , ";
    }
}
?>
```

O exemplo acima produzirá:

```
language : sl , script : Latn , region : IT , variant0 : NEDIS ,
```

### Veja também

- [locale\_compose()](locale.composelocale.md) - Retorna ID de localidade corretamente ordenado e delimitado

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
