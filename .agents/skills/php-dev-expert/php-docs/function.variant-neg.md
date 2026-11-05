# Realiza uma negação lógica em uma variante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-neg.php

---

# variant\_neg

(PHP 5, PHP 7, PHP 8)

variant\_neg — Realiza uma negação lógica em uma variante

### Descrição

function **variant\_neg**([mixed](language.types.mixed.md) `$value`): [variant](class.variant.md)

Realiza uma negação lógica de `value`.

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

Retorna o resultado da negação lógica.

### Erros/Exceções

Lança uma [com\_exception](class.com-exception.md) em caso de falha.

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
