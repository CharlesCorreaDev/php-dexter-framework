# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cubrid.resources.php

---

## Tipos de Recurso

Existem quatro tipos de recursos usados no CUBRID. O primeiro é o identificador da
conexão de banco de dados, o segundo é o recurso que
contém o resultado de uma consulta e os dois últimos são um recurso que contém os
resultados da consulta de tipos de dados BLOB ou CLOB.

## Identificador de conexão

Um identificador de conexão retornado por [cubrid\_connect()](function.cubrid-connect.md),
[cubrid\_connect\_with\_url()](function.cubrid-connect-with-url.md),
[cubrid\_pconnect()](function.cubrid-pconnect.md) e
[cubrid\_pconnect\_with\_url()](function.cubrid-pconnect-with-url.md).

## Identificador de requisição

Um identificador de requisição retornado por [cubrid\_prepare()](function.cubrid-prepare.md) e [cubrid\_execute()](function.cubrid-execute.md).

## Identificador LOB

Um identificador LOB retornado por [cubrid\_lob\_get()](function.cubrid-lob-get.md).

## Identificador LOB2

Um identificador LOB retornado por [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido
do conjunto de resultados.

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
