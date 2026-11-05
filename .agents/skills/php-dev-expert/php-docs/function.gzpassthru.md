# Escreve na saída todos os dados restantes em um ponteiro de arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzpassthru.php

---

# gzpassthru

(PHP 4, PHP 5, PHP 7, PHP 8)

gzpassthru — 
Escreve na saída todos os dados restantes em um ponteiro de arquivo gz

### Descrição

function **gzpassthru**([resource](language.types.resource.md) `$stream`): [int](language.types.integer.md)

Lê até o final do arquivo (EOF) no ponteiro de arquivo gz dado a partir da posição atual e
escreve os resultados (não comprimidos) na saída padrão.

> **Nota**:
>
> Você pode precisar chamar [gzrewind()](function.gzrewind.md) para redefinir o ponteiro de arquivo
> para o início do arquivo se você já tiver escrito dados
> nele.

**Dica**

Se você apenas deseja descarregar o conteúdo de um arquivo no buffer de saída,
sem modificar primeiro ou procurar uma posição específica, pode
usar a função [readgzfile()](function.readgzfile.md), que economiza
a chamada [gzopen()](function.gzopen.md).

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Ele deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

### Valor Retornado

O número de caracteres não comprimidos lidos de `gz`
e passados para a entrada.

### Examples

**Exemplo #1 Exemplo de **gzpassthru()****

```
<?php
$fp = gzopen('arquivo.gz', 'r');
gzpassthru($fp);
gzclose($fp);
?>
```

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
