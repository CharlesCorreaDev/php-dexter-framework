# A classe parallel\Future

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-future.php

---

# A classe parallel\Future

(0.8.0)

## Futures

Um Future representa o valor de retorno ou exceção não detectada de uma tarefa e expõe uma API para cancelamento.

**Exemplo #1 Exemplo mostrando Future como valor de retorno**

```
<?php
$runtime = new \parallel\Runtime;
$future  = $runtime->run(function(){
    return "Mundo";
});
printf("Olá %s\n", $future->value());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Olá Mundo
```

O comportamento de um future também permite que ele seja usado como um simples ponto de sincronização mesmo quando a tarefa não retorna um valor explicitamente.

**Exemplo #2 Exemplo mostrando Future como ponto de sincronização**

```
<?php
$runtime = new \parallel\Runtime;
$future  = $runtime->run(function(){
    echo "no filho ";
    for ($i = 0; $i < 500; $i++) {
        if ($i % 10 == 0) {
            echo ".";
        }
    }
    echo " deixando filho";
});

$future->value();
echo "\npai continua\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
no filho .................................................. deixando filho
pai continua
```

## Resumo da classe

final
class **parallel\Future**
{

/\* Resolution \*/

public function [value](parallel-future.value.md)(): [mixed](language.types.mixed.md)

/\* State \*/

public function [cancelled](parallel-future.cancelled.md)(): [bool](language.types.boolean.md)

public function [done](parallel-future.done.md)(): [bool](language.types.boolean.md)

/\* Cancellation \*/

public function [cancel](parallel-future.cancel.md)(): [bool](language.types.boolean.md)

}

## Índice

- [parallel\Future::cancel](parallel-future.cancel.md) — Cancelamento
- [parallel\Future::cancelled](parallel-future.cancelled.md) — Detecção de estado
- [parallel\Future::done](parallel-future.done.md) — Detecção de estado
- [parallel\Future::value](parallel-future.value.md) — Resolução

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
