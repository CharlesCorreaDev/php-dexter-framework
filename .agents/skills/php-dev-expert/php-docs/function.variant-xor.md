# Realiza uma exclusão lógica em duas variantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-xor.php

---

# variant\_xor

(PHP 5, PHP 7, PHP 8)

variant\_xor — Realiza uma exclusão lógica em duas variantes

### Descrição

function **variant\_xor**([mixed](language.types.mixed.md) `$left`, [mixed](language.types.mixed.md) `$right`): [variant](class.variant.md)

Realiza uma exclusão lógica.

### Parâmetros

`left`
:   O termo da esquerda.

`right`
:   O termo da direita.

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

**Variant XOR Rules**

| Se `left` for | Se `right` for | então o resultado será |
| --- | --- | --- |
| **`true`** | **`true`** | **`false`** |
| **`true`** | **`false`** | **`true`** |
| **`false`** | **`true`** | **`true`** |
| **`false`** | **`false`** | **`false`** |
| **`null`** | **`null`** | **`null`** |

### Erros/Exceções

Lança uma [com\_exception](class.com-exception.md) em caso de falha.

### Veja também

- [variant\_or()](function.variant-or.md) - Realização uma disjunção lógica de duas variantes
- [variant\_and()](function.variant-and.md) - Executa uma operação AND binária entre duas variantes

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
