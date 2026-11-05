# Despacha uma requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.dispatch.php

---

# Yaf\_Dispatcher::dispatch

(Yaf >=1.0.0)

Yaf\_Dispatcher::dispatch — Despacha uma requisição

### Descrição

public function **Yaf\_Dispatcher::dispatch**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

Este método faz o trabalho pesado da classe
[Yaf\_Dispatcher](class.yaf-dispatcher.md). Ele aceita um objeto de requisição.

O processo de despacho tem três eventos distintos:

- Roteamento
- Despacho
- Resposta

O roteamento acontece exatamente uma vez, usando os valores no objeto de requisição
quando **Yaf\_Dispatcher::dispatch()** é chamado. O despacho acontece em um laço de repetição; uma requisição pode
indicar ações múltiplas a serem despachadas ou o controlador ou um plugin
pode redefinir o objeto de requisição para forçar ações adicionais para despachar (consulte
[Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md)). Quando tudo termina, o
[Yaf\_Dispatcher](class.yaf-dispatcher.md) retorna uma resposta.

### Parâmetros

`request`

### Valor Retornado

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
