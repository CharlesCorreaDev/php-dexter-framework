# Aceita uma conexão em um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-accept.php

---

# socket\_accept

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_accept — Aceita uma conexão em um soquete

### Descrição

function **socket\_accept**([Socket](class.socket.md) `$socket`): [Socket](class.socket.md)|[false](language.types.singleton.md)

Após o soquete `socket` ter sido criado
usando [socket\_create()](function.socket-create.md), vinculado a um nome com
[socket\_bind()](function.socket-bind.md), e instruído a escutar conexões
com [socket\_listen()](function.socket-listen.md), essa função aceitará
conexões recebidas neste soquete. Uma vez que uma conexão bem sucedida
for realizada, uma nova instância de [Socket](class.socket.md) é retornada,
que pode ser usada para comunicação. Se houver múltiplas conexões
enfileiradas no soquete, a primeira será usada. Se não houver conexões
pendentes, **socket\_accept()** bloqueará até que
uma conexão esteja presente. Se `socket`
tiver sido criado como não bloqueante usando
[socket\_set\_blocking()](function.socket-set-blocking.md) ou
[socket\_set\_nonblock()](function.socket-set-nonblock.md), **`false`** será retornado.

A instância [Socket](class.socket.md) retornada por
**socket\_accept()** não pode ser usada para aceitar novas
conexões. O soquete de escuta original
`socket`, entretanto, permanecerá aberto e poderá ser
reutilizado.

### Parâmetros

`socket`
:   Uma instância [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

### Valor Retornado

Retorna uma nova instância [Socket](class.socket.md) em caso de sucesso, ou **`false`** em caso de erro. O código
de erro real pode ser obtido chamando-se
[socket\_last\_error()](function.socket-last-error.md). Este código de erro pode ser passado a
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente um [resource](language.types.resource.md) era retornado. |

### Veja também

- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

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
