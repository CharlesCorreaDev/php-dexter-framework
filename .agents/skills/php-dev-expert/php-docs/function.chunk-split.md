# Divide uma string em pedaços menores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chunk-split.php

---

# chunk\_split

(PHP 4, PHP 5, PHP 7, PHP 8)

chunk\_split — Divide uma string em pedaços menores

### Descrição

function **chunk\_split**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length` = 76, [string](language.types.string.md) `$separator` = "\r\n"): [string](language.types.string.md)

Pode ser usada para dividir uma string em pedaços menores, o que é útil para
por exemplo converter a saída de [base64\_encode()](function.base64-encode.md) para adequação às
semânticas RFC 2045 . Ela insere um separador definido em `separator` a cada
número de caracteres definido em`length`.

### Parâmetros

`string`
:   A string a ser dividida.

`length`
:   O tamanho do pedaço.

`separator`
:   A sequência de terminação de linha.

### Valor Retornado

Retorna a string dividida.

### Examples

**Exemplo #1 Exemplo de **chunk\_split()****

```
<?php
$data = 'Esta é uma string bem longa que será quebrada em partes porque a linha será muito comprida depois de ter sido codificada em base64.';

// formata $data usando semântica RFC 2045
$new_string = chunk_split(base64_encode($data));
echo $new_string, PHP_EOL;
?>
```

### Veja também

- [str\_split()](function.str-split.md) - Converte uma string em um array
- [explode()](function.explode.md) - Divide uma string com base em outra string
- [wordwrap()](function.wordwrap.md) - Quebra uma string em um dado número de caracteres
- [» RFC 2045](https://datatracker.ietf.org/doc/html/rfc2045)

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
