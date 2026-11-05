# Obtém o status da tarefa em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.dostatus.php

---

# GearmanClient::doStatus

(PECL gearman >= 0.5.0)

GearmanClient::doStatus — Obtém o status da tarefa em execução

### Descrição

public function **GearmanClient::doStatus**(): [array](language.types.array.md)

Retorna o status da tarefa em execução. Isso deve ser usado entre chamadas repetidas a
[GearmanClient::doNormal()](gearmanclient.donormal.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array que representa a porcentagem de conclusão dada como uma fração, com o
primeiro elemento o numerador e o segundo elemento o denominador.

### Examples

**Exemplo #1 Obtém o status de uma tarefa de longa execução**

O trabalhador neste exemplo tem um atraso artificial adicionado durante o processamento da
string a ser revertida. Após cada atraso, ele chama [GearmanJob::status()](gearmanjob.status.md)
que o cliente então pega.

```
<?php

echo "Começando\n";

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona servidor padrão (localhost).
$gmclient->addServer();

echo "Enviando tarefa\n";

# Envia tarefa reversa
do
{
  $result = $gmclient->doNormal("reverse", "Hello!");

  # Verifica vários pacotes de retorno e erros.
  switch($gmclient->returnCode())
  {
    case GEARMAN_WORK_DATA:
      break;
    case GEARMAN_WORK_STATUS:
      # obtém o status atual da tarefa
      list($numerator, $denominator)= $gmclient->doStatus();
      echo "Status: $numerator/$denominator concluído\n";
      break;
    case GEARMAN_WORK_FAIL:
      echo "Falhou\n";
      exit;
    case GEARMAN_SUCCESS:
      break;
    default:
      echo "RET: " . $gmclient->returnCode() . "\n";
      exit;
  }
}
while($gmclient->returnCode() != GEARMAN_SUCCESS);

echo "Sucesso: $result\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Começando
Enviando tarefa
Status: 1/6 concluído
Status: 2/6 concluído
Status: 3/6 concluído
Status: 4/6 concluído
Status: 5/6 concluído
Status: 6/6 concluído
Sucesso: !olleH
```

### Veja também

- [GearmanClient::doNormal()](gearmanclient.donormal.md) - Executa uma única tarefa e retorna um resultado
- [GearmanJob::status()](gearmanjob.status.md) - Envia status (descontinuado)

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
