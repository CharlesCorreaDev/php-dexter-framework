# Retorna a versão das bibliotecas do cliente SVN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-client-version.php

---

# svn\_client\_version

(PECL svn >= 0.1.0)

svn\_client\_version — Retorna a versão das bibliotecas do cliente SVN

### Descrição

function **svn\_client\_version**(): [string](language.types.string.md)

Retorna a versão das bibliotecas do cliente SVN.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

String com o número da versão, geralmente no formato x.y.z.

### Examples

**Exemplo #1 Exemplo básico**

```
<?php
echo svn_client_version();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1.3.1
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

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
