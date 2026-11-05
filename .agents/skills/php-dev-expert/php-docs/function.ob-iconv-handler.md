# Converte codificação de caracteres como manipulador de buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-iconv-handler.php

---

# ob\_iconv\_handler

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

ob\_iconv\_handler — Converte codificação de caracteres como manipulador de buffer de saída

### Descrição

function **ob\_iconv\_handler**([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$status`): [string](language.types.string.md)

Converte a string codificada em `internal_encoding` em
`output_encoding`.

`internal_encoding` e
`output_encoding` devem ser definidos no arquivo php.ini
ou em [iconv\_set\_encoding()](function.iconv-set-encoding.md).

### Parâmetros

Consulte [ob\_start()](function.ob-start.md) para obter informações sobre os
parâmetros desse manipulador.

### Valor Retornado

Consulte [ob\_start()](function.ob-start.md) para obter informações sobre os valores de
retorno desse manipulador.

### Examples

**Exemplo #1 Exemplo **ob\_iconv\_handler()**:**

```
<?php
iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "ISO-8859-1");
ob_start("ob_iconv_handler"); // start output buffering
?>
```

### Veja também

- [iconv\_get\_encoding()](function.iconv-get-encoding.md) - Recuperar variáveis de configuração internas da extensão iconv
- [iconv\_set\_encoding()](function.iconv-set-encoding.md) - Define a configuração atual para conversão de codificação de caracteres
- [output-control functions](ref.outcontrol.md)

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
