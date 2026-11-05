# Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
   Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gethostbynamel.php

---

# gethostbynamel

(PHP 4, PHP 5, PHP 7, PHP 8)

gethostbynamel — 
Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
Internet

### Descrição

function **gethostbynamel**([string](language.types.string.md) `$hostname`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna uma lista de endereços IPv4 aos quais o host da Internet
especificado por `hostname` é resolvido.

### Parâmetros

`hostname`
:   O nome do host.

### Valor Retornado

Retorna um array de endereços IPv4 ou **`false`** se o
`hostname` não puder ser resolvido.

### Examples

**Exemplo #1 Exemplo de **gethostbynamel()****

```
<?php
$hosts = gethostbynamel('www.example.com');
print_r($hosts);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 192.0.34.166
)
```

### Veja também

- [gethostbyname()](function.gethostbyname.md) - Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbyaddr()](function.gethostbyaddr.md) - Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- [checkdnsrr()](function.checkdnsrr.md) - Verifica os registros DNS correspondentes para o nome do host ou endereço IP informado
- [getmxrr()](function.getmxrr.md) - Obtém registros MX correspondentes a um determinado nome de host da Internet
- a página `named(8)` do manual

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
