# Destrói o objeto Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.destroy.php

---

# Gmagick::destroy

(PECL gmagick >= Unknown)

Gmagick::destroy — Destrói o objeto Gmagick

### Descrição

public function **Gmagick::destroy**(): [bool](language.types.boolean.md)

Destrói o objeto [Gmagick](class.gmagick.md) e libera todos os recursos associados a ele.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
