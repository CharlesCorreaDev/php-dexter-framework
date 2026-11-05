# A classe FANNConnection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.fannconnection.php

---

# A classe FANNConnection

(No version information available, might only be in Git)

## Introdução

**FANNConnection** é usada para a conexão da rede neural.
Os objetos desta classe são usados nas funções [fann\_get\_connection\_array()](function.fann-get-connection-array.md) e [fann\_set\_weight\_array()](function.fann-set-weight-array.md).

## Resumo da classe

class **FANNConnection**
{

/\* Propriedades \*/

public
[$from\_neuron](class.fannconnection.md#fannconnection.props.from-neuron);

public
[$to\_neuron](class.fannconnection.md#fannconnection.props.to-neuron);

public
[$weight](class.fannconnection.md#fannconnection.props.weight);

/\* Métodos \*/

public function [\_\_construct](fannconnection.construct.md)([int](language.types.integer.md) `$from_neuron`, [int](language.types.integer.md) `$to_neuron`, [float](language.types.float.md) `$weight`)

public function [getFromNeuron](fannconnection.getfromneuron.md)(): [int](language.types.integer.md)

public function [getToNeuron](fannconnection.gettoneuron.md)(): [int](language.types.integer.md)

public function [getWeight](fannconnection.getweight.md)(): [void](language.types.void.md)

public function [setWeight](fannconnection.setweight.md)([float](language.types.float.md) `$weight`): [void](language.types.void.md)

}

## Propriedades

from\_neuron
:   O neurônio onde a conexão começa.

to\_neuron
:   O neurônio onde a conexão termina.

weight
:   O peso da conexão.

## Índice

- [FANNConnection::\_\_construct](fannconnection.construct.md) — O construtor de conexão
- [FANNConnection::getFromNeuron](fannconnection.getfromneuron.md) — Retorna a posição do neurônio inicial
- [FANNConnection::getToNeuron](fannconnection.gettoneuron.md) — Retorna a posição do neurônio final
- [FANNConnection::getWeight](fannconnection.getweight.md) — Retorna o peso da conexão
- [FANNConnection::setWeight](fannconnection.setweight.md) — Define o peso da conexão

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
