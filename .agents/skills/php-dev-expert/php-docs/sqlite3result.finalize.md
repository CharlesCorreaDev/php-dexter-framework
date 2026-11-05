# Fecha o conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3result.finalize.php

---

# SQLite3Result::finalize

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Result::finalize — Fecha o conjunto de resultados

### Descrição

public function **SQLite3Result::finalize**(): [true](language.types.singleton.md)

Fecha o conjunto de resultados.

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
