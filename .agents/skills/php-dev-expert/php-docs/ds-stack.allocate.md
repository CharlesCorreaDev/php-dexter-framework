# Aloca memória suficiente para uma capacidade requerida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.allocate.php

---

# Ds\Stack::allocate

(PECL ds >= 1.0.0)

Ds\Stack::allocate — Aloca memória suficiente para uma capacidade requerida

### Descrição

public function **Ds\Stack::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Garante que memória suficiente seja alocada para uma capacidade requerida.
Isso elimina a necessidade de realocar o buffer interno conforme os valores são adicionados.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se este valor for menor ou igual à
    > capacidade atual.

### Valor Retornado

Nenhum valor é retornado.

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
