# Chama a função de retorno consumerHandler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.callconsumerhandler.php

---

# OAuthProvider::callconsumerHandler

(No version information available, might only be in Git)

OAuthProvider::callconsumerHandler — Chama a função de retorno consumerHandler

### Descrição

public function **OAuthProvider::callconsumerHandler**(): [void](language.types.void.md)

Chama a função de retorno de gerenciamento de consumidor registrada, que é definida
com [OAuthProvider::consumerHandler()](oauthprovider.consumerhandler.md).

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

- [OAuthProvider::consumerHandler()](oauthprovider.consumerhandler.md) - Define a função de retorno de gerenciamento de consumidor

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
