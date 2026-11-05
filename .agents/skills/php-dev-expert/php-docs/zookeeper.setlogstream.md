# Define o fluxo a ser usado pela biblioteca para registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.setlogstream.php

---

# Zookeeper::setLogStream

(PECL zookeeper >= 0.1.0)

Zookeeper::setLogStream — Define o fluxo a ser usado pela biblioteca para registro

### Descrição

public
function **Zookeeper::setLogStream**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

A biblioteca zookeeper usa stderr como seu fluxo de registro padrão. O aplicativo deve garantir que o fluxo seja gravável. Passar NULL redefine o fluxo para seu valor padrão (stderr).

### Parâmetros

`stream`
:   O fluxo a ser usado pela biblioteca para registro.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou a operação falha.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::setDebugLevel()](zookeeper.setdebuglevel.md) - Define o nível de depuração para a biblioteca
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
