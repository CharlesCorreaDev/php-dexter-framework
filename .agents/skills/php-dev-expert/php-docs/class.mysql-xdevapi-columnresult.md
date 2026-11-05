# Classe ColumnResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-columnresult.php

---

# Classe ColumnResult

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\ColumnResult**
{

/\* Métodos \*/

public function **getCharacterSetName**(): [string](language.types.string.md)

public function **getCollationName**(): [string](language.types.string.md)

public function **getColumnLabel**(): [string](language.types.string.md)

public function **getColumnName**(): [string](language.types.string.md)

public function **getFractionalDigits**(): [int](language.types.integer.md)

public function **getLength**(): [int](language.types.integer.md)

public function **getSchemaName**(): [string](language.types.string.md)

public function **getTableLabel**(): [string](language.types.string.md)

public function **getTableName**(): [string](language.types.string.md)

public function **getType**(): [int](language.types.integer.md)

public function **isNumberSigned**(): [int](language.types.integer.md)

public function **isPadded**(): [int](language.types.integer.md)

}

## Índice

- [ColumnResult::\_\_construct](mysql-xdevapi-columnresult.construct.md) — Construtor de ColumnResult
- [ColumnResult::getCharacterSetName](mysql-xdevapi-columnresult.getcharactersetname.md) — Obtém o conjunto de caracteres
- [ColumnResult::getCollationName](mysql-xdevapi-columnresult.getcollationname.md) — Obtém o nome da colação
- [ColumnResult::getColumnLabel](mysql-xdevapi-columnresult.getcolumnlabel.md) — Obtém o label da coluna
- [ColumnResult::getColumnName](mysql-xdevapi-columnresult.getcolumnname.md) — Obtém o nome da coluna
- [ColumnResult::getFractionalDigits](mysql-xdevapi-columnresult.getfractionaldigits.md) — Obtém o comprimento dos dígitos fracionários
- [ColumnResult::getLength](mysql-xdevapi-columnresult.getlength.md) — Obtém o comprimento do campo da coluna
- [ColumnResult::getSchemaName](mysql-xdevapi-columnresult.getschemaname.md) — Obtám o nome do esquema
- [ColumnResult::getTableLabel](mysql-xdevapi-columnresult.gettablelabel.md) — Obtém o label da tabela
- [ColumnResult::getTableName](mysql-xdevapi-columnresult.gettablename.md) — Obtém o nome da tabela
- [ColumnResult::getType](mysql-xdevapi-columnresult.gettype.md) — Obtém o tipo de coluna
- [ColumnResult::isNumberSigned](mysql-xdevapi-columnresult.isnumbersigned.md) — Verifica se é do tipo com sinal
- [ColumnResult::isPadded](mysql-xdevapi-columnresult.ispadded.md) — Verifica se é preenchida à esquerda

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
