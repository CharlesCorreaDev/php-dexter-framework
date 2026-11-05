# Manipulação de conexão e persistência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.connection-handling.php

---

## Manipulação de conexão e persistência

> **Nota**:
>
> Em plataformas Unix, a extensão é sensível a scripts que usam a
> chamada de sistema fork() sem chamar também exec(). Os usuários são aconselhados a não
> reusar instâncias de [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) em um
> processo filho bifurcado.

## Persistência de conexão e topologia (versão PHP desde 1.2.0)

Todas as versões da extensão desde 1.2.0 persistem o
objeto cliente [» libmongoc](https://github.com/mongodb/mongo-c-driver) no
processo de trabalho do PHP, o que permite reutilizar conexões de banco de dados,
autenticação de estados, *e* informações de topologia em
diversas solicitações.

Quando [MongoDB\Driver\Manager::\_\_construct()](mongodb-driver-manager.construct.md) é
invocado, um hash é criado a partir de seus argumentos (ou seja, string URI e
opções de array). A extensão tentará encontrar um objeto cliente
[» libmongoc](https://github.com/mongodb/mongo-c-driver) anteriormente persistente para
esse hash. Se um cliente existente não puder ser encontrado para o hash, um novo cliente
será criado e persistido para uso futuro. Este comportamento pode ser desabilitado
através da opção do driver `"disableClientPersistence"`.

Cada cliente contém suas próprias conexões de banco de dados e uma visão da topologia do servidor
(por exemplo, standalone, replica set, shard cluster). Ao persistir o
cliente entre solicitações PHP, a extensão é capaz de reutilizar conexões de banco
de dados estabelecidas e eliminar a necessidade de
[» descobrir a topologia do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)
em cada solicitação.

Considere o seguinte exemplo:

```
<?php

$managers = [
    new MongoDB\Driver\Manager('mongodb://127.0.0.1'),
    new MongoDB\Driver\Manager('mongodb://127.0.0.1'),
    new MongoDB\Driver\Manager('mongodb://127.0.0.1:27017'),
    new MongoDB\Driver\Manager('mongodb://rs1.example.com,rs2.example.com/', ['replicaSet' => 'myReplicaSet']),
];

foreach ($managers as $manager) {
    $manager->executeCommand('test', new MongoDB\Driver\Command(['ping' => 1]));
}

?>
```

Os dois primeiros objetos Manager compartilharão o mesmo
cliente [» libmongoc](https://github.com/mongodb/mongo-c-driver), pois
seus argumentos construtores são idênticos. O terceiro e o quarto objetos usarão
cada um seu próprio cliente. No total, três clientes serão criados e o
worker PHP que executa este script abrirá duas conexões para
`127.0.0.1` e uma conexão para cada um de
`rs1.example.com` e `rs2.example.com`.
Se a extensão descobrir membros adicionais do conjunto de réplicas após
emitir comandos `hello`, ela também abrirá conexões adicionais
com esses servidores.

Se o mesmo worker executar o script novamente em uma segunda solicitação, os três
clientes serão reutilizados e nenhuma nova conexão será feita. Dependendo de há
quanto tempo a solicitação anterior foi atendida, a extensão pode precisar
emitir comandos `hello` adicionais para atualizar sua visualização das
topologias.

## Persistência de socket (versões PHP anteriores a 1.2.0)

Versões da extensão anteriores a 1.2.0 utilizam a API de Fluxos do PHP para
conexões de banco de dados, usando uma API dentro de
[» libmongoc](https://github.com/mongodb/mongo-c-driver) para designar
manipuladores personalizados para comunicação de socket; entretanto, um novo cliente libmongoc é
criado para cada [MongoDB\Driver\Manager](class.mongodb-driver-manager.md). Como resultado,
a extensão persiste em conexões de banco de dados individuais, mas não no
estado de autenticação ou nas informações de topologia. Isso significa que a extensão
precisa emitir comandos no início de cada solicitação para autenticar e
[» descobrir a topologia do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md).

As conexões de banco de dados são persistidas por um hash derivado do host do
servidor, da porta e da string URI usada para construir o
[MongoDB\Driver\Manager](class.mongodb-driver-manager.md). As opções de array do construtor n
ão estão incluídas neste hash.

> **Nota**:
>
> Versões da extensão >= 1.1.8 e < 1.2.0 não persiste sockets
> para conexões SSL. Consulte
> [» PHPC-720](https://jira.mongodb.org/browse/PHPC-720) para
> obter informações adicionais.

Apesar de suas deficiências com conexões SSL persistentes e informações de
topologia, esta versão da extensão suporta todas as
[opções de contexto SSL](context.ssl.md), uma vez que usa a
API de Fluxos do PHP.

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
