# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cubrid.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

As constantes a seguir podem ser usadas ao executar a instrução SQL. Eles podem
ser passados para [cubrid\_prepare()](function.cubrid-prepare.md) e
[cubrid\_execute()](function.cubrid-execute.md).

**Opções de execução SQL CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_INCLUDE_OID`** | Determina se deseja obter o OID durante a execução da consulta. |
| **`CUBRID_ASYNC`** | Executa a consulta em modo assíncrono. |
| **`CUBRID_EXEC_QUERY_ALL`** | Executa a consulta em modo síncrono. Esta opção deve ser definida ao executar múltiplas instruções SQL. |

As constantes a seguir podem ser usadas ao buscar os resultados para especificar
o comportamento de busca. Eles podem ser passados para [cubrid\_fetch()](function.cubrid-fetch.md) e
[cubrid\_fetch\_array()](function.cubrid-fetch-array.md).

**Opções de busca CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_NUM`** | Obtém o resultado da consulta como um array numérico (padrão 0). |
| **`CUBRID_ASSOC`** | Obtém o resultado da consulta como um array associativo. |
| **`CUBRID_BOTH`** | Obtém o resultado da consulta como arrays numéricos e associativos (valor padrão). |
| **`CUBRID_OBJECT`** | Obtém o resultado da consulta como um objeto. |
| **`CUBRID_LOB`** | A constante CUBRID\_LOB pode ser usada quando a intenção é operar o objeto lob. Pode ser passado para [cubrid\_fetch()](function.cubrid-fetch.md), [cubrid\_fetch\_row()](function.cubrid-fetch-row.md), [cubrid\_fetch\_array()](function.cubrid-fetch-array.md), [cubrid\_fetch\_assoc()](function.cubrid-fetch-assoc.md) e [cubrid\_fetch\_object()](function.cubrid-fetch-object.md). |

As constantes a seguir podem ser usadas ao posicionar o cursor nos
resultados da consulta. Eles podem ser passados ou retornados por
[cubrid\_move\_cursor()](function.cubrid-move-cursor.md).

**Opções de posição do cursor CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_CURSOR_FIRST`** | Move o cursor atual para a primeira posição no resultado. |
| **`CUBRID_CURSOR_CURRENT`** | Move o cursor atual como valor padrão se a origem não for especificada. |
| **`CUBRID_CURSOR_LAST`** | Move o cursor atual para a última posição no resultado. |
| **`CUBRID_CURSOR_SUCCESS`** | Valor retornado da função [cubrid\_move\_cursor()](function.cubrid-move-cursor.md) em caso de sucesso. Esta opção foi removida da versão 8.4.1. |
| **`CUBRID_NO_MORE_DATA`** | Valor retornado da função [cubrid\_move\_cursor()](function.cubrid-move-cursor.md) em caso de falha. Esta opção foi removida da versão 8.4.1. |
| **`CUBRID_CURSOR_ERROR`** | Valor retornado da função [cubrid\_move\_cursor()](function.cubrid-move-cursor.md) em caso de falha. Esta opção foi removida da versão 8.4.1. |

As constantes a seguir podem ser usadas ao definir o modo de confirmação automática para
a conexão do banco de dados. Eles podem ser passados para
[cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md) ou retornados por
[cubrid\_get\_autocommit()](function.cubrid-get-autocommit.md).

**Opções do modo de confirmação automática CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_AUTOCOMMIT_TRUE`** | Ativa o modo de confirmação automática. |
| **`CUBRID_AUTOCOMMIT_FALSE`** | Desativa o modo de confirmação automática. |

As constantes a seguir podem ser usadas ao definir o parâmetro do banco de dados.
Eles podem ser passados para [cubrid\_set\_db\_parameter()](function.cubrid-set-db-parameter.md).

**Opções de parâmetro CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_PARAM_ISOLATION_LEVEL`** | Nível de isolamento da transação para a conexão do banco de dados. |
| **`CUBRID_PARAM_LOCK_TIMEOUT`** | Tempo limite da transação em segundos. |

As constantes a seguir podem ser usadas ao definir o nível de isolamento da
transação. Eles podem ser passados para [cubrid\_set\_db\_parameter()](function.cubrid-set-db-parameter.md)
ou retornado por [cubrid\_get\_db\_parameter()](function.cubrid-get-db-parameter.md).

**Opções de nível de isolamento CUBRID**

| Constante | Descrição |
| --- | --- |
| **`TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE`** | O nível de isolamento mais baixo (1). Uma leitura suja, não repetível ou fantasma pode ocorrer para a tupla e uma leitura não repetível também pode ocorrer para a tabela. |
| **`TRAN_COMMIT_CLASS_COMMIT_INSTANCE`** | Um nível de isolamento relativamente baixo (2). Uma leitura suja não ocorre, mas pode ocorrer uma leitura não repetível ou fantasma. |
| **`TRAN_REP_CLASS_UNCOMMIT_INSTANCE`** | O isolamento padrão do CUBRID (3). Uma leitura suja, não repetível ou fantasma pode ocorrer para a tupla, mas a leitura repetível é garantida para a tabela. |
| **`TRAN_REP_CLASS_COMMIT_INSTANCE`** | Um nível de isolamento relativamente baixo (4). Uma leitura suja não ocorre, mas uma leitura não repetível ou fantasma pode ocorrer. |
| **`TRAN_REP_CLASS_REP_INSTANCE`** | Um nível de isolamento relativamente alto (5). Uma leitura suja ou não repetível não ocorre, mas uma leitura fantasma pode ocorrer. |
| **`TRAN_SERIALIZABLE`** | O nível de isolamento mais alto (6). Problemas relativos à simultaneidade (por exemplo, leitura suja, leitura não repetível, leitura fantasma, etc.) não ocorrem. |

As constantes a seguir podem ser usadas ao obter informações de esquema. Elas
podem ser passados para [cubrid\_schema()](function.cubrid-schema.md).

**Opções de esquema CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_SCH_CLASS`** | Obtém nome e tipo de tabela em CUBRID. |
| **`CUBRID_SCH_VCLASS`** | Obtém nome e tipo de visualização no CUBRID. |
| **`CUBRID_SCH_QUERY_SPEC`** | Obtém a definição de consulta da visualização. |
| **`CUBRID_SCH_ATTRIBUTE`** | Obtém os atributos da coluna da tabela. |
| **`CUBRID_SCH_CLASS_ATTRIBUTE`** | Obtém os atributos da tabela. |
| **`CUBRID_SCH_METHOD`** | Obtém o método da instância. O método de instância é um método chamado por uma instância de classe. É usado com mais frequência que o método de classe porque a maioria das operações são executadas na instância. |
| **`CUBRID_SCH_CLASS_METHOD`** | Obtém o método da classe. O método de classe é um método chamado por um objeto de classe. Geralmente é usado para criar uma nova instância de classe ou para inicializá-la. Também é usado para acessar ou atualizar atributos de classe. |
| **`CUBRID_SCH_METHOD_FILE`** | Obtém as informações do arquivo onde está definido o método da tabela. |
| **`CUBRID_SCH_SUPERCLASS`** | Obtém o nome e o tipo da tabela da qual a tabela herda atributos. |
| **`CUBRID_SCH_SUBCLASS`** | Obtém o nome e o tipo da tabela que herda os atributos desta tabela. |
| **`CUBRID_SCH_CONSTRAINT`** | Obtém as restrições da tabela. |
| **`CUBRID_SCH_TRIGGER`** | Obtém os gatilhos da tabela. |
| **`CUBRID_SCH_CLASS_PRIVILEGE`** | Obtém as informações de privilégio da tabela. |
| **`CUBRID_SCH_ATTR_PRIVILEGE`** | Obtém as informações de privilégio da coluna. |
| **`CUBRID_SCH_DIRECT_SUPER_CLASS`** | Obtém a supertabela direta da tabela. |
| **`CUBRID_SCH_PRIMARY_KEY`** | Obtém a chave primária da tabela. |
| **`CUBRID_SCH_IMPORTED_KEYS`** | Obtém chaves importadas da tabela. |
| **`CUBRID_SCH_EXPORTED_KEYS`** | Obtém chaves exportadas da tabela. |
| **`CUBRID_SCH_CROSS_REFERENCE`** | Obtém relacionamento de referência de duas tabelas. |

As constantes a seguir podem ser usadas ao relatar erros. Elas podem ser
retornadas de [cubrid\_error\_code\_facility()](function.cubrid-error-code-facility.md).

**Códigos de erro do CUBRID**

| Constante | Descrição |
| --- | --- |
| **`CUBRID_FACILITY_DBMS`** | O erro ocorreu no DBMS (Sistema de Gerenciamento de Banco de Dados) do CUBRID. |
| **`CUBRID_FACILITY_CAS`** | O erro ocorreu no CAS (Servidor Comum de Aplicações) do CUBRID. |
| **`CUBRID_FACILITY_CCI`** | O erro ocorreu no CCI (Interface do Cliente em C) do CUBRID. |
| **`CUBRID_FACILITY_CLIENT`** | O erro ocorreu no cliente PHP do CUBRID. |

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
