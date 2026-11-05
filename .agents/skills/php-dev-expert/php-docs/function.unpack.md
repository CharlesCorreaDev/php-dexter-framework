# Desempacota dados de uma string binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unpack.php

---

# unpack

(PHP 4, PHP 5, PHP 7, PHP 8)

unpack — Desempacota dados de uma string binária

### Descrição

function **unpack**([string](language.types.string.md) `$format`, [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$offset` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

Desempacota uma srting binária em um array de acordo com o formato especificado em
`format`.

Os dados desempacotados são armazenados em um array associativo. Para
que isto seja feito, os diferentes códigos de formato devem ser nomeados e
separados por uma barra /. Se um argumento repetidor estiver presente,
cada chave do array terá um número de sequência atrás
do nome fornecido.

Form feitas alterações para que esta função ficasse alinhada com a linguagem Perl:

- O código "a" agora retém os bytes NULL ao final da string.
- O código "A" agora remove todos os tipos de espaço ASCII do final da string (espaços, tabulações,
  novas linhas, retorno de carro e bytes NULL).
- O código "Z" foi adicionado para strings com bytes NULL à esquerda, e remove bytes
  NULL à direita.

### Parâmetros

`format`
:   Consulte a página da função [pack()](function.pack.md) para uma explicação sobre os códigos de formatos.

`string`
:   Os dados empacotados.

`offset`
:   O deslocamento na string a partir de onde os dados serão desempacotados.

### Valor Retornado

Retorna um array associativo contendo elementos desempacotados da string
binária, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Tipos [float](language.types.float.md) e [double](language.types.float.md) suportam Big Endian e Little Endian. |
| 7.1.0 | O parâmetro opcional `offset` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **unpack()****

```
<?php
$binarydata = "\x04\x00\xa0\x00";
$array = unpack("cchars/nint", $binarydata);
print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [chars] => 4
    [int] => 160
)
```

**Exemplo #2 Exemplo de **unpack()** com um repetidor**

```
<?php
$binarydata = "\x04\x00\xa0\x00";
$array = unpack("c2chars/nint", $binarydata);
print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [chars1] => 4
    [chars2] => 0
    [int] => 40960
)
```

### Notas

**Cuidado**

Observe que internamente o PHP armazena com sinal os valores inteiros. Se um
inteiro grande longo sem sinal for desempacotado, e for do mesmo tamanho que os
valores armazenados internamente pelo PHP, o resultado será um número negativo
mesmo que tenha sido especificado um desempacotamento sem sinal.

**Cuidado**

Se um elemento não for nomeado, seão usados índices numéricos iniciando em `1`.
Fique ciente que se houver mais de um elemento sem nome, alguns dados serão
sobrescritos porque a numeração reiniciará a partir de `1` para cada elemento.

**Exemplo #3 Exemplo de **unpack()** com chaves sem nome**

```
<?php
$binarydata = "\x32\x42\x00\xa0";
$array = unpack("c2/n", $binarydata);
var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [1]=>
  int(160)
  [2]=>
  int(66)
}
```

Observe que o primeiro
valor especificado por `c` foi
sobrescrito pelo primeiro valor de `n`
especificado.

### Veja também

- [pack()](function.pack.md) - Empacota dados em uma string binária

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
