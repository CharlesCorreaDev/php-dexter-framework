# ODBC (Unificado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.uodbc.php

---

# ODBC (Unificado)

# Introdução

Em adição ao suporte ODBC normal, as funções de ODBC Unificadas no
PHP permitem sejam acessados vários bancos de dados que emprestaram a
semântica da API do ODBC para implementer a sua própria API. Ao invés
de manter múltiplos drivers de banco de dados que são todos praticamente
identicos, estes drivers foram unificados em um único conjunto
de funções ODBC.

Os seguintes bancos de dados são suportados pelas funções de
OBDC Unificado: [» Adabas D](https://www.adabas.com/),
[» IBM DB2](https://www-306.ibm.com/software/data/db2/),
[» iODBC](https://www.iodbc.org/),
[» Solid](http://www.solidtech.com/) e
[» Sybase SQL Anywhere](https://www.sybase.com/).

> **Nota**:
>
> Com a exceção de iODBC, não existe ODBC envolvido ao
> conectar aos bancos de dados acima. As funções usadas
> para conversar nativamente com eles apenas compartilham os mesmos
> nomes e a mesma sintaxe das funções ODBC. Entretanto, compilar o PHP
> com suporte a iODBC permite usar qualquer dirver compatível com
> ODBC nas aplicações PHP. Maiores informações sobre iODBC
> estão disponíveis em [» www.iodbc.org](https://www.iodbc.org/)
> com a alternativa unixODBC disponível em
> [» www.unixodbc.org](https://www.unixodbc.org/).

- [Instalação/Configuração](uodbc.setup.md)
  - [Dependências](uodbc.requirements.md)
  - [Instalação](odbc.installation.md)
  - [Configurações de Execução](odbc.configuration.md)
  - [Tipos de Recurso](uodbc.resources.md)
- [Constantes predefinidas](uodbc.constants.md)
- [Funções de ODBC](ref.uodbc.md)
  - [odbc\_autocommit](function.odbc-autocommit.md) — Alterna o comportamento da autoconfirmação
  - [odbc\_binmode](function.odbc-binmode.md) — Manipulação de dados de colunas binárias
  - [odbc\_close](function.odbc-close.md) — Fecha uma conexão ODBC
  - [odbc\_close\_all](function.odbc-close-all.md) — Fecha todas as conexões ODBC
  - [odbc\_columnprivileges](function.odbc-columnprivileges.md) — Lista colunas e privilégios associados para a tabela fornecida
  - [odbc\_columns](function.odbc-columns.md) — Lista os nomes das colunas nas tabelas especificadas
  - [odbc\_commit](function.odbc-commit.md) — Confirma uma transação ODBC
  - [odbc\_connect](function.odbc-connect.md) — Conecta a uma fonte de dados
  - [odbc\_connection\_string\_is\_quoted](function.odbc-connection-string-is-quoted.md) — Determina se uma string de conexão ODBC está entre chaves
  - [odbc\_connection\_string\_quote](function.odbc-connection-string-quote.md) — Envolve entre chaves um valor string de conexão ODBC
  - [odbc\_connection\_string\_should\_quote](function.odbc-connection-string-should-quote.md) — Determina se um valor na string de conexão ODBC deveria ser envolvido por chaves
  - [odbc\_cursor](function.odbc-cursor.md) — Obtém o nome do cursor
  - [odbc\_data\_source](function.odbc-data-source.md) — Retorna informações sobre DSNs disponíveis
  - [odbc\_do](function.odbc-do.md) — Sinônimo de odbc\_exec
  - [odbc\_error](function.odbc-error.md) — Obtém o último código de erro
  - [odbc\_errormsg](function.odbc-errormsg.md) — Obtém a última mensagem de erro
  - [odbc\_exec](function.odbc-exec.md) — Executa diretamente uma instrução SQL
  - [odbc\_execute](function.odbc-execute.md) — Executa uma instrução preparada
  - [odbc\_fetch\_array](function.odbc-fetch-array.md) — Obtém uma linha do resultado como um array associativo
  - [odbc\_fetch\_into](function.odbc-fetch-into.md) — Busca uma linha de resultado no array
  - [odbc\_fetch\_object](function.odbc-fetch-object.md) — Obtém um conjunto de resultados como um objeto
  - [odbc\_fetch\_row](function.odbc-fetch-row.md) — Obtém uma linha
  - [odbc\_field\_len](function.odbc-field-len.md) — Obtém o tamanho (precisão) de um campo
  - [odbc\_field\_name](function.odbc-field-name.md) — Obtém o nome da coluna
  - [odbc\_field\_num](function.odbc-field-num.md) — Retorna o número da coluna
  - [odbc\_field\_precision](function.odbc-field-precision.md) — Sinônimo de odbc\_field\_len
  - [odbc\_field\_scale](function.odbc-field-scale.md) — Obtém a precisão de um campo
  - [odbc\_field\_type](function.odbc-field-type.md) — Tipo de dados de um campo
  - [odbc\_foreignkeys](function.odbc-foreignkeys.md) — Recupera uma lista de chaves estrangeiras
  - [odbc\_free\_result](function.odbc-free-result.md) — Libera objetos associados a um resultado
  - [odbc\_gettypeinfo](function.odbc-gettypeinfo.md) — Recupera informações sobre tipos de dados suportados pela fonte de dados
  - [odbc\_longreadlen](function.odbc-longreadlen.md) — Manipulação de colunas LONG
  - [odbc\_next\_result](function.odbc-next-result.md) — Verifica se múltiplos resultados estão disponíveis
  - [odbc\_num\_fields](function.odbc-num-fields.md) — Número de colunas em um resultado
  - [odbc\_num\_rows](function.odbc-num-rows.md) — Número de linhas em um resultado
  - [odbc\_pconnect](function.odbc-pconnect.md) — Abre uma conexão persistente com o banco de dados
  - [odbc\_prepare](function.odbc-prepare.md) — Prepara uma instrução para execução
  - [odbc\_primarykeys](function.odbc-primarykeys.md) — Obtém as chaves primárias de uma tabela
  - [odbc\_procedurecolumns](function.odbc-procedurecolumns.md) — Recupera informações sobre parâmetros para procedimentos
  - [odbc\_procedures](function.odbc-procedures.md) — Obtém a lista de procedimentos armazenados em uma fonte de dados específica
  - [odbc\_result](function.odbc-result.md) — Obtém dados de resultados
  - [odbc\_result\_all](function.odbc-result-all.md) — Exibe o resultado como uma tabela HTML
  - [odbc\_rollback](function.odbc-rollback.md) — Reverte uma transação
  - [odbc\_setoption](function.odbc-setoption.md) — Ajusta configurações do ODBC
  - [odbc\_specialcolumns](function.odbc-specialcolumns.md) — Recupera colunas especiais
  - [odbc\_statistics](function.odbc-statistics.md) — Recupera estatísticas sobre uma tabela
  - [odbc\_tableprivileges](function.odbc-tableprivileges.md) — Lista tabelas e os privilégios associados a cada tabela
  - [odbc\_tables](function.odbc-tables.md) — Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica
- [Odbc\Connection](class.odbc-connection.md) — A classe Odbc\Connection
- [Odbc\Result](class.odbc-result.md) — A classe Odbc\Result

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
