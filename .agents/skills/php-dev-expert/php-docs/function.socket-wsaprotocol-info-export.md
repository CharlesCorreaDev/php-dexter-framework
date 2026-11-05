# Exporta a estrutura WSAPROTOCOL_INFO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-wsaprotocol-info-export.php

---

# socket\_wsaprotocol\_info\_export

(PHP 7 >= 7.3.0, PHP 8)

socket\_wsaprotocol\_info\_export — Exporta a estrutura WSAPROTOCOL\_INFO

### Descrição

function **socket\_wsaprotocol\_info\_export**([Socket](class.socket.md) `$socket`, [int](language.types.integer.md) `$process_id`): [string](language.types.string.md)|[false](language.types.singleton.md)

Exporta a estrutura `WSAPROTOCOL_INFO` para a memória compartilhada e retorna
um identificador para ser usado com [socket\_wsaprotocol\_info\_import()](function.socket-wsaprotocol-info-import.md). O
ID exportado é válido apenas para o ID do processo fornecido em `process_id`.

> **Nota**:
>
> Esta função está disponível apenas no Windows.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md).

`process_id`
:   O ID do processo que importará o soquete.

### Valor Retornado

Retorna um identificador a ser usado para a importação, ou **`false`** em caso de falha

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_wsaprotocol\_info\_import()](function.socket-wsaprotocol-info-import.md) - Importa um soquete de outro processo
- [socket\_wsaprotocol\_info\_release()](function.socket-wsaprotocol-info-release.md) - Libera uma estrutura WSAPROTOCOL\_INFO exportada

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
