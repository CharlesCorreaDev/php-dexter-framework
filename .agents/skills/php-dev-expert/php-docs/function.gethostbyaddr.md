# Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gethostbyaddr.php

---

# gethostbyaddr

(PHP 4, PHP 5, PHP 7, PHP 8)

gethostbyaddr — 
Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido

### Descrição

function **gethostbyaddr**([string](language.types.string.md) `$ip`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome do servidor de Internet especificado por
`ip`.

### Parâmetros

`ip`
:   O endereço IP do host.

### Valor Retornado

Retorna o nome do servidor em caso de sucesso, o `ip` não modificado
em caso de falha, ou **`false`** em caso de entrada mal formatada.

### Examples

**Exemplo #1 Um exemplo simples de **gethostbyaddr()****

```
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $hostname;
?>
```

### Veja também

- [gethostbyname()](function.gethostbyname.md) - Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbynamel()](function.gethostbynamel.md) - Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
  Internet

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
