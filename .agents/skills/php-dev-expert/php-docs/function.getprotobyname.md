# Obtém o número do protocolo associado ao nome do protocolo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getprotobyname.php

---

# getprotobyname

(PHP 4, PHP 5, PHP 7, PHP 8)

getprotobyname — Obtém o número do protocolo associado ao nome do protocolo

### Descrição

function **getprotobyname**([string](language.types.string.md) `$protocol`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**getprotobyname()** retorna o número
do protocolo associado ao protocolo `protocol`
conforme /etc/protocols.

### Parâmetros

`protocol`
:   O nome do protocolo.

### Valor Retornado

Retorna o número do protocolo, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **getprotobyname()****

```
<?php
$protocol = 'tcp';
$get_prot = getprotobyname($protocol);
if ($get_prot === FALSE) {
    echo 'Protocolo inválido';
} else {
    echo 'Protocolo número ' . $get_prot;
}
?>
```

### Veja também

- [getprotobynumber()](function.getprotobynumber.md) - Obtém o nome do protocolo associado ao número do protocolo

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
