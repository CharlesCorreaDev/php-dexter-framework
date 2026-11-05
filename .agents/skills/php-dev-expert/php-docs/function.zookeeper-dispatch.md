# Chama funções de retorno para operações pendentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zookeeper-dispatch.php

---

# zookeeper\_dispatch

(PECL zookeeper >= 0.4.0)

zookeeper\_dispatch — Chama funções de retorno para operações pendentes

### Descrição

function **zookeeper\_dispatch**(): [void](language.types.void.md)

A função **zookeeper\_dispatch()** chama as funções de retorno passadas ​​por operações como [Zookeeper::get()](zookeeper.get.md) ou [Zookeeper::exists()](zookeeper.exists.md).

**Cuidado**

Desde a versão 0.4.0, esta função deve ser chamada manualmente para realizar operações assíncronas. Se quiser que isso seja feito automaticamente, você também pode declarar ticks no início do seu programa.

Após o PHP 7.1, esta função pode ser ignorada. Esta extensão usa EG(vm\_interrupt) para implementar despacho assíncrono.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite um aviso PHP quando a função de retorno não puder ser invocada.

### Examples

**Exemplo #1 Exemplo #1 de **zookeeper\_dispatch()****

Despacho manual de funções de retorno.

```
<?php
$client = new Zookeeper();
$client->connect('localhost:2181');
$client->get('/zookeeper', function() {
    echo "Função de retorno foi chamada".PHP_EOL;
});
while(true) {
    sleep(1);
    zookeeper_dispatch();
}
?>
```

**Exemplo #2 Exemplo #2 de **zookeeper\_dispatch()****

Declaração de tiques.

```
<?php
declare(ticks=1);

$client = new Zookeeper();
$client->connect('localhost:2181');
$client->get('/zookeeper', function() {
    echo "Função de retorno foi chamada".PHP_EOL;
});
while(true) {
    sleep(1);
}
?>
```

### Veja também

- [Zookeeper::addAuth()](zookeeper.addauth.md) - Especifica credenciais da aplicação
- [Zookeeper::connect()](zookeeper.connect.md) - Cria um identificador usado para comunicação com o ZooKeeper
- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::exists()](zookeeper.exists.md) - Verifica a existência de um nó no zookeeper de forma síncrona
- [Zookeeper::get()](zookeeper.get.md) - Obtém os dados associados a um nó de forma síncrona
- [Zookeeper::getChildren()](zookeeper.getchildren.md) - Lista os filhos de um nó de forma síncrona
- [Zookeeper::setWatcher()](zookeeper.setwatcher.md) - Define uma função observadora

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
