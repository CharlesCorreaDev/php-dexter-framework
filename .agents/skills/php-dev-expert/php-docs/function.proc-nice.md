# Muda a prioridade do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.proc-nice.php

---

# proc\_nice

(PHP 5, PHP 7, PHP 8)

proc\_nice — Muda a prioridade do processo atual

### Descrição

function **proc\_nice**([int](language.types.integer.md) `$priority`): [bool](language.types.boolean.md)

**proc\_nice()** muda a prioridade do processo atual
para o valor especificado em `priority`. Um
`priority` positivo irá diminuir a prioridade do
processo atual, enquanto que um `priority` negativo
irá aumentar a prioridade.

**proc\_nice()** não é relacionada com
[proc\_open()](function.proc-open.md) e suas funções associadas de qualquer maneira.

### Parâmetros

`priority`
:   O novo valor de prioridade, pode ser diferente dependendo da plataforma.

    No Unix, um valor baixo, como `-20` significa alta prioridade
    enquanto que valores positivos têm uma prioridade menor.

    Para Windows, o argumento `priority` tem o
    seguinte significado:

    | Classe de prioridade | Valores possíveis |
    | --- | --- |
    | Alta prioridade | `priority` `< -9` |
    | Prioridade acima do normal | `priority` `< -4` |
    | Prioridade normal | `priority` `< 5` & `priority` `> -5` |
    | Prioridade abaixo do normal | `priority` `> 5` |
    | Prioridade de inativo | `priority` `> 9` |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se ocorrer um erro, como o usuário não ter permissões suficientes para mudar a prioridade,
um erro de nível **`E_WARNING`** também é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Esta função agora está disponível no Windows. |

### Examples

**Exemplo #1 Usando **proc\_nice()** para definir a prioridade do processo para alta**

```
<?php
// A mais alta prioridade
proc_nice(-20);
?>
```

### Notas

> **Nota**:
> **Disponibilidade**  
>
> **proc\_nice()** irá existir apenas se o sistema
> tiver capacidades para 'nice', que é 'nice' conforme: SVr4, SVID EXT, AT&T, X/OPEN e BSD
> 4.3.

> **Nota**:
> **Somente para Windows**  
>
> **proc\_nice()** irá alterar a prioridade do *processo*
> atual, mesmo que o PHP tenha sido compilado com 'thread safety'.

### Veja também

- [pcntl\_setpriority()](function.pcntl-setpriority.md) - Altera a prioridade de qualquer processo

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
