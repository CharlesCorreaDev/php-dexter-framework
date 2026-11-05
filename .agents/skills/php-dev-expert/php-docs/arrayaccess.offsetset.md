# Atribui um valor a uma posição específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayaccess.offsetset.php

---

# ArrayAccess::offsetSet

(PHP 5, PHP 7, PHP 8)

ArrayAccess::offsetSet — Atribui um valor a uma posição específica

### Descrição

public function **ArrayAccess::offsetSet**([mixed](language.types.mixed.md) `$offset`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Atribui um valor a uma posição específica.

### Parâmetros

`offset`
:   A posição na qual se deseja atribuir um valor.

`value`
:   O valor a ser atribuído.

### Valor Retornado

Nenhum valor é retornado.

### Notas

> **Nota**:
>
> O parâmetro `offset` será definido como **`null`** se
> outro valor não for informado, como no exemplo a seguir.
>
> ```
> <?php
> $arrayaccess[] = "first value";
> $arrayaccess[] = "second value";
> print_r($arrayaccess);
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> Array
> (
>     [0] => first value
>     [1] => second value
> )
> ```

> **Nota**:
>
> Esta função não é chamada em atribuições por referência e outras
> modificações indiretas as dimensões de arrays sobrecarregados com
> [ArrayAccess](class.arrayaccess.md) (indiretas no sentido de e não
> serem feitas para modificar a dimensão diretamente, mas para modificar
> uma subdimensão ou uma subpropriedade, ou atribuir a dimensão do array por
> referência a outra variável).
> Em vez disso, o método [ArrayAccess::offsetGet()](arrayaccess.offsetget.md) será chamado. A
> operação será bem sucedida somente se este método retornar por referência.

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
