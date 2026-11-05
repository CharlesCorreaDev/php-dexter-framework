# Retorna o resultado da divisão de duas variantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-div.php

---

# variant\_div

(PHP 5, PHP 7, PHP 8)

variant\_div — Retorna o resultado da divisão de duas variantes

### Descrição

function **variant\_div**([mixed](language.types.mixed.md) `$left`, [mixed](language.types.mixed.md) `$right`): [variant](class.variant.md)

Divide `left` por `right` e
retorna o resultado.

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

**Regras de Divisão de Variantes**

| Se | Então |
| --- | --- |
| Ambas as expressões são do tipo string, data, caractere, booleano | Double é retornado |
| Uma expressão é um tipo de string e a outra um caractere | Divisão, e um double é retornado |
| Uma expressão é numérica e a outra é uma string | Divisão, e um double é retornado |
| Ambas as expressões são numéricas | Divisão, e um double é retornado |
| Qualquer das expressões é NULL | NULL é retornado |
| `right` é vazio e `left` é qualquer coisa exceto vazio | Uma [com\_exception](class.com-exception.md) com código **`DISP_E_DIVBYZERO`** é lançada |
| `left` é vazio e `right` é qualquer coisa exceto vazio | 0 como tipo double é retornado |
| Ambas as expressões são vazias | Uma [com\_exception](class.com-exception.md) com código **`DISP_E_OVERFLOW`** é lançada |

### Erros/Exceções

Lança uma [com\_exception](class.com-exception.md) em caso de falha.

### Veja também

- [variant\_idiv()](function.variant-idiv.md) - Converte variantes para inteiros e retorna o resultado da divisão deles

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
