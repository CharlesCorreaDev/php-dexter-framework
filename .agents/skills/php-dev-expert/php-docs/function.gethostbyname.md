# Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gethostbyname.php

---

# gethostbyname

(PHP 4, PHP 5, PHP 7, PHP 8)

gethostbyname — 
Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet

### Descrição

function **gethostbyname**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

Retorna o endereço IPv4 do host da Internet especificado por
`hostname`.

### Parâmetros

`hostname`
:   O nome do host.

### Valor Retornado

Retorna o endereço IPv4 ou uma string contendo o endereço não modificado
`hostname` em caso de falha.

### Examples

**Exemplo #1 Um exemplo simples de **gethostbyname()****

```
<?php
$ip = gethostbyname('www.example.com');

echo $ip;
?>
```

### Veja também

- [gethostbyaddr()](function.gethostbyaddr.md) - Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- [gethostbynamel()](function.gethostbynamel.md) - Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
  Internet
- [inet\_pton()](function.inet-pton.md) - Converte um endereço IP legível em sua representação de endereço de Internet compactado
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
