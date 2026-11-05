# Visitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/commonmark-interfaces-ivisitor.leave.php

---

# CommonMark\Interfaces\IVisitor::leave

(cmark >= 1.0.0)

CommonMark\Interfaces\IVisitor::leave — Visitação

### Descrição

abstract public function **CommonMark\Interfaces\IVisitor::leave**(IVisitable `$visitable`): [int](language.types.integer.md)|IVisitable|[null](language.types.null.md)

### Parâmetros

`visitable`
:   O [CommonMark\Interfaces\IVisitable](class.commonmark-interfaces-ivisitable.md) atual de onde se está saindo.

### Valor Retornado

Retornar CommonMark\Interfaces\IVisitor::Done fará com que o iterador de apoio saia.

Retornar CommonMark\Interfaces\IVisitor::Enter irá redefinir o iterador de apoio ao entrar no **IVisitable** atual.

Retornar CommonMark\Interfaces\IVisitor::Leave irá redefinir o iterador de apoio ao sair do **IVisitable** atual.

Retornar um **IVisitable** irá redefinir o iterador de apoio ao entrar no **IVisitable** informado.

Retornar nada permite que o iterador de apoio continue.

### Veja também

- [CommonMark\Interfaces\IVisitable::accept](commonmark-interfaces-ivisitable.accept.md)

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
