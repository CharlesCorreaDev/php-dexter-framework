# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibase.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

As seguinte constantes podem ser passadas para [ibase\_trans()](function.ibase-trans.md)
para especificar o funcionamento da transação.

**Opções da transação Firebird/InterBase**

| Constante | Descrição |
| --- | --- |
| IBASE\_DEFAULT | Serão usadas as definições padrão para a transação. Este padrão é determinado pela biblioteca do cliente, a qual define-o como IBASE\_WRITE|IBASE\_CONCURRENCY|IBASE\_WAIT na maioria dos casos. |
| IBASE\_READ | Começa uma transação apenas para leitura. |
| IBASE\_WRITE | Começa uma transação de leitura e escrita. |
| IBASE\_CONSISTENCY | Começa uma transação com o nível de isolação definido como 'consistency', o qual indica que a transação não pode ler de tabelas que estão sendo modificadas por outras transações concorrentes. |
| IBASE\_CONCURRENCY | Começa uma transação com o nível de isolação definido como 'concurrency' (ou 'snapshot'), o qual indica que a transação tem acesso a todas as tabelas, mas não pode ver as modificações que foram gravadas por outras transações após a transação ter começado. |
| IBASE\_COMMITTED | Começa uma transação com o nível de isolação definido como 'read committed'. Esta opção deve ser combinada com **`IBASE_REC_VERSION`** ou **`IBASE_REC_NO_VERSION`**. Este nível de isolação permite acesso para as modifcações salvas após o início da transação. Se **`IBASE_REC_NO_VERSION`** for especificada, apenas a última versão de uma linha pode ser lida. Se **`IBASE_REC_VERSION`** for especificada, uma linha pode ser lida mesmo quando exista uma modificação pendente em uma transação concorrente. |
| IBASE\_WAIT | Indica que uma transação deve esperar e tentar novamente quando acontecer um conflito. |
| IBASE\_NOWAIT | Indica que a transação deve falhar imediatamente quando acontecer um conflito. |

As seguintes constantes podem ser passadas para [ibase\_fetch\_row()](function.ibase-fetch-row.md),
[ibase\_fetch\_assoc()](function.ibase-fetch-assoc.md) ou [ibase\_fetch\_object()](function.ibase-fetch-object.md)
para especificar o comportamento da recepção de dados.

**Opções para obter do Firebird/InterBase**

| Constante | Descrição |
| --- | --- |
| IBASE\_FETCH\_BLOBS | Também disponível como **`IBASE_TEXT`** para compatibilidade com versões anteriores. Faz com que o conteúdo de campos BLOB serão recebidos em linha, ao invés de serem retornados como identificadores BLOB. |
| IBASE\_FETCH\_ARRAYS | Faz com que os arrays sejam retornados diretamente. Caso contrário, são retornados identificadores de array. Identificadores de array somente podem ser usados como argumentos para operações INSERT, já que não estão disponíveis atualmente funções para manipular identificadores de array. |
| IBASE\_UNIXTIME | Faz com que campos de data e horário não sejam retornados como strings, mas como timestamps Unix (o número de segundos desde a Época Unix, que é 1-Jan-1970 0:00 UTC). Pode ser problemático se usado com datas antes de 1970 em alguns sistemas. |

As seguintes constantes são usadas para passar requisições e opções para as funções da
API de serviços ([ibase\_server\_info()](function.ibase-server-info.md), [ibase\_db\_info()](function.ibase-db-info.md),
[ibase\_backup()](function.ibase-backup.md), [ibase\_restore()](function.ibase-restore.md)
e [ibase\_maintain\_db()](function.ibase-maintain-db.md)). Por favor veja o
manual do Firebird/InterBase para o significado destas opções.

**`IBASE_BKP_IGNORE_CHECKSUMS`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_IGNORE_LIMBO`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_METADATA_ONLY`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_NO_GARBAGE_COLLECT`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_OLD_DESCRIPTIONS`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_NON_TRANSPORTABLE`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_BKP_CONVERT`**
:   Opções para [ibase\_backup()](function.ibase-backup.md)

**`IBASE_RES_DEACTIVATE_IDX`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_RES_NO_SHADOW`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_RES_NO_VALIDITY`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_RES_ONE_AT_A_TIME`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_RES_REPLACE`**

**`IBASE_RES_CREATE`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_RES_USE_ALL_SPACE`**
:   Opções para [ibase\_restore()](function.ibase-restore.md)

**`IBASE_PRP_PAGE_BUFFERS`**

**`IBASE_PRP_SWEEP_INTERVAL`**

**`IBASE_PRP_SHUTDOWN_DB`**

**`IBASE_PRP_DENY_NEW_TRANSACTIONS`**

**`IBASE_PRP_DENY_NEW_ATTACHMENTS`**

**`IBASE_PRP_RESERVE_SPACE`**

**`IBASE_PRP_RES_USE_FULL`**

**`IBASE_PRP_RES`**

**`IBASE_PRP_WRITE_MODE`**

**`IBASE_PRP_WM_ASYNC`**

**`IBASE_PRP_WM_SYNC`**

**`IBASE_PRP_ACCESS_MODE`**

**`IBASE_PRP_AM_READONLY`**

**`IBASE_PRP_AM_READWRITE`**

**`IBASE_PRP_SET_SQL_DIALECT`**

**`IBASE_PRP_ACTIVATE`**

**`IBASE_PRP_DB_ONLINE`**

**`IBASE_RPR_CHECK_DB`**

**`IBASE_RPR_IGNORE_CHECKSUM`**

**`IBASE_RPR_KILL_SHADOWS`**

**`IBASE_RPR_MEND_DB`**

**`IBASE_RPR_VALIDATE_DB`**

**`IBASE_RPR_FULL`**

**`IBASE_RPR_SWEEP_DB`**
:   Opções para [ibase\_maintain\_db()](function.ibase-maintain-db.md)

**`IBASE_STS_DATA_PAGES`**

**`IBASE_STS_DB_LOG`**

**`IBASE_STS_HDR_PAGES`**

**`IBASE_STS_IDX_PAGES`**

**`IBASE_STS_SYS_RELATIONS`**
:   Opções para [ibase\_db\_info()](function.ibase-db-info.md)

**`IBASE_SVC_SERVER_VERSION`**
:   Opções para [ibase\_server\_info()](function.ibase-server-info.md)

**`IBASE_SVC_IMPLEMENTATION`**
:   Opções para [ibase\_server\_info()](function.ibase-server-info.md)

**`IBASE_SVC_GET_ENV`**
:   Opções para [ibase\_server\_info()](function.ibase-server-info.md)

**`IBASE_SVC_GET_ENV_LOCK`**

**`IBASE_SVC_GET_ENV_MSG`**

**`IBASE_SVC_USER_DBPATH`**

**`IBASE_SVC_SVR_DB_INFO`**

**`IBASE_SVC_GET_USERS`**
:   Opções para [ibase\_server\_info()](function.ibase-server-info.md)

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
