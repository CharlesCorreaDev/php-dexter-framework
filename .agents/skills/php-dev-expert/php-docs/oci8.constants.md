# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oci8.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Modos de função e métodos do OCI8**

| Constante | Descrição |
| --- | --- |
| **`OCI_ASSOC`** | Utilizado com [oci\_fetch\_all()](function.oci-fetch-all.md) e [oci\_fetch\_array()](function.oci-fetch-array.md) para obter os resultados em um array associativo. |
| **`OCI_BOTH`** | Utilizado com [oci\_fetch\_all()](function.oci-fetch-all.md) e [oci\_fetch\_array()](function.oci-fetch-array.md) para obter os resultados em um array com índices associativos e numéricos. |
| **`OCI_COMMIT_ON_SUCCESS`** | Modo de execução de instruções com [oci\_execute()](function.oci-execute.md). Automaticamente efetiva as alterações (commit) caso a instrução execute. |
| **`OCI_CRED_EXT`** | Utilizado com [oci\_connect()](function.oci-connect.md) para ativar a autenticação Oracles' External ou do sistema operacional. |
| **`OCI_DEFAULT`** | Veja **`OCI_NO_AUTO_COMMIT`**. |
| **`OCI_DESCRIBE_ONLY`** | Modo de execução de instruções para [oci\_execute()](function.oci-execute.md). Utilize esse modo se deseja metadados como os nomes de colunas mas não deseja trazer as linhas da consulta. |
| **`OCI_EXACT_FETCH`** | Obsoleto. Modo de execução de instruções. Utilizado quando a aplicação conheça previamente quantas linhas serão lidas. Este modo desliga o prefetching a partir do Oracle release 8. O cursor é cancelado depois da quantidade deseja de linhas é lida o que pode resultar em uma menor quantidade de recursos consumidos no lado do servidor. |
| **`OCI_FETCHSTATEMENT_BY_COLUMN`** | Modo padrão do [oci\_fetch\_all()](function.oci-fetch-all.md). |
| **`OCI_FETCHSTATEMENT_BY_ROW`** | Modo alternativo do [oci\_fetch\_all()](function.oci-fetch-all.md). |
| **`OCI_LOB_BUFFER_FREE`** | Utilizado com [OCILob::flush](ocilob.flush.md) para liberar os buffers associados. |
| **`OCI_NO_AUTO_COMMIT`** | Modo de execução de instruções para [oci\_execute()](function.oci-execute.md). A instrução não é efetivada automaticamente nesse modo (modo sem commit). Para a legibilidade de em código, utilize esse valor ao invés da constante antiga equivalente **`OCI_DEFAULT`**. |
| **`OCI_NUM`** | Utilizado com [oci\_fetch\_all()](function.oci-fetch-all.md) e [oci\_fetch\_array()](function.oci-fetch-array.md) para obter os resultados em um array enumerado. |
| **`OCI_RETURN_LOBS`** | Utilizado com [oci\_fetch\_array()](function.oci-fetch-array.md) para obter o dado do LOB ao invés do descritor. |
| **`OCI_RETURN_NULLS`** | Utilizado com [oci\_fetch\_array()](function.oci-fetch-array.md) para obter elementos vazios de array se o item da linha for **`null`**. |
| **`OCI_SEEK_CUR`** | Utilizado com [OCILob::seek](ocilob.seek.md) para configurar a posição de leitura. |
| **`OCI_SEEK_END`** | Utilizado com [OCILob::seek](ocilob.seek.md) para configurar a posição de leitura. |
| **`OCI_SEEK_SET`** | Utilizado com [OCILob::seek](ocilob.seek.md) para configurar a posição de leitura. |
| **`OCI_SYSDATE`** | Obsoleto. |
| **`OCI_SYSDBA`** | Utilizad com [oci\_connect()](function.oci-connect.md) para conectar com o privilégio SYSDBA. A configuração php.ini [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect) precisa estar ativada. |
| **`OCI_SYSOPER`** | Utilizado com [oci\_connect()](function.oci-connect.md) para conectar com o privilégio SYSOPER. A configuração php.ini [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect) precisa estar ativada. |
| **`OCI_TEMP_BLOB`** | Utilizada com [OCILob::writeTemporary](ocilob.writetemporary.md) para indicar que um BLOB temporário deve ser criado. |
| **`OCI_TEMP_CLOB`** | Utilizado com [OCILob::writeTemporary](ocilob.writetemporary.md) para indicar que um CLOB temporário deve ser criado. |

**Tipos Bind e Define para do OCI8**

| Constante | Descrição |
| --- | --- |
| **`OCI_B_BFILE`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) BFILEs. |
| **`OCI_B_BIN`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) para associar (bind) valores RAW. |
| **`OCI_B_BLOB`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) BLOBs. |
| **`OCI_B_BOL`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) para associar (bind) uma variável PL/SQL booleana. |
| **`OCI_B_CFILEE`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) CFILEs. |
| **`OCI_B_CLOB`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) CLOBs. |
| **`OCI_B_CURSOR`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) cursores, anteriormente alocados com [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`OCI_B_INT`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de INTEGER. |
| **`OCI_B_NTY`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) tipos nomeados. |
| **`OCI_B_NUM`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de NUMBER. |
| **`OCI_B_ROWID`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) quando associando (binding) ROWIDs. |
| **`SQLT_AFC`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de CHAR. |
| **`SQLT_AVC`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de VARCHAR2. |
| **`SQLT_BDOUBLE`** | Não suportado. |
| **`SQLT_BFILEE`** | O mesmo que **`OCI_B_BFILE`**. |
| **`SQLT_BFLOAT`** | Não suportado. |
| **`SQLT_BIN`** | O mesmo que **`OCI_B_BIN`**. |
| **`SQLT_BLOB`** | O mesmo que **`OCI_B_BLOB`**. |
| **`SQLT_BOL`** | O mesmo que **`OCI_B_BOL`**. |
| **`SQLT_CFILEE`** | O mesmo que **`OCI_B_CFILEE`**. |
| **`SQLT_CHR`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de VARCHAR2. Também utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md). |
| **`SQLT_CLOB`** | O mesmo que **`OCI_B_CLOB`**. |
| **`SQLT_FLT`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de FLOAT. |
| **`SQLT_INT`** | O mesmo que **`OCI_B_INT`**. |
| **`SQLT_LBI`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) para associar (bind) valores LONG RAW. |
| **`SQLT_LNG`** | Utilizado com [oci\_bind\_by\_name()](function.oci-bind-by-name.md) para associar (bind) valores LONG. |
| **`SQLT_LVC`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de LONG VARCHAR. |
| **`SQLT_NTY`** | O mesmo que **`OCI_B_NTY`**. |
| **`SQLT_NUM`** | O mesmo que **`OCI_B_NUM`**. |
| **`SQLT_ODT`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de LONG. |
| **`SQLT_RDD`** | O mesmo que **`OCI_B_ROWID`**. |
| **`SQLT_RSET`** | O mesmo que **`OCI_B_CURSOR`**. |
| **`SQLT_STR`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de STRING. |
| **`SQLT_UIN`** | Não suportado. |
| **`SQLT_VCS`** | Utilizado com [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) para associar (bind) arrays de VARCHAR. |

**Tipos de descritores do OCI8**

| Constante | Descrição |
| --- | --- |
| **`OCI_DTYPE_FILE`** | Esse indicador faz [oci\_new\_descriptor()](function.oci-new-descriptor.md) inicializar um descritor FILE. |
| **`OCI_DTYPE_LOB`** | Esse indicador faz [oci\_new\_descriptor()](function.oci-new-descriptor.md) inicializar um descritor LOB. |
| **`OCI_DTYPE_ROWID`** | Esse indicador faz [oci\_new\_descriptor()](function.oci-new-descriptor.md) inicializar um descritor ROWID. |
| **`OCI_D_FILE`** | O mesmo que **`OCI_DTYPE_FILE`**. |
| **`OCI_D_LOB`** | O mesmo que **`OCI_DTYPE_LOB`**. |
| **`OCI_D_ROWID`** | O mesmo que **`OCI_DTYPE_ROWID`**. |

| Constantes | Descrição |
| --- | --- |
**Constantes do OCI8 Transparent Application Failover (TAF)**| **`OCI_FO_ABORT`** ([int](language.types.integer.md)) | Failover falhou e não há opção para tentar novamente. |
| **`OCI_FO_BEGIN`** ([int](language.types.integer.md)) | Failover detectou uma conexão perdida e está iniciando. |
| **`OCI_FO_END`** ([int](language.types.integer.md)) | Failover completou com sucesso. |
| **`OCI_FO_ERROR`** ([int](language.types.integer.md)) | Failover não teve sucesso mas ele dará a oportunidade ao manipulador de erro e retornará **`OCI_FO_RETRY`** ao failover de repetição. |
| **`OCI_FO_NONE`** ([int](language.types.integer.md)) | O usuário solicitou um tipo failover. |
| **`OCI_FO_REAUTH`** ([int](language.types.integer.md)) | Um usuário Oracle foir re-autenticado. |
| **`OCI_FO_RETRY`** ([int](language.types.integer.md)) | O failover deverá ser tentado novamente pelo Oracle. No caso de um erro na tentativa falhando para uma nova conexão, TAF será capaz de reiniciar o failover. Tipicamente a aplicação deve dormir antes de retornar **`OCI_FO_RETRY`**. |
| **`OCI_FO_SELECT`** ([int](language.types.integer.md)) | O usuário também solicitou um failover SELECT. Ele permite aos usuários com cursores abertos continuar obtendo dados depois de um failover. |
| **`OCI_FO_SESSION`** ([int](language.types.integer.md)) | O usuário solicitou apenas failover de sessão. Por exemplo, se uma conexão de usuário é perdida, então uma nova sessão é automaticamente criada para o usuário a partir do backup. Esse tipo de failover não tenta recuperar SELECTs. |
| **`OCI_FO_TXNAL`** ([int](language.types.integer.md)) | O usuário solicitou um failover de transação. |

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
