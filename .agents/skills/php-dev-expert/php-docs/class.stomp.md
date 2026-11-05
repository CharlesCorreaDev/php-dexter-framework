# A classe Stomp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.stomp.php

---

# A classe Stomp

(PECL stomp >= 0.1.0)

## Introdução

Representa uma conexão entre PHP e um broker de mensagens compatível com Stomp.

## Resumo da classe

class **Stomp**
{

/\* Métodos \*/

public function [\_\_construct](stomp.construct.md)(  
    [string](language.types.string.md) `$broker` = ini\_get("stomp.default\_broker\_uri"),  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [array](language.types.array.md) `$headers` = ?  
)

public function [abort](stomp.abort.md)([string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_abort**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

public function [ack](stomp.ack.md)([mixed](language.types.mixed.md) `$msg`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_ack**([resource](language.types.resource.md) `$link`, [mixed](language.types.mixed.md) `$msg`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

public function [begin](stomp.begin.md)([string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_begin**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

public function [commit](stomp.commit.md)([string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_commit**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_connect**(  
    [string](language.types.string.md) `$broker` = ini\_get("stomp.default\_broker\_uri"),  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [array](language.types.array.md) `$headers` = ?  
): [resource](language.types.resource.md)

function **stomp\_close**([resource](language.types.resource.md) `$link`): [bool](language.types.boolean.md)

public function [error](stomp.error.md)(): [string](language.types.string.md)

function **stomp\_error**([resource](language.types.resource.md) `$link`): [string](language.types.string.md)

public function [getReadTimeout](stomp.getreadtimeout.md)(): [array](language.types.array.md)

function **stomp\_get\_read\_timeout**([resource](language.types.resource.md) `$link`): [array](language.types.array.md)

public function [getSessionId](stomp.getsessionid.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

function **stomp\_get\_session\_id**([resource](language.types.resource.md) `$link`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [hasFrame](stomp.hasframe.md)(): [bool](language.types.boolean.md)

function **stomp\_has\_frame**([resource](language.types.resource.md) `$link`): [bool](language.types.boolean.md)

public function [readFrame](stomp.readframe.md)([string](language.types.string.md) `$class_name` = "stompFrame"): [stompframe](class.stompframe.md)

function **stomp\_read\_frame**([resource](language.types.resource.md) `$link`): [array](language.types.array.md)

public function [send](stomp.send.md)([string](language.types.string.md) `$destination`, [mixed](language.types.mixed.md) `$msg`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_send**(  
    [resource](language.types.resource.md) `$link`,  
    [string](language.types.string.md) `$destination`,  
    [mixed](language.types.mixed.md) `$msg`,  
    [array](language.types.array.md) `$headers` = ?  
): [bool](language.types.boolean.md)

public function [setReadTimeout](stomp.setreadtimeout.md)([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = ?): [void](language.types.void.md)

function **stomp\_set\_read\_timeout**([resource](language.types.resource.md) `$link`, [int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = ?): [void](language.types.void.md)

public function [subscribe](stomp.subscribe.md)([string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_subscribe**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

public function [unsubscribe](stomp.unsubscribe.md)([string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

function **stomp\_unsubscribe**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

public function [\_\_destruct](stomp.destruct.md)()

}

## Índice

- [Stomp::abort](stomp.abort.md) — Reverte uma transação em andamento
- [Stomp::ack](stomp.ack.md) — Reconhece o consumo de uma mensagem
- [Stomp::begin](stomp.begin.md) — Inicia uma transação
- [Stomp::commit](stomp.commit.md) — Confirma uma transação em andamento
- [Stomp::\_\_construct](stomp.construct.md) — Abre uma conexão
- [Stomp::\_\_destruct](stomp.destruct.md) — Fecha a conexão stomp
- [Stomp::error](stomp.error.md) — Obtém o último erro stomp
- [Stomp::getReadTimeout](stomp.getreadtimeout.md) — Obtém tempo limite de leitura
- [Stomp::getSessionId](stomp.getsessionid.md) — Obtém o ID da sessão stomp atual
- [Stomp::hasFrame](stomp.hasframe.md) — Indica se há ou não um quadro pronto para leitura
- [Stomp::readFrame](stomp.readframe.md) — Lê o próximo quadro
- [Stomp::send](stomp.send.md) — Envia uma mensagem
- [Stomp::setReadTimeout](stomp.setreadtimeout.md) — Define o tempo limite de leitura
- [Stomp::subscribe](stomp.subscribe.md) — Registre-se para ouvir um determinado destino
- [Stomp::unsubscribe](stomp.unsubscribe.md) — Remove uma inscrição existente

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
