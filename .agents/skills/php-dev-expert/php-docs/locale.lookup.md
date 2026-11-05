# Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.lookup.php

---

# Locale::lookup

# locale\_lookup

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::lookup -- locale\_lookup — Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua

### Descrição

Estilo orientado a objetos

public static function **Locale::lookup**(  
    [array](language.types.array.md) `$languageTag`,  
    [string](language.types.string.md) `$locale`,  
    [bool](language.types.boolean.md) `$canonicalize` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$defaultLocale` = **`null`**  
): [?](language.types.null.md)[string](language.types.string.md)

Estilo procedural

function **locale\_lookup**(  
    [array](language.types.array.md) `$languageTag`,  
    [string](language.types.string.md) `$locale`,  
    [bool](language.types.boolean.md) `$canonicalize` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$defaultLocale` = **`null`**  
): [?](language.types.null.md)[string](language.types.string.md)

Pesquisa os itens em `languageTag` pela melhor correspondência ao
intervalo de línguas especificado em `locale` de acordo com o
algoritmo de procura da RFC 4647.

### Parâmetros

`languageTag`
:   Um [array](language.types.array.md) contendo uma lista de etiquetas de língua para comparar a
    `locale`. Máximo de 100 itens permitidos.

`locale`
:   A localidade a ser usada como faixa de línguas na pesquisa.

`canonicalize`
:   Se verdedeiro, os argumentos serão convertidos para a forma canônica antes
    de se fazer a correspondência.

`defaultLocale`
:   A localidade a ser usada se nenhuma correspondência for encontrada.

### Valor Retornado

A etiqueta de língua que melhor corresponder ou o valor padrão.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | `defaultLocale` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **locale\_lookup()****

```
<?php
$arr = array(
    'de-DEVA',
    'de-DE-1996',
    'de',
    'de-De'
);
echo locale_lookup($arr, 'de-DE-1996-x-prv1-prv2', true, 'en_US');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$arr = array(
    'de-DEVA',
    'de-DE-1996',
    'de',
    'de-De'
);
echo Locale::lookup($arr, 'de-DE-1996-x-prv1-prv2', true, 'en_US');
?>
```

O exemplo acima produzirá:

```
de_de_1996
```

### Veja também

- [locale\_filter\_matches()](locale.filtermatches.md) - Verifica se um filtro de etiqueta de língua corresponde à localidade

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
