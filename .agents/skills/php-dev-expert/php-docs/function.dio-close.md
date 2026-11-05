# Fecha o descritor de arquivo fornecido por fd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-close.php

---

# dio\_close

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_close — Fecha o descritor de arquivo fornecido por fd

### Descrição

function **dio\_close**([resource](language.types.resource.md) `$fd`): [void](language.types.void.md)

A função **dio\_close()** fecha o descritor de arquivo
`fd`.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Fechando um descritor de arquivo aberto**

```
<?php
$fd = dio_open('/dev/ttyS0', O_RDWR);

dio_close($fd);
?>
```

### Veja também

- [dio\_open()](function.dio-open.md) - Abre um arquivo (criando-o, se necessário) em um nível mais baixo do que
  as funções de entrada/saída da biblioteca C permitem

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
