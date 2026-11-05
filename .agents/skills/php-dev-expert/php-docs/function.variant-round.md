# Arredonda uma variante para o número de casas decimais especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-round.php

---

# variant\_round

(PHP 5, PHP 7, PHP 8)

variant\_round — Arredonda uma variante para o número de casas decimais especificado

### Descrição

function **variant\_round**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$decimals`): [?](language.types.null.md)[variant](class.variant.md)

Retorna o valor de `value` arredondado para
o número de casas decimais informado em `decimals`.

### Parâmetros

`value`
:   A variante.

`decimals`
:   Número de casas decimais.

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

Retorna o valor arredondado ou **`null`** em caso de falha.

### Veja também

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
