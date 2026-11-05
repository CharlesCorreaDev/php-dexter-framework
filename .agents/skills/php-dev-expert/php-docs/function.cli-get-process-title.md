# Retorna o título do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cli-get-process-title.php

---

# cli\_get\_process\_title

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

cli\_get\_process\_title — Retorna o título do processo atual

### Descrição

function **cli\_get\_process\_title**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o título do processo atual, conforme definido por
[cli\_set\_process\_title()](function.cli-set-process-title.md). Observe que isso pode não corresponder
exatamente ao que é mostrado em **ps** ou **top**,
dependendo do seu sistema operacional.

Esta função está disponível somente no modo
[CLI](features.commandline.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com o título do processo atual ou **`null`** em caso de erro.

### Erros/Exceções

Um **`E_WARNING`** será gerado se o sistema operacional
não for compatível.

### Examples

**Exemplo #1 Exemplo de **cli\_get\_process\_title()****

```
<?php
echo "Título do processo: " . cli_get_process_title() . "\n";
?>
```

### Veja também

- [cli\_set\_process\_title()](function.cli-set-process-title.md) - Define o título do processo

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
