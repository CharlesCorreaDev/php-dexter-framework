# Multiplica os valores de duas variantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-mul.php

---

# variant\_mul

(PHP 5, PHP 7, PHP 8)

variant\_mul — Multiplica os valores de duas variantes

### Descrição

function **variant\_mul**([mixed](language.types.mixed.md) `$left`, [mixed](language.types.mixed.md) `$right`): [variant](class.variant.md)

Multiplica `left` por `right`.

### Parâmetros

`left`
:   O termo da esquerda.

`right`
:   O termo da direita.

Valores booleanos são convertidos em -1 para **`false`** e 0 para **`true`**.
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

**Regras de Multiplicação para Variantes**

| If | Then |
| --- | --- |
| Ambas as expressões são do tipo string, data, caractere, booleano | Multiplicação |
| Uma expressão é um tipo de string e a outra um caractere | Multiplicação |
| Uma expressão é numérica e a outra é uma string | Multiplicação |
| Ambas as expressões são numéricas | Multiplicação |
| Qualquer uma das expressões é NULL | NULL é retornado |
| Ambas as expressões são vazias | String vazia é retornada |

### Erros/Exceções

Lança uma [com\_exception](class.com-exception.md) em caso de falha.

### Veja também

- [variant\_div()](function.variant-div.md) - Retorna o resultado da divisão de duas variantes
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
