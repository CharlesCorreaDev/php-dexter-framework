# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dba.requirements.php

---

## Dependências

O comportamento de vários aspectos depende da implementação do banco
de dados subjacente. Funções como [dba\_optimize()](function.dba-optimize.md)
e [dba\_sync()](function.dba-sync.md) farão o que prometem para um
banco de dados e não farão nada para outros. Deve-se baixar e instalar
manipuladores de dba suportados.

**Lista de manipuladores DBA**

| Manipulador | Notas |
| --- | --- |
| `dbm` | Dbm é o tipo mais antigo (original) de bancos de dados estilo Berkeley DB. Deve ser evitado, se possível. Não é oferecido suporte às funções de compatibilidade incorporadas ao DB2 e ao gdbm, porque elas são compatíveis apenas no nível do código-fonte, mas não podem lidar com o formato dbm original. |
| `ndbm` | Ndbm é um tipo mais novo e mais flexível que dbm. Ele ainda possui a maioria dos limites arbitrários do dbm (portanto, está obsoleto). |
| `gdbm` | Gdbm é o [» gerenciador de banco de dados GNU](https://ftp.gnu.org/pub/gnu/gdbm/). |
| `db2` | DB2 é para [» Oracle Berkeley DB 2](http://www.sleepycat.com/). Ele é descrito como "um kit de ferramentas programáticas que fornece suporte de banco de dados integrado de alto desempenho para aplicativos autônomos e cliente/servidor". |
| `db3` | DB3 é para [» Oracle Berkeley DB 3](http://www.sleepycat.com/). |
| `db4` | DB4 é para [» Oracle Berkeley DB 4 ou 5](http://www.sleepycat.com/). Esta opção pode ser usada com BDB 5 a partir do PHP 5.3.3. |
| `cdb` | CDB é “um pacote rápido, confiável e leve para criar e ler bancos de dados constantes”. É do autor do qmail e pode ser encontrado em [» https://cr.yp.to/cdb.html](https://cr.yp.to/cdb.html). Como é constante, oferecemos suporte apenas a operações de leitura. Oferecemos suporte à gravação (não à atualização) por meio da biblioteca interna cdb. |
| `cdb_make` | Oferecemos suporte à criação (não à atualização) de arquivos cdb quando a biblioteca cdb incluída é usada. |
| `flatfile` | Isto está disponível apenas para compatibilidade com a extensão obsoleta `dbm` e deve ser evitado. No entanto, pode-se usar isso onde os arquivos foram criados neste formato. Isso acontece quando o "configure" não consegue encontrar nenhuma biblioteca externa. |
| `inifile` | Está disponível para poder modificar arquivos php.ini a partir de scripts PHP. Ao trabalhar com arquivos INI, pode-se passar arrays no formato array(0=>group,1=>value\_name) ou strings no formato "[group]value\_name" onde "group" é opcional. Como as funções [dba\_firstkey()](function.dba-firstkey.md) e [dba\_nextkey()](function.dba-nextkey.md) retornam representações de string da chave, existe a função [dba\_key\_split()](function.dba-key-split.md) que permite converter as chaves de string em chaves de array sem perder **`false`**. |
| `qdbm` | A biblioteca qdbm pode ser baixada em [» https://fallabs.com/qdbm/index.html](https://fallabs.com/qdbm/index.html). |
| `tcadb` | A biblioteca Tokyo Cabinet pode ser baixada em [» https://fallabs.com/tokyocabinet/](https://fallabs.com/tokyocabinet/). |
| `lmdb` | Isso está disponível desde o PHP 7.2.0. A biblioteca de banco de dados mapeado em memória do Lightning pode ser baixada em [» https://symas.com/lmdb/](https://symas.com/lmdb/). |

Ao invocar as funções [dba\_open()](function.dba-open.md) ou
[dba\_popen()](function.dba-popen.md), um dos nomes
do manipulador deve ser fornecido como argumento. A lista
de manipuladores realmente disponíveis é exibida invocando
[phpinfo()](function.phpinfo.md) ou [dba\_handlers()](function.dba-handlers.md).

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
