# Constrói o objeto observador EvChild

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evchild.construct.php

---

# EvChild::\_\_construct

(PECL ev >= 0.2.0)

EvChild::\_\_construct — Constrói o objeto observador EvChild

### Descrição

public
function **EvChild::\_\_construct**(  
    
[int](language.types.integer.md) `$pid`
,  
    
[bool](language.types.boolean.md) `$trace`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
)

Constrói o
objeto observador
[EvChild](class.evchild.md).

Chama a função de retorno quando uma alteração de status para o processo de ID
`pid`
(ou qualquer
*PID*
se
`pid`
for
`0`)
tiver sido recebida (uma alteração de status acontece quando o processo termina ou
é fechado ou, quando
`trace`
for **`true`**, adicionalmente quando ele é parado ou continuado). Em outras palavras,
quando o processo recebe
um sinal **`SIGCHLD`**,
*Ev*
irá buscar o status de saída/espera para todos os filhos alterados/zumbis
e chamar a função de retorno.

É valido instalar om observador filho depois que um
[EvChild](class.evchild.md)
tenha saído mas antes que o laço de evento tenha iniciado sua próxima iteração. Por
exemplo, primeiro chama-se
`fork`,
e então o novo processo filho poderia sair, e só depois um
observador [EvChild](class.evchild.md)
é instalado no pai para O
novo *PID*.

Pode-se acessar os estados de saída e rastreamento e o
`pid`
usando as propriedades
rstatus
e
rpid
do objeto observador.

O número de
*PID* observadores
por
*PID*
é ilimitado. Todos eles serão chamados.

O método
[EvChild::createStopped()](evchild.createstopped.md)
não inicia (ativa) o novo observador criado.

### Parâmetros

`pid`
:   Espera por alterações de status do PID do processo (ou qualquer processo se PID for
    especificado
    como
    `0`).

`trace`
:   Se **`false`**, apenas ativa o observador quando o processo termina.
    Caso contrário (**`true`**), ativa adicionalmente o observador quando o processo é
    parado ou continuado.

`callback`
:   Consulte [funções de
    retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Veja também

- [EvLoop::child()](evloop.child.md) - Cria o objeto EvChild associado ao laço de eventos atual

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
