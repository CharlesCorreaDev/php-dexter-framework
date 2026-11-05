# Aceita uma conexão em um socket criado por stream_socket_server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-accept.php

---

# stream\_socket\_accept

(PHP 5, PHP 7, PHP 8)

stream\_socket\_accept — Aceita uma conexão em um socket criado por [stream\_socket\_server()](function.stream-socket-server.md)

### Descrição

function **stream\_socket\_accept**([resource](language.types.resource.md) `$socket`, [?](language.types.null.md)[float](language.types.float.md) `$timeout` = **`null`**, [string](language.types.string.md) `&$peer_name` = **`null`**): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Aceita uma conexão em um socket previamente criado por
[stream\_socket\_server()](function.stream-socket-server.md).

### Parâmetros

`socket`
:   O socket do servidor de onde a conexão será aceita.

`timeout`
:   Substitui o limite de tempo padrão de aceitação do socket. O tempo deve ser informado em
    segundos. Por padrão, [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout)
    é usado.

`peer_name`
:   Será definido para o nome (endereço) do cliente que conectou, se
    incluído e disponível no transporte selecionado.

    > **Nota**:
    >
    > Pode também ser determinado mais tarde usando
    > [stream\_socket\_get\_name()](function.stream-socket-get-name.md).

### Valor Retornado

Retorna um fluxo para a conexão de socket aceita ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timeout` agora pode ser nulo. |

### Notas

**Aviso**

Esta função não deve ser usada com sockets de servidor UDP. No lugar dela, use
[stream\_socket\_recvfrom()](function.stream-socket-recvfrom.md) e
[stream\_socket\_sendto()](function.stream-socket-sendto.md).

### Veja também

- [stream\_socket\_server()](function.stream-socket-server.md) - Cria socket de servidor de domínio Internet ou Unix
- [stream\_socket\_get\_name()](function.stream-socket-get-name.md) - Obtém o nome do socket local ou remoto
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [Funções cURL](ref.curl.md)

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
