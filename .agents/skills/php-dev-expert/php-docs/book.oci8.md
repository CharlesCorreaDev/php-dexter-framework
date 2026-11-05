# Oracle OCI8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.oci8.php

---

# Oracle OCI8

# Introdução

**Aviso**

Esta extensão foi *DESAGREGADA* a partir do PHP 8.4.0.

Essas funções permitem acessar bancos de dados Oracle. Suportam instruções SQL
e PL/SQL. Recursos básicos incluem o controle de transações, vínculo de variáveis PHP
em placeholders Oracle, além do suporte aos tipos de objetos grandes (LOB) e
coleções. O recursos de escalabilidade da Oracle, como o Database Resident
Connection Pooling (DRCP) e resultados em cache também são suportados.

- [Instalação/Configuração](oci8.setup.md)
  - [Dependências](oci8.requirements.md)
  - [Instalação](oci8.installation.md)
  - [Testando](oci8.test.md)
  - [Configurações de Execução](oci8.configuration.md)
- [Constantes predefinidas](oci8.constants.md)
- [Examples](oci8.examples.md)
- [Manipulação e conjunto de conexões do OCI8](oci8.connection.md)
- [Suporte à Notificação Rápida de Aplicação (FAN) do OCI8](oci8.fan.md)
- [Suporte ao OCI8 Transparent Application Failover (TAF)](oci8.taf.md)
- [OCI8 e Rastreamento dinâmico DTrace](oci8.dtrace.md)
- [Tipos de dados suportados](oci8.datatypes.md)
- [Funções OCI8](ref.oci8.md)
  - [oci\_bind\_array\_by\_name](function.oci-bind-array-by-name.md) — Vincula um array PHP a um parâmetro de array Oracle PL/SQL
  - [oci\_bind\_by\_name](function.oci-bind-by-name.md) — Vincula uma variável PHP a um marcador Oracle
  - [oci\_cancel](function.oci-cancel.md) — Cancela a leitura do cursor
  - [oci\_client\_version](function.oci-client-version.md) — Retorna a versão da biblioteca do cliente Oracle
  - [oci\_close](function.oci-close.md) — Fecha uma conexão Oracle
  - [oci\_commit](function.oci-commit.md) — Confirma a transação de banco de dados pendente
  - [oci\_connect](function.oci-connect.md) — Conecta-se a um banco de dados Oracle
  - [oci\_define\_by\_name](function.oci-define-by-name.md) — Associa uma variável PHP a uma coluna para buscas de consulta
  - [oci\_error](function.oci-error.md) — Retorna o último erro encontrado
  - [oci\_execute](function.oci-execute.md) — Executa uma instrução
  - [oci\_fetch](function.oci-fetch.md) — Busca a próxima linha de uma consulta em buffers internos
  - [oci\_fetch\_all](function.oci-fetch-all.md) — Busca várias linhas de uma consulta em um array bidimensional
  - [oci\_fetch\_array](function.oci-fetch-array.md) — Retorna a próxima linha de uma consulta como um array associativo ou numérico
  - [oci\_fetch\_assoc](function.oci-fetch-assoc.md) — Retorna a próxima linha de uma consulta como um array associativo
  - [oci\_fetch\_object](function.oci-fetch-object.md) — Retorna a próxima linha de uma consulta como um objeto
  - [oci\_fetch\_row](function.oci-fetch-row.md) — Retorna a próxima linha de uma consulta como um array numérico
  - [oci\_field\_is\_null](function.oci-field-is-null.md) — Verifica se um campo na linha atualmente buscada é null
  - [oci\_field\_name](function.oci-field-name.md) — Retorna o nome de um campo da instrução
  - [oci\_field\_precision](function.oci-field-precision.md) — Informa a precisão de um campo
  - [oci\_field\_scale](function.oci-field-scale.md) — Informa a escala do campo
  - [oci\_field\_size](function.oci-field-size.md) — Retorna o tamanho do campo
  - [oci\_field\_type](function.oci-field-type.md) — Retorna o nome do tipo de dados de um campo
  - [oci\_field\_type\_raw](function.oci-field-type-raw.md) — Informa o tipo bruto de dados do Oracle de um campo
  - [oci\_free\_descriptor](function.oci-free-descriptor.md) — Libera um descritor
  - [oci\_free\_statement](function.oci-free-statement.md) — Libera todos os recursos associados à instrução ou cursor
  - [oci\_get\_implicit\_resultset](function.oci-get-implicit-resultset.md) — Retorna o próximo recurso de instrução filho de um recurso de instrução pai que possui conjuntos de resultados implícitos do Oracle Database
  - [oci\_lob\_copy](function.oci-lob-copy.md) — Copia objeto grande
  - [oci\_lob\_is\_equal](function.oci-lob-is-equal.md) — Compara dois localizadores LOB/FILE para igualdade
  - [oci\_new\_collection](function.oci-new-collection.md) — Aloca novo objeto de coleção
  - [oci\_new\_connect](function.oci-new-connect.md) — Conecta-se ao servidor Oracle usando uma conexão exclusiva
  - [oci\_new\_cursor](function.oci-new-cursor.md) — Aloca e retorna um novo cursor (identificador de instrução)
  - [oci\_new\_descriptor](function.oci-new-descriptor.md) — Inicializa um novo descritor LOB ou FILE vazio
  - [oci\_num\_fields](function.oci-num-fields.md) — Retorna o número de colunas de resultados em uma instrução
  - [oci\_num\_rows](function.oci-num-rows.md) — Retorna o número de linhas afetadas durante a execução da instrução
  - [oci\_parse](function.oci-parse.md) — Prepara uma instrução Oracle para execução
  - [oci\_password\_change](function.oci-password-change.md) — Altera a senha do usuário do Oracle
  - [oci\_pconnect](function.oci-pconnect.md) — Conecta-se a um banco de dados Oracle usando uma conexão persistente
  - [oci\_register\_taf\_callback](function.oci-register-taf-callback.md) — Registra uma função de retorno definida pelo usuário para o TAF do Oracle Database
  - [oci\_result](function.oci-result.md) — Retorna o valor do campo da linha recuperada
  - [oci\_rollback](function.oci-rollback.md) — Reverte a transação pendente do banco de dados
  - [oci\_server\_version](function.oci-server-version.md) — Retorna a versão do banco de dados Oracle
  - [oci\_set\_action](function.oci-set-action.md) — Define o nome da ação
  - [oci\_set\_call\_timeout](function.oci-set-call-timout.md) — Sets a millisecond timeout for database calls
  - [oci\_set\_client\_identifier](function.oci-set-client-identifier.md) — Define o identificador do cliente
  - [oci\_set\_client\_info](function.oci-set-client-info.md) — Define as informações do cliente
  - [oci\_set\_db\_operation](function.oci-set-db-operation.md) — Define a operação do banco de dados
  - [oci\_set\_edition](function.oci-set-edition.md) — Define a edição do banco de dados
  - [oci\_set\_module\_name](function.oci-set-module-name.md) — Define o nome do módulo
  - [oci\_set\_prefetch](function.oci-set-prefetch.md) — Define o número de linhas a serem pré-buscadas pelas consultas
  - [oci\_set\_prefetch\_lob](function.oci-set-prefetch-lob.md) — Define a quantidade de dados pré-buscados para cada CLOB ou BLOB
  - [oci\_statement\_type](function.oci-statement-type.md) — Retorna o tipo de uma instrução
  - [oci\_unregister\_taf\_callback](function.oci-unregister-taf-callback.md) — Cancelar o registro de uma função de retorno definida pelo usuário para o TAF do Oracle Database
- [OCICollection](class.ocicollection.md) — The OCICollection class
  - [OCICollection::append](ocicollection.append.md) — Adiciona elemento à coleção
  - [OCICollection::assign](ocicollection.assign.md) — Atribui um valor de outra coleção existente a esta coleção
  - [OCICollection::assignElem](ocicollection.assignelem.md) — Atribui um valor ao elemento da coleção
  - [OCICollection::free](ocicollection.free.md) — Libera os recursos associados ao objeto de coleção
  - [OCICollection::getElem](ocicollection.getelem.md) — Retorna o valor do elemento
  - [OCICollection::max](ocicollection.max.md) — Retorna o número máximo de elementos na coleção
  - [OCICollection::size](ocicollection.size.md) — Retorna o tamanho da coleção
  - [OCICollection::trim](ocicollection.trim.md) — Corta elementos do final da coleção
- [OCILob](class.ocilob.md) — A classe OCILob
  - [OCILob::append](ocilob.append.md) — Acrescenta dados do objeto grande a outro objeto grande
  - [OCILob::close](ocilob.close.md) — Fecha o descritor LOB
  - [OCILob::eof](ocilob.eof.md) — Testa o fim de arquivo no descritor de um objeto grande
  - [OCILob::erase](ocilob.erase.md) — Apaga uma parte especificada dos dados internos do LOB
  - [OCILob::export](ocilob.export.md) — Exporta o conteúdo do LOB para um arquivo
  - [OCILob::flush](ocilob.flush.md) — Libera/grava o buffer do LOB no servidor
  - [OCILob::free](ocilob.free.md) — Libera recursos associados ao descritor do LOB
  - [OCILob::getBuffering](ocilob.getbuffering.md) — Retorna o estado atual de buffer para o objeto grande
  - [OCILob::import](ocilob.import.md) — Importa dados de arquivo para o LOB
  - [OCILob::load](ocilob.load.md) — Retorna o conteúdo de um objeto grande
  - [OCILob::read](ocilob.read.md) — Lê parte do objeto grande
  - [OCILob::rewind](ocilob.rewind.md) — Move o ponteiro interno para o início do objeto grande
  - [OCILob::save](ocilob.save.md) — Salva dados no objeto grande
  - [OCILob::saveFile](ocilob.savefile.md) — Sinônimo de OCILob::import
  - [OCILob::seek](ocilob.seek.md) — Define o ponteiro interno do objeto grande
  - [OCILob::setBuffering](ocilob.setbuffering.md) — Altera o estado atual do buffer para o objeto grande
  - [OCILob::size](ocilob.size.md) — Retorna o tamanho do objeto grande
  - [OCILob::tell](ocilob.tell.md) — Retorna a posição atual do ponteiro interno do objeto grande
  - [OCILob::truncate](ocilob.truncate.md) — Trunca objeto grande
  - [OCILob::write](ocilob.write.md) — Grava dados no objeto grande
  - [OCILob::writeTemporary](ocilob.writetemporary.md) — Grava um objeto grande temporário
  - [OCILob::writeToFile](ocilob.writetofile.md) — Sinônimo de OCILob::export
- [Funções e sinônimos e obsoletos do OCI8](oldaliases.oci8.md)
  - [oci\_internal\_debug](function.oci-internal-debug.md) — Habilita ou desabilita a saíde interna de depuração
  - [ocibindbyname](function.ocibindbyname.md) — Sinônimo de oci\_bind\_by\_name
  - [ocicancel](function.ocicancel.md) — Sinônimo de oci\_cancel
  - [ocicloselob](function.ocicloselob.md) — Sinônimo de OCILob::close
  - [ocicollappend](function.ocicollappend.md) — Sinônimo de OCICollection::append
  - [ocicollassign](function.ocicollassign.md) — Sinônimo de OCICollection::assign
  - [ocicollassignelem](function.ocicollassignelem.md) — Sinônimo de OCICollection::assignElem
  - [ocicollgetelem](function.ocicollgetelem.md) — Sinônimo de OCICollection::getElem
  - [ocicollmax](function.ocicollmax.md) — Sinônimo de OCICollection::max
  - [ocicollsize](function.ocicollsize.md) — Sinônimo de OCICollection::size
  - [ocicolltrim](function.ocicolltrim.md) — Sinônimo de OCICollection::trim
  - [ocicolumnisnull](function.ocicolumnisnull.md) — Sinônimo de oci\_field\_is\_null
  - [ocicolumnname](function.ocicolumnname.md) — Sinônimo de oci\_field\_name
  - [ocicolumnprecision](function.ocicolumnprecision.md) — Sinônimo de oci\_field\_precision
  - [ocicolumnscale](function.ocicolumnscale.md) — Sinônimo de oci\_field\_scale
  - [ocicolumnsize](function.ocicolumnsize.md) — Sinônimo de oci\_field\_size
  - [ocicolumntype](function.ocicolumntype.md) — Sinônimo de oci\_field\_type
  - [ocicolumntyperaw](function.ocicolumntyperaw.md) — Sinônimo de oci\_field\_type\_raw
  - [ocicommit](function.ocicommit.md) — Sinônimo de oci\_commit
  - [ocidefinebyname](function.ocidefinebyname.md) — Sinônimo de oci\_define\_by\_name
  - [ocierror](function.ocierror.md) — Sinônimo de oci\_error
  - [ociexecute](function.ociexecute.md) — Sinônimo de oci\_execute
  - [ocifetch](function.ocifetch.md) — Sinônimo de oci\_fetch
  - [ocifetchinto](function.ocifetchinto.md) — Variante obsoleta de oci\_fetch\_array, oci\_fetch\_object,
    oci\_fetch\_assoc e
    oci\_fetch\_row
  - [ocifetchstatement](function.ocifetchstatement.md) — Sinônimo de oci\_fetch\_all
  - [ocifreecollection](function.ocifreecollection.md) — Sinônimo de OCICollection::free
  - [ocifreecursor](function.ocifreecursor.md) — Sinônimo de oci\_free\_statement
  - [ocifreedesc](function.ocifreedesc.md) — Sinônimo de OCILob::free
  - [ocifreestatement](function.ocifreestatement.md) — Sinônimo de oci\_free\_statement
  - [ociinternaldebug](function.ociinternaldebug.md) — Sinônimo de oci\_internal\_debug
  - [ociloadlob](function.ociloadlob.md) — Sinônimo de OCILob::load
  - [ocilogoff](function.ocilogoff.md) — Sinônimo de oci\_close
  - [ocilogon](function.ocilogon.md) — Sinônimo de oci\_connect
  - [ocinewcollection](function.ocinewcollection.md) — Sinônimo de oci\_new\_collection
  - [ocinewcursor](function.ocinewcursor.md) — Sinônimo de oci\_new\_cursor
  - [ocinewdescriptor](function.ocinewdescriptor.md) — Sinônimo de oci\_new\_descriptor
  - [ocinlogon](function.ocinlogon.md) — Sinônimo de oci\_new\_connect
  - [ocinumcols](function.ocinumcols.md) — Sinônimo de oci\_num\_fields
  - [ociparse](function.ociparse.md) — Sinônimo de oci\_parse
  - [ociplogon](function.ociplogon.md) — Sinônimo de oci\_pconnect
  - [ociresult](function.ociresult.md) — Sinônimo de oci\_result
  - [ocirollback](function.ocirollback.md) — Sinônimo de oci\_rollback
  - [ocirowcount](function.ocirowcount.md) — Sinônimo de oci\_num\_rows
  - [ocisavelob](function.ocisavelob.md) — Sinônimo de OCILob::save
  - [ocisavelobfile](function.ocisavelobfile.md) — Sinônimo de OCILob::import
  - [ociserverversion](function.ociserverversion.md) — Sinônimo de oci\_server\_version
  - [ocisetprefetch](function.ocisetprefetch.md) — Sinônimo de oci\_set\_prefetch
  - [ocistatementtype](function.ocistatementtype.md) — Sinônimo de oci\_statement\_type
  - [ociwritelobtofile](function.ociwritelobtofile.md) — Sinônimo de OCILob::export
  - [ociwritetemporarylob](function.ociwritetemporarylob.md) — Sinônimo de OCILob::writeTemporary

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
