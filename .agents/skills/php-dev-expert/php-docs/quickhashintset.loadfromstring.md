# Este método de fábrica cria um conjunto a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.loadfromstring.php

---

# QuickHashIntSet::loadFromString

(PECL quickhash >= Unknown)

QuickHashIntSet::loadFromString — Este método de fábrica cria um conjunto a partir de uma string

### Descrição

public static function **QuickHashIntSet::loadFromString**([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = ?, [int](language.types.integer.md) `$options` = ?): [QuickHashIntSet](class.quickhashintset.md)

Este método de fábrica cria um novo conjunto a partir de uma definição em uma string. O
formato de arquivo consiste em inteiros com sinal de 32 bits compactados na
ordem de bytes usada pelo sistema no qual o código é executado.

### Parâmetros

`contents`
:   A sequência que contém um formato serializado do conjunto.

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `4` a `4194304`.

`options`
:   As mesmas opções que o construtor da classe aceita; exceto que a opção de
    tamanho é ignorada. É calculado automaticamente para ser o mesmo que o
    número de entradas no conjunto, arredondado para o potência de dois mais próxima,
    limitado automaticamente entre `64` e `4194304`.

### Valor Retornado

Retorna um novo [QuickHashIntSet](class.quickhashintset.md).

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::loadFromString()****

```
<?php
$contents = file_get_contents( dirname( __FILE__ ) . "/simple.set" );
$set = QuickHashIntSet::loadFromString(
    $contents,
    QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC
);
foreach( range( 0, 0x0f ) as $key )
{
    printf( "Chave %3d (%2x) está %s\n",
        $key, $key,
        $set->exists( $key ) ? 'definida' : 'indefinida'
    );
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Chave   0 ( 0) está indefinida
Chave   1 ( 1) está definida
Chave   2 ( 2) está definida
Chave   3 ( 3) está definida
Chave   4 ( 4) está indefinida
Chave   5 ( 5) está definida
Chave   6 ( 6) está indefinida
Chave   7 ( 7) está definida
Chave   8 ( 8) está indefinida
Chave   9 ( 9) está indefinida
Chave  10 ( a) está indefinida
Chave  11 ( b) está definida
Chave  12 ( c) está indefinida
Chave  13 ( d) está definida
Chave  14 ( e) está indefinida
Chave  15 ( f) está indefinida
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
