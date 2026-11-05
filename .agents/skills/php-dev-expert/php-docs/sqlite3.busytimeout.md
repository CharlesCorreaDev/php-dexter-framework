# Define o manipulador de conexão ocupada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.busytimeout.php

---

# SQLite3::busyTimeout

(PHP 5 >= 5.3.3, PHP 7, PHP 8)

SQLite3::busyTimeout — Define o manipulador de conexão ocupada

### Descrição

public function **SQLite3::busyTimeout**([int](language.types.integer.md) `$milliseconds`): [bool](language.types.boolean.md)

Define um manipulador ocupado que irá dormir até que o banco de dados não esteja bloqueado ou o tempo limite seja atingido.

### Parâmetros

`milliseconds`
:   Os milissegundos para dormir. Definir esse valor como um valor menor
    ou igual a zero desligará um manipulador de tempo limite já definido.

### Valor Retornado

Retorna **`true`** em caso de sucesso, ou **`false`** em caso de falha.

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
