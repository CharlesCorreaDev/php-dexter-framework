# Fecha a declaração preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.close.php

---

# SQLite3Stmt::close

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::close — Fecha a declaração preparada

### Descrição

public function **SQLite3Stmt::close**(): [true](language.types.singleton.md)

Fecha a declaração preparada.

> **Nota**:
>
> Note que todos os [SQLite3Result](class.sqlite3result.md)s que foram recuperados
> executando esta declaração serão invalidados quando a declaração for
> fechada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Uma exceção [Error](class.error.md) é lançada se o método for chamado em um objeto não inicializado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Este método agora lança uma exceção [Error](class.error.md) se o objeto não for inicializado corretamente. Anteriormente, retornava **`false`**. |

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
