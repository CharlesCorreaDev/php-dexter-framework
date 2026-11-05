# Tipos de dados suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oci8.datatypes.php

---

# Tipos de dados suportados

**O driver oferece suporte aos seguintes tipos ao vincular parâmetros usando a
função [oci\_bind\_by\_name()](function.oci-bind-by-name.md):**

| Tipo | Mapeamento |
| --- | --- |
| **`SQLT_NTY`** | Mapeia um tipo de coleção nativo de um objeto de coleção PHP, como aqueles criados por [oci\_new\_collection()](function.oci-new-collection.md). |
| **`SQLT_BFILEE`** | Mapeia um descritor nativo, como aqueles criados por [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`SQLT_CFILEE`** | Mapeia um descritor nativo, como aqueles criados por [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`SQLT_CLOB`** | Mapeia um descritor nativo, como aqueles criados por [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`SQLT_BLOB`** | Mapeia um descritor nativo, como aqueles criados por [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`SQLT_RDD`** | Mapeia um descritor nativo, como aqueles criados por [oci\_new\_descriptor()](function.oci-new-descriptor.md). |
| **`SQLT_NUM`** | Converte o parâmetro PHP em um tipo longo 'C' e vincula a esse valor. |
| **`SQLT_RSET`** | Mapeia um identificador de instrução nativo, como aqueles criados por [oci\_parse()](function.oci-parse.md) ou aqueles recuperados de outras consultas do OCI. |
| **`SQLT_BOL`** | Vincula o parâmetro PHP a um BOOLEAN PL/SQL. |
| **`SQLT_CHR`** e qualquer outro tipo | Converte o parâmetro PHP em um tipo string e vincula como uma string. |

**Os seguintes tipos são suportados ao recuperar colunas de um conjunto de resultados:**

| Tipo | Mapeamento |
| --- | --- |
| **`SQLT_RSET`** | Cria um recurso de instrução OCI para representar o cursor. |
| **`SQLT_RDD`** | Cria um objeto ROWID. |
| **`SQLT_BLOB`** | Cria um objeto LOB. |
| **`SQLT_CLOB`** | Cria um objeto LOB. |
| **`SQLT_BFILE`** | Cria um objeto LOB. |
| **`SQLT_LNG`** | Vinculado como SQLT\_CHR, retornado como uma string. |
| **`SQLT_LBI`** | Vinculado como **`SQLT_BIN`**, retornado como uma string. |
| Qualquer outro tipo | Vinculado como **`SQLT_CHR`**, retornado como uma string. |

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
