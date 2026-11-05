# Chama a função de retorno tokenHandler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.calltokenhandler.php

---

# OAuthProvider::calltokenHandler

(PECL OAuth >= 1.0.0)

OAuthProvider::calltokenHandler — Chama a função de retorno tokenHandler

### Descrição

public function **OAuthProvider::calltokenHandler**(): [void](language.types.void.md)

Chama a função de retorno de gerenciamento de token registrada, que é definida
com [OAuthProvider::tokenHandler()](oauthprovider.tokenhandler.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Emite um erro de nível **`E_ERROR`**
se a função callback não puder ser chamada ou não for especificada.

### Veja também

- [OAuthProvider::tokenHandler()](oauthprovider.tokenhandler.md) - Define a função de retorno de gerenciamento de token

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
