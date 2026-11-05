# Fecha uma conexão com um servidor SSH remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-disconnect.php

---

# ssh2\_disconnect

(PECL ssh2 >= 1.0)

ssh2\_disconnect — Fecha uma conexão com um servidor SSH remoto

### Descrição

function **ssh2\_disconnect**([resource](language.types.resource.md) `$session`): [bool](language.types.boolean.md)

Fecha uma conexão com um servidor SSH remoto.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH

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
