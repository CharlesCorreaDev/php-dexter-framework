# Registro de Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/changelog.mysqli.php

---

# Registro de Alterações

As alterações a seguir foram feitas em
classes/funções/métodos desta extensão.

| Version | Function | Description |
| --- | --- | --- |
| 8.4.0 | [mysqli::kill](mysqli.kill.md) | O método mysqli::kill e a função mysqli\_kill foram descontinuados. No lugar deles, deve ser usado o comando SQL KILL. |
|  | [mysqli::ping](mysqli.ping.md) | O método mysqli::ping e a função mysqli\_ping foram descontinuados. A partir do PHP 8.2.0, o recurso de reconnect (reconexão) não está mais disponível, tornando esta função obsoleta. |
|  | [mysqli::refresh](mysqli.refresh.md) | O método mysqli::refresh e a função mysqli\_refresh foram descontinuados. No lugar deles, use o comando SQL FLUSH. |
|  | [mysqli::store\_result](mysqli.store-result.md) | Passar o parâmetro mode foi descontinuado. O parâmetro já não tem efeito a partir do PHP 8.1.0. |
| 8.3.0 | [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) | Agora lança uma exceção ValueError quando o parâmetro constructor\_args é não vazio com a classe não possuindo um construtor; anteriormente uma Exception era lançada. |
|  | [mysqli::poll](mysqli.poll.md) | Agora lança uma exceção ValueError quando nem o parâmetro read nem o parâmetro error são passados. |
| 8.1.0 | [mysqli\_driver::$report\_mode](mysqli-driver.report-mode.md) | O valor padrão agora é MYSQLI\_REPORT\_ERROR | MYSQLI\_REPORT\_STRICT. Anteriormente, era MYSQLI\_REPORT\_OFF. |
|  | [mysqli\_result::fetch\_all](mysqli-result.fetch-all.md) | Agora também disponível com a biblioteca libmysqlclient. |
|  | [mysqli\_stmt::execute](mysqli-stmt.execute.md) | O parâmetro optional params foi adicionado. |
|  | [mysqli\_stmt::next\_result](mysqli-stmt.next-result.md) | Agora também disponível com a biblioteca libmysqlclient. |
|  | [mysqli::\_\_construct](mysqli.construct.md) | Agora, o método mysqli::connect retorna true em vez de null em caso de sucesso. |
|  | [mysqli::$client\_info](mysqli.get-client-info.md) | Chamar mysqli\_get\_client\_info com o argumento mysql foi descontinuado. Esta função nunca requereu um parâmetro, mas incorretamente permitia este parâmetro opcional. |
|  | [mysqli::$client\_info](mysqli.get-client-info.md) | O método orientado a objeto mysqli::get\_client\_info foi descontinuado. |
|  | [mysqli::init](mysqli.init.md) | O método mysqli::init com estilo orientado a objeto foi descontinuado. Substitua as chamadas a parent::init por parent::\_\_construct. |
| 8.0.0 | [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) | constructor\_args agora aceita [] para construtores sem parâmetros; anteriormente, uma exceção era lançada. |
|  | [mysqli\_result::field\_seek](mysqli-result.field-seek.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli\_stmt::close](mysqli-stmt.close.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli\_stmt::\_\_construct](mysqli-stmt.construct.md) | query agora pode ser nulo. |
|  | [mysqli::begin\_transaction](mysqli.begin-transaction.md) | name agora é anulável. |
|  | [mysqli::close](mysqli.close.md) | Esta função sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli::commit](mysqli.commit.md) | name agora pode ser nulo. |
|  | [mysqli::debug](mysqli.debug.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli::rollback](mysqli.rollback.md) | name agora é anulável. |
| 7.4.0 | [mysqli::\_\_construct](mysqli.construct.md) | Todos os parâmetros podem ser null. |
|  | [mysqli::real\_connect](mysqli.real-connect.md) | Todos os parâmetros agora são anuláveis. |

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
