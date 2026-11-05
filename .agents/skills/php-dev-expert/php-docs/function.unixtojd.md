# Converte um timestamp Unix para um dia Juliano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unixtojd.php

---

# unixtojd

(PHP 4, PHP 5, PHP 7, PHP 8)

unixtojd — Converte um timestamp Unix para um dia Juliano

### Descrição

function **unixtojd**([?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o dia Juliano para um `timestamp` Unix
(segundos desde 01/01/1970), ou para o dia atual se nenhum
`timestamp` for informado. De qualquer forma, o horário considerado
é o local (não o UTC).

### Parâmetros

`timestamp`
:   Um timestamp Unix a ser convertido.

### Valor Retornado

O dia Juliano como um inteiro, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Veja também

- [jdtounix()](function.jdtounix.md) - Converte Dia Juliano para timestamp Unix

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
