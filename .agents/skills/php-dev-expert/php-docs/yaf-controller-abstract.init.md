# Inicializador do controlador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.init.php

---

# Yaf\_Controller\_Abstract::init

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::init — Inicializador do controlador

### Descrição

public function **Yaf\_Controller\_Abstract::init**(): [void](language.types.void.md)

[Yaf\_Controller\_Abstract::\_\_construct()](yaf-controller-abstract.construct.md) é final,
que significa que usuários não podem substituí-lo.
Porém, os usuários podem definir
**Yaf\_Controller\_Abstract::init()**, que será
chamado depois que o objeto do controlador for instanciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [Yaf\_Controller\_Abstract::\_\_construct()](yaf-controller-abstract.construct.md) - Construtor de Yaf\_Controller\_Abstract

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
