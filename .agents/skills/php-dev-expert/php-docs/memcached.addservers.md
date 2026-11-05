# Adiciona múltiplos servidores ao pool de servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.addservers.php

---

# Memcached::addServers

(PECL memcached >= 0.1.1)

Memcached::addServers — Adiciona múltiplos servidores ao pool de servidores

### Descrição

public function **Memcached::addServers**([array](language.types.array.md) `$servers`): [bool](language.types.boolean.md)

**Memcached::addServers()** adiciona
servidores ao pool de `servers`. Cada entrada
em `servers` deve ser um array contendo hostname,
porta e, opcionalmente, o peso do servidor. Nenhuma conexão é estabelecida
com os servidores neste momento.

O mesmo servidor pode aparecer várias vezes no pool de servidores porque
nenhuma verificação de duplicação é feita. Isso não é aconselhável; em vez disso,
use a opção `weight` para aumentar o peso da seleção
desse servidor.

### Parâmetros

`array`
:   Array dos servidores a serem adicionados ao pool.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcached::addServers()****

```
<?php
$m = new Memcached();

$servers = array(
    array('mem1.domain.com', 11211, 33),
    array('mem2.domain.com', 11211, 67)
);
$m->addServers($servers);
?>
```

### Veja também

- [Memcached::addServer()](memcached.addserver.md) - Adiciona um servidor ao pool de servidores
- [Memcached::resetServerList()](memcached.resetserverlist.md) - Limpa todos os servidores da lista de servidores

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
