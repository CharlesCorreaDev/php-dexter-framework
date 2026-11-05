# Obtém o status de uma tarefa em segundo plano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.jobstatus.php

---

# GearmanClient::jobStatus

# gearman\_job\_status

(PECL gearman >= 0.5.0)

GearmanClient::jobStatus -- gearman\_job\_status — Obtém o status de uma tarefa em segundo plano

### Descrição

Estilo orientado a objetos (method):

public function **GearmanClient::jobStatus**([string](language.types.string.md) `$job_handle`): [array](language.types.array.md)

Obtém o status de uma tarefa em segundo plano dado um identificador de tarefa. As informações de status irão
especificar se a tarefa é conhecida, se a tarefa está em execução no momento e
a porcentagem de conclusão.

### Parâmetros

`job_handle`
:   O manipulador de trabalho atribuído pelo servidor Gearman

### Valor Retornado

Um array contendo informações de status para a tarefa correspondente ao identificador de tarefa
fornecido. O primeiro elemento do array é um booleano indicando se a tarefa for
mesmo conhecida, o segundo é um booleano indicando se a tarefa ainda está em execução,
e o terceiro e quarto elementos correspondem ao numerador e denominador
da porcentagem de conclusão fracionária, respectivamente.

### Examples

**Exemplo #1 Monitorando o status de uma tarefa em segundo plano de longa execução**

```
<?php

/* Cria o objeto */
$gmclient= new GearmanClient();

/* Adiciona o servidor padrão */
$gmclient->addServer();

/* Executa o cliente reverso */
$job_handle = $gmclient->doBackground("reverse", "this is a test");

if ($gmclient->returnCode() != GEARMAN_SUCCESS)
{
  echo "Código de retorno incorreto\n";
  exit;
}

$done = false;
do
{
   sleep(3);
   $stat = $gmclient->jobStatus($job_handle);
   if (!$stat[0]) // a tarefa é conhecida, então não é realizada
      $done = true;
   echo "Executando: " . ($stat[1] ? "true" : "false") . ", numerador: " . $stat[2] . ", denominador: " . $stat[3] . "\n";
}
while(!$done);

echo "Pronto!\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Executando: true, numerador: 3, denominador: 14
Executando: true, numerador: 6, denominador: 14
Executando: true, numerador: 9, denominador: 14
Executando: true, numerador: 12, denominador: 14
Executando: false, numerador: 0, denominador: 0
Pronto!
```

### Veja também

- [GearmanClient::doStatus()](gearmanclient.dostatus.md) - Obtém o status da tarefa em execução

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
