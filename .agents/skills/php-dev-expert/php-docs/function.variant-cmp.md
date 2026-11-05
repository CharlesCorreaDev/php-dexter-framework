# Compara duas variantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-cmp.php

---

# variant\_cmp

(PHP 5, PHP 7, PHP 8)

variant\_cmp — Compara duas variantes

### Descrição

function **variant\_cmp**(  
    [mixed](language.types.mixed.md) `$left`,  
    [mixed](language.types.mixed.md) `$right`,  
    [int](language.types.integer.md) `$locale_id` = **`LOCALE_SYSTEM_DEFAULT`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [int](language.types.integer.md)

Compara `left` com `right`.

Esta função apenas compara valores escalares, e não arrays ou registros de variantes.

### Parâmetros

`left`
:   O termo da esquerda.

`right`
:   O termo da direita.

`locale_id`
:   Um identificador de localidade válido a ser usado na comparação de strings (isso afeta
    a ordem de comparação).

`flags`
:   `flags` pode ser uma ou mais das constantes a seguir,
    combinadas com o operador binário OR, e afeta as comparações entre strings:

    **Opções de Comparações entre Variantes**

    | valor | significado |
    | --- | --- |
    | **`NORM_IGNORECASE`** | Compara sem diferenciar maiúsculas de minúsculas |
    | **`NORM_IGNORENONSPACE`** | Ignora caracteres que não sejam de espaçamento |
    | **`NORM_IGNORESYMBOLS`** | Ignora símbolos |
    | **`NORM_IGNOREWIDTH`** | Ignora largura da string |
    | **`NORM_IGNOREKANATYPE`** | Ignora o tipo de Kana |
    | **`NORM_IGNOREKASHIDA`** | Ignora caracteres arábicos kashida |

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

Retorna uma das seguintes constantes:

**Resultado de Comparação de Variantes**

| valor | significado |
| --- | --- |
| **`VARCMP_LT`** | `left` é menor que `right` |
| **`VARCMP_EQ`** | `left` é igual a `right` |
| **`VARCMP_GT`** | `left` é maior que `right` |
| **`VARCMP_NULL`** | `left`, `right` ou ambos são **`null`** |

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
