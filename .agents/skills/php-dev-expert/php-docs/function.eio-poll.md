# Pode ser chamada sempre que houver solicitações pendentes que precisem ser finalizadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-poll.php

---

# eio\_poll

(PECL eio >= 0.0.1dev)

eio\_poll — Pode ser chamada sempre que houver solicitações pendentes que precisem ser finalizadas

### Descrição

function **eio\_poll**(): [int](language.types.integer.md)

**eio\_poll()** pode ser usada para implementar um laço de eventos especial.
Para isso, [eio\_nreqs()](function.eio-nreqs.md) poderia ser usada para testar se há
solicitações não processadas.

> **Nota**:
>
> Aplicável somente ao implementar o laço de eventos do espaço do usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Se qualquer invocação de solicitação retornar um valor diferente de zero, retornará esse valor.
Caso contrário, retorna `0`.

### Examples

**Exemplo #1 Exemplo de **eio\_poll()****

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
    // Algum IPC específico
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

- [eio\_nreqs()](function.eio-nreqs.md) - Retorna o número de requisições a serem processadas

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
