# Obtém o serviço de Internet que corresponde à porta e ao protocolo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getservbyport.php

---

# getservbyport

(PHP 4, PHP 5, PHP 7, PHP 8)

getservbyport — Obtém o serviço de Internet que corresponde à porta e ao protocolo

### Descrição

function **getservbyport**([int](language.types.integer.md) `$port`, [string](language.types.string.md) `$protocol`): [string](language.types.string.md)|[false](language.types.singleton.md)

**getservbyport()** retorna o serviço de Internet
associado à porta informada no parâmetro `port`, para o
protocolo informado em `protocol`, especificado conforme /etc/services.

### Parâmetros

`port`
:   O número da porta.

`protocol`
:   `protocol` pode ser: `"tcp"`
    ou `"udp"` (em minúsculas).

### Valor Retornado

Retorna o nome do serviço de Internet como uma string, ou **`false`** em caso de falha.

### Veja também

- [getservbyname()](function.getservbyname.md) - Obtém o número da porta associado a um serviço e protocolo de Internet

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
