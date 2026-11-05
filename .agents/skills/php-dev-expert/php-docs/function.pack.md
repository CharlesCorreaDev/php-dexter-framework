# Empacota dados em uma string binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pack.php

---

# pack

(PHP 4, PHP 5, PHP 7, PHP 8)

pack — Empacota dados em uma string binária

### Descrição

function **pack**([string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `...$values`): [string](language.types.string.md)

Empacota os argumentos fornecidos em uma string binária de acordo com o formato
especificado em `format`.

A ideia para esta função foi tirada do Perl e todos os códigos de formatação
funcionam da mesma forma que no Perl. Entretanto, há alguns códigos de formatação que
não existem, como código "u" do Perl.

Observe que a distinção entre valores com e sem sinal somente
afeta a função [unpack()](function.unpack.md), enquanto que
a função **pack()** fornece o mesmo resultado para
códigos de formato com e sem sinal.

### Parâmetros

`format`
:   A string `format` consistem em códigos de formato
    seguidos de um argumento repetidor opcional. O argumento repetidor pode
    ser um valor inteiro ou `*` para repetir até
    o final dos dados de entrada. Para a, A, h, H a contagem de repetição especifica
    quantos caracteres de um argumento de dados são tomados, para @ é a
    posição absoluta onde será colocado o próximo dado, para todo o restante a contagem
    de repetição especifica quantos argumentos de dados são consumidos e empacotados
    na string binária resultante.

    Os formatos atualmente implementados são:

    **Caracteres de formato de **pack()****

    | Código | Descrição |
    | --- | --- |
    | a | String com bytes NUL à esquerda |
    | A | String com espaços à esquerda |
    | h | String hexadecimal, nibble menos significativo primeiro |
    | H | String hexadecimal, nibble mais significativo primeiro |
    | c | signed char |
    | C | unsigned char |
    | s | signed short (sempre 16 bits, ordem de bytes da máquina) |
    | S | unsigned short (sempre 16 bits, ordem de bytes da máquina) |
    | n | unsigned short (sempre 16 bits, ordem de bytes Big Endian) |
    | v | unsigned short (sempre 16 bits, ordem de bytes Little Endian) |
    | i | signed integer (tamanho e ordem de bytes dependentes da máquina) |
    | I | unsigned integer (tamanho e ordem de bytes dependentes da máquina) |
    | l | signed long (sempre 32 bits, ordem de bytes da máquina) |
    | L | unsigned long (sempre 32 bits, ordem de bytes da máquina) |
    | N | unsigned long (sempre 32 bits, ordem de bytes Big Endian) |
    | V | unsigned long (sempre 32 bits, ordem de bytes Little Endian) |
    | q | signed long long (sempre 64 bits, ordem de bytes da máquina) |
    | Q | unsigned long long (sempre 64 bits, ordem de bytes da máquina) |
    | J | unsigned long long (sempre 64 bits, ordem de bytes Big Endian) |
    | P | unsigned long long (sempre 64 bits, ordem de bytes Little Endian) |
    | f | float (representação e tamanho dependentes da máquina) |
    | g | float (tamanho dependente da máquina, ordem de bytes Little Endian) |
    | G | float (tamanho dependente da máquina, ordem de bytes Big Endian) |
    | d | double (representação e tamanho dependentes da máquina) |
    | e | double (tamanho dependente da máquina, ordem de bytes Little Endian) |
    | E | double (tamanho dependente da máquina, ordem de bytes Big Endian) |
    | x | byte NUL |
    | X | Volta um byte |
    | Z | String terminada em NUL (ASCIIZ), preenchida com bytes NUL |
    | @ | Preenche com bytes NUL até a posição absoluta |

`values`

### Valor Retornado

Retorna uma string binária contendo dados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não mais retorna **`false`** em caso de falha. |
| 7.2.0 | Tipos [float](language.types.float.md) e [double](language.types.float.md) suportam tanto Big Endian quanto Little Endian. |
| 7.0.15, 7.1.1 | Os códigos "e", "E", "g" e "G" foram adicionados para habilitar suporte a ordem de byte para float e double. |

### Examples

**Exemplo #1 Exemplo de **pack()****

```
<?php
$binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
?>
```

A string binária resultante terá 6 bytes de comprimento e conterá
a sequência de bytes 0x12, 0x34, 0x78, 0x56, 0x41, 0x42.

### Notas

**Cuidado**

Os códigos de formato `q`, `Q`, `J` e `P` não estão disponíveis em versões do PHP de 32 bits.

**Cuidado**

Observe que, internamente, o PHP armazena valores [int](language.types.integer.md) como
valores com sinal de tamanho dependente da máquina.
Literais inteiros e operações que resultam em números fora da faixa do tipo
[int](language.types.integer.md) serão armazenados como [float](language.types.float.md).
Ao empacotar estes floats como inteiros, eles primeiro são convertidos para o
tipo inteiro. Isto pode ou não resultar no padrão de bytes desejado.

O caso mais relevante ocorre ao empacotar números sem sinal que poderiam
ser representáveis pelo tipo [int](language.types.integer.md) se eles fossem sem sinal.
Em sistemas onde o tipo [int](language.types.integer.md) tem 32 bits, a conversão
normalmente resulta no mesmo padrão de byte como se o [int](language.types.integer.md) fosse
sem sinal (embora isso dependa das conversões de sem sinal para com sinal definidas
pela implementação, conforme o padrão C). Em sistemas onte o tipo
[int](language.types.integer.md) tem 64 bits, o tipo [float](language.types.float.md) provavelmente
não terá a mantissa grande o suficiente para representar o valor sem
perda de precisão. Se estes sistemas também tiverem o tipo
`int` nativo de 64 bits (a maioria dos sistemas tipo UNIX não têm), a única maneira
de usar o formato `I` de empacotamento na faixa superior é criar
valores negativos [int](language.types.integer.md) com a mesma representação de bytes
do valor sem sinal desejado.

### Veja também

- [unpack()](function.unpack.md) - Desempacota dados de uma string binária

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
