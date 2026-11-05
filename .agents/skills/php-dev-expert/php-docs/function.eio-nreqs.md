# Retorna o número de requisições a serem processadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-nreqs.php

---

# eio\_nreqs

(PECL eio >= 0.0.1dev)

eio\_nreqs — Retorna o número de requisições a serem processadas

### Descrição

function **eio\_nreqs**(): [int](language.types.integer.md)

**eio\_nreqs()** poderia ser chamada em um laço customizado chamando
[eio\_poll()](function.eio-poll.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_nreqs()** retorna o número de requisições a serem processadas.

### Examples

**Exemplo #1 Exemplo de **eio\_nreqs()****

```
<?php
function res_cb($data, $result) {
    var_dump($data);
    var_dump($result);
}

eio_nop(EIO_PRI_DEFAULT, "res_cb", "1");
eio_nop(EIO_PRI_DEFAULT, "res_cb", "2");
eio_nop(EIO_PRI_DEFAULT, "res_cb", "3");

while (eio_nreqs()) {
    eio_poll();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "1"
int(0)
string(1) "3"
int(0)
string(1) "2"
int(0)
```

### Veja também

- [eio\_poll()](function.eio-poll.md) - Pode ser chamada sempre que houver solicitações pendentes que precisem ser finalizadas
- [eio\_nready()](function.eio-nready.md) - Retorna o número de requisições ainda não tratadas

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
