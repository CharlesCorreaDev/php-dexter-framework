# O construtor de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fannconnection.construct.php

---

# FANNConnection::\_\_construct

(PECL fann >= 1.0.0)

FANNConnection::\_\_construct — O construtor de conexão

### Descrição

public function **FANNConnection::\_\_construct**([int](language.types.integer.md) `$from_neuron`, [int](language.types.integer.md) `$to_neuron`, [float](language.types.float.md) `$weight`)

Cria uma nova conexão e inicializa seus parêmetros. Após a criação da conexão, apenas o peso pode ser modificado.

### Parâmetros

`from_neuron`
:   O número da posição do neurônio inicial.

`to_neuron`
:   número da posição do neurônio final.

`weight`
:   O valor do peso da conexão.

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
