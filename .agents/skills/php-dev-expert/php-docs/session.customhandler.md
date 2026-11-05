# Manipuladores de Sessão Personalizados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.customhandler.php

---

## Manipuladores de Sessão Personalizados

Para implementar as sessões em banco de dados, ou qualquer outro método de armazenamento, é
preciso usar [session\_set\_save\_handler()](function.session-set-save-handler.md) para
criar um conjunto de funções de armazenamento a nível de usuário. Um manipulador de sessão pode ser criado
usando [SessionHandlerInterface](class.sessionhandlerinterface.md) ou estender os manipuladores internos do PHP herdando
de [SessionHandler](class.sessionhandler.md).

Os callbacks especificados em [session\_set\_save\_handler()](function.session-set-save-handler.md) são métodos
executados pelo PHP durante o ciclo de vida de uma sessão: `open`, `read`,
`write` e `close` e para as tarefas de manutenção:
`destroy` para deletar uma sessão e `gc` para recolha periódica
de lixo.

Portanto, o PHP sempre requer manipuladores de gravação de sessão. O padrão normalmente é
o manipulador de gravação interno de 'arquivos'. Um manipulador personalizado pode ser configurado usando
[session\_set\_save\_handler()](function.session-set-save-handler.md). Manipuladores internos alternativos também são
disponibilizados por extensões do PHP, como `sqlite`,
`memcache` e `memcached` e podem ser definidos com
[session.save\_handler](session.configuration.md#ini.session.save-handler).

Quando a sessão inicia, o PHP internamente executa o manipulador `open` seguido pelo
callback `read` que deve retornar uma string codificada exatamente como foi originalmente
passado para armazenamento. Após o `read` retornar a string codificada, o PHP vai
decodificá-la e colocar o array resultante na super global [$\_SESSION](reserved.variables.session.md).

Quando o PHP é encerrado (ou quando [session\_write\_close()](function.session-write-close.md) for chamada),
o PHP internamente vai codificar a super global [$\_SESSION](reserved.variables.session.md) e passá-la
junto com o ID de sessão para o callback `write`.
Depois que o callback `write` finalizar, o PHP internamente invocará o
callback `close`.

Quando uma sessão é destruída, o PHP chamará o manipulador `destroy` com
o ID de sessão.

O PHP executará a chamada de retorno `gc` de tempo em tempo para
apagar quaisquer informações da sessão de acordo com o tempo de vida máximo definido para ela.
Esta rotina deve apagar todas as informações do armazenamento persistente onde
a diferença de tempo do último acesso até o momento atual seja maior que `lifetime`.

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
