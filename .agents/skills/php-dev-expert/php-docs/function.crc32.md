# Calcula polinômio crc32 de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.crc32.php

---

# crc32

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

crc32 — Calcula polinômio crc32 de uma string

### Descrição

function **crc32**([string](language.types.string.md) `$string`): [int](language.types.integer.md)

Gera a soma de verificação de redundância cíclica de 32-bits
de comprimento da `string`. É usado geralmente
para validar a integridade de um dado sendo transferido.

**Aviso**

Pelo fato do tipo inteiro do PHP ser com sinal, muitas somas de verificação crc32
resultarão em inteiros negativos em plataformas de 32 bits. Em instalações de 64 bits
todos os resultados de **crc32()** serão inteiros positivos.

Por isso, é necessário usar o formatador "%u" da função [sprintf()](function.sprintf.md) ou
[printf()](function.printf.md) para obter a representação em string da
soma de verificação sem sinal da função **crc32()** em formato decimal.

Para uma representação hexadecimal da soma de verificação, pode-se usar tanto
o formatador "%x" de [sprintf()](function.sprintf.md) ou [printf()](function.printf.md)
quanto as funções de conversão [dechex()](function.dechex.md), ambas destas soluções
também tomam o cuidado de converter o resultado de **crc32()** para um
inteiro sem sinal.

Foi considerado que instalações de 64 bits também retornassem inteiros negativos para
valores mais altos de resultados, porém isto iria quebrar a conversão para hexadecimal,
já que os negativos teriam um deslocamento extra de 0xFFFFFFFF######## neste caso. Como
a representação hexadecimal parece ser o uso de caso mais comum, decidiu-se
não quebrar esta conversão mesmo que ela quebre comparações diretas em decimal
em aproximadamente 50% dos casos ao mover de 32 para 64 bits.

Em retrospecto, fazer com que a função retornasse um inteiro talvez não tenha sido a
melhor ideia, e retornar uma representação hexadecimal em string diretamente (como, por
exemplo, a função [md5()](function.md5.md) faz) poderia ter sido um plano melhor para
se começar.

Para uma solução mais portável, pode-se considerar a função genérica
[hash()](function.hash.md). `hash("crc32b", $str)` retornará
a mesma string que `str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT)`.

### Parâmetros

`string`
:   Os dados.

### Valor Retornado

Retorna a soma de verificação crc32 da `string` como um inteiro.

### Examples

**Exemplo #1 Mostrando uma soma de verificação crc32**

Este exemplo mostra como exibir uma soma de verificação convertida com a função
[printf()](function.printf.md):

```
<?php
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum);
?>
```

### Veja também

- [hash()](function.hash.md) - Gera um valor hash (resumo da mensagem)
- [md5()](function.md5.md) - Calcula o hash md5 de uma string
- [sha1()](function.sha1.md) - Calcula o hash SHA1 de uma string

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
