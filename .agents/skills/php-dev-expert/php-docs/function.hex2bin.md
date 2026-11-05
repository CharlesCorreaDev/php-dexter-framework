# Decodifica uma string binária codificada em hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hex2bin.php

---

# hex2bin

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

hex2bin — Decodifica uma string binária codificada em hexadecimal

### Descrição

function **hex2bin**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica uma string binária codificada em hexadecimal.

**Cuidado**

Esta função *NÃO* converte um número hexadecimal para um número binário.
Isso pode ser feito através da função [base\_convert()](function.base-convert.md).

### Parâmetros

`string`
:   Representação hexadecimal dos dados.

### Valor Retornado

Retorna a representação binária dos dados fornecidos ou **`false`** em caso de falha.

### Erros/Exceções

Se a string fornecida em hexadecimal tiver tamanho ímpar ou for um hexadecimal inválido,
um erro de nível **`E_WARNING`** será lançado.

### Examples

**Exemplo #1 Exemplo de **hex2bin()****

```
<?php
$hex = hex2bin("6578616d706c65206865782064617461");
var_dump($hex);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(16) "example hex data"
```

### Veja também

- [bin2hex()](function.bin2hex.md) - Converte um dado binário em representação hexadecimal
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
