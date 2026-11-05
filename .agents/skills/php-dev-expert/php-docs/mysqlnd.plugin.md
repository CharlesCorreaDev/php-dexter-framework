# API do plugin do Driver Nativo MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.php

---

# API do plugin do Driver Nativo MySQL

## Índice

- [Uma comparação de plugins mysqlnd com Proxy MySQL](mysqlnd.plugin.mysql-proxy.md)
- [Obtendo a API do plugin mysqlnd](mysqlnd.plugin.obtaining.md)
- [Arquitetura do Plugin do Driver Nativo MySQL](mysqlnd.plugin.architecture.md)
- [A API do plugin mysqlnd](mysqlnd.plugin.api.md)
- [Começando a construir um plugin mysqlnd](mysqlnd.plugin.developing.md)

A API de plugin do Driver Nativo MySQL é um recurso do Driver Nativo
MySQL, ou `mysqlnd`. Os plugins `Mysqlnd`
operam na camada entre os aplicativos PHP e o servidor
MySQL. Isso é comparável ao Proxy MySQL. O Proxy MySQL opera em uma
camada entre qualquer aplicativo cliente MySQL, por exemplo, um aplicativo
PHP e o servidor MySQL. Os plugins `Mysqlnd`
podem realizar tarefas típicas do Proxy MySQL, como balanceamento de carga,
monitoramento e otimizações de desempenho. Devido à arquitetura e
localização diferentes, os plugins `mysqlnd` não
apresentam algumas das desvantagens do Proxy MySQL. Por exemplo, com plugins,
não há um ponto único de falha, nenhum servidor proxy dedicado para se implantar
e nenhuma nova linguagem de programação para aprender (Lua).

Um plugin `mysqlnd` pode ser pensado como uma extensão
do `mysqlnd`. Plugins podem interceptar a maioria das
funções do `mysqlnd`. As funções `mysqlnd`
são chamadas pelas extensões PHP MySQL como
`ext/mysql`, `ext/mysqli` e
`PDO_MYSQL`. Como resultado, é possível para um
plugin `mysqlnd` interceptar todas as chamadas feitas para essas
extensões a partir da aplicação cliente.

Chamadas internas de função `mysqlnd` também podem ser
interceptadas ou substituídas. Não há restrições na manipulação
de tabelas de funções internas do `mysqlnd`. É possível
configurar as coisas para que quando certas funções `mysqlnd`
sejam chamadas pelas extensões que usam
`mysqlnd`, a chamada seja direcionada para a função
apropriada no plugin `mysqlnd`. A capacidade de
manipular tabelas de funções internas do `mysqlnd` desta
forma permite máxima flexibilidade para plugins.

Plugins `Mysqlnd` são na verdade extensões PHP, escritas
em C, que usam a API do plugin `mysqlnd` (que está
embutida no Driver Nativo MySQL, `mysqlnd`) . Os plugins
podem ser 100% transparentes para aplicações PHP. Nenhuma alteração
na aplicação é necessária porque os plugins operam em uma camada diferente. O
plugin `mysqlnd` pode ser pensado como operando em uma
camada abaixo do `mysqlnd`.

A lista a seguir representa algumas aplicações possíveis de
plugins `mysqlnd`.

- Balanceamento de Carga

  - Divisão de leitura/gravação. Um exemplo disso é a extensão PECL/mysqlnd\_ms
    (Master Slave). Esta extensão divide consultas de leitura/gravação
    para uma configuração de replicação.
  - Failover
  - Round-Robin, menos carregado
- Monitoramento

  - Registro de Consultas
  - Análise de Consultas
  - Auditoria de Consultas. Um exemplo disso é a extensão PECL/mysqlnd\_sip (Proteção
    Contra Injeção SQL). Esta extensão inspeciona consultas
    e executa apenas aquelas permitidas de acordo com um conjunto de regras.
- Desempenho

  - Cache. Um exemplo disso é a extensão PECL/mysqlnd\_qc (Cache de
    Consultas).
  - Redução de velocidade
  - Fragmentação. Um exemplo disso é a extensão PECL/mysqlnd\_mc (Multi
    Conexão). Esta extensão tentará dividir uma instrução SELECT
    em n partes, usando SELECT ... LIMIT part\_1, SELECT
    LIMIT part\_n. Ele envia as consultas para servidores MySQL distintos e
    mescla o resultado no cliente.

**Plugins Disponíveis do Driver Nativo MySQL**

Existem vários plug-ins do mysqlnd já disponíveis. Esses
incluem:

- **PECL/mysqlnd\_mc** - plugin Multi
  Conexão.
- **PECL/mysqlnd\_ms** - plugin Master
  Slave.
- **PECL/mysqlnd\_qc** - plugin Query
  Cache.
- **PECL/mysqlnd\_pscache** - plugin de Cache
  de Manipulador de Instruções Preparadas.
- **PECL/mysqlnd\_sip** - plugin de Proteção Contra
  Injeção SQL.
- **PECL/mysqlnd\_uh** - plugin de Manipulador
  de Usuário.

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
