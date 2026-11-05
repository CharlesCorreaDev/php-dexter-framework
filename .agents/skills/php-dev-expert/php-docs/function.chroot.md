# Muda o diretório raiz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chroot.php

---

# chroot

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

chroot — Muda o diretório raiz

### Descrição

function **chroot**([string](language.types.string.md) `$directory`): [bool](language.types.boolean.md)

Muda o diretório raiz do processo atual para
`directory`, e muda o diretório
de trabalho atual para "/".

Esta função está disponível somente para sistemas GNU e BSD, e
apenas quando CLI, CGI ou Embed SAPI estiverem sendo usados. Além disso,
esta função requer privilégio de administrador.

Chamar esta função não muda os valores das constantes mágicas `__DIR__`
e `__FILE__`.

### Parâmetros

`directory`
:   O caminho para o qual apontar o novo diretório raiz.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **chroot()****

```
<?php
chroot("/caminho/para/seu/chroot/");
echo getcwd();
?>
```

O exemplo acima produzirá:

```
/
```

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

> **Nota**:
>
> Esta função não está
> disponível em interpretadores PHP compilados com o recurso ZTS (Zend Thread Safety) habilitado. Para verificar se sua cópia do PHP foi compilada com o ZTS habilitado, use o comando **php -i** ou teste a constante **`PHP_ZTS`**.

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
