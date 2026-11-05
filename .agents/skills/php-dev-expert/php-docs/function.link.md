# Criando uma ligação rígida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.link.php

---

# link

(PHP 4, PHP 5, PHP 7, PHP 8)

link — Criando uma ligação rígida

### Descrição

function **link**([string](language.types.string.md) `$target`, [string](language.types.string.md) `$link`): [bool](language.types.boolean.md)

**link()** cria uma ligação rígida.

### Parâmetros

`target`
:   Alvo da ligação.

`link`
:   O nome da ligação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

A função falha e emite um **`E_WARNING`** se `link`
já existir, ou se `target` não existir.

### Examples

**Exemplo #1 Criando uma ligação rígida**

```
<?php
$target = 'source.ext'; // Esse é o arquivo existente
$link = 'newfile.ext';  // Esse é o nome da ligação

link($target, $link);
?>
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

> **Nota**:
>
> No Windows, essa função requer o PHP rodando em nível elevado
> de privilégios ou com o UAC desabilitado.

### Veja também

- [symlink()](function.symlink.md) - Cria uma ligação simbólica
- [readlink()](function.readlink.md) - Retornar o alvo de uma ligação simbólica
- [linkinfo()](function.linkinfo.md) - Obtém informação sobre uma ligação
- [unlink()](function.unlink.md) - Apaga um arquivo

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
