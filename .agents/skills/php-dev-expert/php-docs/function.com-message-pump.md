# Processa mensagens COM, aguardando por um tempo limite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-message-pump.php

---

# com\_message\_pump

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

com\_message\_pump — Processa mensagens COM, aguardando por um tempo limite

### Descrição

function **com\_message\_pump**([int](language.types.integer.md) `$timeout_milliseconds` = 0): [bool](language.types.boolean.md)

Esta função ficará suspensa por até `timeout_milliseconds`
milissegundos ou até que uma mensagem chegue na fila.

O objetivo desta função é rotear chamadas COM entre seções e
lidar com vários problemas de sincronização. Isso permite que o script aguarde
com eficiência o acionamento de eventos, enquanto ainda manipula outros eventos
ou executa outro código em segundo plano. Deve ser usada em um laçp de repetição, conforme
demonstrado pelo exemplo na função [com\_event\_sink()](function.com-event-sink.md),
até terminar de usar objetos COM vinculados a eventos.

### Parâmetros

`timeout_milliseconds`
:   O tempo limite, em milissegundos.

    Se não for especificafo um valor para `timeout_milliseconds`,
    será assumido 0. Um valor 0 significa que nenhuma espera será
    realizada; se houver mensagens pendentes elas serão despachadas como
    antes; se não houver mensagens pendentes, a função retornará **`false`**
    imediatamente sem ser suspensa.

### Valor Retornado

Se uma mensagem ou mensagens chegarem antes do tempo limite, elas serão
despachadas e a função retornará **`true`**. Se o tempo limite ocorrer e
nenhuma mensagem for processada, o valor de retorno será **`false`**.

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
