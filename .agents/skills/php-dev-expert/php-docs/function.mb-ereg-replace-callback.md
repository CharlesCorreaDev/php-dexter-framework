# Realiza uma busca e substituição de expressão regular com suporte a string multibyte usando um callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-replace-callback.php

---

# mb\_ereg\_replace\_callback

(PHP 5 >= 5.4.1, PHP 7, PHP 8)

mb\_ereg\_replace\_callback — Realiza uma busca e substituição de expressão regular com suporte a string multibyte usando um callback

### Descrição

function **mb\_ereg\_replace\_callback**(  
    [string](language.types.string.md) `$pattern`,  
    [callable](language.types.callable.md) `$callback`,  
    [string](language.types.string.md) `$string`,  
    [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Examina `string` em busca de correspondências com
`pattern`, em seguida, substitui o texto correspondido
pelo resultado da função `callback`.

O comportamento desta função é quase idêntico ao de [mb\_ereg\_replace()](function.mb-ereg-replace.md),
exceto pelo fato de que, em vez de
`replacement`, deve-se especificar um
`callback`.

### Parâmetros

`pattern`
:   O padrão de expressão regular.

    Caracteres multibyte podem ser usados em `pattern`.

`callback`
:   Um callback que será chamado e receberá um array de elementos correspondidos
    na `string`. O callback deve
    retornar a string de substituição.

    Você frequentemente precisará da função `callback`
    para um **mb\_ereg\_replace\_callback()** em apenas um lugar.
    Nesse caso, você pode usar uma
    [função anônima](functions.anonymous.md)
    para declarar o retorno de chamada dentro da chamada para
    **mb\_ereg\_replace\_callback()**. Fazendo isso,
    você tem todas as informações para a chamada em um só lugar e não
    polui o namespace da função com o nome de uma função de callback
    não utilizada em nenhum outro lugar.

`string`
:   A [string](language.types.string.md) sendo verificada.

`options`
:   A opção de pesquisa. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para explicação.

### Valor Retornado

A [string](language.types.string.md) resultante em caso de sucesso ou **`false`** em caso de erro.
Se `string` não for válida para a codificação atual, **`null`**
é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `options` é anulável agora. |
| 7.1.0 | A função verifica se `string` é válida para a codificação atual. |

### Examples

**Exemplo #1 Exemplo de **mb\_ereg\_replace\_callback()****

```
<?php
// este texto foi usado em 2002
// queremos atualizá-lo para 2003
$text = "April fools day is 04/01/2002\n";
$text.= "Last christmas was 12/24/2001\n";
// a função callback
function next_year($matches)
{
  // como de costume: $matches[0] é a correspondência completa
  // $matches[1] é a correspondência para a primeira sub-expressão
  // envolvida por '(...)' e assim por diante
  return $matches[1].($matches[2]+1);
}
echo mb_ereg_replace_callback(
            "(\d{2}/\d{2}/)(\d{4})",
            "next_year",
            $text);

?>
```

O exemplo acima produzirá:

```
April fools day is 04/01/2003
Last christmas was 12/24/2002
```

**Exemplo #2 **mb\_ereg\_replace\_callback()** usando função anônima**

```
<?php
// este texto foi usado em 2002
// queremos atualizá-lo para 2003
$text = "April fools day is 04/01/2002\n";
$text.= "Last christmas was 12/24/2001\n";

echo mb_ereg_replace_callback(
            "(\d{2}/\d{2}/)(\d{4})",
            function ($matches) {
               return $matches[1].($matches[2]+1);
            },
            $text);
?>
```

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg\_replace()](function.mb-ereg-replace.md) - Substituir expressão regular com suporte a multibyte
- [Funções Anônimas](functions.anonymous.md)

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
