# Conectando a bancos de dados SQLite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-sqlite.connection.php

---

# DSN PDO\_SQLITE

(No version information available, might only be in Git)

DSN PDO\_SQLITE — Conectando a bancos de dados SQLite

### Descrição

O Data Source Name (DSN) PDO\_SQLITE é composto pelos seguintes elementos:

Prefixo DSN (SQLite 3)
:   O prefixo DSN é **`sqlite:`**.

    - Para acessar um banco de dados em disco, o caminho absoluto deve ser
      adicionado ao prefixo DSN.
    - Para criar um banco de dados em memória, `:memory:`
      deve ser adicionado ao prefixo DSN.
    - Se o DSN consistir apenas no prefixo DSN, um banco de dados temporário
      será usado e será excluído quando a conexão for encerrada.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_SQLITE**

Os exemplos a seguir mostram o DSN PDO\_SQLITE para conexão com bancos de
dados SQLite:

```
sqlite:/caminho/para/o/arquivo/banco.sq3
sqlite::memory:
sqlite:
```

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
