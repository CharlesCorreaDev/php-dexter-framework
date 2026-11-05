# Converte um endereço de Internet compactado em uma representação legível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inet-ntop.php

---

# inet\_ntop

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

inet\_ntop — Converte um endereço de Internet compactado em uma representação legível

### Descrição

function **inet\_ntop**([string](language.types.string.md) `$ip`): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função converte um endereço IPv4 de 32 bits ou IPv6 de 128 bits (se o PHP
foi construído com suporte IPv6 habilitado) em uma representação de string apropriada
para a família de endereços.

### Parâmetros

`ip`
:   Um endereço IPv4 de 32 bits ou IPv6 de 128 bits.

### Valor Retornado

Retorna uma representação em string do endereço ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **inet\_ntop()****

```
<?php
$packed = chr(127) . chr(0) . chr(0) . chr(1);
$expanded = inet_ntop($packed);

/* Exibe: 127.0.0.1 */
echo $expanded;

$packed = str_repeat(chr(0), 15) . chr(1);
$expanded = inet_ntop($packed);

/* Exibe: ::1 */
echo $expanded;
?>
```

### Veja também

- [long2ip()](function.long2ip.md) - Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)
- [ip2long()](function.ip2long.md) - Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo
- [inet\_pton()](function.inet-pton.md) - Converte um endereço IP legível em sua representação de endereço de Internet compactado

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
