# Posição a ser obtida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayaccess.offsetget.php

---

# ArrayAccess::offsetGet

(PHP 5, PHP 7, PHP 8)

ArrayAccess::offsetGet — Posição a ser obtida

### Descrição

public function **ArrayAccess::offsetGet**([mixed](language.types.mixed.md) `$offset`): [mixed](language.types.mixed.md)

Retorna o valor de uma posição específica.

Este método é executado ao checar se uma posição está vazia, com a função [empty()](function.empty.md).

### Parâmetros

`offset`
:   A posição a ser obtida.

### Valor Retornado

Pode retornar valores de qualquer tipo.

### Notas

> **Nota**:
>
> É possível para implementações deste método serem retornadas por referência.
> Isso modifica indiretamente a sobrecarga de dimensões do array de objetos
> [ArrayAccess](class.arrayaccess.md) possíveis.
>
> Uma modificação direta é aquela que substitui completamente o valor de
> uma dimensão do array, como em `$obj[6] = 7`. Uma
> modificação indireta, por outro lado, modifica somente parte da
> dimensão, ou tenta atribuir a dimensão por referência a
> outra variável, como em `$obj[6][7] = 7` ou
> `$var =& $obj[6]`. Incrementos com
> `++` e decrementos com `--`
> também são implementados de forma a exigirem modificações indiretas.
>
> Enquanto uma modificação direta engatilha uma chamada ao método
> [ArrayAccess::offsetSet()](arrayaccess.offsetset.md), uma modificação indireta
> engatilha uma chamada ao **ArrayAccess::offsetGet()**.
> Neste caso, a implementação do método
> **ArrayAccess::offsetGet()** deve permitir o retorno por
> referência, caso contrário uma mensagem **`E_NOTICE`** será disparada.

### Veja também

- [ArrayAccess::offsetExists()](arrayaccess.offsetexists.md) - Verifica se uma posição existe

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
