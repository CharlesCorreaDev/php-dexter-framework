# Retorna o identificador inteiro do objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-object-id.php

---

# runkit7\_object\_id

(PECL runkit7 >= Unknown)

runkit7\_object\_id — 
Retorna o identificador inteiro do objeto fornecido

### Descrição

function **runkit7\_object\_id**([object](language.types.object.md) `$obj`): [int](language.types.integer.md)

Esta função é equivalente a [spl\_object\_id()](function.spl-object-id.md).

Esta função retorna um identificador único para o objeto. O ID do objeto é
único durante toda a vida útil do objeto. Uma vez que o objeto é destruído, seu ID
pode ser reutilizado para outros objetos. Este comportamento é semelhante a
[spl\_object\_hash()](function.spl-object-hash.md).

### Parâmetros

`obj`
:   Qualquer objeto.

### Valor Retornado

Um identificador inteiro que é único para cada objeto existente e
é sempre o mesmo para cada objeto.

### Notas

> **Nota**:
>
> Quando um objeto é destruído, seu identificador pode ser reutilizado para outros objetos.

### Veja também

- [spl\_object\_id()](function.spl-object-id.md) - Retorna o identificador inteiro do objeto fornecido

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
