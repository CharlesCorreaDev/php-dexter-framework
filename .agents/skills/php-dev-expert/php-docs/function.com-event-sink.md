# Conecta eventos de um objeto COM a um objeto PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-event-sink.php

---

# com\_event\_sink

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

com\_event\_sink — Conecta eventos de um objeto COM a um objeto PHP

### Descrição

function **com\_event\_sink**([variant](class.variant.md) `$variant`, [object](language.types.object.md) `$sink_object`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$sink_interface` = **`null`**): [bool](language.types.boolean.md)

Instrui o COM a coletar eventos gerados por
`variant` no objeto PHP
`sink_object`.

Deve-se ter cuidado ao usar este recurso; se algo semelhante ao exemplo
abaixo estiver sendo feito, não faz sentido executar em um contexto
de servidor web.

### Parâmetros

`variant`

`sink_object`
:   `sink_object` deve ser uma instância de uma classe com
    métodos nomeados de acordo com aqueles da dispinterface desejada; pode-se usar
    [com\_print\_typeinfo()](function.com-print-typeinfo.md) para ajudar a gerar uma classe de modelo
    para esse propósito.

`sink_interface`
:   O PHP tentará usar o tipo de dispinterface padrão especificado pela
    biblioteca de tipos associada com `variant`, mas
    pode-se substituir esta escolha definindo
    `sink_interface` como o nome da dispinterface
    que será usada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `sink_interface` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de com\_event\_sink**

```
<?php
class IEEventSinker {
    var $terminated = false;

   function ProgressChange($progress, $progressmax) {
      echo "Download progress: $progress / $progressmax\n";
    }

    function DocumentComplete(&$dom, $url) {
      echo "Document $url complete\n";
    }

    function OnQuit() {
      echo "Quit!\n";
      $this->terminated = true;
    }
}
$ie = new COM("InternetExplorer.Application");
$sink = new IEEventSinker();
com_event_sink($ie, $sink, "DWebBrowserEvents2");
$ie->Visible = true;
$ie->Navigate("http://www.example.org");
while(!$sink->terminated) {
  com_message_pump(4000);
}
$ie = null;
?>
```

### Notas

**Cuidado**

Antes do PHP 8.0.0, chamar [exit()](function.exit.md) de qualquer um dos manipuladores
de eventos não era suportado e poderia fazer com que o PHP travasse. Isso poderia ser contornado
lançando uma exceção a partir do manipulador de eventos, capturando a exceção no
código principal e chamando [exit()](function.exit.md) a partir daí.

### Veja também

- [com\_print\_typeinfo()](function.com-print-typeinfo.md) - Mostra uma definição de classe PHP para uma interface despachável
- [com\_message\_pump()](function.com-message-pump.md) - Processa mensagens COM, aguardando por um tempo limite

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
