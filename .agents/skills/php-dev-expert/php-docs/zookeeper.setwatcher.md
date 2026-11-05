# Define uma função observadora

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.setwatcher.php

---

# Zookeeper::setWatcher

(PECL zookeeper >= 0.1.0)

Zookeeper::setWatcher — Define uma função observadora

### Descrição

public
function **Zookeeper::setWatcher**([callable](language.types.callable.md) `$watcher_cb`): [bool](language.types.boolean.md)

### Parâmetros

`watcher_cb`
:   Um observador será definido no servidor para notificar o cliente se o nó for alterado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou não conseguem definir o observador.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::exists()](zookeeper.exists.md) - Verifica a existência de um nó no zookeeper de forma síncrona
- [Zookeeper::get()](zookeeper.get.md) - Obtém os dados associados a um nó de forma síncrona
- [ZookeeperException](class.zookeeperexception.md)

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
