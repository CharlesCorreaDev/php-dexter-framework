# Este método de fábrica cria um hash de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.loadfromfile.php

---

# QuickHashIntHash::loadFromFile

(PECL quickhash >= Unknown)

QuickHashIntHash::loadFromFile — Este método de fábrica cria um hash de um arquivo

### Descrição

public static function **QuickHashIntHash::loadFromFile**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = ?): [QuickHashIntHash](class.quickhashinthash.md)

Este método de fábrica cria um novo hash a partir de um arquivo de definição em disco. O formato do arquivo
consiste em uma assinatura `'QH\0x11\0'`, o número de elementos como
um inteiro com sinal de 32 bits na ordem de bytes usada pelo sistema, seguido por inteiros com sinal de 32 bits
compactados na ordem de bytes utilizado pelo sistema no qual o código
é executado. Para cada elemento de hash, há dois inteiros com sinal de 32 bits
armazenados. O primeiro de cada elemento é a chave e o segundo é o valor
pertencente à chave. Um exemplo poderia ser:

**Exemplo #1 Formato de arquivo QuickHash IntHash**

```
00000000  51 48 11 00 02 00 00 00  01 00 00 00 01 00 00 00  |QH..............|
00000010  03 00 00 00 09 00 00 00                           |........|
00000018
```

**Exemplo #2 Formato de arquivo QuickHash IntHash**

```
assinatura de cabeçalho ('QH'; tipo de chave: 1; tipo de valor: 1; preenchimento: \0x00)
00000000  51 48 11 00

número de elementos:
00000004  02 00 00 00

string de dados:
00000000  01 00 00 00 01 00 00 00  03 00 00 00 09 00 00 00

chave/valor 1 (chave = 1, valor = 1)
01 00 00 00  01 00 00 00

chave/valor 2 (chave = 3, valor = 9)
03 00 00 00  09 00 00 00
```

### Parâmetros

`filename`
:   O nome do arquivo do qual o hash será lido.

`options`
:   As mesmas opções que o construtor da classe aceita; exceto que a opção de tamanho
    é ignorada. Ela é calculada automaticamente para ser igual ao
    número de entradas no hash, arredondado para a potência de dois mais próxima
    com um limite máximo de `4194304`.

### Valor Retornado

Retorna um novo [QuickHashIntHash](class.quickhashinthash.md).

### Examples

**Exemplo #3 Exemplo de **QuickHashIntHash::loadFromFile()****

```
<?php
$file = dirname( __FILE__ ) . "/simple.hash";
$hash = QuickHashIntHash::loadFromFile(
    $file,
    QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC
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
