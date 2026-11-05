# Firebird/InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ibase.php

---

# Firebird/InterBase

# Introdução

**Aviso**

Esta extensão é considerada sem manutenção e abandonada. No entanto, o código-fonte
desta extensão ainda está disponível no GIT do
PECL aqui:
[» https://github.com/php/pecl-database-interbase](https://github.com/php/pecl-database-interbase).

Firebird é um banco de dados relacional que oferece muitos recursos ISO SQL-2003
que é executado em Linux, Windows, e uma variedade de plataformas Unix. Firebird
oferece excelente concorrência, alto desempenho, e um poderoso suporte de
linguagem para procedimentos armazenados e gatilhos. Ele vem sendo usada em sistemas
de produção sob uma variedades de nomes desde 1981.

InterBase é o nome da variante de código fechado deste RDBMS que
foi desenvolvido pela Embarcadero/Inprise. Mais informação sobre InterBase está
disponível em [» https://www.embarcadero.com/products/interbase](https://www.embarcadero.com/products/interbase).

Firebird é um projeto (fundação) comercialmente independente de programadores C++,
conselheiros técnicos e apoiadores desenvolvendo e melhorando um sistema de gerenciamento
de banco de dados relacional multi-plataforma baseado no código fonte liberado pela
Inprise Corp (agora conhecida como Embarcadero) sob a Licença Pública
InterBase v.1.0 em 25 Julho, 2000. Mais informação sobre Firebird está
disponível em [» https://www.firebirdsql.org/](https://www.firebirdsql.org/).

> **Nota**:
>
> Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
> e não é mais distribuída com o PHP desde a versão 7.4.0
>
> Esta extensão suporta InterBase versões 6 e superiores e Firebird versão 2.0 e superiores.

- [Instalação/Configuração](ibase.setup.md)
  - [Instalação](ibase.installation.md)
  - [Configurações de Execução](ibase.configuration.md)
- [Constantes predefinidas](ibase.constants.md)
- [Funções para Firebird/InterBase](ref.ibase.md)
  - [fbird\_add\_user](function.fbird-add-user.md) — Sinônimo de ibase\_add\_user
  - [fbird\_affected\_rows](function.fbird-affected-rows.md) — Sinônimo de ibase\_affected\_rows
  - [fbird\_backup](function.fbird-backup.md) — Sinônimo de ibase\_backup
  - [fbird\_blob\_add](function.fbird-blob-add.md) — Sinônimo de ibase\_blob\_add
  - [fbird\_blob\_cancel](function.fbird-blob-cancel.md) — Cancela a criação de blob
  - [fbird\_blob\_close](function.fbird-blob-close.md) — Sinônimo de ibase\_blob\_close
  - [fbird\_blob\_create](function.fbird-blob-create.md) — Sinônimo de ibase\_blob\_create
  - [fbird\_blob\_echo](function.fbird-blob-echo.md) — Sinônimo de ibase\_blob\_echo
  - [fbird\_blob\_get](function.fbird-blob-get.md) — Sinônimo de ibase\_blob\_get
  - [fbird\_blob\_import](function.fbird-blob-import.md) — Sinônimo de ibase\_blob\_import
  - [fbird\_blob\_info](function.fbird-blob-info.md) — Sinônimo de ibase\_blob\_info
  - [fbird\_blob\_open](function.fbird-blob-open.md) — Sinônimo de ibase\_blob\_open
  - [fbird\_close](function.fbird-close.md) — Sinônimo de ibase\_close
  - [fbird\_commit](function.fbird-commit.md) — Sinônimo de ibase\_commit
  - [fbird\_commit\_ret](function.fbird-commit-ret.md) — Sinônimo de ibase\_commit\_ret
  - [fbird\_connect](function.fbird-connect.md) — Sinônimo de ibase\_connect
  - [fbird\_db\_info](function.fbird-db-info.md) — Sinônimo de ibase\_db\_info
  - [fbird\_delete\_user](function.fbird-delete-user.md) — Sinônimo de ibase\_delete\_user
  - [fbird\_drop\_db](function.fbird-drop-db.md) — Sinônimo de ibase\_drop\_db
  - [fbird\_errcode](function.fbird-errcode.md) — Sinônimo de ibase\_errcode
  - [fbird\_errmsg](function.fbird-errmsg.md) — Sinônimo de ibase\_errmsg
  - [fbird\_execute](function.fbird-execute.md) — Sinônimo de ibase\_execute
  - [fbird\_fetch\_assoc](function.fbird-fetch-assoc.md) — Sinônimo de ibase\_fetch\_assoc
  - [fbird\_fetch\_object](function.fbird-fetch-object.md) — Sinônimo de ibase\_fetch\_object
  - [fbird\_fetch\_row](function.fbird-fetch-row.md) — Sinônimo de ibase\_fetch\_row
  - [fbird\_field\_info](function.fbird-field-info.md) — Sinônimo de ibase\_field\_info
  - [fbird\_free\_event\_handler](function.fbird-free-event-handler.md) — Sinônimo de ibase\_free\_event\_handler
  - [fbird\_free\_query](function.fbird-free-query.md) — Sinônimo de ibase\_free\_query
  - [fbird\_free\_result](function.fbird-free-result.md) — Sinônimo de ibase\_free\_result
  - [fbird\_gen\_id](function.fbird-gen-id.md) — Sinônimo de ibase\_gen\_id
  - [fbird\_maintain\_db](function.fbird-maintain-db.md) — Sinônimo de ibase\_maintain\_db
  - [fbird\_modify\_user](function.fbird-modify-user.md) — Sinônimo de ibase\_modify\_user
  - [fbird\_name\_result](function.fbird-name-result.md) — Sinônimo de ibase\_name\_result
  - [fbird\_num\_fields](function.fbird-num-fields.md) — Sinônimo de ibase\_num\_fields
  - [fbird\_num\_params](function.fbird-num-params.md) — Sinônimo de ibase\_num\_params
  - [fbird\_param\_info](function.fbird-param-info.md) — Sinônimo de ibase\_param\_info
  - [fbird\_pconnect](function.fbird-pconnect.md) — Sinônimo de ibase\_pconnect
  - [fbird\_prepare](function.fbird-prepare.md) — Sinônimo de ibase\_prepare
  - [fbird\_query](function.fbird-query.md) — Sinônimo de ibase\_query
  - [fbird\_restore](function.fbird-restore.md) — Sinônimo de ibase\_restore
  - [fbird\_rollback](function.fbird-rollback.md) — Sinônimo de ibase\_rollback
  - [fbird\_rollback\_ret](function.fbird-rollback-ret.md) — Sinônimo de ibase\_rollback\_ret
  - [fbird\_server\_info](function.fbird-server-info.md) — Sinônimo de ibase\_server\_info
  - [fbird\_service\_attach](function.fbird-service-attach.md) — Sinônimo de ibase\_service\_attach
  - [fbird\_service\_detach](function.fbird-service-detach.md) — Sinônimo de ibase\_service\_detach
  - [fbird\_set\_event\_handler](function.fbird-set-event-handler.md) — Sinônimo de ibase\_set\_event\_handler
  - [fbird\_trans](function.fbird-trans.md) — Sinônimo de ibase\_trans
  - [fbird\_wait\_event](function.fbird-wait-event.md) — Sinônimo de ibase\_wait\_event
  - [ibase\_add\_user](function.ibase-add-user.md) — Adiciona um usuário a um banco de dados seguro
  - [ibase\_affected\_rows](function.ibase-affected-rows.md) — Retorna o número de linhas que foram afetados pela consulta anterior
  - [ibase\_backup](function.ibase-backup.md) — Inicia uma tarefa de backup no gerenciador de serviços e retorna imediatamente
  - [ibase\_blob\_add](function.ibase-blob-add.md) — Adiciona dados em um blob recém criado
  - [ibase\_blob\_cancel](function.ibase-blob-cancel.md) — Cancela a criação de blob
  - [ibase\_blob\_close](function.ibase-blob-close.md) — Fecha blob
  - [ibase\_blob\_create](function.ibase-blob-create.md) — Cria um novo blob para adicionar dados
  - [ibase\_blob\_echo](function.ibase-blob-echo.md) — Envia o conteúdo do blob para o navegador
  - [ibase\_blob\_get](function.ibase-blob-get.md) — Retorna uma quantidade especificada de bytes de dados de um blob aberto
  - [ibase\_blob\_import](function.ibase-blob-import.md) — Cria um blob, copia um arquivo para ele e o fecha
  - [ibase\_blob\_info](function.ibase-blob-info.md) — Retorna o tamanho do blob e outras informações úteis
  - [ibase\_blob\_open](function.ibase-blob-open.md) — Abre um blob para obter partes de dados
  - [ibase\_close](function.ibase-close.md) — Fecha uma conexão com um banco de dados InterBase
  - [ibase\_commit](function.ibase-commit.md) — Confirma uma transação
  - [ibase\_commit\_ret](function.ibase-commit-ret.md) — Confirma uma transação sem fechá-la
  - [ibase\_connect](function.ibase-connect.md) — Abre uma conexão com um banco de dados
  - [ibase\_db\_info](function.ibase-db-info.md) — Solicita estatísticas sobre um banco de dados
  - [ibase\_delete\_user](function.ibase-delete-user.md) — Exclui um usuário de um banco de dados seguro
  - [ibase\_drop\_db](function.ibase-drop-db.md) — Exclui um banco de dados
  - [ibase\_errcode](function.ibase-errcode.md) — Retorna um código de erro
  - [ibase\_errmsg](function.ibase-errmsg.md) — Retorna mensagens de erro
  - [ibase\_execute](function.ibase-execute.md) — Executa uma consulta preparada anteriormente
  - [ibase\_fetch\_assoc](function.ibase-fetch-assoc.md) — Obtém uma linha de resultado de uma consulta como um array associativo
  - [ibase\_fetch\_object](function.ibase-fetch-object.md) — Obtém um objeto de um banco de dados InterBase
  - [ibase\_fetch\_row](function.ibase-fetch-row.md) — Busca uma linha de um banco de dados InterBase
  - [ibase\_field\_info](function.ibase-field-info.md) — Obtém informação sobre um campo
  - [ibase\_free\_event\_handler](function.ibase-free-event-handler.md) — Cancela um manipulador de eventos registrado
  - [ibase\_free\_query](function.ibase-free-query.md) — Libera a memória alocada para uma consulta preparada
  - [ibase\_free\_result](function.ibase-free-result.md) — Libera um conjunto de resultados
  - [ibase\_gen\_id](function.ibase-gen-id.md) — Incrementa o gerador nomeado e retorna seu novo valor
  - [ibase\_maintain\_db](function.ibase-maintain-db.md) — Executa um comando de manutenção no servidor de banco de dados
  - [ibase\_modify\_user](function.ibase-modify-user.md) — Modifica um usuário para um banco de dados seguro
  - [ibase\_name\_result](function.ibase-name-result.md) — Define um nome para um conjunto de resultados
  - [ibase\_num\_fields](function.ibase-num-fields.md) — Obtém o número de campos em um conjunto de resultados
  - [ibase\_num\_params](function.ibase-num-params.md) — Retorna o número de parâmetros em uma consulta preparada
  - [ibase\_param\_info](function.ibase-param-info.md) — Retorna informação sobre um parâmetro em uma consulta preparada
  - [ibase\_pconnect](function.ibase-pconnect.md) — Abre uma conexão persistente com um banco de dados InterBase
  - [ibase\_prepare](function.ibase-prepare.md) — Prepara uma consulta para ligação de parâmetros e execução posteriores
  - [ibase\_query](function.ibase-query.md) — Executa uma consulta em um banco de dados InterBase
  - [ibase\_restore](function.ibase-restore.md) — Inicia uma tarefa de restauração no gerenciador de serviços e retorna imediatamente
  - [ibase\_rollback](function.ibase-rollback.md) — Reverte uma transação
  - [ibase\_rollback\_ret](function.ibase-rollback-ret.md) — Reverte uma transação sem fechá-la
  - [ibase\_server\_info](function.ibase-server-info.md) — Solicita informações sobre um servidor de banco de dados
  - [ibase\_service\_attach](function.ibase-service-attach.md) — Conecta ao gerenciador de serviços
  - [ibase\_service\_detach](function.ibase-service-detach.md) — Desconecta do gerenciador de serviços
  - [ibase\_set\_event\_handler](function.ibase-set-event-handler.md) — Registra uma função de retorno a ser chamada quando eventos são postados
  - [ibase\_trans](function.ibase-trans.md) — Inicia uma transação
  - [ibase\_wait\_event](function.ibase-wait-event.md) — Espera por um evento ser postado pelo banco de dados

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
