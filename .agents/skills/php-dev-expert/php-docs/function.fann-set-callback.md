# Define a função de retorno para uso durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-callback.php

---

# fann\_set\_callback

(PECL fann >= 1.0.0)

fann\_set\_callback — Define a função de retorno para uso durante o treinamento

### Descrição

function **fann\_set\_callback**([resource](language.types.resource.md) `$ann`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Define a função de retorno para uso durante o treinamento. Significa que ela é chamada a partir da função
[fann\_train\_on\_data()](function.fann-train-on-data.md) ou [fann\_train\_on\_file()](function.fann-train-on-file.md).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`callback`
:   A função de retorno fornecida usa os seguintes parâmetros:

    - `ann` - O [resource](language.types.resource.md) de rede neural
    - `train` - O [resource](language.types.resource.md) de dados de treinamento
      ou **`null`** se chamada a partir de [fann\_train\_on\_file()](function.fann-train-on-file.md)
    - `max_epochs` - O número máximo de épocas em que o treinamento deve continuar
    - `epochs_between_reports` - O número de épocas entre as chamadas a esta função
    - `desired_error` - O [fann\_get\_MSE()](function.fann-get-mse.md) ou
      [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md) desejado, dependendo da função de parada escolhida por
      [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md)
    - `epochs` - A época atual

    A função de retorno deve retornar **`true`**. Se retornar **`false`**, o treinamento será encerrado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_train\_on\_file()](function.fann-train-on-file.md) - Treina em um conjunto de dados inteiro, que é lido de um arquivo, por um período de tempo

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
