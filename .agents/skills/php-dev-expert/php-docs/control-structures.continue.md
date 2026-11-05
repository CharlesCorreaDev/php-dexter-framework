# continue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.continue.php

---

## continue

(PHP 4, PHP 5, PHP 7, PHP 8)

`continue` é usado em estruturas de repetição para
pular o restante da iteração atual do laço e continuar a execução
na validação da condição e depois no início da próxima iteração.

> **Nota**:
>
> No PHP, a instrução
> [switch](control-structures.switch.md) é
> considerada uma estrutura de repetição para os propósitos de
> `continue`. `continue` se comporta como
> `break` (quando nenhum argumento é passado), mas emitirá
> um aviso, pois é provável que seja um erro. Se um
> `switch` estiver dentro de um laço,
> `continue 2` continuará na próxima iteração
> do laço externo.

`continue` aceita um argumento numérico opcional
que informa quantos níveis de laços aninhados ele deve pular.
O valor padrão é `1`, pulando assim
para o final do laço atual.

```
<?php
$array = ['zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis'];
foreach ($array as $chave => $valor) {
    if (!($chave % 2)) { // pula membros com chaves pares
        continue;
    }
    echo $valor . "\n";
}
```

Os exemplos acima produzirão:

```
um
três
cinco
```

```
<?php
$i = 0;
while ($i++ < 5) {
    echo "Externo\n";
    while (1) {
        echo "Meio\n";
        while (1) {
            echo "Interno\n";
            continue 3;
        }
        echo "Isso nunca é exibido.\n";
    }
    echo "Nem isso.\n";
}
```

Os exemplos acima produzirão:

```
Externo
Meio
Interno
Externo
Meio
Interno
Externo
Meio
Interno
Externo
Meio
Interno
Externo
Meio
Interno
```

**Lista de modificações de `continue`**

| Versão | Descrição |
| --- | --- |
| 7.3.0 | `continue` em um `switch` que está tentando agir como uma declaração `break` para o `switch` gerará um **`E_WARNING`**. |

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
