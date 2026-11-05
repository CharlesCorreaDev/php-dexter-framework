# Tratamento de Conexões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.connection-handling.php

---

# Tratamento de Conexões

O estado de uma conexão é mantido internamente no PHP. Existem 4
estados possíveis:

- 0 - NORMAL
- 1 - ABORTADO
- 2 - EXPIRADO
- 3 - ABORTADO e EXPIRADO

Quando um script PHP está sendo executado normalmente, o estado NORMAL está ativo.
Se o cliente remoto desconectar, o estado ABORTADO é
ativado. Uma desconexão do cliente remoto é normalmente causada pelo
usuário pressionando o botão de parada. Se o tempo limite imposto pelo PHP (veja
[set\_time\_limit()](function.set-time-limit.md)) é alcançado, o estado EXPIRADO
é ativado.

É possível decidir se a desconexão do cliente cause ou não uma
interrupção no script. As vezes é útil deixar o script em execução
até que seja concluído mesmo se não houver nenhum navegador remoto recebendo
a saída. O comportamento padrão, no entanto, é a interrupção
do script quando o cliente remoto se desconecta. Esse comportamento pode ser
configurado através da diretiva ignore\_user\_abort do php.ini, assim como pela
diretiva correspondente `php_value ignore_user_abort` no
httpd.conf do Apache ou
com a função [ignore\_user\_abort()](function.ignore-user-abort.md). Se o PHP não for instruído
a ignorar o aborto por parte do usuário e ele abortar, o script
será encerrado. A única exceção é se uma função de finalização tiver sido
registrada usando [register\_shutdown\_function()](function.register-shutdown-function.md). Com uma
função de finalização, quando um usuário remoto clica no botão de parada, a
próxima vez que o script tentar gerar alguma saída, o PHP detectará que
a conexão foi cancelada e a função de finalização é chamada.
Essa função de finalização também será chamada no fim do script
mesmo que ele termine normalmente, então para fazer algo diferente caso o cliente
desconecte, a função [connection\_aborted()](function.connection-aborted.md) pode ser usada.
Essa função retorna **`true`** se a conexão foi
abortada.

O script também pode ser finalizado pelo temporizador interno.
O tempo limite padrão é de 30 segundos. Pode ser alterado usando a
diretiva **max\_execution\_time** do php.ini ou a diretiva correspondente
no httpd.conf do Apache `php_value max_execution_time`
assim como com a função
[set\_time\_limit()](function.set-time-limit.md). Quando o temporizador
chega ao limite, o script será abortado e assim como o caso acima
de desconexão pelo cliente, se uma função de finalização foi registrada, ela será
chamada. Dentro da função de finalização, pode ser verificado se a
causa da finalização foi tempo limite excedido chamando-se a
função [connection\_status()](function.connection-status.md). Essa função retorna
2 se a causa foi tempo limite excedido.

Importante notar que ambos os estados ABORTADO e EXPIRADO
podem estar ativos ao mesmo tempo. Isso é possível se o PHP
for instruído a ignorar o aborto causado pelo usuário. O PHP continuará a perceber que
o usuário pode ter quebrado a conexão, mas o script continuará
sendo executado. Se o tempo limite for alcançado, ele será abortado e
sua função de finalização, se existente, será chamada. Nesse ponto,
a função [connection\_status()](function.connection-status.md)
retornará 3.

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
