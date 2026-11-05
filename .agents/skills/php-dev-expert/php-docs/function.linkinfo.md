# Obtém informação sobre uma ligação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.linkinfo.php

---

# linkinfo

(PHP 4, PHP 5, PHP 7, PHP 8)

linkinfo — Obtém informação sobre uma ligação

### Descrição

function **linkinfo**([string](language.types.string.md) `$path`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém informação sobre uma ligação.

Esta função é usada para verificar se uma ligação (apontada por
`path`) realmente existe (usando o mesmo método da
macro S\_ISLNK definida em stat.h).

### Parâmetros

`path`
:   Caminho para a ligação.

### Valor Retornado

**linkinfo()** retorna o campo `st_dev` da
estrutura stat do Unix C retornado pela chamada de sistema
`lstat`. Retorna um inteiro não negativo em caso de sucesso, -1 caso a ligação não seja encontrada,
ou **`false`** se uma violação de open.base\_dir ocorrer.

### Examples

**Exemplo #1 Exemplo de **linkinfo()****

```
<?php

echo linkinfo('/vmlinuz'); // 835

?>
```

### Veja também

- [symlink()](function.symlink.md) - Cria uma ligação simbólica
- [link()](function.link.md) - Criando uma ligação rígida
- [readlink()](function.readlink.md) - Retornar o alvo de uma ligação simbólica

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
