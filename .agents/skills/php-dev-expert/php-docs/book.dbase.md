# dBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.dbase.php

---

# dBase

# Introdução

> **Nota**:
>
> Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
> e não é mais distribuída com o PHP desde a versão 5.3.0.

Essas funções permitem acessar registros armazenados em bancos de dados no formato
dBase (dbf).

**Aviso**

Não é recomendado usar arquivos dBase como banco de dados
de produção. Use o [» SQLite](https://sqlite.org/) ou escolha qualquer servidor SQL real; [» MySQL](https://www.mysql.com/) ou [» Postgres](https://www.postgresql.org/)
são escolhas comuns com o PHP. O suporte ao dBase está aqui para permitir
importação e exportação de dados de e para seu banco de dados da web, porque o
formato de arquivo é comumente entendido por planilhas e organizadores
do Windows.

**Cuidado**

A partir do dBase 7.0.0, os bancos de dados são bloqueados automaticamente via
[flock()](function.flock.md). Não havia suporte para bloqueio anteriormente,
portanto, dois processos simultâneos de servidor web modificando o mesmo arquivo dBase
provavelmente teriam arruinado um banco de dados. Isso pode acontecer mesmo com o dBase
7.0.0+ em sistemas que implementam os bloqueios no nível do processo com
SAPIs multithread.

Os arquivos dBase são arquivos sequenciais simples de registros de comprimento fixo.
Os registros são anexados ao final do arquivo e os registros excluídos são
mantidos até a chamada a [dbase\_pack()](function.dbase-pack.md).

Somente arquivos dbf de nível 3 (dBASE III+) a 5 (dBASE V) são suportados.
Os tipos de campos dBase disponíveis são:

**Tipos de campos disponíveis**

| Campo | Tipo dBase | Formato | Informações adicionais |
| --- | --- | --- | --- |
| `M` | Memo | n/a | Este tipo não é suportado pelo PHP, tal campo será ignorado |
| `D` | Date | `YYYYMMDD` | O comprimento do campo é limitado a 8 |
| `T` | DateTime | `YYYYMMDDhhmmss.uuu` | (FoxPro) Nenhuma verificação de validade é feita. Disponível a partir do dBase 7.0.0. |
| `N` | Number | Um número | Deve-se declarar um comprimento e uma precisão (o número de dígitos após o separador de decimais). |
| `F` | Float | Um número float | Igual a `N`. |
| `C` | String | Uma string | Deve-se declarar um comprimento. Ao recuperar dados, a string será preenchida à direita com espaços para caber no comprimento declarado. Strings muito longas serão truncadas silenciosamente ao armazenar dados. |
| `L` | Boolean | `T` ou `Y` para **`true`**, `F` ou `N` para **`false`**, `?` para não inicializado. | A partir do dBase 7.0.0, retornado como um [bool](language.types.boolean.md) (**`true`** ou **`false`**), ou **`null`** para campos não inicializados. Anteriormente, retornado como [int](language.types.integer.md) (`1` ou `0`). |

> **Nota**:
>
> A partir do dBase 7.0.0, campos anuláveis são suportados para bancos de dados
> **`DBASE_TYPE_FOXPRO`**. Se um campo for anulável,
> passar **`null`** definirá o respectivo sinalizador e, na recuperação posterior,
> o valor do campo será **`null`**.

> **Nota**:
>
> Não há suporte para índices ou campos memo.

- [Instalação/Configuração](dbase.setup.md)
  - [Instalação](dbase.installation.md)
  - [Tipos de Recurso](dbase.resources.md)
- [Constantes predefinidas](dbase.constants.md)
- [Funções da dBase](ref.dbase.md)
  - [dbase\_add\_record](function.dbase-add-record.md) — Adiciona um registro a um banco de dados
  - [dbase\_close](function.dbase-close.md) — Fecha um banco de dados
  - [dbase\_create](function.dbase-create.md) — Cria um banco de dados
  - [dbase\_delete\_record](function.dbase-delete-record.md) — Exclui um registro do banco de dados
  - [dbase\_get\_header\_info](function.dbase-get-header-info.md) — Obtém as informações do cabeçalho do banco de dados
  - [dbase\_get\_record](function.dbase-get-record.md) — Obtém um registro do banco de dados como um array indexado
  - [dbase\_get\_record\_with\_names](function.dbase-get-record-with-names.md) — Obtém um registro do banco de dados como um array associativo.
  - [dbase\_numfields](function.dbase-numfields.md) — Obtém o número de campos em um banco de dados
  - [dbase\_numrecords](function.dbase-numrecords.md) — Obtém o número de registros em um banco de dados
  - [dbase\_open](function.dbase-open.md) — Abre um banco de dados
  - [dbase\_pack](function.dbase-pack.md) — Comprime um banco de dados
  - [dbase\_replace\_record](function.dbase-replace-record.md) — Substitui um registro em um banco de dados

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
