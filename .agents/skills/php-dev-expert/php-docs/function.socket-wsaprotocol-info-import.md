# Importa um soquete de outro processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-wsaprotocol-info-import.php

---

# socket\_wsaprotocol\_info\_import

(PHP 7 >= 7.3.0, PHP 8)

socket\_wsaprotocol\_info\_import — Importa um soquete de outro processo

### Descrição

function **socket\_wsaprotocol\_info\_import**([string](language.types.string.md) `$info_id`): [Socket](class.socket.md)|[false](language.types.singleton.md)

Importa um soquete que foi exportado por outro processo.

> **Nota**:
>
> Esta função está disponível apenas no Windows.

### Parâmetros

`info_id`
:   O ID que foi retornado por uma chamada anterior a
    [socket\_wsaprotocol\_info\_export()](function.socket-wsaprotocol-info-export.md).

### Valor Retornado

Retorna uma instância de [Socket](class.socket.md) em caso de sucesso, ou **`false`** em caso de falha

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente, retornava um [resource](language.types.resource.md). |

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
