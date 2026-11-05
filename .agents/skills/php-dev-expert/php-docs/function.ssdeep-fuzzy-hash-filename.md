# Cria um hash difuso a partir de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssdeep-fuzzy-hash-filename.php

---

# ssdeep\_fuzzy\_hash\_filename

(PECL ssdeep >= 1.0.0)

ssdeep\_fuzzy\_hash\_filename — Cria um hash difuso a partir de um arquivo

### Descrição

function **ssdeep\_fuzzy\_hash\_filename**([string](language.types.string.md) `$file_name`): [string](language.types.string.md)

**ssdeep\_fuzzy\_hash\_filename()** calcula o hash
do arquivo especificado por `file_name` usando
[» hash por partes acionado por
contexto](https://dfrws.org/2006/proceedings/12-Kornblum.pdf), e retorna esse hash.

### Parâmetros

`file_name`
:   O nome do arquivo a ter o hash calculado.

### Valor Retornado

Retorna uma string em caso de sucesso, **`false`** caso contrário.

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
