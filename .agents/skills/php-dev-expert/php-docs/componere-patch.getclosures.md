# Obtém Closures

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-patch.getclosures.php

---

# Componere\Patch::getClosures

(Componere 2 >= 2.1.0)

Componere\Patch::getClosures — Obtém Closures

### Descrição

public function **Componere\Patch::getClosures**(): [array](language.types.array.md)

Retorna um array de Closures.

### Valor Retornado

Retorna todos os métodos como um array de objetos Closure vinculados ao escopo e objeto corretos.

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
