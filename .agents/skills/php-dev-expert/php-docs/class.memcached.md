# A classe Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.memcached.php

---

# A classe Memcached

(PECL memcached >= 0.1.0)

## Introdução

Representa uma conexão com um conjunto de servidores memcached.

## Resumo da classe

class **Memcached**
{

/\* Métodos \*/

public function [\_\_construct](memcached.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$persistent_id` = **`null`**, [?](language.types.null.md)[callable](language.types.callable.md) `$callback` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$connection_str` = **`null`**)

public function [add](memcached.add.md)([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [addByKey](memcached.addbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

public function [addServer](memcached.addserver.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [int](language.types.integer.md) `$weight` = 0): [bool](language.types.boolean.md)

public function [addServers](memcached.addservers.md)([array](language.types.array.md) `$servers`): [bool](language.types.boolean.md)

public function [append](memcached.append.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [appendByKey](memcached.appendbykey.md)([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [cas](memcached.cas.md)(  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$cas_token`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

public function [casByKey](memcached.casbykey.md)(  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$cas_token`,  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

public function [decrement](memcached.decrement.md)(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [decrementByKey](memcached.decrementbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [delete](memcached.delete.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$time` = 0): [bool](language.types.boolean.md)

public function [deleteByKey](memcached.deletebykey.md)([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$time` = 0): [bool](language.types.boolean.md)

public function [deleteMulti](memcached.deletemulti.md)([array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$time` = 0): [array](language.types.array.md)

public function [deleteMultiByKey](memcached.deletemultibykey.md)([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$time` = 0): [array](language.types.array.md)

public function [fetch](memcached.fetch.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [fetchAll](memcached.fetchall.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [flush](memcached.flush.md)([int](language.types.integer.md) `$delay` = 0): [bool](language.types.boolean.md)

public function [get](memcached.get.md)([string](language.types.string.md) `$key`, [?](language.types.null.md)[callable](language.types.callable.md) `$cache_cb` = **`null`**, [int](language.types.integer.md) `$get_flags` = 0): [mixed](language.types.mixed.md)

public function [getAllKeys](memcached.getallkeys.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getByKey](memcached.getbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [?](language.types.null.md)[callable](language.types.callable.md) `$cache_cb` = **`null`**,  
    [int](language.types.integer.md) `$get_flags` = 0  
): [mixed](language.types.mixed.md)

public function [getDelayed](memcached.getdelayed.md)([array](language.types.array.md) `$keys`, [bool](language.types.boolean.md) `$with_cas` = **`false`**, [?](language.types.null.md)[callable](language.types.callable.md) `$value_cb` = **`null`**): [bool](language.types.boolean.md)

public function [getDelayedByKey](memcached.getdelayedbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [array](language.types.array.md) `$keys`,  
    [bool](language.types.boolean.md) `$with_cas` = **`false`**,  
    [?](language.types.null.md)[callable](language.types.callable.md) `$value_cb` = **`null`**  
): [bool](language.types.boolean.md)

public function [getMulti](memcached.getmulti.md)([array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$get_flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getMultiByKey](memcached.getmultibykey.md)([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$get_flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getOption](memcached.getoption.md)([int](language.types.integer.md) `$option`): [mixed](language.types.mixed.md)

public function [getResultCode](memcached.getresultcode.md)(): [int](language.types.integer.md)

public function [getResultMessage](memcached.getresultmessage.md)(): [string](language.types.string.md)

public function [getServerByKey](memcached.getserverbykey.md)([string](language.types.string.md) `$server_key`): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getServerList](memcached.getserverlist.md)(): [array](language.types.array.md)

public function [getStats](memcached.getstats.md)([?](language.types.null.md)[string](language.types.string.md) `$type` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getVersion](memcached.getversion.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [increment](memcached.increment.md)(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [incrementByKey](memcached.incrementbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [isPersistent](memcached.ispersistent.md)(): [bool](language.types.boolean.md)

public function [isPristine](memcached.ispristine.md)(): [bool](language.types.boolean.md)

public function [prepend](memcached.prepend.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [prependByKey](memcached.prependbykey.md)([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [quit](memcached.quit.md)(): [bool](language.types.boolean.md)

public function [replace](memcached.replace.md)([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [replaceByKey](memcached.replacebykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

public function [resetServerList](memcached.resetserverlist.md)(): [bool](language.types.boolean.md)

public function [set](memcached.set.md)([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [setByKey](memcached.setbykey.md)(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

public function [setEncodingKey](memcached.setencodingkey.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [setMulti](memcached.setmulti.md)([array](language.types.array.md) `$items`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [setMultiByKey](memcached.setmultibykey.md)([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$items`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [setOption](memcached.setoption.md)([int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

public function [setOptions](memcached.setoptions.md)([array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

public function [setSaslAuthData](memcached.setsaslauthdata.md)([string](language.types.string.md) `$username`, [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

public function [touch](memcached.touch.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

public function [touchByKey](memcached.touchbykey.md)([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

}

## Índice

- [Memcached::add](memcached.add.md) — Adiciona um item em uma nova key
- [Memcached::addByKey](memcached.addbykey.md) — Adiciona um item sob uma nova chave em um servidor específico
- [Memcached::addServer](memcached.addserver.md) — Adiciona um servidor ao pool de servidores
- [Memcached::addServers](memcached.addservers.md) — Adiciona múltiplos servidores ao pool de servidores
- [Memcached::append](memcached.append.md) — Anexa dados a um item existente
- [Memcached::appendByKey](memcached.appendbykey.md) — Anexa dados a um item existente em um servidor específico
- [Memcached::cas](memcached.cas.md) — Compara e troca um item
- [Memcached::casByKey](memcached.casbykey.md) — Compara e troca um item em um servidor específico
- [Memcached::\_\_construct](memcached.construct.md) — Cria uma instância do Memcached
- [Memcached::decrement](memcached.decrement.md) — Decrementa o valor do item numérico
- [Memcached::decrementByKey](memcached.decrementbykey.md) — Decrementa o valor do item numérico, armazenado em um servidor específico
- [Memcached::delete](memcached.delete.md) — Remover um item
- [Memcached::deleteByKey](memcached.deletebykey.md) — Remover um item de um servidor específico
- [Memcached::deleteMulti](memcached.deletemulti.md) — Remover vários itens
- [Memcached::deleteMultiByKey](memcached.deletemultibykey.md) — Remover vários itens de um servidor específico
- [Memcached::fetch](memcached.fetch.md) — Busca o próximo resultado
- [Memcached::fetchAll](memcached.fetchall.md) — Busca todos os resultados restantes
- [Memcached::flush](memcached.flush.md) — Invalida todos os itens no cache
- [Memcached::get](memcached.get.md) — Recupera um item
- [Memcached::getAllKeys](memcached.getallkeys.md) — Obtém as chaves armazenadas em todos os servidores
- [Memcached::getByKey](memcached.getbykey.md) — Recupera item de um servidor específico
- [Memcached::getDelayed](memcached.getdelayed.md) — Solicita vários itens
- [Memcached::getDelayedByKey](memcached.getdelayedbykey.md) — Solicita vários itens de um servidor específico
- [Memcached::getMulti](memcached.getmulti.md) — Recupera vários itens
- [Memcached::getMultiByKey](memcached.getmultibykey.md) — Recupere vários itens de um servidor específico
- [Memcached::getOption](memcached.getoption.md) — Recupera um valor de opção do Memcached
- [Memcached::getResultCode](memcached.getresultcode.md) — Retorna o código de resultado da última operação
- [Memcached::getResultMessage](memcached.getresultmessage.md) — Retorna a mensagem descrevendo o resultado da última operação
- [Memcached::getServerByKey](memcached.getserverbykey.md) — Mapear uma chave para um servidor
- [Memcached::getServerList](memcached.getserverlist.md) — Obtenha a lista dos servidores no pool
- [Memcached::getStats](memcached.getstats.md) — Obtem estatísticas do pool de servidores
- [Memcached::getVersion](memcached.getversion.md) — Obtem informações da versão do pool de servidores
- [Memcached::increment](memcached.increment.md) — Incrementa o valor do item numérico
- [Memcached::incrementByKey](memcached.incrementbykey.md) — Incrementa o valor do item numérico, armazenado em um servidor específico
- [Memcached::isPersistent](memcached.ispersistent.md) — Verifica se uma conexão persistente com o memcache está sendo usada
- [Memcached::isPristine](memcached.ispristine.md) — Verifica se a instância foi criada recentemente
- [Memcached::prepend](memcached.prepend.md) — Anexa dados a um item existente
- [Memcached::prependByKey](memcached.prependbykey.md) — Anexa dados a um item existente em um servidor específico
- [Memcached::quit](memcached.quit.md) — Fecha todas as conexões abertas
- [Memcached::replace](memcached.replace.md) — Substitui o item em uma chave existente
- [Memcached::replaceByKey](memcached.replacebykey.md) — Substitua o item em uma chave existente em um servidor específico
- [Memcached::resetServerList](memcached.resetserverlist.md) — Limpa todos os servidores da lista de servidores
- [Memcached::set](memcached.set.md) — Armazena um item
- [Memcached::setByKey](memcached.setbykey.md) — Armazena um item em um servidor específico
- [Memcached::setEncodingKey](memcached.setencodingkey.md) — Define a chave de criptografia AES para dados no Memcached
- [Memcached::setMulti](memcached.setmulti.md) — Armazena vários itens
- [Memcached::setMultiByKey](memcached.setmultibykey.md) — Armazena vários itens em um servidor específico
- [Memcached::setOption](memcached.setoption.md) — Define uma opção Memcached
- [Memcached::setOptions](memcached.setoptions.md) — Define opções do Memcached
- [Memcached::setSaslAuthData](memcached.setsaslauthdata.md) — Define as credenciais a serem usadas para autenticação
- [Memcached::touch](memcached.touch.md) — Define uma nova expiração para um item
- [Memcached::touchByKey](memcached.touchbykey.md) — Define uma nova expiração para um item em um servidor específico

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
