# Este método de fábrica cria um hash a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.loadfromstring.php

---

# QuickHashStringIntHash::loadFromString

(No version information available, might only be in Git)

QuickHashStringIntHash::loadFromString — Este método de fábrica cria um hash a partir de uma string

### Descrição

public static function **QuickHashStringIntHash::loadFromString**([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashStringIntHash](class.quickhashstringinthash.md)

Este método de fábrica cria um novo hash a partir de uma definição em uma string. O
formato é o mesmo usado em "loadFromFile".

### Parâmetros

`contents`
:   A string que contém um formato serializado do hash.

`size`
:   A quantidade de listas de buckets a serem configuradas. O número que informado será
    arredondado automaticamente para a próxima potência de dois. Também é
    automaticamente limitado de 4 a 4194304.

`options`
:   As mesmas opções que o construtor da classe aceita; exceto que a opção de tamanho
    é ignorada. Ela é calculada automaticamente para ser igual ao
    número de entradas no hash, arredondado para a potência de dois mais próxima
    com um limite máximo de 4194304.

### Valor Retornado

Retorna um novo QuickHashStringIntHash.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::loadFromString()****

```
<?php
$contents = file_get_contents( dirname( __FILE__ ) . "/simple.hash.string" );
$hash = QuickHashStringIntHash::loadFromString(
    $contents,
    QuickHashStringIntHash::DO_NOT_USE_ZEND_ALLOC
);
foreach( range( 0, 0x0f ) as $key )
{
    $i = 48712 + $key * 1631;
    $k = base_convert( $i, 10, 36 );
    echo $k, ' => ', $hash->get( $k ), "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
11l4 => 48712
12uf => 50343
143q => 51974
15d1 => 53605
16mc => 55236
17vn => 56867
194y => 58498
1ae9 => 60129
1bnk => 61760
1cwv => 63391
1e66 => 65022
1ffh => 66653
1gos => 68284
1hy3 => 69915
1j7e => 71546
1kgp => 73177
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
