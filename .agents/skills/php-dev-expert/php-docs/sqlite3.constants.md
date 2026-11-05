# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SQLITE3_ASSOC`** ([int](language.types.integer.md))
:   Especifica que o método [Sqlite3Result::fetchArray()](sqlite3result.fetcharray.md)
    deve retornar um array indexado pelo nome da coluna conforme retornado no
    conjunto de resultados correspondente.

**`SQLITE3_NUM`** ([int](language.types.integer.md))
:   Especifica que o método [Sqlite3Result::fetchArray()](sqlite3result.fetcharray.md)
    deve retornar um array indexado pelo número da coluna conforme retornado no
    conjunto de resultados correspondente, começando na coluna 0.

**`SQLITE3_BOTH`** ([int](language.types.integer.md))
:   Especifica que o método [Sqlite3Result::fetchArray()](sqlite3result.fetcharray.md)
    deve retornar um array indexado tanto pelo nome quanto pelo número da coluna conforme
    retornado no conjunto de resultados correspondente, começando na coluna 0.

**`SQLITE3_INTEGER`** ([int](language.types.integer.md))
:   Representa a classe de armazenamento INTEGER do SQLite3.

**`SQLITE3_FLOAT`** ([int](language.types.integer.md))
:   Representa a classe de armazenamento REAL (FLOAT) do SQLite3.

**`SQLITE3_TEXT`** ([int](language.types.integer.md))
:   Representa a classe de armazenamento TEXT do SQLite3.

**`SQLITE3_BLOB`** ([int](language.types.integer.md))
:   Representa a classe de armazenamento BLOB do SQLite3.

**`SQLITE3_NULL`** ([int](language.types.integer.md))
:   Representa a classe de armazenamento NULL do SQLite3.

**`SQLITE3_OPEN_READONLY`** ([int](language.types.integer.md))
:   Especifica que o banco de dados SQLite3 deve ser aberto apenas para leitura.

**`SQLITE3_OPEN_READWRITE`** ([int](language.types.integer.md))
:   Especifica que o banco de dados SQLite3 deve ser aberto para leitura e escrita.

**`SQLITE3_OPEN_CREATE`** ([int](language.types.integer.md))
:   Especifica que o banco de dados SQLite3 deve ser criado se ainda não
    existir.

**`SQLITE3_DETERMINISTIC`** ([int](language.types.integer.md))
:   Especifica que uma função criada com [SQLite3::createFunction()](sqlite3.createfunction.md)
    é determinística, ou seja, ela sempre retorna o mesmo resultado dado os mesmos
    inputs dentro de uma única instrução SQL. (Disponível a partir do PHP 7.1.4.)

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
