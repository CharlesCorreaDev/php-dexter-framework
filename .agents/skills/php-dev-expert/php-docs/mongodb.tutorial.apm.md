# Monitoramento de Desempenho de Aplicação (APM)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.tutorial.apm.php

---

## Monitoramento de Desempenho de Aplicação (APM)

A extensão contém uma API de assinante de evento, que permite que as aplicações
monitorem comandos e atividades internas pertencentes à
[» Especificação de Descoberta e Monitoramento de Servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md).
Este tutorial demonstrará o monitoramento de comandos usando A
interface [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md).

A interface [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md)
define três métodos: `commandStarted`,
`commandSucceeded` e `commandFailed`.
Cada um desses três métodos aceita um único argumento `event`
de uma classe específica para o respectivo evento. Por exemplo, o
argumento `event` de `commandSucceeded`
é um objeto
[MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md).

Neste tutorial implementaremos um assinante que cria uma lista de todos
os perfis de consulta e o tempo médio gasto para fazê-lo.

## Preparando a Classe do Assinante

Começamos com a estrutura para nosso assinante:

```
<?php

class QueryTimeCollector implements \MongoDB\Driver\Monitoring\CommandSubscriber
{
    public function commandStarted( \MongoDB\Driver\Monitoring\CommandStartedEvent $event ): void
    {
    }

    public function commandSucceeded( \MongoDB\Driver\Monitoring\CommandSucceededEvent $event ): void
    {
    }

    public function commandFailed( \MongoDB\Driver\Monitoring\CommandFailedEvent $event ): void
    {
    }
}

?>
```

## Registrando o Assinante

Depois que um objeto assinante é instanciado, ele precisa ser registrado no
sistema de monitoramento das extensões. Isso é feito chamando
[MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) ou
[MongoDB\Driver\Manager::addSubscriber()](mongodb-driver-manager.addsubscriber.md) para registrar
o assinante globalmente ou com um gerenciador específico, respectivamente.

```
<?php

\MongoDB\Driver\Monitoring\addSubscriber( new QueryTimeCollector() );

?>
```

## Implementando a Lógica

Com o objeto registrado, só falta implementar a lógica
na classe do assinante. Para correlacionar os dois eventos que compõem um
comando executado com sucesso (commandStarted e commandSucceeded), cada
objeto de evento expõe um campo `requestId`.

Para registrar o tempo médio por formato de consulta, começaremos verificando um
comando `find` no evento commandStarted. Adicionaremos então
um item à propriedade `pendingCommands` indexado por seu
`requestId` e com seu valor representando o formato da consulta.

Se recebermos um evento commandSucceeded correspondente com o mesmo
`requestId`, adicionamos a duração do evento (de
`durationMicros`) ao tempo total e incrementamos a
contagem da operação.

Se um evento commandFailed correspondente for encontrado, apenas removemos a
entrada da propriedade `pendingCommands`.

```
<?php

class QueryTimeCollector implements \MongoDB\Driver\Monitoring\CommandSubscriber
{
    private $pendingCommands = [];
    private $queryShapeStats = [];

    /* Cria um formato de consulta a partir do argumento do filtro. No momento, ele leva
     * em consideração apenas os campos de nível superior */
    private function createQueryShape( array $filter )
    {
        return json_encode( array_keys( $filter ) );
    }

    public function commandStarted( \MongoDB\Driver\Monitoring\CommandStartedEvent $event ): void
    {
        if ( 'find' === $event->getCommandName() )
        {
            $queryShape = $this->createQueryShape( (array) $event->getCommand()->filter );
            $this->pendingCommands[$event->getRequestId()] = $queryShape;
        }
    }

    public function commandSucceeded( \MongoDB\Driver\Monitoring\CommandSucceededEvent $event ): void
    {
        $requestId = $event->getRequestId();
        if ( array_key_exists( $requestId, $this->pendingCommands ) )
        {
            $this->queryShapeStats[$this->pendingCommands[$requestId]]['count']++;
            $this->queryShapeStats[$this->pendingCommands[$requestId]]['duration'] += $event->getDurationMicros();
            unset( $this->pendingCommands[$requestId] );
        }
    }

    public function commandFailed( \MongoDB\Driver\Monitoring\CommandFailedEvent $event ): void
    {
        if ( array_key_exists( $event->getRequestId(), $this->pendingCommands ) )
        {
            unset( $this->pendingCommands[$event->getRequestId()] );
        }
    }

    public function __destruct()
    {
        foreach( $this->queryShapeStats as $shape => $stats )
        {
            echo "Formato: ", $shape, " (", $stats['count'], ")\n  ",
                $stats['duration'] / $stats['count'], "µs\n\n";
        }
    }
}

$m = new \MongoDB\Driver\Manager( 'mongodb://localhost:27016' );

/* Adiciona o assinante */
\MongoDB\Driver\Monitoring\addSubscriber( new QueryTimeCollector() );

/* Realiza um número de consultas */
$query = new \MongoDB\Driver\Query( [
    'region_slug' => 'scotland-highlands', 'age' => [ '$gte' => 20 ]
] );
$cursor = $m->executeQuery( 'dramio.whisky', $query );

$query = new \MongoDB\Driver\Query( [
    'region_slug' => 'scotland-lowlands', 'age' => [ '$gte' => 15 ]
] );
$cursor = $m->executeQuery( 'dramio.whisky', $query );

$query = new \MongoDB\Driver\Query( [ 'region_slug' => 'scotland-lowlands' ] );
$cursor = $m->executeQuery( 'dramio.whisky', $query );

?>
```

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
