# Obtém o diretório atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getcwd.php

---

# getcwd

(PHP 4, PHP 5, PHP 7, PHP 8)

getcwd — Obtém o diretório atual

### Descrição

function **getcwd**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o diretório atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o diretório atual em caso de sucesso ou **`false`** em caso de
falha.

Em algunmas variantes Unix, **getcwd()** irá retornar
**`false`** se qualquer um dos diretórios-pai não tiver o
modo leitura ou pesquisa definidos, mesmo se diretório atual
tiver. Consulte [chmod()](function.chmod.md) para mais informação sobre
modos e permissões.

### Examples

**Exemplo #1 Exemplo de **getcwd()****

```
<?php

// diretório atual
echo getcwd() . "\n";

chdir('cvs');

// diretório atual
echo getcwd() . "\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
/home/didou
/home/didou/cvs
```

### Notas

**Cuidado**

Se o interpretador PHP foi compilado com ZTS (Zend Thread Safety) habilitado,
o diretório de trabalho atual retornado por **getcwd()**
pode ser diferente do retornado pelas interfaces do sistema operacional.
Bibliotecas externas (chamadas usando [FFI](book.ffi.md))
que dependem do diretório de trabalho atual serão afetadas.

### Veja também

- [chdir()](function.chdir.md) - Muda o diretório
- [chmod()](function.chmod.md) - Modifica as permissões do arquivo

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
