# Adiciona um servidor ao pool de servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.addserver.php

---

# Memcached::addServer

(PECL memcached >= 0.1.0)

Memcached::addServer — Adiciona um servidor ao pool de servidores

### Descrição

public function **Memcached::addServer**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [int](language.types.integer.md) `$weight` = 0): [bool](language.types.boolean.md)

**Memcached::addServer()** adiciona o servidor especificado ao
pool de servidores. Nenhuma conexão é estabelecida com o servidor neste momento, mas
se você estiver usando a opção de distribuição de chave consistente (via
**`Memcached::DISTRIBUTION_CONSISTENT`** ou
**`Memcached::OPT_LIBKETAMA_COMPATIBLE`**), algumas das estruturas
de dados internas terão que ser atualizadas. Portanto, se você precisar adicionar
vários servidores, é melhor usar o
[Memcached::addServers()](memcached.addservers.md), pois a atualização ocorrerá
apenas uma vez.

O mesmo servidor pode aparecer várias vezes no pool de servidores porque
nenhuma verificação de duplicação é feita. Isso não é aconselhável; em vez disso,
use `weight` para aumentar o peso da seleção
desse servidor.

### Parâmetros

`host`
:   O nome do host do servidor memcache. Se o nome do host for inválido,
    as operações relacionadas a dados definirão o código de resultado
    **`Memcached::RES_HOST_LOOKUP_FAILURE`**. A partir da
    versão 2.0.0b1, este parâmetro também pode especificar o caminho de um arquivo de
    socket unix ex. `/path/to/memcached.sock`
    para usar sockets de domínio UNIX, neste caso, `port`
    também deve ser definida como `0`.

`port`
:   A porta na qual o memcache está em execução. Geralmente, é
    `11211`. A partir da versão 2.0.0b1, defina esse parâmetro como `0`
    ao usar sockets de domínio UNIX.

`weight`
:   O peso do servidor relativo ao peso total de todos os servidores
    no pool. Isso controla a probabilidade do servidor ser selecionado
    para operações. Isso é usado apenas com opção de distribuição consistente
    e geralmente corresponde à quantidade de memória disponível
    para memcache naquele servidor.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcached::addServer()****

```
<?php
$m = new Memcached();

/* Adiciona 2 servidores, para que o segundo
   tem duas vezes mais chances de ser selecionado. */
$m->addServer('mem1.domain.com', 11211, 33);
$m->addServer('mem2.domain.com', 11211, 67);
?>
```

### Veja também

- [Memcached::addServers()](memcached.addservers.md) - Adiciona múltiplos servidores ao pool de servidores
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
