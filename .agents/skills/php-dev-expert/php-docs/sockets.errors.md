# Erros de Socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sockets.errors.php

---

# Erros de Socket

A extensão Socket foi escrita para disponibilizar uma interface útil e
poderosa para soquetes BSD. Tem-se notado que as funções funcionam igualmente
bem em Win32 e Unix. Quase todas as funções de soquetes
devem falhar sob certas condições e portanto emitem uma mensagem
**`E_WARNING`** descrevendo o erro. De vez em quando, isso
pode não acontecer para desespero do desenvolvedor. Por exemplo, a função
[socket\_read()](function.socket-read.md) pode repentinamente emitir uma mensagem
**`E_WARNING`** porque a conexão foi quebrada inesperadamente.
É comum esconder as mensagens de alerta com o operador
`@` e obter o código de erro dentro da aplicação
com a função [socket\_last\_error()](function.socket-last-error.md). Pode-se
chamar a função [socket\_strerror()](function.socket-strerror.md) com esse código de erro
para retornar uma string descrevendo o erro. Veja sua descrição para mais
informação.

> **Nota**:
>
> As mensagens de **`E_WARNING`** geradas pela extensão Socket
> estão em inglês embora a mensagem de erro recuperada será mostrada
> dependendo da localidade atual (**`LC_MESSAGES`**):
>
> ```
> Warning - socket_bind() unable to bind address [98]: Die Adresse wird bereits verwendet
> ```

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
