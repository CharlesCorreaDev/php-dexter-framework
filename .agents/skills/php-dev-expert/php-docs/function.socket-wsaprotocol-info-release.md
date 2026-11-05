# Libera uma estrutura WSAPROTOCOL_INFO exportada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-wsaprotocol-info-release.php

---

# socket\_wsaprotocol\_info\_release

(PHP 7 >= 7.3.0, PHP 8)

socket\_wsaprotocol\_info\_release — Libera uma estrutura WSAPROTOCOL\_INFO exportada

### Descrição

function **socket\_wsaprotocol\_info\_release**([string](language.types.string.md) `$info_id`): [bool](language.types.boolean.md)

Libera a memória compartilhada correspondente ao `info_id` fornecido.

> **Nota**:
>
> Esta função está disponível apenas no Windows.

### Parâmetros

`info_id`
:   O ID que foi retornado por uma chamada anterior a
    [socket\_wsaprotocol\_info\_export()](function.socket-wsaprotocol-info-export.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [socket\_wsaprotocol\_info\_export()](function.socket-wsaprotocol-info-export.md) - Exporta a estrutura WSAPROTOCOL\_INFO

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
