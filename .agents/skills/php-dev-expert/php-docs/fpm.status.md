# Página de status

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fpm.status.php

---

## Página de status

Esta página fornece informações sobre a configuração e o conteúdo da página de status do FPM. Veja também
[fpm\_get\_status()](function.fpm-get-status.md).

### Configuração

A página de status do FPM pode ser habilitada definindo o parâmetro de configuração
[pm.status\_path](install.fpm.configuration.md#pm.status-path) na configuração do pool
FPM.

**Cuidado**

Por segurança, a página de status do FPM deve ser restrita apenas a solicitações internas ou IPs
de clientes conhecidos, pois a página revela URLs de solicitação e informações sobre os recursos disponíveis.

Dependendo da configuração do servidor web, pode ser necessário configurá-lo para
permitir solicitações diretamente para este caminho, ignorando quaisquer scripts PHP. Um exemplo de configuração
para Apache com FPM escutando em UDS e `pm.status_path` definido como
`/fpm-status` seria assim:

```
<LocationMatch "/fpm-status">
 Require local
 ProxyPass "unix:/var/run/php-fpm.sock|fcgi://localhost/"
</LocationMatch>
```

Após recarregar ou reiniciar o FPM e o servidor web, a página de status estará acessível a partir
do navegador (desde que a solicitação venha de um endereço IP permitido se a restrição de IP tiver sido
configurada).

### Parâmetros de consulta

O formato da saída da página de status pode ser alterado especificando um dos seguintes parâmetros
de consulta:

- `html`
- `json`
- `openmetrics`
- `xml`

Informações adicionais também podem ser retornadas usando o parâmetro de consulta `full`.

Exemplos de URLs de páginas de status:

- `https://localhost/fpm-status`
  - Breve saída no formato de texto padrão
- `https://localhost/fpm-status?full`
  - Saída completa no formato de texto padrão
- `https://localhost/fpm-status?json`
  - Breve saída em formato JSON
- `https://localhost/fpm-status?html&full`
  - Saída completa em formato HTML

### Informações exibidas

Os valores de data/hora usam o formato de timestamp Unix na saída JSON e XML; caso contrário, eles usam
o formato que resulta no seguinte exemplo de data:
`"03/Jun/2021:07:21:46 +0100"`.

**Informações básicas - Sempre exibidas na página de status**

| Parâmetro | Descrição |
| --- | --- |
| pool | O nome do pool de processos FPM. |
| process manager | O tipo de gerenciador de processos - estático, dinâmico ou sob demanda. |
| start time | A data/hora em que o pool de processos foi iniciado pela última vez. |
| start since | O tempo em segundos desde que o pool de processos foi iniciado pela última vez. |
| accepted conn | O número total de conexões aceitas. |
| listen queue | O número de solicitações (backlog) aguardando atualmente por um processo livre. |
| max listen queue | O número máximo de solicitações vistas na fila de escuta a qualquer momento. |
| listen queue len | O tamanho máximo permitido da fila de escuta. |
| idle processes | O número de processos que estão atualmente ociosos (aguardando solicitações). |
| active processes | O número de processos que estão processando solicitações no momento. |
| total processes | O número total atual de processos. |
| max active processes | O número máximo de processos ativos simultaneamente. |
| max children reached | O número máximo de processos já foi atingido? Nesse caso, o valor exibido é maior ou igual a `1` caso contrário, o valor é `0`. |
| slow requests | O número total de solicitações que atingiram o `request_slowlog_timeout` configurado. |
| memory peak | O pico de uso de memória desde a inicialização do FPM. |

**Informações por processo - exibidas apenas no modo de saída `full`**

| Parâmetro | Descrição |
| --- | --- |
| pid | O PID de sistema do processo. |
| state | O estado do processo - Inativo, Em execução, ... |
| start time | A data/hora em que o processo foi iniciado. |
| start since | O número de segundos desde que o processo foi iniciado. |
| requests | O número total de solicitações atendidas. |
| request duration | O tempo total em microssegundos gasto atendendo à última solicitação. |
| request method | O método HTTP da última solicitação atendida. |
| request uri | O URI da última solicitação atendida (após o processamento do servidor web, pode sempre ser `/index.php` se for usado um modelo de redirecionamento central). |
| content length | O comprimento do corpo da solicitação, em bytes, da última solicitação. |
| user | O usuário HTTP (`PHP_AUTH_USER`) da última solicitação. |
| script | O caminho completo do script executado pela última solicitação. Será `'-'` se não for aplicável (por exemplo, solicitações de página de status). |
| last request cpu | A %cpu da última solicitação. Será 0 se o processo não estiver ocioso porque o cálculo é feito quando o processamento da solicitação é concluído. O valor pode exceder 100%, porque a métrica dirá qual porcentagem do tempo total da CPU foi usada na última solicitação - leva em consideração os processos em todos os núcleos, enquanto 100% é para apenas um núcleo. |
| last request memory | A quantidade máxima de memória consumida pela última solicitação. Será 0 se o processo não estiver ocioso porque o cálculo é feito quando o processamento da solicitação é concluído. |

> **Nota**:
>
> Todos os valores são específicos do pool e são redefinidos quando o FPM é reiniciado.

> **Nota**:
>
> A saída do formato OpenMetrics usa diferentes tipos de parâmetros para melhor se adequar ao formato OpenMetrics.
> Os parâmetros e as descrições de seus valores estão incluídos na saída do formato OpenMetrics.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O formato openmetrics foi adicionado. |

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
