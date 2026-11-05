# Obtém o nome do socket local ou remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-get-name.php

---

# stream\_socket\_get\_name

(PHP 5, PHP 7, PHP 8)

stream\_socket\_get\_name — Obtém o nome do socket local ou remoto

### Descrição

function **stream\_socket\_get\_name**([resource](language.types.resource.md) `$socket`, [bool](language.types.boolean.md) `$remote`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome local ou remoto de uma conexão socket informada.

### Parâmetros

`socket`
:   O socket do qual se deseja obter o nome.

`remote`
:   Se definido para **`true`**, o nome do socket `remoto` será retornado, se definido
    para **`false`** o nome do socket `local` será retornado.

### Valor Retornado

O nome do socket, ou **`false`** em caso de falha.

### Veja também

- [stream\_socket\_accept()](function.stream-socket-accept.md) - Aceita uma conexão em um socket criado por stream\_socket\_server

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
