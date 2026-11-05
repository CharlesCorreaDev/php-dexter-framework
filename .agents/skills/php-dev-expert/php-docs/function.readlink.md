# Retornar o alvo de uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readlink.php

---

# readlink

(PHP 4, PHP 5, PHP 7, PHP 8)

readlink — Retornar o alvo de uma ligação simbólica

### Descrição

function **readlink**([string](language.types.string.md) `$path`): [string](language.types.string.md)|[false](language.types.singleton.md)

**readlink()** faz o mesmo que a função do C.

### Parâmetros

`path`
:   O caminho para a ligação simbólica.

### Valor Retornado

Retorna o conteúdo do caminho da ligação simbólica ou **`false`** em erro.

> **Nota**:
>
> Esta função falha se `path` não é um symlink,
> exceto no Windows, onde o caminho normalizado é retornado.

### Examples

**Exemplo #1 Exemplo de **readlink()****

```
<?php

// Exibe algo como /boot/vmlinux-2.4.20-xfs
echo readlink('/vmlinuz');

?>
```

### Veja também

- [is\_link()](function.is-link.md) - Informa se o arquivo é uma ligação simbólica
- [symlink()](function.symlink.md) - Cria uma ligação simbólica
- [linkinfo()](function.linkinfo.md) - Obtém informação sobre uma ligação

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
