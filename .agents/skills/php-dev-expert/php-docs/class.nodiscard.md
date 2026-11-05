# O atributo NoDiscard

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.nodiscard.php

---

# O atributo NoDiscard

(PHP 8 >= 8.5.0)

## Introdução

Este atributo pode ser usado para indicar que o valor de retorno de uma função
ou método não deve ser descartado. Se o valor de retorno não for usado de
nenhuma forma, um aviso será emitido.

Isso é útil para funções onde não verificar o valor de retorno provavelmente
é um bug.

Para descartar intencionalmente o valor de retorno de tal função, use a conversão
(void) para suprimir o aviso.

> **Nota**:
>
> Como os atributos são projetados para serem retrocompatíveis,
> `#[\NoDiscard]` pode ser adicionado a funções e métodos
> mesmo quando o PHP 8.4 ou versões anteriores são suportados, ele simplesmente não fará nada.
> No PHP 8.5 e versões posteriores, um aviso será emitido se o resultado não for usado.
> Para suprimir o aviso sem usar `(void)`,
> que não é suportado antes do PHP 8.5,
> considere usar uma variável como `$_`.

> **Nota**:
>
> `#[\NoDiscard]` aplica-se à função ou método específico
> na declaração em que é escrito, e o aviso é emitido com base na
> declaração que é realmente chamada. Como resultado, adicionar
> `#[\NoDiscard]` a um método de interface ou a um método abstrato
> não emite um aviso, porque o método invocado é o
> método que implementa ou substitui. Da mesma forma, um método que substitui um
> método `#[\NoDiscard]` não emite o aviso, a menos que ele próprio
> esteja marcado com o atributo. Em contraste, um método importado de uma
> trait mantém o atributo, porque o método da trait é copiado para a
> classe que o utiliza como se tivesse sido declarado lá.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****NoDiscard****
{

/\* Propriedades \*/

public
readonly
?[string](language.types.string.md)
[$message](class.nodiscard.md#nodiscard.props.message);

/\* Métodos \*/

public function [\_\_construct](nodiscard.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$message` = [null](reserved.constants.md#constant.null))

}

## Propriedades

message
:   Uma mensagem opcional explicando por que o valor retornado não deve ser descartado.

## Examples

**Exemplo #1 Uso básico**

```
<?php

/**
 * Processa todos os itens fornecidos e retorna um array com os resultados da
 * operação para cada item. `null` indica sucesso e uma exceção indica
 * um erro. As chaves do array de resultados correspondem às chaves do array $items.
 *
 * @param array<string> $items
 * @return array<null|Exception>
 */
#[\NoDiscard("pois o processamento pode falhar para itens individuais")]
function bulk_process(array $items): array {
    $results = [];

    foreach ($items as $key => $item) {
        if (\random_int(0, 9999) < 9999) {
   // Finge fazer algo útil com $item,
   // o que terá sucesso em 99,99% dos casos.
            echo "Processando {$item}", PHP_EOL;
            $error = null;
        } else {
            $error = new \Exception("Falha ao processar {$item}.");
        }

        $results[$key] = $error;
    }

    return $results;
}

bulk_process($items);

?>
```

A saída do exemplo acima no PHP 8.5 é semelhante a:

```
Warning: The return value of function bulk_process() should either be used or intentionally ignored by casting it as (void), pois o processamento pode falhar para itens individuais
```

**Exemplo #2 Descartar intencionalmente o valor de retorno**

```
<?php

#[\NoDiscard]
function some_command(): int {
    return 1;
}

// Suprimir o aviso usando (void) - PHP 8.5+
(void) some_command();

// Para compatibilidade com versões do PHP anteriores à 8.5, utilize uma variável temporária
$_ = some_command();

?>
```

## Veja também

- [Visão geral dos atributos](language.attributes.md)

## Índice

- [NoDiscard::\_\_construct](nodiscard.construct.md) — Constrói uma nova instância do atributo NoDiscard.

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
