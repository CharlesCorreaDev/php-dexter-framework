# Obtém os usos atuais de recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getrusage.php

---

# getrusage

(PHP 4, PHP 5, PHP 7, PHP 8)

getrusage — Obtém os usos atuais de recursos

### Descrição

function **getrusage**([int](language.types.integer.md) `$mode` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta é uma interface para **getrusage(2)**. Ele obtém dados retornados
a partir da chamada de sistema.

### Parâmetros

`mode`
:   Se `mode` for 1, getrusage será chamado com
    **`RUSAGE_CHILDREN`**.

### Valor Retornado

Retorna um array associativo contendo os dados retornados da chamada de
sistema. Todas as entradas são acessíveis usando seus nomes de campo documentados.
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **getrusage()****

```
<?php
$dat = getrusage();
echo $dat["ru_oublock"];       // número de operações de saída em bloco
echo $dat["ru_inblock"];       // número de operações de entrada em bloco
echo $dat["ru_msgsnd"];        // número de mensagens IPC enviadas
echo $dat["ru_msgrcv"];        // número de mensagens IPC recebidas
echo $dat["ru_maxrss"];        // tamanho máximo de conjunto residente
echo $dat["ru_ixrss"];         // tamanho integral da memória compartilhada
echo $dat["ru_idrss"];         // tamanho integral de dados não compartilhados
echo $dat["ru_minflt"];        // número de recuperações de página (falhas de página soft)
echo $dat["ru_majflt"];        // número de falhas de página (falhas de página graves)
echo $dat["ru_nsignals"];      // número de sinais recebidos
echo $dat["ru_nvcsw"];         // número de mudanças voluntárias de contexto
echo $dat["ru_nivcsw"];        // número de mudanças de contexto involuntárias
echo $dat["ru_nswap"];         // número de trocas de páginas
echo $dat["ru_utime.tv_usec"]; // tempo usado pelo usuário (microssegundos)
echo $dat["ru_utime.tv_sec"];  // tempo usado pelo usuário (segundos)
echo $dat["ru_stime.tv_usec"]; // tempo do sistema usado (microssegundos)
echo $dat["ru_stime.tv_sec"];  // tempo do sistema usado (segundos)
?>
```

### Notas

> **Nota**:
>
> No Windows, **getrusage()** irá retornar somente os seguintes
> membros:
>
> - `"ru_stime.tv_sec"`
> - `"ru_stime.tv_usec"`
> - `"ru_utime.tv_sec"`
> - `"ru_utime.tv_usec"`
> - `"ru_majflt"` (somente se `mode` for
>   **`RUSAGE_SELF`**)
> - `"ru_maxrss"` (somente se `mode` for
>   **`RUSAGE_SELF`**)
>
> Se **getrusage()** for chamada com `mode`
> definido como `1` (**`RUSAGE_CHILDREN`**), então
> o uso de recursos para threads será coletado (ou seja, que internamente a função
> é chamada com **`RUSAGE_THREAD`**).

> **Nota**:
>
> No BeOS 2000, apenas os seguintes membros são retornados:
>
> - `"ru_stime.tv_sec"`
> - `"ru_stime.tv_usec"`
> - `"ru_utime.tv_sec"`
> - `"ru_utime.tv_usec"`

### Veja também

- Página do manual do sistema operacional sobre o comando **getrusage(2)**

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
