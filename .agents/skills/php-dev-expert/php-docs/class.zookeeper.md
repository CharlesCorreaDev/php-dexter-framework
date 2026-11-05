# A classe Zookeeper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zookeeper.php

---

# A classe Zookeeper

(PECL zookeeper >= 0.1.0)

## Introdução

Representa a sessão do ZooKeeper.

## Resumo da classe

class **Zookeeper**
{

/\* Métodos \*/

public
function [\_\_construct](zookeeper.construct.md)([string](language.types.string.md) `$host` = '', [callable](language.types.callable.md) `$watcher_cb` = **`null`**, [int](language.types.integer.md) `$recv_timeout` = 10000)

public
function [addAuth](zookeeper.addauth.md)([string](language.types.string.md) `$scheme`, [string](language.types.string.md) `$cert`, [callable](language.types.callable.md) `$completion_cb` = **`null`**): [bool](language.types.boolean.md)

public
function [close](zookeeper.close.md)(): [void](language.types.void.md)

public
function [connect](zookeeper.connect.md)([string](language.types.string.md) `$host`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**, [int](language.types.integer.md) `$recv_timeout` = 10000): [void](language.types.void.md)

public
function [create](zookeeper.create.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$value`,  
    [array](language.types.array.md) `$acls`,  
    [int](language.types.integer.md) `$flags` = **`null`**  
): [string](language.types.string.md)

public
function [delete](zookeeper.delete.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$version` = -1): [bool](language.types.boolean.md)

public
function [exists](zookeeper.exists.md)([string](language.types.string.md) `$path`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**): [array](language.types.array.md)

public
function [get](zookeeper.get.md)(  
    [string](language.types.string.md) `$path`,  
    [callable](language.types.callable.md) `$watcher_cb` = **`null`**,  
    [array](language.types.array.md) `&$stat` = **`null`**,  
    [int](language.types.integer.md) `$max_size` = 0  
): [string](language.types.string.md)

public
function [getAcl](zookeeper.getacl.md)([string](language.types.string.md) `$path`): [array](language.types.array.md)

public
function [getChildren](zookeeper.getchildren.md)([string](language.types.string.md) `$path`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**): [array](language.types.array.md)

public
function [getClientId](zookeeper.getclientid.md)(): [int](language.types.integer.md)

public
function [getConfig](zookeeper.getconfig.md)(): [ZookeeperConfig](class.zookeeperconfig.md)

public
function [getRecvTimeout](zookeeper.getrecvtimeout.md)(): [int](language.types.integer.md)

public
function [getState](zookeeper.getstate.md)(): [int](language.types.integer.md)

public
function [isRecoverable](zookeeper.isrecoverable.md)(): [bool](language.types.boolean.md)

public
function [set](zookeeper.set.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$value`,  
    [int](language.types.integer.md) `$version` = -1,  
    [array](language.types.array.md) `&$stat` = **`null`**  
): [bool](language.types.boolean.md)

public
function [setAcl](zookeeper.setacl.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$version`, [array](language.types.array.md) `$acl`): [bool](language.types.boolean.md)

public
static
function [setDebugLevel](zookeeper.setdebuglevel.md)([int](language.types.integer.md) `$logLevel`): [bool](language.types.boolean.md)

public
static
function [setDeterministicConnOrder](zookeeper.setdeterministicconnorder.md)([bool](language.types.boolean.md) `$yesOrNo`): [bool](language.types.boolean.md)

public
function [setLogStream](zookeeper.setlogstream.md)([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

public
function [setWatcher](zookeeper.setwatcher.md)([callable](language.types.callable.md) `$watcher_cb`): [bool](language.types.boolean.md)

/\* Constantes \*/

const
[int](language.types.integer.md)
[PERM\_READ](class.zookeeper.md#zookeeper.constants.perm-read) = 1;

const
[int](language.types.integer.md)
[PERM\_WRITE](class.zookeeper.md#zookeeper.constants.perm-write) = 2;

const
[int](language.types.integer.md)
[PERM\_CREATE](class.zookeeper.md#zookeeper.constants.perm-create) = 4;

const
[int](language.types.integer.md)
[PERM\_DELETE](class.zookeeper.md#zookeeper.constants.perm-delete) = 8;

const
[int](language.types.integer.md)
[PERM\_ADMIN](class.zookeeper.md#zookeeper.constants.perm-admin) = 16;

const
[int](language.types.integer.md)
[PERM\_ALL](class.zookeeper.md#zookeeper.constants.perm-all) = 31;

const
[int](language.types.integer.md)
[EPHEMERAL](class.zookeeper.md#zookeeper.constants.ephemeral) = 1;

const
[int](language.types.integer.md)
[SEQUENCE](class.zookeeper.md#zookeeper.constants.sequence) = 2;

const
[int](language.types.integer.md)
[LOG\_LEVEL\_ERROR](class.zookeeper.md#zookeeper.constants.log-level-error) = 1;

const
[int](language.types.integer.md)
[LOG\_LEVEL\_WARN](class.zookeeper.md#zookeeper.constants.log-level-warn) = 2;

const
[int](language.types.integer.md)
[LOG\_LEVEL\_INFO](class.zookeeper.md#zookeeper.constants.log-level-info) = 3;

const
[int](language.types.integer.md)
[LOG\_LEVEL\_DEBUG](class.zookeeper.md#zookeeper.constants.log-level-debug) = 4;

const
[int](language.types.integer.md)
[EXPIRED\_SESSION\_STATE](class.zookeeper.md#zookeeper.constants.expired-session-state) = -112;

const
[int](language.types.integer.md)
[AUTH\_FAILED\_STATE](class.zookeeper.md#zookeeper.constants.auth-failed-state) = -113;

const
[int](language.types.integer.md)
[CONNECTING\_STATE](class.zookeeper.md#zookeeper.constants.connecting-state) = 1;

const
[int](language.types.integer.md)
[ASSOCIATING\_STATE](class.zookeeper.md#zookeeper.constants.associating-state) = 2;

const
[int](language.types.integer.md)
[CONNECTED\_STATE](class.zookeeper.md#zookeeper.constants.connected-state) = 3;

const
[int](language.types.integer.md)
[READONLY\_STATE](class.zookeeper.md#zookeeper.constants.readonly-state) = 5;

const
[int](language.types.integer.md)
[NOTCONNECTED\_STATE](class.zookeeper.md#zookeeper.constants.notconnected-state) = 999;

const
[int](language.types.integer.md)
[CREATED\_EVENT](class.zookeeper.md#zookeeper.constants.created-event) = 1;

const
[int](language.types.integer.md)
[DELETED\_EVENT](class.zookeeper.md#zookeeper.constants.deleted-event) = 2;

const
[int](language.types.integer.md)
[CHANGED\_EVENT](class.zookeeper.md#zookeeper.constants.changed-event) = 3;

const
[int](language.types.integer.md)
[CHILD\_EVENT](class.zookeeper.md#zookeeper.constants.child-event) = 4;

const
[int](language.types.integer.md)
[SESSION\_EVENT](class.zookeeper.md#zookeeper.constants.session-event) = -1;

const
[int](language.types.integer.md)
[NOTWATCHING\_EVENT](class.zookeeper.md#zookeeper.constants.notwatching-event) = -2;

const
[int](language.types.integer.md)
[SYSTEMERROR](class.zookeeper.md#zookeeper.constants.systemerror) = -1;

const
[int](language.types.integer.md)
[RUNTIMEINCONSISTENCY](class.zookeeper.md#zookeeper.constants.runtimeinconsistency) = -2;

const
[int](language.types.integer.md)
[DATAINCONSISTENCY](class.zookeeper.md#zookeeper.constants.datainconsistency) = -3;

const
[int](language.types.integer.md)
[CONNECTIONLOSS](class.zookeeper.md#zookeeper.constants.connectionloss) = -4;

const
[int](language.types.integer.md)
[MARSHALLINGERROR](class.zookeeper.md#zookeeper.constants.marshallingerror) = -5;

const
[int](language.types.integer.md)
[UNIMPLEMENTED](class.zookeeper.md#zookeeper.constants.unimplemented) = -6;

const
[int](language.types.integer.md)
[OPERATIONTIMEOUT](class.zookeeper.md#zookeeper.constants.operationtimeout) = -7;

const
[int](language.types.integer.md)
[BADARGUMENTS](class.zookeeper.md#zookeeper.constants.badarguments) = -8;

const
[int](language.types.integer.md)
[INVALIDSTATE](class.zookeeper.md#zookeeper.constants.invalidstate) = -9;

const
[int](language.types.integer.md)
[NEWCONFIGNOQUORUM](class.zookeeper.md#zookeeper.constants.newconfignoquorum) = -13;

const
[int](language.types.integer.md)
[RECONFIGINPROGRESS](class.zookeeper.md#zookeeper.constants.reconfiginprogress) = -14;

const
[int](language.types.integer.md)
[OK](class.zookeeper.md#zookeeper.constants.ok) = 0;

const
[int](language.types.integer.md)
[APIERROR](class.zookeeper.md#zookeeper.constants.apierror) = -100;

const
[int](language.types.integer.md)
[NONODE](class.zookeeper.md#zookeeper.constants.nonode) = -101;

const
[int](language.types.integer.md)
[NOAUTH](class.zookeeper.md#zookeeper.constants.noauth) = -102;

const
[int](language.types.integer.md)
[BADVERSION](class.zookeeper.md#zookeeper.constants.badversion) = -103;

const
[int](language.types.integer.md)
[NOCHILDRENFOREPHEMERALS](class.zookeeper.md#zookeeper.constants.nochildrenforephemerals) = -108;

const
[int](language.types.integer.md)
[NODEEXISTS](class.zookeeper.md#zookeeper.constants.nodeexists) = -110;

const
[int](language.types.integer.md)
[NOTEMPTY](class.zookeeper.md#zookeeper.constants.notempty) = -111;

const
[int](language.types.integer.md)
[SESSIONEXPIRED](class.zookeeper.md#zookeeper.constants.sessionexpired) = -112;

const
[int](language.types.integer.md)
[INVALIDCALLBACK](class.zookeeper.md#zookeeper.constants.invalidcallback) = -113;

const
[int](language.types.integer.md)
[INVALIDACL](class.zookeeper.md#zookeeper.constants.invalidacl) = -114;

const
[int](language.types.integer.md)
[AUTHFAILED](class.zookeeper.md#zookeeper.constants.authfailed) = -115;

const
[int](language.types.integer.md)
[CLOSING](class.zookeeper.md#zookeeper.constants.closing) = -116;

const
[int](language.types.integer.md)
[NOTHING](class.zookeeper.md#zookeeper.constants.nothing) = -117;

const
[int](language.types.integer.md)
[SESSIONMOVED](class.zookeeper.md#zookeeper.constants.sessionmoved) = -118;

const
[int](language.types.integer.md)
[NOTREADONLY](class.zookeeper.md#zookeeper.constants.notreadonly) = -119;

const
[int](language.types.integer.md)
[EPHEMERALONLOCALSESSION](class.zookeeper.md#zookeeper.constants.ephemeralonlocalsession) = -120;

const
[int](language.types.integer.md)
[NOWATCHER](class.zookeeper.md#zookeeper.constants.nowatcher) = -121;

const
[int](language.types.integer.md)
[RECONFIGDISABLED](class.zookeeper.md#zookeeper.constants.reconfigdisabled) = -122;

}

## Constantes predefinidas

## Permissões do ZooKeeper

**`Zookeeper::PERM_READ`**
:   Pode ler o valor dos nós e listar seus filhos

**`Zookeeper::PERM_WRITE`**
:   Pode definir o valor dos nós

**`Zookeeper::PERM_CREATE`**
:   Pode criar filhos

**`Zookeeper::PERM_DELETE`**
:   Pode excluir filhos

**`Zookeeper::PERM_ADMIN`**
:   Pode executar set\_acl()

**`Zookeeper::PERM_ALL`**
:   Todas as opções acima combinadas com operação binária OU

## Opções de criação do ZooKeeper

**`Zookeeper::EPHEMERAL`**
:   Se a opção Zookeeper::EPHEMERAL estiver definida, o nó será removido automaticamente se a sessão do cliente terminar.

**`Zookeeper::SEQUENCE`**
:   Se a opção Zookeeper::SEQUENCE estiver definida um número de sequência único e crescente será anexado ao nome do caminho. O número de sequência tem sempre um comprimento fixo de 10 dígitos, preenchido com 0.

## Níveis de registro do ZooKeeper

**`Zookeeper::LOG_LEVEL_ERROR`**
:   Emite apenas mensagens de erro

**`Zookeeper::LOG_LEVEL_WARN`**
:   Emite erros/avisos

**`Zookeeper::LOG_LEVEL_INFO`**
:   Emite grandes mensagens de ação além de erros/avisos

**`Zookeeper::LOG_LEVEL_DEBUG`**
:   Emite tudo

## Estados do ZooKeeper

**`Zookeeper::EXPIRED_SESSION_STATE`**
:   Conectado, mas a sessão expirou

**`Zookeeper::AUTH_FAILED_STATE`**
:   Conectado, mas a autenticação falhou

**`Zookeeper::CONNECTING_STATE`**
:   Conectando

**`Zookeeper::ASSOCIATING_STATE`**
:   Associando

**`Zookeeper::CONNECTED_STATE`**
:   Conectado

**`Zookeeper::READONLY_STATE`**
:   A FAZER: ajude-nos a melhorar esta extensão.

**`Zookeeper::NOTCONNECTED_STATE`**
:   Falha na conexão

## Tipos de Observação do ZooKeeper

**`Zookeeper::CREATED_EVENT`**
:   Um nó foi criado

    Isso é gerado apenas por observações em nós inexistentes. Essas observações são definidas usando Zookeeper::exists.

**`Zookeeper::DELETED_EVENT`**
:   Um nó foi excluído

    Isso é gerado apenas por inspeções em nós. Essas inspeções são definidas usando Zookeeper::exists e Zookeeper::get.

**`Zookeeper::CHANGED_EVENT`**
:   Um nó foi alterado

    Isso é gerado apenas por inspeções em nós. Essas inspeções são definidas usando Zookeeper::exists e Zookeeper::get.

**`Zookeeper::CHILD_EVENT`**
:   Ocorreu uma alteração na lista de filhos

    Isso é gerado apenas por observações na lista de filhos de um nó. Essas observações são definidas usando Zookeeper::getChildren.

**`Zookeeper::SESSION_EVENT`**
:   Uma sessão foi perdida

    Isso é gerado quando um cliente perde contato ou se reconecta com um servidor.

**`Zookeeper::NOTWATCHING_EVENT`**
:   Uma observação foi removida

    Isso é gerado quando o servidor, por algum motivo, provavelmente por uma restrição de recursos, não monitora mais um nó para um cliente.

## Erros do sistema e do servidor do ZooKeeper

**`Zookeeper::SYSTEMERROR`**
:   Isso nunca é gerado pelo servidor e não deve ser usado para outra finalidade que não seja indicar um intervalo. Especificamente, códigos de erro maiores que esse valor, mas menores que Zookeeper::APIERROR, são erros de sistema.

**`Zookeeper::RUNTIMEINCONSISTENCY`**
:   Uma inconsistência de tempo de execução foi encontrada.

**`Zookeeper::DATAINCONSISTENCY`**
:   Foi encontrada uma inconsistência de dados.

**`Zookeeper::CONNECTIONLOSS`**
:   A conexão com o servidor foi perdida.

**`Zookeeper::MARSHALLINGERROR`**
:   Erro ao empacotar ou desempacotar dados.

**`Zookeeper::UNIMPLEMENTED`**
:   A operação não foi implementada.

**`Zookeeper::OPERATIONTIMEOUT`**
:   Atingido o tempo limite de operação.

**`Zookeeper::BADARGUMENTS`**
:   Argumentos inválidos.

**`Zookeeper::INVALIDSTATE`**
:   Estado de identificador inválido.

**`Zookeeper::NEWCONFIGNOQUORUM`**
:   Não há quorum de nova configuração conectado e atualizado com o líder da última configuração confirmada - tente invocar a reconfiguração depois que novos servidores forem conectados e sincronizados.

    Disponível a partir do ZooKeeper 3.5.0

**`Zookeeper::RECONFIGINPROGRESS`**
:   Reconfiguração solicitada enquanto outra reconfiguração está em andamento. Isso não é suportado no momento. Tente novamente.

    Disponível a partir do ZooKeeper 3.5.0

## Erros da API do ZooKeeper

**`Zookeeper::OK`**
:   Está tudo bem.

**`Zookeeper::APIERROR`**
:   Isso nunca é gerado pelo servidor e não deve ser usado para outra finalidade que não seja indicar um intervalo. Especificamente, códigos de erro maiores que esse valor são erros de API (enquanto valores menores que isso indicam um Zookeeper::SYSTEMERROR).

**`Zookeeper::NONODE`**
:   O nó não existe.

**`Zookeeper::NOAUTH`**
:   Não autenticado.

**`Zookeeper::BADVERSION`**
:   Conflito de versão.

**`Zookeeper::NOCHILDRENFOREPHEMERALS`**
:   Nós efêmeros podem não ter filhos.

**`Zookeeper::NODEEXISTS`**
:   O nó já existe.

**`Zookeeper::NOTEMPTY`**
:   O nó tem filhos.

**`Zookeeper::SESSIONEXPIRED`**
:   A sessão foi expirada pelo servidor.

**`Zookeeper::INVALIDCALLBACK`**
:   Função de retorno inválida especificada.

**`Zookeeper::INVALIDACL`**
:   ACL inválida especificada.

**`Zookeeper::AUTHFAILED`**
:   A autenticação do cliente falhou.

**`Zookeeper::CLOSING`**
:   O ZooKeeper está fechando.

**`Zookeeper::NOTHING`**
:   (não é erro) Nenhuma resposta do servidor ao processo.

**`Zookeeper::SESSIONMOVED`**
:   Sessão movida para outro servidor, então a operação é ignorada.

**`Zookeeper::NOTREADONLY`**
:   Solicitação de mudança de estado passada para servidor somente leitura.

**`Zookeeper::EPHEMERALONLOCALSESSION`**
:   Tentativa de criar um nó efêmero em uma sessão local.

**`Zookeeper::NOWATCHER`**
:   O observador não pôde ser encontrado.

**`Zookeeper::RECONFIGDISABLED`**
:   Tentativa de executar uma operação de reconfiguração quando o recurso de reconfiguração está desabilitado.

## Índice

- [Zookeeper::addAuth](zookeeper.addauth.md) — Especifica credenciais da aplicação
- [Zookeeper::close](zookeeper.close.md) — Fecha o identificador do zookeeper e libera todos os recursos
- [Zookeeper::connect](zookeeper.connect.md) — Cria um identificador usado para comunicação com o ZooKeeper
- [Zookeeper::\_\_construct](zookeeper.construct.md) — Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::create](zookeeper.create.md) — Cria um nó de forma síncrona
- [Zookeeper::delete](zookeeper.delete.md) — Exclui um nó no zookeeper de forma síncrona
- [Zookeeper::exists](zookeeper.exists.md) — Verifica a existência de um nó no zookeeper de forma síncrona
- [Zookeeper::get](zookeeper.get.md) — Obtém os dados associados a um nó de forma síncrona
- [Zookeeper::getAcl](zookeeper.getacl.md) — Obtém a ACL associada a um nó de forma síncrona
- [Zookeeper::getChildren](zookeeper.getchildren.md) — Lista os filhos de um nó de forma síncrona
- [Zookeeper::getClientId](zookeeper.getclientid.md) — Retorna o ID da sessão do cliente, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO\_CONNECTED\_STATE)
- [Zookeeper::getConfig](zookeeper.getconfig.md) — Obtém instância de ZookeeperConfig
- [Zookeeper::getRecvTimeout](zookeeper.getrecvtimeout.md) — Retorna o tempo limite desta sessão, válido somente se estiver conectado no momento (ou seja, o último estado do observador foi ZOO\_CONNECTED\_STATE). Este valor pode mudar após a reconexão do servidor.
- [Zookeeper::getState](zookeeper.getstate.md) — Obtém o estado da conexão do zookeper
- [Zookeeper::isRecoverable](zookeeper.isrecoverable.md) — Verifica se o estado atual da conexão do zookeeper pode ser recuperado
- [Zookeeper::set](zookeeper.set.md) — Define os dados associados a um nó
- [Zookeeper::setAcl](zookeeper.setacl.md) — Define a ACL associada a um nó de forma síncrona
- [Zookeeper::setDebugLevel](zookeeper.setdebuglevel.md) — Define o nível de depuração para a biblioteca
- [Zookeeper::setDeterministicConnOrder](zookeeper.setdeterministicconnorder.md) — Habilita/desabilita a randomização da ordem da extremidade final do quorum
- [Zookeeper::setLogStream](zookeeper.setlogstream.md) — Define o fluxo a ser usado pela biblioteca para registro
- [Zookeeper::setWatcher](zookeeper.setwatcher.md) — Define uma função observadora

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
