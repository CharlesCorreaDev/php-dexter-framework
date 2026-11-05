# Grava a rede neural inteira em um arquivo de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-save.php

---

# fann\_save

(PECL fann >= 1.0.0)

fann\_save — Grava a rede neural inteira em um arquivo de configuração

### Descrição

function **fann\_save**([resource](language.types.resource.md) `$ann`, [string](language.types.string.md) `$configuration_file`): [bool](language.types.boolean.md)

Grava a rede neural inteira em um arquivo de configuração.

O arquivo de configuração contém todas as informação sobre a rede neural e permite
que [fann\_create\_from\_file()](function.fann-create-from-file.md) crie uma cópia exata da rede
e de todos os parâmetros associados a ela.

Estes três parâmetros ([fann\_set\_callback()](function.fann-set-callback.md), [fann\_set\_error\_log()](function.fann-set-error-log.md) e
**fann\_set\_user\_data()**) NÃO são gravados no arquivo porque eles não podem ser portados com segurança
para uma localização diferente. Parâmetros temporários gerados durante o treinamento (ex.: [fann\_get\_MSE()](function.fann-get-mse.md))
também não são gravados.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`configuration_file`
:   O nome do arquivo de configuração.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_create\_from\_file()](function.fann-create-from-file.md) - Constrói uma rede neural de retropropagação a partir de um arquivo de configuração

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
