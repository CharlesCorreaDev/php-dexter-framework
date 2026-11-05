# Retorna ID de localidade corretamente ordenado e delimitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.composelocale.php

---

# Locale::composeLocale

# locale\_compose

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::composeLocale -- locale\_compose — Retorna ID de localidade corretamente ordenado e delimitado

### Descrição

Estilo orientado a objetos

public static function **Locale::composeLocale**([array](language.types.array.md) `$subtags`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_compose**([array](language.types.array.md) `$subtags`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna um ID de localidade corretamente ordenado e delimitado. As chaves identificam as
sub-etiquetas de ID da localidade em particular, e os valores são associados às
sub-etiquetas.

### Parâmetros

`subtags`
:   Um [array](language.types.array.md) contendo uma lista de pares de chave-valor, onde as chaves identificam
    as sub-etiquetas de ID da localidade em particular, e os valores são os associados
    às sub-etiquetas.
    > **Nota**:
    >
    > As sub-etiquetas `'variant'` e `'private'` suportam no máximo 15 valores
    > enquanto que `'extlang'` suporta no máximo 3. Por exemplo, variantes são permitiras
    > com sufixo no intervalo 0-14. Por isso as chaver para o array de entrada
    > podem ser `variant0`, `variant1`, …,`variant14`. No ID de localidade retornado,
    > a sub-etiqueta é ordenada pelo sufixo resultando em `variant0` seguida por
    > `variant1`, seguida por `variant2` e assim por diante.
    >
    > Alternativamente, os valores de `'variant'`, `'private'` e `'extlang'` podem ser especificados
    > como array sob chave específica (ex.: `'variant'`).
    > Neste caso não se aplica limite ao número de sub-etiquetas reconhecidas.

### Valor Retornado

O identificador de localidade correspondente, ou **`false`** quando `subtags` estiver vazio.

### Examples

**Exemplo #1 Exemplo de **locale\_compose()****

```
<?php
$arr = array(
    'language'=>'en',
    'script'  =>'Hans',
    'region'  =>'CN',
    'variant2'=>'rozaj',
    'variant1'=>'nedis',
    'private1'=>'prv1',
    'private2'=>'prv2',
);
echo locale_compose($arr);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$arr = array(
    'language'=>'en' ,
    'script'  =>'Hans',
    'region'  =>'CN',
    'variant2'=>'rozaj',
    'variant1'=>'nedis',
    'private1'=>'prv1',
    'private2'=>'prv2',
);
echo Locale::composeLocale($arr);
?>
```

O exemplo acima produzirá:

```
Locale: en_Hans_CN_nedis_rozaj_x_prv1_prv2
```

**Exemplo #3 Limites de sub-etiquetas**

Se `subtags` são fornecidas como chaves separadas com sufixo numérico,
chaves não suportadas são silenciosamente ignoradas (neste caso `'extlang3'`),
e ordenadas no resultado pelo sufixo numérico.
Não é limites se as sub-etiquetas são informadas como [array](language.types.array.md); a ordem é conforme informada.

```
<?php
$arr = array(
    'language' => 'en',
    'script'   => 'Hans',
    'region'   => 'CN',
    'extlang3' => 'd',
    'extlang2' => 'c',
    'extlang1' => 'b',
    'extlang0' => 'a',
);
echo locale_compose($arr), PHP_EOL;

$arr = array(
    'language' => 'en',
    'script'   => 'Hans',
    'region'   => 'CN',
    'extlang'  => ['a', 'b', 'c', 'd'],
);
echo locale_compose($arr), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
en_a_b_c_Hans_CN
en_a_b_c_d_Hans_CN
```

### Veja também

- [locale\_parse()](locale.parselocale.md) - Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade

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
