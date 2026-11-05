# Retorna o fator mu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-quickprop-mu.php

---

# fann\_get\_quickprop\_mu

(PECL fann >= 1.0.0)

fann\_get\_quickprop\_mu — Retorna o fator mu

### Descrição

function **fann\_get\_quickprop\_mu**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O fator mu é usado para aumentar e reduzir o tamanho do passo durante o treinamento Quickprop. O fator mu deve ser sempre acima de 1,
senão ele reduziria o tamanho do passo quando seria suposto que aumentasse.

O fator mu padrão é 1.75.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O fator mu, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_quickprop\_mu()](function.fann-set-quickprop-mu.md) - Define o fator mu do Quickprop

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
