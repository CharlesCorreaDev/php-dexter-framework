# Funções da dBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.dbase.php

---

# Funções da dBase

## Examples

Muitos exemplos nesta referência requerem um banco de dados dBase. Nós iremos usar
/tmp/test.dbf que irá ser criado no exemplo da
[dbase\_create()](function.dbase-create.md).

## Índice

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
