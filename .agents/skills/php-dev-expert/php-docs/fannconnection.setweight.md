# Define o peso da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fannconnection.setweight.php

---

# FANNConnection::setWeight

(PECL fann >= 1.0.0)

FANNConnection::setWeight — Define o peso da conexão

### Descrição

public function **FANNConnection::setWeight**([float](language.types.float.md) `$weight`): [void](language.types.void.md)

Define o peso da conexão.

Este método é diferente do [fann\_set\_weight()](function.fann-set-weight.md). Ele não
atualiza o valor do peso na rede. O valor da rede é atualizado somente depois da chamada a
[fann\_set\_weight\_array()](function.fann-set-weight-array.md).

### Parâmetros

`weight`
:   O peso da conexão.

### Valor Retornado

Nenhum valor é retornado.

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
