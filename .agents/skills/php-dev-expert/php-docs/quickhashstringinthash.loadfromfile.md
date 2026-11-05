# Este método de fábrica cria um hash de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.loadfromfile.php

---

# QuickHashStringIntHash::loadFromFile

(No version information available, might only be in Git)

QuickHashStringIntHash::loadFromFile — Este método de fábrica cria um hash de um arquivo

### Descrição

public static function **QuickHashStringIntHash::loadFromFile**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashStringIntHash](class.quickhashstringinthash.md)

Este método de fábrica cria um novo hash a partir de um arquivo de definição em disco. O formato do arquivo
consiste em uma assinatura `'QH\0x21\0'`, o número de elementos como
um inteiro com sinal de 32 bits na ordem de bytes do sistema, um inteiro sem sinal de 32 bits
contendo o número de dados do elemento a seguir em caracteres. Este elemento
contém todas as strings. Segue-se outro inteiro com sinal de 32 bits
contendo o número de listas de buckets. Após o cabeçalho e as strings,
os elementos seguem. Eles são ordenados por lista de buckets para que as chaves não
precisem ser sofrer hash para restaurar o hash. Para cada lista de buckets, as
seguintes informações são armazenadas (todas como inteiros de 32 bits): o índice da lista de buckets,
o número de elementos nessa lista e, em pares de dois
inteiros sem sinal de 32 bits, os elementos, onde o primeiro é o índice
na lista de strings que contém as chaves e o segundo, o valor. Um
exemplo poderia ser:

**Exemplo #1 Formato de arquivo QuickHash StringIntHash**

```
00000000  51 48 21 00 02 00 00 00  09 00 00 00 40 00 00 00  |QH!.........@...|
00000010  4f 4e 45 00 4e 49 4e 45  00 07 00 00 00 01 00 00  |ONE.NINE........|
00000020  00 00 00 00 00 01 00 00  00 2f 00 00 00 01 00 00  |........./......|
00000030  00 04 00 00 00 03 00 00  00                       |.........|
00000039
```

**Exemplo #2 Formato de arquivo QuickHash IntHash**

```
assinatura de cabeçalho ('QH'; tipo de chave: 2; tipo de valor: 1; preenchimento: \0x00)
00000000  51 48 21 00

número de elementos:
00000004  02 00 00 00

comprimento dos valores string (9 caracteres):
00000008  09 00 00 00

número de listas de buckets de hashes (normalmente configurado para hashes como argumento para o
construtor, 64 neste caso):
0000000C  40 00 00 00

valores string:
00000010  4f 4e 45 00 4e 49 4e 45  00

listas de buckets:
  lista de bucket 1 (com chave 7 e 1 elemento):
    cabeçalho:
    07 00 00 00 01 00 00 00
    elementos (índice de chave: 0 ('ONE'), valor = 0):
    00 00 00 00 01 00 00 00
  lista de bucket 2 (com chave 0x2f, e 1 elemento):
    cabeçalho:
    2f 00 00 00 01 00 00 00
    elementos (índice de chave: 4 ('NINE'), valor = 3):
    04 00 00 00 03 00 00 00
```

### Parâmetros

`filename`
:   O nome do arquivo do qual o hash será lido.

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `4` a `4194304`.

`options`
:   As mesmas opções que o construtor da classe aceita; exceto que a opção de tamanho
    é ignorada. Ela é lida a partir do formato de arquivo (ao contrário das classes
    [QuickHashIntHash](class.quickhashinthash.md) e [QuickHashIntStringHash](class.quickhashintstringhash.md), onde é
    calculada automaticamente a partir do número de entradas no hash).

### Valor Retornado

Retorna um novo [QuickHashStringIntHash](class.quickhashstringinthash.md).

### Examples

**Exemplo #3 Exemplo de **QuickHashStringIntHash::loadFromFile()****

```
<?php
$file = dirname( __FILE__ ) . "/simple.hash.string";
$hash = QuickHashStringIntHash::loadFromFile(
    $file,
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
