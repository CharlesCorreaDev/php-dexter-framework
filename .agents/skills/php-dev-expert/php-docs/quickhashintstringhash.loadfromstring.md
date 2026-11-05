# Este método de fábrica cria um hash a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.loadfromstring.php

---

# QuickHashIntStringHash::loadFromString

(PECL quickhash >= Unknown)

QuickHashIntStringHash::loadFromString — Este método de fábrica cria um hash a partir de uma string

### Descrição

public static function **QuickHashIntStringHash::loadFromString**([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashIntStringHash](class.quickhashintstringhash.md)

Este método de fábrica cria um novo hash a partir de uma definição em uma string. O
formato é o mesmo usado em "loadFromFile".

### Parâmetros

`contents`
:   A string que contém um formato serializado do hash.

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    arredondado automaticamente para a próxima potência de dois. Também é
    automaticamente limitado de 4 a 4194304.

`options`
:   As mesmas opções que o construtor da classe aceita; exceto que a opção de tamanho
    é ignorada. Ela é calculada automaticamente para ser igual ao
    número de entradas no hash, arredondado para a potência de dois mais próxima
    com um limite máximo de 4194304.

### Valor Retornado

Retorna um novo QuickHashIntStringHash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::loadFromString()****

```
<?php
$contents = file_get_contents( dirname( __FILE__ ) . "/simple.hash" );
$hash = QuickHashIntStringHash::loadFromString(
    $contents,
    QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC
);
foreach( range( 0, 0x0f ) as $key )
{
    printf( "Chave %3d (%2x) está %s\n",
        $key, $key,
        $hash->exists( $key ) ? 'definida' : 'indefinida'
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
