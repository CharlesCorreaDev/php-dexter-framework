# Converte um endereço IP legível em sua representação de endereço de Internet compactado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inet-pton.php

---

# inet\_pton

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

inet\_pton — Converte um endereço IP legível em sua representação de endereço de Internet compactado

### Descrição

function **inet\_pton**([string](language.types.string.md) `$ip`): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função converte um endereço IPv4 ou IPv6 legível (se o PHP
foi construído com suporte IPv6 habilitado) em uma estrutura binária de 32 ou 128 bits
apropriada para a família de endereços.

### Parâmetros

`ip`
:   Um endereço IPv4 ou IPv6 legível.

### Valor Retornado

Retorna a representação `in_addr` (endereço de Internet compactado) do
`ip` fornecido, ou **`false`** se um
`ip` sintaticamente inválido for fornecido (por exemplo,
um endereço IPv4 sem pontos ou um endereço IPv6 sem dois pontos).

### Examples

**Exemplo #1 Exemplo de **inet\_pton()****

```
<?php
$in_addr = inet_pton('127.0.0.1');

$in6_addr = inet_pton('::1');
?>
```

### Veja também

- [ip2long()](function.ip2long.md) - Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo
- [long2ip()](function.long2ip.md) - Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)
- [inet\_ntop()](function.inet-ntop.md) - Converte um endereço de Internet compactado em uma representação legível

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
