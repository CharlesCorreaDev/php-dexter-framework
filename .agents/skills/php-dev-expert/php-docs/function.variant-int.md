# Retorna a porção inteira de uma variante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-int.php

---

# variant\_int

(PHP 5, PHP 7, PHP 8)

variant\_int — Retorna a porção inteira de uma variante

### Descrição

function **variant\_int**([mixed](language.types.mixed.md) `$value`): [variant](class.variant.md)

Obtém a porção inteira de uma variante.

### Parâmetros

`value`
:   A variante.

> **Nota**:
>
> Assim como todas as funções aritméticas variantes, os parâmetros para esta função
> podem ser um tipo nativo do PHP (inteiro, string, ponto flutuante, booleano ou
> **`null`**) ou uma instância de uma classe COM, VARIANT ou DOTNET. Tipos nativos do PHP
> serão convertidos em variantes usando as mesmas regras encontradas no construtor
> da classe [variant](class.variant.md). Objetos COM e DOTNET
> terão o valor de sua propriedade padrão obtido e usado como o valor da variante.
>
> As funções aritméticas variantes são empacotadores para funções com nomes
> semelhantes na biblioteca COM; para mais informações sobre estas funções, consulte
> a biblioteca MSDN. As funções do PHP são nomeadas de forma ligeiramente diferente; por exemplo,
> [variant\_add()](function.variant-add.md) no PHP corresponde a `VarAdd()` na documentação da MSDN.

### Valor Retornado

Se `value` for negativo, o primeiro negativo
inteiro menor ou igual à variante é retornado, caso contrário
retorna a porção inteira do valor de
`value`.

### Erros/Exceções

Lança uma [com\_exception](class.com-exception.md) em caso de falha.

### Veja também

- [variant\_fix()](function.variant-fix.md) - Retorna a porção inteira de uma variante
- [variant\_round()](function.variant-round.md) - Arredonda uma variante para o número de casas decimais especificado
- [floor()](function.floor.md) - Arredonda frações para baixo
- [ceil()](function.ceil.md) - Arredonda frações para cima
- [round()](function.round.md) - Arredonda um float

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
