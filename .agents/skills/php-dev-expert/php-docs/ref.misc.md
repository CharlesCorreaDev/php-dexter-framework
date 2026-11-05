# Funções Miscelâneas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.misc.php

---

# Funções Miscelâneas

## Índice

- [connection\_aborted](function.connection-aborted.md) — Verifica se o cliente está desconectado
- [connection\_status](function.connection-status.md) — Retorna o campo de bits do estado da conexão
- [constant](function.constant.md) — Retorna o valor de uma constante
- [define](function.define.md) — Define uma constante com nome
- [defined](function.defined.md) — Verifica se existe uma constante com o nome informado
- [die](function.die.md) — Sinônimo de exit
- [eval](function.eval.md) — Avalia uma string como código PHP
- [exit](function.exit.md) — Termina o script atual com um código ou uma mensagem de status
- [get\_browser](function.get-browser.md) — Diz o que o navegador do usuário é capaz fazer
- [\_\_halt\_compiler](function.halt-compiler.md) — Para a execução do compilador
- [highlight\_file](function.highlight-file.md) — Destaca a sintaxe de um arquivo
- [highlight\_string](function.highlight-string.md) — Destaque de sintaxe de uma string
- [hrtime](function.hrtime.md) — Obtém o tempo de alta resolução do sistema
- [ignore\_user\_abort](function.ignore-user-abort.md) — Define se uma desconexão de cliente deve abortar execução de script
- [pack](function.pack.md) — Empacota dados em uma string binária
- [php\_strip\_whitespace](function.php-strip-whitespace.md) — Retorna o código com comentários e espaços em branco removidos
- [sapi\_windows\_cp\_conv](function.sapi-windows-cp-conv.md) — Converte string de um código de página para outro
- [sapi\_windows\_cp\_get](function.sapi-windows-cp-get.md) — Obtém o código de página atual
- [sapi\_windows\_cp\_is\_utf8](function.sapi-windows-cp-is-utf8.md) — Indica se o código de página é compatível com UTF-8
- [sapi\_windows\_cp\_set](function.sapi-windows-cp-set.md) — Define o código de página do processo
- [sapi\_windows\_generate\_ctrl\_event](function.sapi-windows-generate-ctrl-event.md) — Envia um evento CTRL a outro processo
- [sapi\_windows\_set\_ctrl\_handler](function.sapi-windows-set-ctrl-handler.md) — Define ou remove um manipulador de evento CTRL
- [sapi\_windows\_vt100\_support](function.sapi-windows-vt100-support.md) — Obtém ou define suporte VT100 para o fluxo especificado associado a um buffer de saída de um console Windows.
- [show\_source](function.show-source.md) — Sinônimo de highlight\_file
- [sleep](function.sleep.md) — Atrasa a execução
- [sys\_getloadavg](function.sys-getloadavg.md) — Obtém a média de carga do sistema
- [time\_nanosleep](function.time-nanosleep.md) — Atrasa por um número de segundos e nanossegundos
- [time\_sleep\_until](function.time-sleep-until.md) — Faz o script pausar até o horário especificado
- [uniqid](function.uniqid.md) — Gera um identificador baseado em horário
- [unpack](function.unpack.md) — Desempacota dados de uma string binária
- [usleep](function.usleep.md) — Atrasa a execução em microssegundos

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
