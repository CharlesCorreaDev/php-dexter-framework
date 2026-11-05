# Executa uma tarefa em segundo plano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.dobackground.php

---

# GearmanClient::doBackground

(PECL gearman >= 0.5.0)

GearmanClient::doBackground — Executa uma tarefa em segundo plano

### Descrição

public function **GearmanClient::doBackground**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

Executa uma tarefa em segundo plano, retornando um identificador de tarefa que pode ser usado
para obter o status da tarefa em execução.

### Parâmetros

`function`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`unique`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

O identificador da tarefa enviada.

### Examples

**Exemplo #1 Envia e monitora uma tarefa em segundo plano**

O trabalhador neste exemplo tem um atraso artificial introduzido para imitar
uma tarefa de longa execução. O script do cliente verifica periodicamente o status
da tarefa em execução.

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
   if (!$stat[0]) // a tarefa é conhecida, então não é executada
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

- [GearmanClient::doNormal()](gearmanclient.donormal.md) - Executa uma única tarefa e retorna um resultado
- [GearmanClient::doHigh()](gearmanclient.dohigh.md) - Executa uma única tarefa de alta prioridade
- [GearmanClient::doLow()](gearmanclient.dolow.md) - Executa uma única tarefa de baixa prioridade
- [GearmanClient::doHighBackground()](gearmanclient.dohighbackground.md) - Executa uma tarefa de alta prioridade em segundo plano
- [GearmanClient::doLowBackground()](gearmanclient.dolowbackground.md) - Executa uma tarefa de baixa prioridade em segundo plano

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
