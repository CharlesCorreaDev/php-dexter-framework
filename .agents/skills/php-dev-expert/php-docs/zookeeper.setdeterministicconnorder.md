# Habilita/desabilita a randomização da ordem da extremidade final do quorum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.setdeterministicconnorder.php

---

# Zookeeper::setDeterministicConnOrder

(PECL zookeeper >= 0.1.0)

Zookeeper::setDeterministicConnOrder — Habilita/desabilita a randomização da ordem da extremidade final do quorum

### Descrição

public
static
function **Zookeeper::setDeterministicConnOrder**([bool](language.types.boolean.md) `$yesOrNo`): [bool](language.types.boolean.md)

Se for passado o valor true, o cliente se conectará aos pares do quorum na ordem especificada na chamada zookeeper\_init(). Um valor false fará com que o zookeeper\_init() permute os pontos de extremidade dos pares, o que é bom para uma distribuição mais uniforme da conexão do cliente entre os pares do quorum.
O cliente ZooKeeper C usa false por padrão.

### Parâmetros

`yesOrNo`
:   Habilita/desabilita a randomização da ordem da extremidade final do quorum.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou a operação falha.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

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
