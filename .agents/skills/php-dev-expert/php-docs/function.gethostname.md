# Obtém o nome do host

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gethostname.php

---

# gethostname

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

gethostname — Obtém o nome do host

### Descrição

function **gethostname**(): [string](language.types.string.md)|[false](language.types.singleton.md)

**gethostname()** obtém o nome de host padrão
da máquina local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com o nome do host em caso de sucesso, caso contrário, **`false`**
é retornado.

### Examples

**Exemplo #1 Um exemplo simples de **gethostname()****

```
<?php
echo gethostname(); // pode exibir, por exemplo, "sandie"
?>
```

### Veja também

- [gethostbyname()](function.gethostbyname.md) - Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbyaddr()](function.gethostbyaddr.md) - Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- [php\_uname()](function.php-uname.md) - Retorna informações sobre o sistema operacional em que o PHP está sendo executado

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
