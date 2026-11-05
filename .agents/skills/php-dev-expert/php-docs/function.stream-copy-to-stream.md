# Copia dados de um fluxo para outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-copy-to-stream.php

---

# stream\_copy\_to\_stream

(PHP 5, PHP 7, PHP 8)

stream\_copy\_to\_stream — Copia dados de um fluxo para outro

### Descrição

function **stream\_copy\_to\_stream**(  
    [resource](language.types.resource.md) `$from`,  
    [resource](language.types.resource.md) `$to`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Faz uma cópia dos dados com um comprimento em bytes definido em `length`,
a partir da posição atual (ou a partir da posição
`offset`, se especificada) do fluxo
`from` para o fluxo `to`. Se
`length` for **`null`**, todo o conteúdo remanescente em
`from` será copiado.

### Parâmetros

`from`
:   O fluxo de origem

`to`
:   O fluxo de destino

`length`
:   Máximo de bytes a copiar. Por padrão todos os bytes restantes são copiados.

`offset`
:   O deslocamento a partir do qual deve-se começar a copiar os dados

### Valor Retornado

Retorna a contagem total de bytes copiados, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo de **stream\_copy\_to\_stream()****

```
<?php
$src = fopen('http://www.example.com', 'r');
$dest1 = fopen('first1k.txt', 'w');
$dest2 = fopen('remainder.txt', 'w');

echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copiados para first1k.txt\n";
echo stream_copy_to_stream($src, $dest2) . " bytes copiados para remainder.txt\n";

?>
```

### Veja também

- [copy()](function.copy.md) - Copia arquivo

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
