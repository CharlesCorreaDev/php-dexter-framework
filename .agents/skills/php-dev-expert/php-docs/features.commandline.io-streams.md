# Fluxos de entrada/saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.io-streams.php

---

## Fluxos de entrada/saída

O CLI SAPI define algumas constantes para fluxos de E/S com o objetivo de tornar
a programação em linha de comando um pouco mais fácil.

**Constantes específicas da CLI**

| Constante | Descrição |
| --- | --- |
| **`STDIN`** | Um fluxo já aberto para o `stdin`. Isso evita ter que abrí-lo com ``` <?php $stdin = fopen('php://stdin', 'r'); ?> ``` Se você desejar ler uma única linha do `stdin`, você pode usar ``` <?php $line = trim(fgets(STDIN)); // Lê uma linha do STDIN fscanf(STDIN, "%d\n", $number); // Lê um número do STDIN ?> ``` |
| **`STDOUT`** | Um fluxo já aberto para o `stdout`. Isso evitar ter que abrí-lo com ``` <?php $stdout = fopen('php://stdout', 'w'); ?> ``` |
| **`STDERR`** | Um fluxo já aberto com `stderr`. Isso evita ter que abri-lo com ``` <?php $stderr = fopen('php://stderr', 'w'); ?> ``` |

Como dito acima, não é necessário, por exemplo, abrir um fluxo para
`stderr` por si mesmo, basta usar a constante ao invés
do recurso do fluxo:

```
php -r 'fwrite(STDERR, "stderr\n");'
```

Você não precisa fechar explicitamente esses fluxos, já que eles serão
automaticamente fechados pelo PHP quando o script terminar.

> **Nota**:
>
> Essas constantes não estão disponíveis se estiver lendo os scripts PHP de
> `stdin`.

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
