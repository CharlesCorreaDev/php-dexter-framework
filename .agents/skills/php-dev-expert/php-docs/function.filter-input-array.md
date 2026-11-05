# Obtem variáveis externas e opcionalmente as filtra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-input-array.php

---

# filter\_input\_array

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_input\_array — Obtem variáveis externas e opcionalmente as filtra

### Descrição

function **filter\_input\_array**([int](language.types.integer.md) `$type`, [array](language.types.array.md)|[int](language.types.integer.md) `$options` = **`FILTER_DEFAULT`**, [bool](language.types.boolean.md) `$add_empty` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Esta função é útil para receber muitos valores sem repetidamente
chamar a função [filter\_input()](function.filter-input.md).

### Parâmetros

`type`
:   Uma das constantes **`INPUT_*`**.

    **Aviso**

    O conteúdo da superglobal que está sendo filtrada é o conteúdo "bruto"
    original fornecido pela SAPI,
    antes de qualquer modificação de usuário na superglobal.
    Para filtrar uma superglobal modificada, use
    a função [filter\_var\_array()](function.filter-var-array.md).

`options`
:   Pode ser um [array](language.types.array.md) associativo de opções,
    ou o filtro a aplicar a cada entrada,
    que pode ser um filtro de validação usando uma das constantes
    **`FILTER_VALIDATE_*`**,
    ou um filtro de sanitização, usando uma das
    constantes
    **`FILTER_SANITIZE_*`**.

    O array de opções é um array associativo onde a chave corresponde
    a uma chave no `array` de dados e o valor
    associado é o filtro a ser aplicado a esta entrada
    ou um array associativo descrevendo como e qual filtro deve ser
    aplicado a esta entrada.

    O array associativo que descreve como um filtro deve ser aplicado
    deve conter a chave `'filter'` cujo valor associado
    é o filtro a ser aplicado, que pode ser uma das constantes
    **`FILTER_VALIDATE_*`**,
    **`FILTER_SANITIZE_*`**,
    **`FILTER_UNSAFE_RAW`** ou
    **`FILTER_CALLBACK`**.
    Opcionalmente, ele pode conter a chave `'flags'`
    que especifica os sinalizadores que se aplicam ao filtro,
    e a chave `'options'` que especifica quaisquer opções
    que se aplicam ao filtro.

`add_empty`
:   Adiciona chaves ausentes como **`null`** ao valor de retorno.

### Valor Retornado

Em caso de sucesso, um [array](language.types.array.md) contendo os valores das variáveis solicitadas.

Em caso de falha, retorna **`false`**.
Exceto se a falha é aquela na qual o array de entrada designado por
`type` não é populado onde **`null`** é retornado
se a opção **`FILTER_NULL_ON_FAILURE`** for utilizada.

Entradas faltantes do array de entrada serão populadas no
[array](language.types.array.md) retornado se `add_empty` for **`true`**.
Neste caso, entradas faltantes serão definidas para **`null`**,
a menos que a opção **`FILTER_NULL_ON_FAILURE`** seja usada,
que neste caso serão **`false`**.

Uma entrada do [array](language.types.array.md) retornado será **`false`** se o filtro falhar,
a menos que a opção **`FILTER_NULL_ON_FAILURE`** seja usada,
que neste caso será **`null`**.

### Notas

> **Nota**:
>
> Não existe a chave `REQUEST_TIME` no
> array **`INPUT_SERVER`** porque ela será inserida na variável
> [$\_SERVER](reserved.variables.server.md) mais tarde.

### Veja também

- [filter\_input()](function.filter-input.md) - Obtém uma variável externa específica por nome e filtra-a opcionalmente
- [filter\_var()](function.filter-var.md) - Filtra uma variável com um filtro especificado
- [filter\_var\_array()](function.filter-var-array.md) - Obtêm e opcionalmente filtra múltiplas variáveis
- Filtros de validação
  **`FILTER_VALIDATE_*`**
- Filtros de sanitização
  **`FILTER_SANITIZE_*`**

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
