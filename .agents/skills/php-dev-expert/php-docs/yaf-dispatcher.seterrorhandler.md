# Define o manipulador de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.seterrorhandler.php

---

# Yaf\_Dispatcher::setErrorHandler

(Yaf >=1.0.0)

Yaf\_Dispatcher::setErrorHandler — Define o manipulador de erros

### Descrição

public function **Yaf\_Dispatcher::setErrorHandler**(call `$callback`, [int](language.types.integer.md) `$error_types`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

Define o manipulador de erros para o Yaf. Quando [application.dispatcher.throwException](yaf.appconfig.md#configuration.yaf.dispatcher.throwexception)
for igual a "off", o Yaf emitirá erros capturáveis quando eles acontecerem.

Assim, este manipulador de erros será chamado quando o erro for emitido.

### Parâmetros

`callback`
:   Uma chamada de retorno.

`error_types`

### Valor Retornado

### Veja também

- [Yaf\_Dispatcher::throwException()](yaf-dispatcher.throwexception.md) - Ativa/desativa o lançamento de exceção
- [Yaf\_Application::getLastErrorNo()](yaf-application.getlasterrorno.md) - Obtém o código do último erro ocorrido
- [Yaf\_Application::getLastErrorMsg()](yaf-application.getlasterrormsg.md) - Obtém a mensagem do último erro ocorrido

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
