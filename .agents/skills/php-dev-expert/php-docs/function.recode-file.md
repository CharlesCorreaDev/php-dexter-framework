# Recodifica de arquivo para arquivo de acordo com a solicitação de recodificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.recode-file.php

---

# recode\_file

(PHP 4, PHP 5, PHP 7 < 7.4.0)

recode\_file — Recodifica de arquivo para arquivo de acordo com a solicitação de recodificação

### Descrição

function **recode\_file**([string](language.types.string.md) `$request`, [resource](language.types.resource.md) `$input`, [resource](language.types.resource.md) `$output`): [bool](language.types.boolean.md)

Recodifica o arquivo referenciado pelo identificador
`input` no arquivo referenciado pelo
identificador `output` de acordo com a requisição de recodificação
`request`.

### Parâmetros

`request`
:   O tipo de solicitação de recodificação desejada

`input`
:   `input` deve ser um identificador de arquivo local do tipo
    [resource](language.types.resource.md) para a entrada

`output`
:   `output` deve ser um identificador de arquivo local do tipo
    [resource](language.types.resource.md) para a saída

### Valor Retornado

Retorna **`false`** se não for possível cumprir, **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplo básico de **recode\_file()****

```
<?php
$input = fopen('input.txt', 'r');
$output = fopen('output.txt', 'w');
recode_file("us..flat", $input, $output);
?>
```

### Notas

Esta função atualmente não processa identificadores de arquivo que fazem
referência a arquivos remotos (URLs). Ambos os identificadores de arquivo devem referir-se a arquivos locais.

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL

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
