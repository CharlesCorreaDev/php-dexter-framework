# Obtém lista de fluxos registrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-wrappers.php

---

# stream\_get\_wrappers

(PHP 5, PHP 7, PHP 8)

stream\_get\_wrappers — Obtém lista de fluxos registrados

### Descrição

function **stream\_get\_wrappers**(): [array](language.types.array.md)

Obtém lista de fluxos registrados disponíveis no sistema em execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado contendo os nomes de todos os empacotadores de fluxo
disponíveis no sistema em execução.

### Examples

**Exemplo #1 Exemplo de **stream\_get\_wrappers()****

```
<?php
print_r(stream_get_wrappers());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => php
    [1] => file
    [2] => http
    [3] => ftp
    [4] => compress.bzip2
    [5] => compress.zlib
)
```

**Exemplo #2 Verificando a existência de um empacotador de fluxo**

```
<?php
// verifica a existência do empacotador de fluxo bzip2
if (in_array('compress.bzip2', stream_get_wrappers())) {
    echo 'compress.bzip2:// suporte habilitado.';
} else {
    echo 'compress.bzip2:// suporte não habilitado.';
}
?>
```

### Veja também

- [stream\_wrapper\_register()](function.stream-wrapper-register.md) - Registra um empacotador URL implementado como uma classe PHP

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
