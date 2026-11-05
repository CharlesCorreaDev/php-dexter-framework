# Callback converte a codificação de caracteres no buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-output-handler.php

---

# mb\_output\_handler

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_output\_handler — Callback converte a codificação de caracteres no buffer de saída

### Descrição

function **mb\_output\_handler**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$status`): [string](language.types.string.md)

**mb\_output\_handler()** é
um callback [ob\_start()](function.ob-start.md).
**mb\_output\_handler()** converte
caracteres no buffer de saída da codificação de caracteres interna para
a codificação de caracteres de saída HTTP.

### Parâmetros

`string`
:   O conteúdo do buffer de saída.

`status`
:   O status do buffer de saída.

### Valor Retornado

A [string](language.types.string.md) convertida.

### Examples

**Exemplo #1 Exemplo de **mb\_output\_handler()****

```
<?php
mb_http_output("UTF-8");
ob_start("mb_output_handler");
?>
```

### Notas

> **Nota**:
>
> Se você deseja enviar dados binários, como uma imagem,
> um cabeçalho Content-Type: deve ser definido usando [header()](function.header.md)
> antes que quaisquer dados binários sejam enviados ao cliente (por exemplo, header("Content-Type: image/png")).
> Se o cabeçalho Content-Type: for enviado, a conversão de codificação de caracteres de saída não será realizada.
>
> Observe que se 'Content-Type: text/\*' for enviado, o corpo do conteúdo é considerado como texto; a conversão será realizada.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída

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
