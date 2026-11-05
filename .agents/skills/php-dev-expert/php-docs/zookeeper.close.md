# Fecha o identificador do zookeeper e libera todos os recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.close.php

---

# Zookeeper::close

(PECL zookeeper >= 0.5.0)

Zookeeper::close — Fecha o identificador do zookeeper e libera todos os recursos

### Descrição

public
function **Zookeeper::close**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados ao fechar uma instância não inicializada.

### Veja também

- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::connect()](zookeeper.connect.md) - Cria um identificador usado para comunicação com o ZooKeeper
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
