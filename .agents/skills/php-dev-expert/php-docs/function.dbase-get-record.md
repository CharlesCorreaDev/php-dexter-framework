# Obtém um registro do banco de dados como um array indexado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-get-record.php

---

# dbase\_get\_record

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_get\_record — 
Obtém um registro do banco de dados como um array indexado

### Descrição

function **dbase\_get\_record**([resource](language.types.resource.md) `$database`, [int](language.types.integer.md) `$number`): [array](language.types.array.md)

Obtém um registro do banco de dados como um array indexado.

### Parâmetros

`database`
:   O recurso do banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

`number`
:   O índice do registro entre `1` e
    `dbase_numrecords($dbase_identifier)`.

### Valor Retornado

Um array indexado com o registro. Este array também irá incluir uma chave
chamada `deleted` a qual é definida como 1 se o registro foi marcado
para exclusão (veja [dbase\_delete\_record()](function.dbase-delete-record.md)).

Cada campo é convertido para o tipo PHP apropriado, exceto:

- Datas são mantidas como strings.
- Valores DateTime são convertidos em strings.
- Números inteiros fora do intervalo
  **`PHP_INT_MIN`**..**`PHP_INT_MAX`** são
  retornados como strings.
- Antes do dbase 7.0.0, os booleanos (`L`) eram convertidos em `1` ou
  `0`.

Em caso de erro, **dbase\_get\_record()** irá retornar **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Veja também

- [dbase\_get\_record\_with\_names()](function.dbase-get-record-with-names.md) - Obtém um registro do banco de dados como um array associativo.

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
