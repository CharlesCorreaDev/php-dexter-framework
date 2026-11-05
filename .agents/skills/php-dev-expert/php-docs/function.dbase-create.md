# Cria um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-create.php

---

# dbase\_create

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_create — Cria um banco de dados

### Descrição

function **dbase\_create**([string](language.types.string.md) `$path`, [array](language.types.array.md) `$fields`, [int](language.types.integer.md) `$type` = DBASE\_TYPE\_DBASE): [resource](language.types.resource.md)

**dbase\_create()** cria um banco de dados com a definição
informada.
Se o arquivo já existir, ele não será truncado.
[dbase\_pack()](function.dbase-pack.md) pode ser chamado para forçar o truncamento.

> **Nota**:
>
> Esta função é afetada por [open\_basedir](ini.core.md#ini.open-basedir).

### Parâmetros

`path`
:   O caminho do banco de dados. Pode ser um caminho relativo ou absoluto
    para o arquivo onde o dBase irá armazenar os dados.

`fields`
:   Um array de arrays, cada array descrevendo o formato de um campo no
    banco de dados. Cada campo consiste de um nome, um caractere indicando o tipo
    do campo, e opcionalmente, um tamanho, uma precisão e uma opção anulável.
    Os tipos de campos suportados estão listados na [seção de introdução](book.dbase.md#intro.dbase)

    > **Nota**:
    >
    > O nome dos campos são limitados em tamanho e não podem exceder 10 caracteres.

`type`
:   O tipo de banco de dados a ser criado. Pode ser
    **`DBASE_TYPE_DBASE`** ou
    **`DBASE_TYPE_FOXPRO`**.

### Valor Retornado

Retorna um recurso de banco de dados se for criado com sucesso,
ou **`false`** se houver um erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | O parâmetro `type` foi adicionado. |
| PECL dbase 7.0.0 | O valor de retorno agora é do tipo [resource](language.types.resource.md) ao invés de um [int](language.types.integer.md). |

### Examples

**Exemplo #1 Criando um arquivo de banco de dados dBase**

```
<?php

// database "definition"
$def = array(
  array("date",     "D"),
  array("name",     "C",  50),
  array("age",      "N",   3, 0),
  array("email",    "C", 128),
  array("ismember", "L")
);

// criação
if (!dbase_create('/tmp/test.dbf', $def)) {
  echo "Erro, não foi possível criar o banco de dados\n";
}

?>
```

### Veja também

- [dbase\_open()](function.dbase-open.md) - Abre um banco de dados
- [dbase\_close()](function.dbase-close.md) - Fecha um banco de dados

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
