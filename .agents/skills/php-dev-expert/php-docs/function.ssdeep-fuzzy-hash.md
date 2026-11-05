# Crie um hash difuso a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssdeep-fuzzy-hash.php

---

# ssdeep\_fuzzy\_hash

(PECL ssdeep >= 1.0.0)

ssdeep\_fuzzy\_hash — Crie um hash difuso a partir de uma string

### Descrição

function **ssdeep\_fuzzy\_hash**([string](language.types.string.md) `$to_hash`): [string](language.types.string.md)

**ssdeep\_fuzzy\_hash()** calcula o hash de
`to_hash` usando [» 
hash por partes acionado por contexto](https://dfrws.org/2006/proceedings/12-Kornblum.pdf) e retorna esse hash.

### Parâmetros

`to_hash`
:   A string de entrada.

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
