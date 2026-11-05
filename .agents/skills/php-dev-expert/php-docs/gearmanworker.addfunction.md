# Registra e adiciona função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.addfunction.php

---

# GearmanWorker::addFunction

(PECL gearman >= 0.5.0)

GearmanWorker::addFunction — Registra e adiciona função de retorno

### Descrição

public function **GearmanWorker::addFunction**(  
    [string](language.types.string.md) `$function_name`,  
    [callable](language.types.callable.md) `$function`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [int](language.types.integer.md) `$timeout` = 0  
): [bool](language.types.boolean.md)

Registra um nome de função com o servidor de trabalho e especifica um retorno de chamada correspondente a essa
função. Opcionalmente, especifica dados de contexto de aplicação extras a serem usados ​​quando o retorno de chamada for
chamado e um tempo limite.

### Parâmetros

`function_name`
:   O nome de uma função para registrar no servidor de trabalho

`function`
:   Uma função que é chamada quando um trabalho para o nome da função registrada é enviado

`context`
:   Uma referência a dados de contexto de aplicação arbitrários que podem ser modificados pela função do trabalhador

`timeout`
:   Um intervalo de tempo em segundos

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Trabalhador simples fazendo uso de dados extras de contexto da aplicação**

```
<?php

# obtém um trabalhador Gearman
$worker= new GearmanWorker();

# adiciona o servidor padrão (localhost)
$worker->addServer();

# define uma variável para armazenar dados da aplicação
$count= 0;

# adiciona a função "reverse"
$worker->addFunction("reverse", "reverse_cb", $count);

# inicia o trabalhador
while ($worker->work());

function reverse_cb($job, &$count)
{
  $count++;
  return "$count: " . strrev($job->workload());
}

?>
```

Executar um cliente que envia dois trabalhos para a função reversa teria
saída semelhante à seguinte:

```
1: olleh
2: dlrow
```

### Veja também

- [GearmanClient::do()](gearmanclient.do.md) - Executa uma única tarefa e retorna um resultado (descontinuado)

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
