# Adiciona uma tarefa para obter status

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addtaskstatus.php

---

# GearmanClient::addTaskStatus

(PECL gearman >= 0.5.0)

GearmanClient::addTaskStatus — Adiciona uma tarefa para obter status

### Descrição

public function **GearmanClient::addTaskStatus**([string](language.types.string.md) `$job_handle`, [mixed](language.types.mixed.md) `$context` = **`null`**): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Usado para solicitar informações de status do servidor Gearman, que chamará a função de retorno de status
especificada (definida usando [GearmanClient::setStatusCallback()](gearmanclient.setstatuscallback.md)).

### Parâmetros

`job_handle`
:   O identificador de tarefa para a qual o status será obtido.

`context`
:   Dados a serem passados ​​para a função de retorno de status, geralmente uma referência a um array ou objeto.

### Valor Retornado

Um objeto [GearmanTask](class.gearmantask.md) ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Monitora a conclusão de várias tarefas em segundo plano**

Um atraso artificial é introduzido no trabalhador neste exemplo para simular
um processo de longa execução. Há apenas um trabalhador em execução para este exemplo.

```
<?php

/* Cria o objeto */
$gmclient= new GearmanClient();

/* Adiciona o servidor padrão */
$gmclient->addServer();

/* Inicia alguns trabalhos em segundo plano e salva os identificadores */
$handles = array();
$handles[0] = $gmclient->doBackground("reverse", "Hello World!");
$handles[1] = $gmclient->doBackground("reverse", "!dlroW olleH");

$gmclient->setStatusCallback("reverse_status");

/* Pesquisa o servidor para ver quando esses trabalhos em segundo plano terminam; */
/* um método melhor seria usar funções de retorno de eventos */
do
{
   /* Usa a variável de contexto para rastrear quantas tarefas foram concluídas */
   $done = 0;
   $gmclient->addTaskStatus($handles[0], $done);
   $gmclient->addTaskStatus($handles[1], $done);
   $gmclient->runTasks();
   echo "Realizadas: $done\n";
   sleep(1);
}
while ($done != 2);

function reverse_status($task, $done)
{
   if (!$task->isKnown())
      $done++;
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 0
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 1
Realizadas: 2
```

### Veja também

- [GearmanClient::setStatusCallback()](gearmanclient.setstatuscallback.md) - Define uma função de retorno para coletar o status da tarefa

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
